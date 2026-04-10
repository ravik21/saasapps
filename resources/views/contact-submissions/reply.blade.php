<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Reply to Contact Submission') }}
        </h2>
    </x-slot>

    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('contact-submissions.index') }}">Contact Submissions</a></li>
                <li class="breadcrumb-item active" aria-current="page">Reply</li>
            </ol>
        </div>

        <div class="row g-4">
            <div class="col-lg-5">
                <div class="border p-4 rounded-4 bg-white h-100">
                    <h3 class="h5 mb-3">Submission Details</h3>
                    <div class="mb-3">
                        <div class="text-muted small">Name</div>
                        <div class="fw-semibold">{{ $contactSubmission->name }}</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">Email</div>
                        <div class="fw-semibold">{{ $contactSubmission->email }}</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">Phone</div>
                        <div>{{ $contactSubmission->phone ?: 'N/A' }}</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">Service</div>
                        <div>{{ $contactSubmission->service ?: 'N/A' }}</div>
                    </div>
                    <div class="mb-3">
                        <div class="text-muted small">Subject</div>
                        <div class="fw-semibold">{{ $contactSubmission->subject }}</div>
                    </div>
                    <div class="mb-0">
                        <div class="text-muted small">Message</div>
                        <div class="border rounded-3 p-3 bg-light">{{ $contactSubmission->message }}</div>
                    </div>
                </div>
            </div>

            <div class="col-lg-7">
                <div class="border p-4 rounded-4 bg-white">
                    <h3 class="h5 mb-3">Send Email Reply</h3>

                    @if ($errors->any())
                        <div class="alert alert-danger">
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
                            <label class="form-label">To</label>
                            <input type="text" class="form-control" value="{{ $contactSubmission->email }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Subject</label>
                            <input type="text" class="form-control" value="Re: {{ $contactSubmission->subject }}" disabled>
                        </div>
                        <div class="mb-3">
                            <label for="reply_message" class="form-label">Reply Message</label>
                            <textarea id="reply_message" name="reply_message" rows="10" class="form-control" placeholder="Write your reply here...">{{ old('reply_message') }}</textarea>
                        </div>
                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-dark">Send Reply</button>
                            <a href="{{ route('contact-submissions.index') }}" class="btn btn-outline-secondary">Back</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
