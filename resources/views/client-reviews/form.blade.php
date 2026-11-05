<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Client Reviews') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
        <!-- Page Header & Breadcrumbs -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard') }}" title="Home">Home</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('client-reviews.index') }}">Client Reviews</a></li>
                    <li class="breadcrumb-item active" aria-current="page">{{ isset($clientReview) ? 'Edit Review' : 'Create Review' }}</li>
                </ol>
            </nav>
            <div class="d-flex align-items-center">
                <a href="{{ route('client-reviews.index') }}" class="btn-action-edit" style="padding: 6px 18px !important; font-size: 13px !important;">
                    &larr; Back to Reviews
                </a>
            </div>
        </div>

        <div class="row">
            <div class="col-12 col-xl-9">
                <div class="admin-card p-4 p-sm-5">
                    <div class="mb-4 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                            {{ isset($clientReview) ? 'Edit Client Review' : 'Create New Review' }}
                        </h2>
                        <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                            Manage testimonial content, author attribution, and rating score.
                        </p>
                    </div>

                    <form method="POST" action="{{ isset($clientReview) ? route('client-reviews.update', $clientReview->id) : route('client-reviews.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if (isset($clientReview))
                            @method('PUT')
                        @endif

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="client_name" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Client Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-3 @error('client_name') is-invalid @enderror" id="client_name" name="client_name" value="{{ isset($clientReview) ? $clientReview->client_name : old('client_name') }}" required style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                            </div>

                            <div class="col-md-6">
                                <label for="company_name" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Company Name <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-3 @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ isset($clientReview) ? $clientReview->company_name : old('company_name') }}" required style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                            </div>
                        </div>

                        <div class="row g-3 mb-3">
                            <div class="col-md-6">
                                <label for="job_title" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Job Title <span class="text-danger">*</span></label>
                                <input type="text" class="form-control rounded-3 @error('job_title') is-invalid @enderror" id="job_title" name="job_title" value="{{ isset($clientReview) ? $clientReview->job_title : old('job_title') }}" required style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                            </div>

                            <div class="col-md-6">
                                <label for="duration" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Project Duration</label>
                                <input type="text" class="form-control rounded-3 @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ isset($clientReview) ? $clientReview->duration : old('duration') }}" placeholder="e.g., 3 months, 6 weeks" style="border-color: #E2E8F0; font-size: 13.5px; padding: 10px 14px;">
                                <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                            </div>
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Client Avatar</label>
                            <input type="file" class="form-control rounded-3 @error('client_avatar') is-invalid @enderror" id="avatarInput" accept="image/*" style="border-color: #E2E8F0; font-size: 13px;">
                            <input type="hidden" name="client_avatar" id="client_avatar">
                            <x-input-error :messages="$errors->get('client_avatar')" class="mt-2" />

                            <div class="mt-3">
                                <img id="avatarPreview" src="{{ isset($clientReview) && $clientReview->client_avatar ? $clientReview->client_avatar : '/images/avatar.png' }}" class="rounded-circle border" style="width:72px;height:72px;object-fit:cover;border-color:#E2E8F0 !important;">
                            </div>
                        </div>

                        <div class="mb-4">
                            <label for="review" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Review Text <span class="text-danger">*</span></label>
                            <textarea class="form-control rounded-3 @error('review') is-invalid @enderror" id="review" name="review" rows="5" required style="border-color: #E2E8F0; font-size: 13.5px; padding: 12px 14px; line-height: 1.6;">{{ isset($clientReview) ? $clientReview->review : old('review') }}</textarea>
                            <x-input-error :messages="$errors->get('review')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label class="form-label fw-semibold text-dark small d-block" style="font-size: 12.5px; color: #0F172A;">Rating Score <span class="text-danger">*</span></label>
                            <div class="star-rating d-flex align-items-center gap-2">
                                <div class="stars d-flex gap-1" id="star-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="star bi bi-star-fill fs-4" data-rating="{{ $i }}" style="cursor: pointer; color: #CBD5E1;"></i>
                                    @endfor
                                </div>
                                <span id="rating-text" class="text-muted ms-2" style="font-size: 13px;"></span>
                            </div>
                            <input type="hidden" name="rating" id="rating-input" value="{{ isset($clientReview) ? $clientReview->rating : old('rating') }}" required>
                            <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                        </div>

                        <div class="mb-4">
                            <label for="video_link" class="form-label fw-semibold text-dark small" style="font-size: 12.5px; color: #0F172A;">Video Testimonial</label>
                            <input type="file" class="form-control rounded-3 @error('video_link') is-invalid @enderror" id="video_link" name="video_link" accept="video/*" style="border-color: #E2E8F0; font-size: 13px;">
                            @if(isset($clientReview) && $clientReview->video_link)
                                <small class="form-text text-muted d-block mt-1">
                                    Current video: <a href="{{ $clientReview->video_link }}" target="_blank" class="text-dark fw-medium">View Video</a>
                                </small>
                            @endif
                            <small class="form-text text-muted d-block mt-1" style="font-size: 11.5px; color: #94A3B8;">Accepted formats: MP4, MOV, AVI, WMV (Max: 50MB)</small>
                            <x-input-error :messages="$errors->get('video_link')" class="mt-2" />
                        </div>

                        <div class="d-flex align-items-center gap-2 pt-2">
                            <button type="submit" class="btn-primary-pill">
                                <span>{{ isset($clientReview) ? 'Update' : 'Create' }} Review</span>
                            </button>
                            <a href="{{ route('client-reviews.index') }}" class="btn-action-edit" style="padding: 7px 18px !important; font-size: 13px !important;">
                                Cancel
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Cropper Modal -->
    <div class="modal fade" id="cropperModal" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-4 border-0 shadow">
                <div class="modal-header border-bottom">
                    <h5 class="modal-title editorial-title" style="font-size: 1.2rem;">Crop Avatar</h5>
                    <button class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body text-center p-4">
                    <img id="cropperImage" class="img-fluid rounded-3">
                </div>

                <div class="modal-footer border-top bg-light">
                    <button class="btn-action-edit" data-bs-dismiss="modal">
                        Cancel
                    </button>
                    <button class="btn-primary-pill" id="cropAvatarBtn">
                        <span>Crop & Save</span>
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            // Avatar Cropper
            let cropper;
            const avatarInput = document.getElementById('avatarInput');
            const cropperImage = document.getElementById('cropperImage');
            const avatarPreview = document.getElementById('avatarPreview');
            const avatarHidden = document.getElementById('client_avatar');
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

            // Star Rating
            document.addEventListener('DOMContentLoaded', function() {
                const stars = document.querySelectorAll('.star');
                const ratingInput = document.getElementById('rating-input');
                const ratingText = document.getElementById('rating-text');
                
                // Initialize with existing rating if editing
                const currentRating = ratingInput.value;
                if (currentRating) {
                    updateStars(parseInt(currentRating));
                }
                
                // Add click event to each star
                stars.forEach(star => {
                    star.addEventListener('click', function() {
                        const rating = parseInt(this.getAttribute('data-rating'));
                        ratingInput.value = rating;
                        updateStars(rating);
                    });
                    
                    star.addEventListener('mouseenter', function() {
                        const rating = parseInt(this.getAttribute('data-rating'));
                        highlightStars(rating);
                    });
                });
                
                document.getElementById('star-rating').addEventListener('mouseleave', function() {
                    const rating = parseInt(ratingInput.value) || 0;
                    updateStars(rating);
                });
                
                function updateStars(rating) {
                    stars.forEach((star, index) => {
                        if (index < rating) {
                            star.style.color = '#0F172A'; // Monochrome dark charcoal for active
                        } else {
                            star.style.color = '#CBD5E1'; // Soft gray for unselected
                        }
                    });
                    
                    if (rating > 0) {
                        ratingText.textContent = rating + '.0 / 5.0';
                        ratingText.classList.remove('text-muted');
                        ratingText.classList.add('text-dark', 'fw-semibold');
                    } else {
                        ratingText.textContent = '';
                    }
                }
                
                function highlightStars(rating) {
                    stars.forEach((star, index) => {
                        if (index < rating) {
                            star.style.color = '#0F172A';
                        } else {
                            star.style.color = '#CBD5E1';
                        }
                    });
                }
            });
        </script>
    @endpush
</x-app-layout>