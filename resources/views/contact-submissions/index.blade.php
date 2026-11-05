<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Contact Submissions') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100" x-data="{
        showModal: false,
        activeMsg: {},
        openMessage(data) {
            this.activeMsg = data;
            this.showModal = true;
        }
    }">
        <!-- Success Alert -->
        @if (session('success'))
            <div class="mb-4 d-flex align-items-center justify-content-between p-3 rounded-3" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; color: #0F172A; font-size: 13.5px;">
                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #0F172A; flex-shrink: 0;">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" class="btn-close btn-close-sm" onclick="this.parentElement.remove()" aria-label="Close" style="font-size: 10px;"></button>
            </div>
        @endif

        <!-- Page Header: Breadcrumb and Inquiry Counter -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Contact Submissions</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <span class="badge-count-pill">
                    {{ $contactSubmissions->total() }} total {{ Str::plural('inquiry', $contactSubmissions->total()) }}
                </span>
            </div>
        </div>

        <!-- Shared Minimal Table Component -->
        <x-admin-table 
            title="Inbound Inquiries" 
            subtitle="Review customer inquiries, track replies, and manage communications."
            :count="$contactSubmissions->total()" 
            countLabel="{{ Str::plural('inquiry', $contactSubmissions->total()) }}"
            :pagination="$contactSubmissions"
            :empty="$contactSubmissions->isEmpty()"
            emptyMessage="No contact submissions found.">

            <x-slot name="thead">
                <tr>
                    <th scope="col" style="min-width: 140px;">Name</th>
                    <th scope="col" style="min-width: 170px; max-width: 200px;">Email</th>
                    <th scope="col" style="min-width: 130px;">Status</th>
                    <th scope="col" style="min-width: 120px;">Phone</th>
                    <th scope="col" style="min-width: 140px;">Service</th>
                    <th scope="col" style="min-width: 140px; max-width: 180px;">Subject</th>
                    <th scope="col" style="min-width: 220px; max-width: 300px;">Message</th>
                    <th scope="col" class="text-nowrap" style="min-width: 130px;">Created At</th>
                    <th scope="col" class="text-end text-sm-start text-nowrap" style="width: 150px;">Actions</th>
                </tr>
            </x-slot>

            @foreach ($contactSubmissions as $contactSubmission)
                <tr>
                    <!-- Name -->
                    <td>
                        <span class="fw-semibold text-dark d-block" style="font-size: 13.5px; color: #0F172A !important; line-height: 1.35;">
                            {{ $contactSubmission->name }}
                        </span>
                    </td>

                    <!-- Email: Readable & Mailto link -->
                    <td style="max-width: 200px;">
                        <a href="mailto:{{ $contactSubmission->email }}" class="text-truncate d-inline-block text-decoration-none" style="max-width: 190px; font-size: 13px; color: #334155;" title="{{ $contactSubmission->email }}">
                            {{ $contactSubmission->email }}
                        </a>
                    </td>

                    <!-- Status: Refined Monochrome Pill -->
                    <td>
                        @if ($contactSubmission->replied_at)
                            <span class="badge rounded-pill" style="background-color: #0F172A; color: #FFFFFF; font-size: 11px; font-weight: 500; padding: 4px 10px;">
                                Replied
                            </span>
                            <div class="text-nowrap mt-1" style="font-size: 11px; color: #64748B; line-height: 1.3;">
                                {{ $contactSubmission->replied_at->format('Y-m-d H:i') }}
                                @if ($contactSubmission->repliedByUser)
                                    <span class="d-block text-muted" style="font-size: 10.5px;">by {{ $contactSubmission->repliedByUser->name }}</span>
                                @endif
                            </div>
                        @else
                            <span class="badge rounded-pill" style="background-color: #F8FAFC; color: #475569; border: 1px solid #E2E8F0; font-size: 11px; font-weight: 500; padding: 4px 10px;">
                                Pending
                            </span>
                        @endif
                    </td>

                    <!-- Phone -->
                    <td>
                        <span class="text-dark" style="font-size: 13px; color: #475569;">
                            {{ $contactSubmission->phone ?: '—' }}
                        </span>
                    </td>

                    <!-- Service -->
                    <td>
                        <span class="badge-designation-pill" style="font-size: 11.5px; padding: 3px 10px;">
                            {{ $contactSubmission->service ?: 'General' }}
                        </span>
                    </td>

                    <!-- Subject: Natural truncation -->
                    <td style="max-width: 180px;">
                        <span class="d-inline-block text-truncate fw-medium text-dark" style="max-width: 170px; font-size: 13px; color: #0F172A;" title="{{ $contactSubmission->subject }}">
                            {{ $contactSubmission->subject ?: '—' }}
                        </span>
                    </td>

                    <!-- Message: Clamped Preview + Detail Modal Trigger -->
                    <td style="max-width: 300px;">
                        <div class="review-preview-text" style="font-size: 13px; color: #334155; line-height: 1.4;">
                            {{ $contactSubmission->message }}
                        </div>
                        <button type="button" 
                                class="btn btn-link p-0 mt-1 text-decoration-none fw-medium d-inline-flex align-items-center gap-1" 
                                style="font-size: 11.5px; color: #0F172A;" 
                                @click="openMessage(@js([
                                    'id' => $contactSubmission->id,
                                    'name' => $contactSubmission->name,
                                    'email' => $contactSubmission->email,
                                    'phone' => $contactSubmission->phone ?: 'N/A',
                                    'service' => $contactSubmission->service ?: 'General Inquiry',
                                    'subject' => $contactSubmission->subject ?: '—',
                                    'message' => $contactSubmission->message,
                                    'date' => $contactSubmission->created_at ? $contactSubmission->created_at->format('Y-m-d H:i') : '—',
                                    'replied_at' => $contactSubmission->replied_at ? $contactSubmission->replied_at->format('Y-m-d H:i') : null,
                                    'replied_by' => $contactSubmission->repliedByUser ? $contactSubmission->repliedByUser->name : null,
                                    'reply_url' => route('contact-submissions.reply', $contactSubmission)
                                ]))">
                            <span>View message</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                                <polyline points="12 5 19 12 12 19"></polyline>
                            </svg>
                        </button>
                    </td>

                    <!-- Created At: Single line -->
                    <td class="text-nowrap">
                        <span class="text-muted text-nowrap" style="font-size: 12.5px; color: #64748B !important; white-space: nowrap;">
                            {{ $contactSubmission->created_at ? $contactSubmission->created_at->format('Y-m-d H:i') : '—' }}
                        </span>
                    </td>

                    <!-- Actions: Horizontally aligned Reply & Delete -->
                    <td class="text-end text-sm-start text-nowrap">
                        <div class="d-inline-flex align-items-center gap-2 text-nowrap">
                            <a href="{{ route('contact-submissions.reply', $contactSubmission) }}" class="btn-action-edit">
                                Reply
                            </a>
                            <button type="button" 
                                    class="btn-action-delete"
                                    @click="$dispatch('open-delete-modal', {
                                        action: '{{ route('contact-submissions.destroy', $contactSubmission) }}',
                                        title: 'Delete Contact Submission?',
                                        name: '{{ addslashes($contactSubmission->name) }}',
                                        message: 'Are you sure you want to delete?',
                                        buttonText: 'Delete Project'
                                    })">
                                Delete
                            </button>
                        </div>
                    </td>
                </tr>
            @endforeach
        </x-admin-table>

        <!-- Alpine Detail Modal for Full Submission Details -->
        <div x-show="showModal" 
             x-cloak 
             class="admin-modal-backdrop" 
             @keydown.escape.window="showModal = false"
             style="display: none;">
            <div class="admin-modal-panel" style="max-width: 600px;" @click.away="showModal = false">
                <div class="admin-modal-header">
                    <div>
                        <h3 class="editorial-title mb-0" style="font-size: 1.25rem;" x-text="activeMsg.subject"></h3>
                        <p class="mb-0 text-muted small" style="color: #64748B;">
                            From <span class="fw-semibold text-dark" x-text="activeMsg.name"></span> &bull; <span x-text="activeMsg.email"></span>
                        </p>
                    </div>
                    <button type="button" class="btn-close" @click="showModal = false" aria-label="Close" style="font-size: 11px;"></button>
                </div>
                <div class="admin-modal-body">
                    <!-- Quick Meta Grid -->
                    <div class="row g-2 mb-3 pb-3 border-bottom" style="border-color: #F1F5F9 !important;">
                        <div class="col-6 col-sm-3">
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8;">Phone</span>
                            <span class="fw-medium text-dark small" x-text="activeMsg.phone"></span>
                        </div>
                        <div class="col-6 col-sm-3">
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8;">Service</span>
                            <span class="fw-medium text-dark small" x-text="activeMsg.service"></span>
                        </div>
                        <div class="col-6 col-sm-3">
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8;">Received</span>
                            <span class="fw-medium text-dark small" x-text="activeMsg.date"></span>
                        </div>
                        <div class="col-6 col-sm-3">
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8;">Status</span>
                            <template x-if="activeMsg.replied_at">
                                <span class="badge rounded-pill" style="background-color: #0F172A; color: #FFFFFF; font-size: 10.5px;">Replied</span>
                            </template>
                            <template x-if="!activeMsg.replied_at">
                                <span class="badge rounded-pill" style="background-color: #F8FAFC; color: #475569; border: 1px solid #E2E8F0; font-size: 10.5px;">Pending</span>
                            </template>
                        </div>
                    </div>

                    <!-- Message Body -->
                    <div>
                        <label class="fw-semibold text-dark small mb-2 d-block" style="font-size: 12px; color: #0F172A; text-transform: uppercase; letter-spacing: 0.04em;">Full Inquiry Message</label>
                        <div class="p-3 rounded-3" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; font-size: 13.5px; line-height: 1.6; color: #1E293B;">
                            <p class="mb-0" style="white-space: pre-wrap;" x-text="activeMsg.message"></p>
                        </div>
                    </div>

                    <template x-if="activeMsg.replied_at">
                        <div class="mt-3 p-2.5 rounded-3 border" style="background-color: #F1F5F9; border-color: #E2E8F0 !important; font-size: 12px; color: #475569;">
                            Replied on <strong x-text="activeMsg.replied_at"></strong>
                            <template x-if="activeMsg.replied_by">
                                <span> by <strong x-text="activeMsg.replied_by"></strong></span>
                            </template>
                        </div>
                    </template>
                </div>
                <div class="admin-modal-footer d-flex justify-content-between align-items-center">
                    <button type="button" class="btn-action-delete" @click="showModal = false">
                        Close
                    </button>
                    <a :href="activeMsg.reply_url" class="btn-primary-pill" style="padding: 6px 18px !important; font-size: 12.5px !important;">
                        <span>Compose Reply &rarr;</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>