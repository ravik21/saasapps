<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Projects') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
        <!-- Page Header & Breadcrumbs -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Projects</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($project) ? 'Edit Project' : 'Create Project' }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <a href="{{ route('projects.index') }}" class="btn-action-edit" style="padding: 6px 18px !important; font-size: 13px !important;">
                    &larr; Back to Projects
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-10">
                <div class="admin-card p-4 p-sm-5">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                            {{ isset($project) ? 'Edit Project Details' : 'Create New Project' }}
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            Define portfolio and case study information, client reviews, ratings, and media.
                        </p>
                    </div>

                    <form method="POST" action="{{ isset($project) ? route('projects.update', $project->id) : route('projects.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if (isset($project))
                            @method('PUT')
                        @endif

                        <!-- Section A: Primary Identification -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-8">
                                <label for="title" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Project Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-3 @error('title') is-invalid @enderror" id="title" name="title" value="{{ isset($project) ? ($project->title ?: $project->name) : old('title') }}" required placeholder="e.g. TrustPatrick — B2B Review & Verification Engine" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('title')" class="mt-2" />
                            </div>

                            <div class="col-md-4">
                                <label for="category" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Category</label>
                                <input type="text" class="form-control rounded-3 @error('category') is-invalid @enderror" id="category" name="category" value="{{ isset($project) ? $project->category : old('category') }}" placeholder="e.g. SaaS & Identity Verification" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('category')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Section B: Narrative & Description -->
                        <div class="mb-4">
                            <label for="description" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Project Description</label>
                            <textarea id="summernote" name="description">{{ isset($project) ? $project->description : old('description') }}</textarea>
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Section C: Client & Live Link -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="client" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Client / Company Attribution</label>
                                <input type="text" class="form-control rounded-3 @error('client') is-invalid @enderror" id="client" name="client" value="{{ isset($project) ? $project->client : old('client') }}" placeholder="e.g. TrustPatrick Ltd" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('client')" class="mt-2" />
                            </div>

                            <div class="col-md-6">
                                <label for="link" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Live Project URL <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-3 @error('link') is-invalid @enderror" id="link" name="link" value="{{ isset($project) ? $project->link : old('link') }}" required placeholder="https://example.com" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('link')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Section D: Technology Tags -->
                        <div class="mb-4">
                            <label for="technology" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Technology Stack Tags</label>
                            @php
                                $techVal = '';
                                if (isset($project)) {
                                    if (!empty($project->technology)) {
                                        $techVal = json_encode($project->technology);
                                    } elseif (!empty($project->technologies)) {
                                        $tagArr = array_map(fn($t) => ['value' => $t], $project->technologies);
                                        $techVal = json_encode($tagArr);
                                    }
                                } else {
                                    $techVal = old('technology');
                                }
                            @endphp
                            <input type="text" class="form-control rounded-3 @error('technology') is-invalid @enderror" id="technology" name="technology" value="{{ $techVal }}" placeholder="Type tag and press enter..." style="border-color: #E2E8F0; font-size: 13.5px;">
                            <small class="text-muted" style="font-size: 11.5px;">Enter technologies (e.g. Laravel, React, Tailwind CSS, MySQL) and press Enter to tag.</small>
                            <x-input-error :messages="$errors->get('technology')" class="mt-2" />
                        </div>

                        <!-- Section E: Project Visual Image / Logo -->
                        <div class="mb-4">
                            <label for="logoInput" class="form-label fw-semibold text-dark small d-flex justify-content-between align-items-center" style="font-size: 12.5px; color: #0F172A;">
                                <span>Featured Project Image / Logo</span>
                                <span class="text-muted fw-normal" style="font-size: 11.5px;">Accepts JPG, PNG, WEBP (Max 5MB)</span>
                            </label>
                            
                            <div class="d-flex flex-column gap-3">
                                <input type="file" 
                                       name="logo" 
                                       id="logoInput" 
                                       accept="image/jpeg,image/png,image/jpg,image/webp" 
                                       class="form-control rounded-3 @error('logo') is-invalid @enderror" 
                                       style="border-color: #E2E8F0; font-size: 13px; padding: 9px 12px;">
                                <x-input-error :messages="$errors->get('logo')" class="mt-1" />

                                @php
                                    $currentImageUrl = isset($project) ? ($project->image_url ?: $project->logo) : null;
                                @endphp

                                <!-- Robust Live Image Preview & Fallback Card -->
                                <div id="imagePreviewCard" class="p-3 rounded-3 border" style="background-color: #F8FAFC; border-color: #E2E8F0 !important;">
                                    <div class="d-flex align-items-center justify-content-between mb-2 pb-1 border-bottom" style="border-color: #EDF2F7 !important;">
                                        <span class="fw-semibold text-muted text-uppercase" id="previewBadge" style="font-size: 11px; letter-spacing: 0.04em;">
                                            {{ $currentImageUrl ? 'Current Featured Image' : 'Image Preview' }}
                                        </span>
                                        <button type="button" id="clearSelectionBtn" class="btn btn-sm text-danger p-0 border-0 fw-medium" style="font-size: 11.5px; display: none;">
                                            ✕ Clear new selection
                                        </button>
                                    </div>

                                    <div class="d-flex align-items-center gap-3">
                                        <div class="position-relative d-flex align-items-center justify-content-center bg-white rounded-3 border p-2 flex-shrink-0" style="width: 120px; height: 80px; border-color: #E2E8F0 !important; overflow: hidden;">
                                            <img id="logoPreview" 
                                                 src="{{ $currentImageUrl ?: '' }}" 
                                                 alt="{{ isset($project) ? ($project->title ?: $project->name) : 'Featured image' }}" 
                                                 class="img-fluid" 
                                                 style="max-height: 100%; max-width: 100%; object-fit: contain; {{ $currentImageUrl ? '' : 'display: none;' }}"
                                                 onerror="this.style.display='none'; document.getElementById('previewFallback').style.display='flex';">

                                            <div id="previewFallback" class="flex-column align-items-center justify-content-center text-muted" style="{{ $currentImageUrl ? 'display: none;' : 'display: flex;' }} width: 100%; height: 100%;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                                    <rect width="18" height="18" x="3" y="3" rx="2" ry="2"/>
                                                    <circle cx="9" cy="9" r="2"/>
                                                    <path d="m21 15-3.086-3.086a2 2 0 0 0-2.828 0L6 21"/>
                                                </svg>
                                                <span class="mt-1" style="font-size: 10px; color: #94A3B8;">No image</span>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-column" style="min-width: 0;">
                                            <p class="mb-1 fw-semibold text-dark text-truncate" id="previewFilename" style="font-size: 13px;">
                                                {{ $currentImageUrl ? basename(parse_url($currentImageUrl, PHP_URL_PATH)) : 'No image chosen' }}
                                            </p>
                                            <p class="mb-0 text-muted" id="previewMeta" style="font-size: 11.5px;">
                                                {{ $currentImageUrl ? 'Image is currently linked and active.' : 'Select a JPG, PNG or WEBP above to preview.' }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Section F: Client Review & Rating (Used in Public Cases Showcase) -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-8">
                                <label for="review" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Client Testimonial Quote</label>
                                <textarea class="form-control rounded-3 @error('review') is-invalid @enderror" id="review" name="review" rows="3" placeholder="Enter customer feedback or case study quote..." style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px; line-height: 1.5;">{{ isset($project) ? $project->review : old('review') }}</textarea>
                                <small class="text-muted" style="font-size: 11.5px;">Displayed on the public Cases page alongside verified review badge.</small>
                                <x-input-error :messages="$errors->get('review')" class="mt-2" />
                            </div>

                            <div class="col-md-4">
                                <label for="rating" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Rating (1 to 5 Stars)</label>
                                <select class="form-select rounded-3 @error('rating') is-invalid @enderror" id="rating" name="rating" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                    @for($i = 5; $i >= 1; $i--)
                                        <option value="{{ $i }}" {{ (isset($project) ? ($project->rating ?? 5) : old('rating', 5)) == $i ? 'selected' : '' }}>
                                            {{ $i }} Stars {{ str_repeat('★', $i) }}
                                        </option>
                                    @endfor
                                </select>
                                <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Section G: Video URL & Sort Order -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-8">
                                <label for="video_link" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Video Demo URL (Optional)</label>
                                <input type="text" class="form-control rounded-3 @error('video_link') is-invalid @enderror" id="video_link" name="video_link" value="{{ isset($project) ? $project->video_link : old('video_link') }}" placeholder="e.g. https://www.youtube.com/watch?v=... or direct MP4 link" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('video_link')" class="mt-2" />
                            </div>

                            <div class="col-md-4">
                                <label for="sort_order" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Display Sort Order</label>
                                <input type="number" class="form-control rounded-3 @error('sort_order') is-invalid @enderror" id="sort_order" name="sort_order" value="{{ isset($project) ? ($project->sort_order ?? 0) : old('sort_order', 0) }}" min="0" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <small class="text-muted" style="font-size: 11.5px;">Lower numbers appear first (e.g. 1, 2, 3).</small>
                                <x-input-error :messages="$errors->get('sort_order')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Section H: Gallery Screenshots (Optional) -->
                        <div class="mb-4">
                            <label class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Additional Screenshots / Gallery</label>
                            <input type="file" class="form-control rounded-3 @error('images') is-invalid @enderror" id="imagesInput" accept="image/*" multiple style="border-color: #E2E8F0; font-size: 13px;">
                            <input type="hidden" name="images" id="images">
                            <x-input-error :messages="$errors->get('images')" class="mt-2" />

                            <div class="mt-3 d-flex flex-wrap gap-2" id="imagesPreview">
                                @if(isset($project) && $project->images)
                                    @foreach($project->images as $image)
                                        <img src="{{ $image }}" class="rounded-3 border" style="height:80px; width:auto; object-fit:cover; border-color:#E2E8F0 !important;">
                                    @endforeach
                                @endif
                            </div>
                        </div>

                        <!-- Section I: Dates & Ongoing -->
                        <div class="row g-3 mb-4">
                            <div class="col-md-6">
                                <label for="start_date" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Start Date</label>
                                <input type="date" class="form-control rounded-3 @error('start_date') is-invalid @enderror" id="start_date" name="start_date" value="{{ isset($project) ? $project->start_date : old('start_date') }}" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                            </div>

                            <div class="col-md-6">
                                <label for="end_date" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">End Date</label>
                                <input type="date" class="form-control rounded-3 @error('end_date') is-invalid @enderror" id="end_date" name="end_date" value="{{ isset($project) ? $project->end_date : old('end_date') }}" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                            </div>
                        </div>

                        <!-- Section J: Visibility and Publishing State -->
                        <div class="d-flex flex-wrap gap-4 mb-4 p-3 rounded-3 border" style="background-color: #F8FAFC; border-color: #E2E8F0 !important;">
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" id="is_published" name="is_published" {{ (isset($project) ? $project->is_published : old('is_published', true)) ? 'checked' : '' }}>
                                <label class="form-check-label text-dark small fw-medium" for="is_published" style="font-size: 13px; color: #0F172A;">
                                    <strong>Publish Project</strong> (Display publicly on Cases & Portfolio pages)
                                </label>
                            </div>
                            <div class="form-check">
                                <input type="checkbox" class="form-check-input" value="1" id="is_ongoing" name="is_ongoing" {{ (isset($project) && $project->is_ongoing) ? 'checked' : (old('is_ongoing') ? 'checked' : '') }}>
                                <label class="form-check-label text-dark small fw-medium" for="is_ongoing" style="font-size: 13px; color: #475569;">
                                    Project is ongoing
                                </label>
                            </div>
                        </div>

                        <div class="d-flex align-items-center gap-2 pt-2">
                            <button type="submit" class="btn-primary-pill">
                                <span>{{ isset($project) ? 'Update' : 'Create' }} Project</span>
                            </button>
                            <a href="{{ route('projects.index') }}" class="btn-action-edit" style="padding: 7px 18px !important; font-size: 13px !important;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Bulk Images Cropper Modal -->
    <div class="modal fade" id="imagesCropperModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-xl">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title editorial-title" style="font-size: 1.2rem;">Crop Images (<span id="currentImageIndex">1</span>/<span id="totalImages">1</span>)</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center p-4">
                    <img id="cropperImage" class="img-fluid mx-auto rounded-3">
                </div>

                <div class="modal-footer border-top bg-light">
                    <button class="btn-action-edit" data-bs-dismiss="modal">
                        Cancel All
                    </button>
                    <button class="btn-primary-pill" id="cropImageBtn">
                        <span>Crop & Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Featured Project Image / Logo Live Preview & Validation
            (function () {
                const logoInput = document.getElementById('logoInput');
                const logoPreview = document.getElementById('logoPreview');
                const previewFallback = document.getElementById('previewFallback');
                const previewBadge = document.getElementById('previewBadge');
                const previewFilename = document.getElementById('previewFilename');
                const previewMeta = document.getElementById('previewMeta');
                const clearSelectionBtn = document.getElementById('clearSelectionBtn');
                const initialImageUrl = @json(isset($project) ? ($project->image_url ?: $project->logo) : null);
                const initialFilename = @json(isset($project) && ($project->image_url || $project->logo) ? basename(parse_url($project->image_url ?: $project->logo, PHP_URL_PATH)) : null);

                if (!logoInput) return;

                logoInput.addEventListener('change', function (e) {
                    const file = e.target.files && e.target.files[0];
                    if (!file) return;

                    // Validate mime type
                    const validTypes = ['image/jpeg', 'image/png', 'image/jpg', 'image/webp'];
                    if (!validTypes.includes(file.type)) {
                        alert('Please choose a valid image file (JPG, PNG, WEBP).');
                        logoInput.value = '';
                        return;
                    }

                    // Validate max 5MB (5 * 1024 * 1024)
                    if (file.size > 5 * 1024 * 1024) {
                        alert('Image file size must be less than 5MB.');
                        logoInput.value = '';
                        return;
                    }

                    // Live preview via ObjectURL
                    const objectUrl = URL.createObjectURL(file);
                    logoPreview.src = objectUrl;
                    logoPreview.style.display = 'block';
                    if (previewFallback) previewFallback.style.display = 'none';

                    // Update badge and labels
                    if (previewBadge) {
                        previewBadge.textContent = 'Selected New Image (Unsaved)';
                        previewBadge.style.color = '#0284C7';
                    }
                    if (previewFilename) {
                        previewFilename.textContent = file.name;
                    }
                    if (previewMeta) {
                        const sizeKb = (file.size / 1024).toFixed(1);
                        previewMeta.textContent = `${sizeKb} KB — Will be uploaded and saved upon form submit.`;
                    }
                    if (clearSelectionBtn) {
                        clearSelectionBtn.style.display = 'inline-block';
                    }
                });

                if (clearSelectionBtn) {
                    clearSelectionBtn.addEventListener('click', function () {
                        logoInput.value = '';
                        clearSelectionBtn.style.display = 'none';

                        if (initialImageUrl) {
                            logoPreview.src = initialImageUrl;
                            logoPreview.style.display = 'block';
                            if (previewFallback) previewFallback.style.display = 'none';
                            if (previewBadge) {
                                previewBadge.textContent = 'Current Featured Image';
                                previewBadge.style.color = '';
                            }
                            if (previewFilename) {
                                previewFilename.textContent = initialFilename;
                            }
                            if (previewMeta) {
                                previewMeta.textContent = 'Image is currently linked and active.';
                            }
                        } else {
                            logoPreview.src = '';
                            logoPreview.style.display = 'none';
                            if (previewFallback) previewFallback.style.display = 'flex';
                            if (previewBadge) {
                                previewBadge.textContent = 'Image Preview';
                                previewBadge.style.color = '';
                            }
                            if (previewFilename) {
                                previewFilename.textContent = 'No image chosen';
                            }
                            if (previewMeta) {
                                previewMeta.textContent = 'Select a JPG, PNG or WEBP above to preview.';
                            }
                        }
                    });
                }
            })();

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
                
                cropNextImage();
            });

            function cropNextImage() {
                if (currentCropIndex >= filesToCrop.length) {
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
                    img.className = 'rounded-3 border';
                    img.style.height = '80px';
                    img.style.width = 'auto';
                    img.style.objectFit = 'cover';
                    img.style.borderColor = '#E2E8F0';
                    imagesPreview.appendChild(img);
                });
                
                imagesHidden.value = croppedImages.join('||');
            }

            $(document).ready(function() {
                $('#summernote').summernote({
                    height: 180
                });

                new Tagify(document.querySelector('#technology'));
            });
        </script>
    @endpush
</x-app-layout>
