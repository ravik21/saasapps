<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Permissions') }}
        </h2>
    </x-slot>
    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item" aria-current="page" title="Permission"><a href="{{ route('permissions.index') }}"> Permissions</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="Permission">{{ isset($permission) ? 'Edit Permission' : 'Create Permission' }}</li>
                
            </ol>
            <ul class="list-unstyled action d-flex align-items-center mb-0">
                <li>
                    <a href="{{ route('permissions.index') }}" class="btn btn-dark">Back</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="border p-4 rounded-2 rounded-4">
                    <form method="POST" action="{{ isset($permission) ? route('permissions.update', $permission->id) : route('permissions.store') }}">
                        @csrf
                        @if (isset($permission))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label class="form-label">Permission Name</label>
                            <input type="text" name="name" class="form-control" value="{{ old('name', $permission->name ?? '') }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($permission) ? 'Update' : 'Create' }} Permission</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>