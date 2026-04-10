<?php

namespace App\Mail;

use App\Models\ContactSubmission;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class NewContactSubmissionNotification extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public ContactSubmission $contactSubmission)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'New Contact Us Submission: '.$this->contactSubmission->subject,
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.contact-submissions.new',
        );
    }
}
