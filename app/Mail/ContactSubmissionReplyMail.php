<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Address;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ContactSubmissionReplyMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public ContactSubmission $contactSubmission,
        public string $replyMessage
    ) {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Re: '.$this->contactSubmission->subject,
            replyTo: [
                new Address(config('mail.support.address'), config('mail.support.name')),
            ],
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submissions.reply',
        );
    }
}
