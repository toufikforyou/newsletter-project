<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Mail\ContactReply;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function index(Request $request)
    {
        $query = Contact::query();

        if ($request->filled('search')) {
            $search = $request->search;
            $query->where(function ($q) use ($search) {
                $q->where('ticket_id', 'like', "%{$search}%")
                  ->orWhere('email', 'like', "%{$search}%")
                  ->orWhere('first_name', 'like', "%{$search}%")
                  ->orWhere('last_name', 'like', "%{$search}%")
                  ->orWhere('subject', 'like', "%{$search}%");
            });
        }

        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }

        $contacts = $query->latest()->paginate(15);

        return view('admin.contacts.index', compact('contacts'));
    }

    public function show(Contact $contact)
    {
        return view('admin.contacts.show', compact('contact'));
    }

    public function reply(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'reply_message' => 'required|string|min:10',
        ]);

        // Queue reply email
        Mail::to($contact->email)->queue(new ContactReply($contact, $validated['reply_message']));

        // Update contact status and notes
        $contact->update([
            'status' => 'resolved',
            'admin_notes' => $validated['reply_message'],
            'replied_at' => now(),
        ]);

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Reply queued for sending to ' . $contact->email);
    }

    public function updateStatus(Request $request, Contact $contact)
    {
        $validated = $request->validate([
            'status' => 'nullable|in:open,in_progress,resolved,closed',
            'admin_notes' => 'nullable|string',
        ]);

        $data = [];
        if ($request->filled('status')) {
            $data['status'] = $validated['status'];
        }
        if ($request->filled('admin_notes')) {
            $data['admin_notes'] = $validated['admin_notes'];
        }

        if (!empty($data)) {
            $contact->update($data);
        }

        return redirect()->back()
            ->with('success', 'Updated successfully.');
    }

    public function destroy(Contact $contact)
    {
        $contact->delete();

        return redirect()->route('admin.contacts.index')
            ->with('success', 'Contact deleted successfully.');
    }
}
