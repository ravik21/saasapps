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
                            <label for="name" class="form-label">Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ isset($project) ? $project->name : old('name') }}" required>
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea id="summernote" name="description">{{ isset($project) ? $project->description : old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="client" class="form-label">Client <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="client" name="client" value="{{ isset($project) ? $project->client : old('client') }}" required>
                            <x-input-error :messages="$errors->get('client')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="link" class="form-label">Link <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="link" name="link" value="{{ isset($project) ? $project->link : old('link') }}" required>
                            <x-input-error :messages="$errors->get('link')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="technology" class="form-label">Technology <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" id="technology" name="technology" value="{{ isset($project) ? json_encode($project->technology) : old('technology') }}" required>
                            <x-input-error :messages="$errors->get('technology')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Logo</label>
                            <input type="file" class="form-control" id="logoInput" accept="image/*">
                            <input type="hidden" name="logo" id="logo">
                            <x-input-error :messages="$errors->get('logo')" class="mt-2" />

                            <div class="mt-3">
                                <img id="logoPreview" src="{{ isset($project) ? $project->logo : '' }}" class="rounded border" style="height:120px; width:auto; object-fit:cover;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Images</label>
                            <input type="file" class="form-control" id="imagesInput" accept="image/*" multiple>
                            <input type="hidden" name="images" id="images">
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />

                            <div class="mt-3" id="imagesPreview">
                                @if(isset($project) && $project->images)
                                    @foreach($project->images as $image)
                                        <img src="{{ $image }}" class="rounded border me-2 mb-2" style="height:120px; width:auto; object-fit:cover;">
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="start_date" class="form-label">Start Date</label>
                            <input type="date" class="form-control" id="start_date" name="start_date" value="{{ isset($project) ? $project->start_date : old('start_date') }}">
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="end_date" class="form-label">End Date</label>
                            <input type="date" class="form-control" id="end_date" name="end_date" value="{{ isset($project) ? $project->end_date : old('end_date') }}">
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>

                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" value="1" id="is_ongoing" name="is_ongoing" {{ isset($project) && $project->is_ongoing ? 'checked' : (old('is_ongoing') ? 'checked' : '') }}>
                            <label class="form-check-label" for="is_ongoing">Is Ongoing</label>
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">{{ isset($project) ? 'Update' : 'Create' }} Project</button>
                            <a href="{{ route('projects.index') }}" class="btn btn-secondary">Cancel</a>
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
                    <h5 class="modal-title">Crop logo</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <img id="cropperlogo" class="img-fluid mx-auto">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button class="btn btn-primary" id="croplogoBtn">
                        Crop & Save
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Bulk Images Cropper Modal -->
    <div class="modal fade" id="imagesCropperModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Crop Images (<span id="currentImageIndex">1</span>/<span id="totalImages">1</span>)</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center">
                    <img id="cropperImage" class="img-fluid mx-auto">
                </div>

                <div class="modal-footer">
                    <button class="btn btn-secondary" data-bs-dismiss="modal">
                        Cancel All
                    </button>
                    <button class="btn btn-primary" id="cropImageBtn">
                        Crop & Next
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            let cropper;
            const logoInput = document.getElementById('logoInput');
            const cropperlogo = document.getElementById('cropperlogo');
            const logoPreview = document.getElementById('logoPreview');
            const logoHidden = document.getElementById('logo');
            const modal = new bootstrap.Modal(document.getElementById('cropperModal'));

            logoInput.addEventListener('change', function (e) {
                const file = e.target.files[0];
                if (!file) return;

                const reader = new FileReader();
                reader.onload = function (event) {
                    cropperlogo.src = event.target.result;
                    modal.show();

                    setTimeout(() => {
                        cropper = new Cropper(cropperlogo, {
                            aspectRatio: 1 / 1,
                            viewMode: 1,
                            dragMode: 'move',
                            background: false,
                            cropBoxResizable: true,
                        });
                    }, 200);
                };
                reader.readAsDataURL(file);
            });

            document.getElementById('croplogoBtn').addEventListener('click', function () {
                const canvas = cropper.getCroppedCanvas({
                    width: 300,
                    height: 300,
                });

                const base64 = canvas.toDataURL('logo/png');

                logoPreview.src = base64;
                logoHidden.value = base64;

                cropper.destroy();
                modal.hide();
            });

            const imagesInput = document.getElementById('imagesInput');
            const imagesPreview = document.getElementById('imagesPreview');
            const imagesHidden = document.getElementById('images');
            const cropperImage = document.getElementById('cropperImage');
            const imagesModal = new bootstrap.Modal(document.getElementById('imagesCropperModal'));
            
            let imageCropper;
            let filesToCrop = [];
            let croppedImages = [];
            let currentCropIndex = 0;

            imagesInput.addEventListener('change', function (e) {
                const files = e.target.files;
                if (!files.length) return;

                filesToCrop = Array.from(files);
                croppedImages = [];
                currentCropIndex = 0;

                imagesPreview.innerHTML = '';
                
                // Start cropping first image
                cropNextImage();
            });

            function cropNextImage() {
                if (currentCropIndex >= filesToCrop.length) {
                    // All images cropped, display them
                    displayCroppedImages();
                    return;
                }

                const file = filesToCrop[currentCropIndex];
                const reader = new FileReader();
                
                reader.onload = function (event) {
                    cropperImage.src = event.target.result;
                    document.getElementById('currentImageIndex').textContent = currentCropIndex + 1;
                    document.getElementById('totalImages').textContent = filesToCrop.length;
                    
                    imagesModal.show();

                    setTimeout(() => {
                        if (imageCropper) {
                            imageCropper.destroy();
                        }
                        
                        imageCropper = new Cropper(cropperImage, {
                            aspectRatio: 16 / 9,
                            viewMode: 1,
                            dragMode: 'move',
                            background: false,
                            cropBoxResizable: true,
                        });
                    }, 200);
                };
                
                reader.readAsDataURL(file);
            }

            document.getElementById('cropImageBtn').addEventListener('click', function () {
                const canvas = imageCropper.getCroppedCanvas({
                    width: 1600,
                    height: 900,
                });

                const base64 = canvas.toDataURL('image/png');
                croppedImages.push(base64);

                imageCropper.destroy();
                currentCropIndex++;
                
                if (currentCropIndex >= filesToCrop.length) {
                    imagesModal.hide();
                    displayCroppedImages();
                } else {
                    cropNextImage();
                }
            });

            function displayCroppedImages() {
                imagesPreview.innerHTML = '';
                
                croppedImages.forEach(imageUrl => {
                    const img = document.createElement('img');
                    img.src = imageUrl;
                    img.className = 'rounded border me-2 mb-2';
                    img.style.height = '120px';
                    img.style.width = 'auto';
                    img.style.objectFit = 'cover';
                    imagesPreview.appendChild(img);
                });
                
                imagesHidden.value = croppedImages.join('||');
            }

            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 200
                });

                new Tagify(document.querySelector('#technology'));
            });
        </script>
    @endpush

</x-app-layout>