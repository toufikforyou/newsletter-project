<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewsletterEmail extends Mailable
{
    use Queueable, SerializesModels;

    public string $body;
    public string $recipientName;
    public string $authorName;
    protected string $mailSubject;

    public function __construct(string $subject, string $body, string $recipientName, ?string $authorName = null)
    {
        $this->mailSubject = $subject;
        $this->body = $body;
        $this->recipientName = $recipientName;
        $this->authorName = $authorName ?? config('mail.from.name', 'TechNews Team');
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: $this->mailSubject,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.newsletter',
            with: [
                'body' => $this->body,
                'recipientName' => $this->recipientName,
                'authorName' => $this->authorName,
            ],
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
