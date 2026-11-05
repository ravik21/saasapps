<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Teams') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
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

        @if (session('error'))
            <div class="mb-4 d-flex align-items-center justify-content-between p-3 rounded-3" style="background-color: #FEF2F2; border: 1px solid #FEE2E2; color: #DC2626; font-size: 13.5px;">
                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #DC2626; flex-shrink: 0;">
                        <circle cx="12" cy="12" r="10"></circle>
                        <line x1="12" y1="8" x2="12" y2="12"></line>
                        <line x1="12" y1="16" x2="12.01" y2="16"></line>
                    </svg>
                    <span>{{ session('error') }}</span>
                </div>
                <button type="button" class="btn-close btn-close-sm" onclick="this.parentElement.remove()" aria-label="Close" style="font-size: 10px;"></button>
            </div>
        @endif

        <!-- 2. Page Header: Breadcrumb and black pill-shaped Add Team Member button -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Teams</li>
                </ol>
            </nav>
            @role('Admin')
            <div class="d-flex align-items-center">
                <a href="{{ route('users.create') }}" class="btn-primary-pill">
                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    <span>Add Team Member</span>
                </a>
            </div>
            @endrole
        </div>

        <!-- 3. Team Container: Clean white card with subtle gray border, rounded corners, Developer Team heading and member-count label -->
        <div class="admin-card">
            <div class="admin-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                <div>
                    <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                        Developer Team
                    </h2>
                    <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                        Only users with the Developer role appear in this section.
                    </p>
                </div>
                <div>
                    <span class="badge-count-pill">
                        {{ $users->total() }} members
                    </span>
                </div>
            </div>

            <!-- 4. Members Table: Avatar, Name, Email, Designation, Created At, Actions -->
            <div class="table-responsive">
                <table class="table admin-table align-middle">
                    <thead>
                        <tr>
                            <th scope="col" style="width: 72px;">Avatar</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Designation</th>
                            <th scope="col">Created At</th>
                            <th scope="col" class="text-end text-sm-start" style="width: 160px;">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($users as $user)
                            <tr>
                                <td>
                                    <img src="{{ $user->avatar ?: '/images/avatar.png' }}" 
                                         alt="{{ $user->name }}" 
                                         class="rounded-circle object-fit-cover border" 
                                         style="width: 38px; height: 38px; border-color: #E2E8F0 !important;"
                                         onerror="this.src='/images/avatar.png';">
                                </td>
                                <td>
                                    <span class="fw-semibold text-dark" style="font-size: 13.5px; color: #0F172A !important;">
                                        {{ $user->name }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 13px; color: #64748B !important;">
                                        {{ $user->email }}
                                    </span>
                                </td>
                                <td>
                                    <span class="badge-designation-pill">
                                        {{ $user->designation ?: 'Developer' }}
                                    </span>
                                </td>
                                <td>
                                    <span class="text-muted" style="font-size: 12.5px; color: #64748B !important;">
                                        {{ $user->created_at->format('Y-m-d') }}
                                    </span>
                                </td>
                                <td class="text-end text-sm-start">
                                    @role('Admin')
                                    <div class="d-inline-flex align-items-center gap-2">
                                        <a href="{{ route('users.edit', $user->id) }}" class="btn-action-edit">
                                            Edit
                                        </a>
                                        <button type="button" 
                                                class="btn-action-delete"
                                                @click="$dispatch('open-delete-modal', {
                                                    action: '{{ route('users.destroy', $user->id) }}',
                                                    title: 'Delete Team Member?',
                                                    name: '{{ addslashes($user->name) }}',
                                                    message: 'Are you sure you want to delete?'
                                                })">
                                            Delete
                                        </button>
                                    </div>
                                    @else
                                    <span class="text-muted small">—</span>
                                    @endrole
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center text-muted py-5">
                                    <div class="py-4">
                                        <svg class="mx-auto mb-2 text-muted" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                            <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                                        </svg>
                                        <p class="mb-0" style="color: #64748B; font-size: 13.5px;">No developer team members found.</p>
                                    </div>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- 6. Pagination: Clean monochrome pagination with subtle active state -->
            <div class="p-4 border-top" style="border-color: #F1F5F9 !important; background-color: #FFFFFF;">
                <div class="monochrome-pagination-wrapper">
                    {{ $users->links() }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
