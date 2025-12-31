<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Users') }}
        </h2>
    </x-slot>
    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item" aria-current="page" title="User"><a href="{{ route('users.index') }}"> Users</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="User">{{ isset($user) ? 'Edit User' : 'Create User' }}</li>
                
            </ol>
            <ul class="list-unstyled action d-flex align-items-center mb-0">
                <li>
                    <a href="{{ route('users.index') }}" class="btn btn-dark">Back</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="border p-4 rounded-2 rounded-4">
                    <form method="POST" action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}">
                        @csrf
                        @if (isset($user))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control" id="email" name="email" value="{{ isset($user) ? $user->email : old('email') }}" required>
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="role" class="form-label">Role <span class="text-danger">*</span></label>
                            <select class="form-select" id="role" name="role" required>
                                <option value="">Select Role</option>
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}" {{ (isset($user) && $user->hasRole($role->name)) ? 'selected' : '' }}>{{ $role->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('role')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Avatar</label>
                            <input type="file" class="form-control" id="avatarInput" accept="image/*">
                            <input type="hidden" name="avatar" id="avatar">
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />

                            <div class="mt-3">
                                <img id="avatarPreview" src="{{ isset($user) ? $user->avatar : '' }}" class="rounded-circle border" style="width:120px;height:120px;object-fit:cover;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label">Password @if(!isset($user))<span class="text-danger">*</span>@endif</label>
                            <input type="password" class="form-control" id="password" name="password" {{ isset($user) ? '' : 'required' }}>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="password_confirmation" class="form-label">Confirm Password @if(!isset($user))<span class="text-danger">*</span>@endif</label>
                            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" {{ isset($user) ? '' : 'required' }}>
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">{{ isset($user) ? 'Update' : 'Create' }} User</button>
                            <a href="{{ route('users.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cropperModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crop Avatar</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <img id="cropperImage" class="img-fluid">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button class="btn btn-primary" id="cropAvatarBtn">
                        Crop & Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            let cropper;
            const avatarInput = document.getElementById('avatarInput');
            const cropperImage = document.getElementById('cropperImage');
            const avatarPreview = document.getElementById('avatarPreview');
            const avatarHidden = document.getElementById('avatar');
            const modal = new bootstrap.Modal(document.getElementById('cropperModal'));

            avatarInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function (event) {
                    cropperImage.src = event.target.result;
                    modal.show();

                    setTimeout(() => {
                        cropper = new Cropper(cropperImage, {
                            aspectRatio: 1,
                            viewMode: 1,
                            dragMode: 'move',
                            background: false,
                            cropBoxResizable: true,
                        });
                    }, 200);
                };
                reader.readAsDataURL(file);
            });

            document.getElementById('cropAvatarBtn').addEventListener('click', function () {
                const canvas = cropper.getCroppedCanvas({
                    width: 300,
                    height: 300,
                });

                const base64 = canvas.toDataURL('image/png');

                avatarPreview.src = base64;
                avatarHidden.value = base64;

                cropper.destroy();
                modal.hide();
            });
        </script>
    @endpush

</x-app-layout>