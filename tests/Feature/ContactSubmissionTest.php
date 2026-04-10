<?php

namespace Tests\Feature;

use App\Mail\ContactSubmissionReplyMail;
use App\Mail\NewContactSubmissionNotification;
use App\Models\ContactSubmission;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Support\Facades\Mail;
use Spatie\Permission\Models\Permission;
use Tests\TestCase;

class ContactSubmissionTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_us_form_submission_is_stored(): void
    {
        Mail::fake();

        $response = $this->post(route('contact-us.store'), [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '+91 9999999999',
            'service' => 'Web Development',
            'subject' => 'Need a quote',
            'message' => 'Please share details for a new project.',
            'botcheck' => '',
        ]);

        $response->assertRedirect(route('contact-us'));
        $response->assertSessionHas('success');

        $this->assertDatabaseHas('contact_submissions', [
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'subject' => 'Need a quote',
        ]);

        Mail::assertSent(NewContactSubmissionNotification::class, function (NewContactSubmissionNotification $mail) {
            return $mail->hasTo(config('mail.support.address'))
                && $mail->contactSubmission->email === 'jane@example.com';
        });
    }

    public function test_dashboard_shows_recent_contact_submissions_for_authenticated_user(): void
    {
        Permission::create(['name' => 'manage contact submissions']);

        $user = User::factory()->create();
        $user->givePermissionTo('manage contact submissions');

        ContactSubmission::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '+91 9999999999',
            'service' => 'Web Development',
            'subject' => 'Need a quote',
            'message' => 'Please share details for a new project.',
        ]);

        $response = $this->actingAs($user)->get(route('dashboard'));

        $response->assertOk();
        $response->assertSee('Recent Contact Submissions');
        $response->assertSee('Jane Smith');
        $response->assertSee('Need a quote');
    }

    public function test_admin_can_reply_to_contact_submission_via_email(): void
    {
        Mail::fake();

        Permission::create(['name' => 'manage contact submissions']);

        $user = User::factory()->create();
        $user->givePermissionTo('manage contact submissions');

        $contactSubmission = ContactSubmission::create([
            'name' => 'Jane Smith',
            'email' => 'jane@example.com',
            'phone' => '+91 9999999999',
            'service' => 'Web Development',
            'subject' => 'Need a quote',
            'message' => 'Please share details for a new project.',
        ]);

        $response = $this->actingAs($user)->post(route('contact-submissions.send-reply', $contactSubmission), [
            'reply_message' => 'Thanks for contacting us. We will get back to you with a proposal shortly.',
        ]);

        $response->assertRedirect(route('contact-submissions.index'));
        $response->assertSessionHas('success');

        Mail::assertSent(ContactSubmissionReplyMail::class, function (ContactSubmissionReplyMail $mail) use ($contactSubmission) {
            return $mail->hasTo($contactSubmission->email)
                && $mail->contactSubmission->is($contactSubmission);
        });

        $this->assertDatabaseHas('contact_submissions', [
            'id' => $contactSubmission->id,
            'replied_by' => $user->id,
        ]);

        $this->assertNotNull($contactSubmission->fresh()->replied_at);
    }
}
