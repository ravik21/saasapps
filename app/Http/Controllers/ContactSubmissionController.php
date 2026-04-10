<?php

namespace App\Http\Controllers;

use App\Mail\ContactSubmissionReplyMail;
use App\Mail\NewContactSubmissionNotification;
use App\Models\ContactSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactSubmissionController extends Controller
{
    public function index()
    {
        $contactSubmissions = ContactSubmission::with('repliedByUser')
            ->latest()
            ->paginate(config('app.pagination_per_page'));

        return view('contact-submissions.index', compact('contactSubmissions'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:50',
            'service' => 'nullable|string|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
            'botcheck' => 'nullable|size:0',
        ]);

        unset($validated['botcheck']);

        $contactSubmission = ContactSubmission::create($validated);

        rescue(
            fn () => Mail::to(config('mail.support.address'))->send(new NewContactSubmissionNotification($contactSubmission)),
            report: true
        );

        return redirect()->route('contact-us')->with('success', 'Thanks for reaching out. Our team will contact you soon.');
    }

    public function reply(ContactSubmission $contactSubmission)
    {
        return view('contact-submissions.reply', compact('contactSubmission'));
    }

    public function sendReply(Request $request, ContactSubmission $contactSubmission)
    {
        $validated = $request->validate([
            'reply_message' => 'required|string',
        ]);

        Mail::to($contactSubmission->email)->send(new ContactSubmissionReplyMail(
            $contactSubmission,
            $validated['reply_message']
        ));

        $contactSubmission->update([
            'replied_at' => now(),
            'replied_by' => $request->user()->id,
        ]);

        return redirect()->route('contact-submissions.index')->with('success', 'Reply email sent successfully.');
    }

    public function destroy(ContactSubmission $contactSubmission)
    {
        $contactSubmission->delete();

        return redirect()->route('contact-submissions.index')->with('success', 'Contact submission deleted successfully.');
    }
}
