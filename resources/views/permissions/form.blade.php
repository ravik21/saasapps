<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Permissions') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
        <!-- Page Header & Breadcrumbs -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('permissions.index') }}" title="Permissions">Permissions</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($permission) ? 'Edit Permission' : 'Create Permission' }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <a href="{{ route('permissions.index') }}" class="btn-action-edit" style="padding: 6px 18px !important; font-size: 13px !important;">
                    &larr; Back to Permissions
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-8">
                <div class="admin-card p-4 p-sm-5">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                            {{ isset($permission) ? 'Edit Permission Details' : 'Create New Permission' }}
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            Define a specific capability or action allowed in the system.
                        </p>
                    </div>

                    <form method="POST" action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}">
                        @csrf
                        @if (isset($permission))
                            @method('PUT')
                        @endif

                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold text-dark small" style="font-size: 13px; color: #0F172A;">Permission Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control rounded-3" value="{{ old('name', $permission->name ?? '') }}" placeholder="e.g. manage reports" required style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                            <div class="form-text text-muted small mt-1" style="font-size: 12px; color: #64748B;">Use descriptive lowercase action phrases (e.g., manage users, export data).</div>
                        </div>

                        <div class="d-flex align-items-center gap-2 pt-3 border-top" style="border-color: #F1F5F9 !important;">
                            <button type="submit" class="btn-primary-pill" style="padding: 9px 24px !important;">
                                {{ isset($permission) ? 'Update' : 'Create' }} Permission
                            </button>
                            <a href="{{ route('permissions.index') }}" class="btn-action-edit" style="padding: 8px 20px !important;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
