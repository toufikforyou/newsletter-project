<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'email' => 'required|email|max:255',
            ]);

            $email = $validated['email'];

            // Use firstOrCreate to reduce queries and improve performance
            $subscriber = Subscriber::firstOrCreate(
                ['email' => $email],
                [
                    'name' => null,
                    'status' => 'active',
                    'subscribed_at' => now(),
                ]
            );

            // If subscriber already exists and is active, return already subscribed message
            if (!$subscriber->wasRecentlyCreated && $subscriber->status === 'active') {
                return response()->json([
                    'success' => false,
                    'message' => 'You are already subscribed to our newsletter!',
                ], 200);
            }

            // If reactivating an unsubscribed user
            if (!$subscriber->wasRecentlyCreated && $subscriber->status === 'unsubscribed') {
                $subscriber->update([
                    'status' => 'active',
                    'subscribed_at' => now(),
                ]);
            }

            // Queue the email asynchronously - returns immediately
            Mail::to($subscriber->email)->queue(new SubscriptionConfirmation($subscriber));

            return response()->json([
                'success' => true,
                'message' => 'Subscription successful! Check your email for confirmation.',
            ], 200);

        } catch (\Illuminate\Validation\ValidationException $e) {
            return response()->json([
                'success' => false,
                'message' => $e->errors()['email'][0] ?? 'Invalid email address.',
            ], 200);
        } catch (\Exception $e) {
            \Log::error('Subscription error: ' . $e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'An error occurred. Please try again later.',
            ], 200);
        }
    }
}
