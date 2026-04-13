<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Contact Submissions') }}
        </h2>
    </x-slot>

    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="Contact Submissions">Contact Submissions</li>
            </ol>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="border p-4 rounded-2 rounded-4">
                    @if (session('success'))
                        <div class="alert alert-success">{{ session('success') }}</div>
                    @endif

                    <div class="table-responsive">
                        <table class="table align-middle">
                            <thead>
                                <tr>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Phone</th>
                                    <th scope="col">Service</th>
                                    <th scope="col">Subject</th>
                                    <th scope="col" style="max-width: 320px;">Message</th>
                                    <th scope="col">Created At</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($contactSubmissions as $contactSubmission)
                                    <tr>
                                        <td>{{ $contactSubmission->name }}</td>
                                        <td>{{ $contactSubmission->email }}</td>
                                        <td>
                                            @if ($contactSubmission->replied_at)
                                                <span class="badge bg-success">Replied</span>
                                                <div class="small text-muted mt-1">
                                                    {{ $contactSubmission->replied_at->format('Y-m-d H:i') }}
                                                    @if ($contactSubmission->repliedByUser)
                                                        by {{ $contactSubmission->repliedByUser->name }}
                                                    @endif
                                                </div>
                                            @else
                                                <span class="badge bg-warning text-dark">Pending</span>
                                            @endif
                                        </td>
                                        <td>{{ $contactSubmission->phone ?: 'N/A' }}</td>
                                        <td>{{ $contactSubmission->service ?: 'N/A' }}</td>
                                        <td>{{ $contactSubmission->subject }}</td>
                                        <td style="max-width: 320px; white-space: normal;">{{ $contactSubmission->message }}</td>
                                        <td>{{ $contactSubmission->created_at->format('Y-m-d H:i') }}</td>
                                        <td>
                                            <a href="{{ route('contact-submissions.reply', $contactSubmission) }}" class="btn btn-sm btn-dark">Reply</a>
                                            <form action="{{ route('contact-submissions.destroy', $contactSubmission) }}" method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="9" class="text-center text-muted py-4">No contact submissions found.</td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $contactSubmissions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
