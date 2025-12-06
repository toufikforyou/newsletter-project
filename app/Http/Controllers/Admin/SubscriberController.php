<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Subscriber;
use App\Mail\NewsletterEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscriberController extends Controller
{
    public function index(Request $request)
    {
        $query = Subscriber::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('email', 'like', "%{$search}%")
                  ->orWhere('name', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $subscribers = $query->latest()->paginate(15);

        return view('admin.subscribers.index', compact('subscribers'));
    }

    public function create()
    {
        return view('admin.subscribers.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email',
            'name' => 'nullable|string|max:255',
            'status' => 'required|in:active,unsubscribed,bounced',
        ]);

        Subscriber::create($validated);

        return redirect()->route('admin.subscribers.index')
            ->with('success', 'Subscriber added successfully.');
    }

    public function show(Subscriber $subscriber)
    {
        return view('admin.subscribers.show', compact('subscriber'));
    }

    public function edit(Subscriber $subscriber)
    {
        return view('admin.subscribers.edit', compact('subscriber'));
    }

    public function update(Request $request, Subscriber $subscriber)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:subscribers,email,' . $subscriber->id,
            'name' => 'nullable|string|max:255',
            'status' => 'required|in:active,unsubscribed,bounced',
        ]);

        if ($validated['status'] === 'unsubscribed' && $subscriber->status !== 'unsubscribed') {
            $validated['unsubscribed_at'] = now();
        }

        $subscriber->update($validated);

        return redirect()->route('admin.subscribers.index')
            ->with('success', 'Subscriber updated successfully.');
    }

    public function destroy(Subscriber $subscriber)
    {
        // Toggle between bounced and active status
        if ($subscriber->status === 'bounced') {
            $subscriber->update([
                'status' => 'active',
            ]);
            $message = 'Subscriber activated.';
        } else {
            $subscriber->update([
                'status' => 'bounced',
            ]);
            $message = 'Subscriber marked as bounced.';
        }

        return redirect()->route('admin.subscribers.index')
            ->with('success', $message);
    }

    public function composeNewsletter()
    {
        $activeSubscribersCount = Subscriber::where('status', 'active')->count();
        $totalSubscribersCount = Subscriber::count();
        $bouncedSubscribersCount = Subscriber::where('status', 'bounced')->count();

        return view('admin.newsletter.compose', compact(
            'activeSubscribersCount',
            'totalSubscribersCount',
            'bouncedSubscribersCount'
        ));
    }

    public function sendNewsletter(Request $request)
    {
        $validated = $request->validate([
            'subject' => 'required|string|max:255',
            'body' => 'required|string',
            'recipient_type' => 'required|in:active,all',
        ]);

        // Get recipients based on type
        if ($validated['recipient_type'] === 'active') {
            $subscribers = Subscriber::where('status', 'active')->get();
        } else {
            $subscribers = Subscriber::where('status', '!=', 'bounced')->get();
        }

        if ($subscribers->isEmpty()) {
            return redirect()->back()
                ->with('error', 'No subscribers found to send email to.');
        }

        // Queue emails for all subscribers
        $authorName = config('mail.from.name', 'TechNews Team');
        foreach ($subscribers as $subscriber) {
            Mail::to($subscriber->email)->queue(
                new NewsletterEmail(
                    $validated['subject'],
                    $validated['body'],
                    $subscriber->name ?? 'Subscriber',
                    $authorName
                )
            );
        }

        return redirect()->route('admin.subscribers.index')
            ->with('success', 'Newsletter queued for sending to ' . $subscribers->count() . ' subscriber(s).');
    }
}
