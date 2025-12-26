<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Projects') }}
        </h2>
    </x-slot>
    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item" aria-current="page" title="Project"><a href="{{ route('projects.index') }}"> Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="Project">{{ isset($project) ? 'Edit Project' : 'Create Project' }}</li>
                
            </ol>
            <ul class="list-unstyled action d-flex align-items-center mb-0">
                <li>
                    <a href="{{ route('projects.index') }}" class="btn btn-dark">Back</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="border p-4 rounded-2 rounded-4">
                    <form method="POST" action="{{ isset($project) ? route('projects.update', $project->id) : route('projects.store') }}">
                        @csrf
                        @if (isset($project))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ isset($user) ? $user->name : old('name') }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <input type="text" class="form-control" id="description" name="description" value="{{ isset($project) ? $project->description : old('description') }}" required>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="client" class="form-label">Client</label>
                            <input type="text" class="form-control" id="client" name="client" value="{{ isset($project) ? $project->client : old('client') }}" required>
                            <x-input-error :messages="$errors->get('client')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link</label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ isset($project) ? $project->link : old('link') }}" required>
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="technology" class="form-label">Technology</label>
                            <input type="text" class="form-control" id="technology" name="technology" value="{{ isset($project) ? $project->technology : old('technology') }}" required>
                            <x-input-error :messages="$errors->get('technology')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Project Image</label>
                            <input type="file" class="form-control" id="imageInput" accept="image/*">
                            <input type="hidden" name="image" id="image">
                            <x-input-error :messages="$errors->get('image')" class="mt-2" />

                            <div class="mt-3">
                                <img id="imagePreview" src="{{ isset($project) ? $project->image : '' }}" class="rounded border" style="height:120px; width:auto; object-fit:cover;">
                            </div>
                        </div>

                        <button type="submit" class="btn btn-primary">{{ isset($project) ? 'Update' : 'Create' }} Project</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="cropperModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crop Image</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <img id="cropperImage" class="img-fluid">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button class="btn btn-primary" id="cropImageBtn">
                        Crop & Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            let cropper;
            const imageInput = document.getElementById('imageInput');
            const cropperImage = document.getElementById('cropperImage');
            const imagePreview = document.getElementById('imagePreview');
            const imageHidden = document.getElementById('image');
            const modal = new bootstrap.Modal(document.getElementById('cropperModal'));

            imageInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function (event) {
                    cropperImage.src = event.target.result;
                    modal.show();

                    setTimeout(() => {
                        cropper = new Cropper(cropperImage, {
                            aspectRatio: 16 / 9,
                            viewMode: 1,
                            dragMode: 'move',
                            background: false,
                            cropBoxResizable: true,
                        });
                    }, 200);
                };
                reader.readAsDataURL(file);
            });

            document.getElementById('cropImageBtn').addEventListener('click', function () {
                const canvas = cropper.getCroppedCanvas({
                    width: 300,
                    height: 300,
                });

                const base64 = canvas.toDataURL('image/png');

                imagePreview.src = base64;
                imageHidden.value = base64;

                cropper.destroy();
                modal.hide();
            });
        </script>
    @endpush

</x-app-layout>