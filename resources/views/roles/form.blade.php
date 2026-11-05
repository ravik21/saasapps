<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Roles') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
        <!-- Page Header & Breadcrumbs -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('roles.index') }}" title="Roles">Roles</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($role) ? 'Edit Role' : 'Create Role' }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <a href="{{ route('roles.index') }}" class="btn-action-edit" style="padding: 6px 18px !important; font-size: 13px !important;">
                    &larr; Back to Roles
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-9">
                <div class="admin-card p-4 p-sm-5">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                            {{ isset($role) ? 'Edit Role Details' : 'Create New Role' }}
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            Define the role title and assign associated permissions.
                        </p>
                    </div>

                    <form method="POST" action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}">
                        @csrf
                        @if (isset($role))
                            @method('PUT')
                        @endif

                        <div class="mb-4">
                            <label for="name" class="form-label fw-semibold text-dark small" style="font-size: 13px; color: #0F172A;">Role Name <span class="text-danger">*</span></label>
                            <input type="text" id="name" name="name" class="form-control rounded-3" value="{{ old('name', $role->name ?? '') }}" placeholder="e.g. Editor" required style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold text-dark small d-block mb-2" style="font-size: 13px; color: #0F172A;">Assigned Permissions</label>
                            <div class="row g-2">
                                @foreach ($permissions as $permission)
                                    <div class="col-12 col-md-6 col-lg-4">
                                        <label class="d-flex align-items-center gap-2 p-2.5 px-3 rounded-3 border bg-white h-100" style="border-color: #E2E8F0 !important; cursor: pointer; transition: all 0.15s ease;">
                                            <input class="form-check-input mt-0 rounded"
                                                type="checkbox"
                                                name="permissions[]"
                                                value="{{ $permission->name }}"
                                                style="width: 16px; height: 16px; border-color: #CBD5E1; cursor: pointer;"
                                                {{ isset($role) && $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                            <span class="small fw-medium text-dark" style="font-size: 13px; color: #334155;">
                                                {{ $permission->name }}
                                            </span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                            <x-input-error :messages="$errors->get('permissions')" class="mt-2" />
                        </div>

                        <div class="d-flex align-items-center gap-2 pt-3 border-top" style="border-color: #F1F5F9 !important;">
                            <button type="submit" class="btn-primary-pill" style="padding: 9px 24px !important;">
                                {{ isset($role) ? 'Update' : 'Create' }} Role
                            </button>
                            <a href="{{ route('roles.index') }}" class="btn-action-edit" style="padding: 8px 20px !important;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
