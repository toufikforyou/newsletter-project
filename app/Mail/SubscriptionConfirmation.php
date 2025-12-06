<?php

namespace App\Mail;

use App\Models\Subscriber;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class SubscriptionConfirmation extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Subscriber $subscriber)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Welcome to TechNews! 🚀',
            from: env('MAIL_FROM_ADDRESS', 'noreply@technews.local'),
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.subscription-confirmation',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
