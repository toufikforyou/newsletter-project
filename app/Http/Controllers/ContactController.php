<?php

namespace App\Http\Controllers;

use App\Mail\ContactSuccess;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $validated = $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        $validated['ticket_id'] = 'TICKET-' . strtoupper(Str::random(8));

        $contact = Contact::create($validated);

        // Send email
        Mail::to($contact->email)->send(new ContactSuccess($contact));

        return back()->with('success', 'Thank you for contacting us! Your Ticket ID is ' . $contact->ticket_id . '. We will get back to you shortly.');
    }
}
