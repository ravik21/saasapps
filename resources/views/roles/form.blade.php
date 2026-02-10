<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Roles') }}
        </h2>
    </x-slot>
    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item" aria-current="page" title="Role"><a href="{{ route('roles.index') }}"> Roles</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="Role">{{ isset($role) ? 'Edit Role' : 'Create Role' }}</li>
                
            </ol>
            <ul class="list-unstyled action d-flex align-items-center mb-0">
                <li>
                    <a href="{{ route('roles.index') }}" class="btn btn-dark">Back</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="border p-4 rounded-2 rounded-4">
                    <form method="POST" action="{{ isset($role) ? route('roles.update', $role->id) : route('roles.store') }}">
                        @csrf
                        @if (isset($role))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Role Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $role->name ?? '') }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Permissions</label>
                            <div class="row">
                                @foreach ($permissions as $permission)
                                    <div class="col-md-4">
                                        <div class="form-check">
                                            <input class="form-check-input"
                                                type="checkbox"
                                                name="permissions[]"
                                                value="{{ $permission->name }}"
                                                {{ isset($role) && $role->hasPermissionTo($permission->name) ? 'checked' : '' }}>
                                            <label class="form-check-label">
                                                {{ $permission->name }}
                                            </label>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <x-input-error :messages="$errors->get('permissions')" class="mt-2" />
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">{{ isset($role) ? 'Update' : 'Create' }} Role</button>
                            <a href="{{ route('roles.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>