<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Reply to Contact Submission') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
        <!-- Page Header & Breadcrumbs -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('contact-submissions.index') }}">Contact Submissions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Reply</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <a href="{{ route('contact-submissions.index') }}" class="btn-action-edit" style="padding: 6px 18px !important; font-size: 13px !important;">
                    &larr; Back to Inquiries
                </a>
            </div>
        </div>

        <div class="row g-4">
            <!-- Left Card: Inquiry Details -->
            <div class="col-lg-5">
                <div class="admin-card p-4 h-100">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.25rem; letter-spacing: -0.02em;">
                            Submission Details
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            Information submitted by the prospective client.
                        </p>
                    </div>

                    <div class="d-flex flex-column gap-3">
                        <div>
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.04em;">Full Name</span>
                            <span class="fw-semibold text-dark" style="font-size: 14px; color: #0F172A;">{{ $contactSubmission->name }}</span>
                        </div>

                        <div>
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.04em;">Email Address</span>
                            <a href="mailto:{{ $contactSubmission->email }}" class="text-dark text-decoration-none" style="font-size: 13.5px; color: #1E293B;">
                                {{ $contactSubmission->email }}
                            </a>
                        </div>

                        <div class="row g-2">
                            <div class="col-6">
                                <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.04em;">Phone</span>
                                <span class="text-dark small" style="font-size: 13px;">{{ $contactSubmission->phone ?: 'N/A' }}</span>
                            </div>
                            <div class="col-6">
                                <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.04em;">Service Interest</span>
                                <span class="badge-designation-pill" style="font-size: 11px; padding: 2px 8px;">{{ $contactSubmission->service ?: 'General' }}</span>
                            </div>
                        </div>

                        <div>
                            <span class="text-muted small d-block" style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.04em;">Subject</span>
                            <span class="fw-medium text-dark" style="font-size: 13.5px; color: #0F172A;">{{ $contactSubmission->subject }}</span>
                        </div>

                        <div>
                            <span class="text-muted small d-block mb-1" style="font-size: 11px; color: #94A3B8; text-transform: uppercase; letter-spacing: 0.04em;">Original Message</span>
                            <div class="p-3 rounded-3" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; font-size: 13px; line-height: 1.6; color: #334155;">
                                {{ $contactSubmission->message }}
                            </div>
                        </div>

                        @if ($contactSubmission->replied_at)
                            <div class="p-3 rounded-3" style="background-color: #F1F5F9; border: 1px solid #E2E8F0; font-size: 12px; color: #475569;">
                                <strong>Already replied:</strong> {{ $contactSubmission->replied_at->format('Y-m-d H:i') }}
                                @if ($contactSubmission->repliedByUser)
                                    by {{ $contactSubmission->repliedByUser->name }}
                                @endif
                            </div>
                        @endif
                    </div>
                </div>
            </div>

            <!-- Right Card: Reply Form -->
            <div class="col-lg-7">
                <div class="admin-card p-4">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.25rem; letter-spacing: -0.02em;">
                            Send Email Reply
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            This reply will be sent directly to the client's inbox.
                        </p>
                    </div>

                    @if ($errors->any())
                        <div class="mb-4 p-3 rounded-3" style="background-color: #FEF2F2; border: 1px solid #FECACA; color: #991B1B; font-size: 13.5px;">
                            <ul class="mb-0 ps-3">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('contact-submissions.send-reply', $contactSubmission) }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Recipient</label>
                            <input type="text" class="form-control rounded-3" value="{{ $contactSubmission->email }}" disabled style="background-color: #F8FAFC; border-color: #E2E8F0; font-size: 13.5px;">
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Subject Line</label>
                            <input type="text" class="form-control rounded-3" value="Re: {{ $contactSubmission->subject }}" disabled style="background-color: #F8FAFC; border-color: #E2E8F0; font-size: 13.5px;">
                        </div>

                        <div class="mb-4">
                            <label for="reply_message" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">
                                Reply Message <span class="text-danger">*</span>
                            </label>
                            <textarea id="reply_message" name="reply_message" rows="9" class="form-control rounded-3" placeholder="Compose your response..." required style="border-color: #E2E8F0; font-size: 13.5px; padding: 12px 14px; line-height: 1.6;">{{ old('reply_message') }}</textarea>
                        </div>

                        <div class="d-flex align-items-center gap-2">
                            <button type="submit" class="btn-primary-pill">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="22" y1="2" x2="11" y2="13"></line>
                                    <polygon points="22 2 15 22 11 13 2 9 22 2"></polygon>
                                </svg>
                                <span>Send Reply</span>
                            </button>
                            <a href="{{ route('contact-submissions.index') }}" class="btn-action-edit" style="padding: 7px 18px !important; font-size: 13px !important;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>