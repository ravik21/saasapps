<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Teams') }}
        </h1>
    </x-slot>

    @cannot('manage users')
        <div class="alert alert-danger m-4" role="alert">
            <strong>Access Denied!</strong> Only administrators can create or edit team members.
        </div>
    @else
    <div class="py-3 w-100">
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('users.index') }}" title="Teams">Teams</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($user) ? 'Edit Team Member' : 'Create Team Member' }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <a href="{{ route('users.index') }}" class="btn-action-edit" style="padding: 6px 18px !important; font-size: 13px !important;">
                    &larr; Back to Teams
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-12 col-lg-8">
                <div class="admin-card p-4 p-sm-5">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                            {{ isset($user) ? 'Edit Developer Details' : 'Add New Developer' }}
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            Manage credentials and profile information for this developer team member.
                        </p>
                    </div>

                    <form method="POST" action="{{ isset($user) ? route('users.update', $user->id) : route('users.store') }}">
                        @csrf
                        @if (isset($user))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold text-dark small">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control rounded-3" id="name" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required style="border-color: #E2E8F0; font-size: 13.5px;">
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label fw-semibold text-dark small">Email <span class="text-danger">*</span></label>
                            <input type="email" class="form-control rounded-3" id="email" name="email" value="{{ isset($user) ? $user->email : old('email') }}" required style="border-color: #E2E8F0; font-size: 13.5px;">
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="designation" class="form-label fw-semibold text-dark small">Designation</label>
                            <input type="text" class="form-control rounded-3" id="designation" name="designation" value="{{ isset($user) ? $user->designation : old('designation') }}" placeholder="Senior Developer" style="border-color: #E2E8F0; font-size: 13.5px;">
                            <x-input-error :messages="$errors->get('designation')" class="mt-2" />
                            <div class="form-text text-muted small" style="font-size: 12px;">Every member created here is added to the Developer team automatically.</div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label fw-semibold text-dark small">Avatar</label>
                            <input type="file" class="form-control rounded-3" id="avatarInput" accept="image/*" style="border-color: #E2E8F0; font-size: 13.5px;">
                            <input type="hidden" name="avatar" id="avatar">
                            <x-input-error :messages="$errors->get('avatar')" class="mt-2" />

                            <div class="mt-3">
                                <img id="avatarPreview" src="{{ isset($user) ? ($user->avatar ?: '/images/avatar.png') : '/images/avatar.png' }}" class="rounded-circle border" style="width:90px;height:90px;object-fit:cover;border-color:#E2E8F0 !important;" onerror="this.src='/images/avatar.png';">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="password" class="form-label fw-semibold text-dark small">Password @if(!isset($user))<span class="text-danger">*</span>@endif</label>
                            <input type="password" class="form-control rounded-3" id="password" name="password" {{ isset($user) ? '' : 'required' }} style="border-color: #E2E8F0; font-size: 13.5px;">
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label for="password_confirmation" class="form-label fw-semibold text-dark small">Confirm Password @if(!isset($user))<span class="text-danger">*</span>@endif</label>
                            <input type="password" class="form-control rounded-3" id="password_confirmation" name="password_confirmation" {{ isset($user) ? '' : 'required' }} style="border-color: #E2E8F0; font-size: 13.5px;">
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="d-flex align-items-center gap-2 pt-2">
                            <button type="submit" class="btn-primary-pill" style="padding: 9px 24px !important;">
                                {{ isset($user) ? 'Update' : 'Create' }} Team Member
                            </button>
                            <a href="{{ route('users.index') }}" class="btn-action-edit" style="padding: 8px 20px !important;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cropperModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header border-bottom" style="border-color: #F1F5F9;">
                    <h5 class="modal-title font-serif-display" style="font-size: 1.25rem;">Crop Avatar</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center p-4">
                    <img id="cropperImage" class="img-fluid">
                </div>

                <div class="modal-footer border-top" style="border-color: #F1F5F9;">
                    <button class="btn-action-edit" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button class="btn-primary-pill" id="cropAvatarBtn">
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
    @endcannot

</x-app-layout>
