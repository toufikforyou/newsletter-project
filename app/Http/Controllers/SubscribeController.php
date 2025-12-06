<?php

namespace App\Http\Controllers;

use App\Models\Subscriber;
use App\Mail\SubscriptionConfirmation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SubscribeController extends Controller
{
    public function store(Request $request)
    {
        try {
            $validated = $request->validate([
                'email' => 'required|email|max:255',
            ]);

            // Check if email already subscribed
            $existing = Subscriber::where('email', $validated['email'])->first();

            if ($existing) {
                if ($existing->status === 'active') {
                    return response()->json([
                        'success' => false,
                        'message' => 'You are already subscribed to our newsletter!',
                    ], 200);
                } elseif ($existing->status === 'unsubscribed') {
                    // Reactivate if previously unsubscribed
                    $existing->update([
                        'status' => 'active',
                        'subscribed_at' => now(),
                    ]);
                    
                    // Try to send email, but don't fail if it errors
                    try {
                        Mail::to($existing->email)->send(new SubscriptionConfirmation($existing));
                    } catch (\Exception $e) {
                        \Log::error('Mail send failed: ' . $e->getMessage());
                    }

                    return response()->json([
                        'success' => true,
                        'message' => 'Welcome back! Confirmation email sent.',
                    ], 200);
                }
            }

            // Create new subscriber
            $subscriber = Subscriber::create([
                'email' => $validated['email'],
                'name' => null,
                'status' => 'active',
                'subscribed_at' => now(),
            ]);

            // Try to send email, but don't fail if it errors
            try {
                Mail::to($subscriber->email)->send(new SubscriptionConfirmation($subscriber));
            } catch (\Exception $e) {
                \Log::error('Mail send failed: ' . $e->getMessage());
            }

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
