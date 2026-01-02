<x-app-layout>
    <x-slot name="header">
        <h2 class="fw-semibold fs-4 text-dark">
            {{ __('Client Reviews') }}
        </h2>
    </x-slot>
    <div class="py-12 w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item" aria-current="page" title="Client Review"><a href="{{ route('client-reviews.index') }}"> Client Reviews</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="Client Review">{{ isset($clientReview) ? 'Edit Review' : 'Create Review' }}</li>
                
            </ol>
            <ul class="list-unstyled action d-flex align-items-center mb-0">
                <li>
                    <a href="{{ route('client-reviews.index') }}" class="btn btn-dark">Back</a>
                </li>
            </ul>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="border p-4 rounded-2 rounded-4">
                    <form method="POST" action="{{ isset($clientReview) ? route('client-reviews.update', $clientReview->id) : route('client-reviews.store') }}" enctype="multipart/form-data">
                        @csrf
                        @if (isset($clientReview))
                            @method('PUT')
                        @endif

                        <div class="mb-3">
                            <label for="client_name" class="form-label">Client Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('client_name') is-invalid @enderror" id="client_name" name="client_name" value="{{ isset($clientReview) ? $clientReview->client_name : old('client_name') }}" required>
                            <x-input-error :messages="$errors->get('client_name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="company_name" class="form-label">Company Name <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('company_name') is-invalid @enderror" id="company_name" name="company_name" value="{{ isset($clientReview) ? $clientReview->company_name : old('company_name') }}" required>
                            <x-input-error :messages="$errors->get('company_name')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Client Avatar</label>
                            <input type="file" class="form-control @error('client_avatar') is-invalid @enderror" id="avatarInput" accept="image/*">
                            <input type="hidden" name="client_avatar" id="client_avatar">
                            <x-input-error :messages="$errors->get('client_avatar')" class="mt-2" />

                            <div class="mt-3">
                                <img id="avatarPreview" src="{{ isset($clientReview) && $clientReview->client_avatar ? $clientReview->client_avatar : '' }}" class="rounded-circle border" style="width:120px;height:120px;object-fit:cover;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="job_title" class="form-label">Job Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control @error('job_title') is-invalid @enderror" id="job_title" name="job_title" value="{{ isset($clientReview) ? $clientReview->job_title : old('job_title') }}" required>
                            <x-input-error :messages="$errors->get('job_title')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="review" class="form-label">Review <span class="text-danger">*</span></label>
                            <textarea class="form-control @error('review') is-invalid @enderror" id="review" name="review" rows="4" required>{{ isset($clientReview) ? $clientReview->review : old('review') }}</textarea>
                            <x-input-error :messages="$errors->get('review')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Rating <span class="text-danger">*</span></label>
                            <div class="star-rating d-flex align-items-center gap-2">
                                <div class="stars" id="star-rating">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <i class="star bi bi-star-fill fs-3" data-rating="{{ $i }}" style="cursor: pointer; color: #ddd;"></i>
                                    @endfor
                                </div>
                                <span id="rating-text" class="text-muted ms-2"></span>
                            </div>
                            <input type="hidden" name="rating" id="rating-input" value="{{ isset($clientReview) ? $clientReview->rating : old('rating') }}" required>
                            <x-input-error :messages="$errors->get('rating')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="video_link" class="form-label">Video Upload</label>
                            <input type="file" class="form-control @error('video_link') is-invalid @enderror" id="video_link" name="video_link" accept="video/*">
                            @if(isset($clientReview) && $clientReview->video_link)
                                <small class="form-text text-muted d-block mt-1">
                                    Current video: <a href="{{ Storage::url($clientReview->video_link) }}" target="_blank">View Video</a>
                                </small>
                            @endif
                            <small class="form-text text-muted d-block mt-1">Accepted formats: MP4, MOV, AVI, WMV (Max: 50MB)</small>
                            <x-input-error :messages="$errors->get('video_link')" class="mt-2" />
                        </div>

                        <div class="mb-3">
                            <label for="duration" class="form-label">Project Duration</label>
                            <input type="text" class="form-control @error('duration') is-invalid @enderror" id="duration" name="duration" value="{{ isset($clientReview) ? $clientReview->duration : old('duration') }}" placeholder="e.g., 3 months, 6 weeks, 1 year">
                            <small class="form-text text-muted">Optional - Enter the project duration (e.g., "3 months", "6 weeks", "1 year")</small>
                            <x-input-error :messages="$errors->get('duration')" class="mt-2" />
                        </div>

                        <div class="d-flex gap-2">
                            <button type="submit" class="btn btn-primary">{{ isset($clientReview) ? 'Update' : 'Create' }} Review</button>
                            <a href="{{ route('client-reviews.index') }}" class="btn btn-secondary">Cancel</a>
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
                    // Click to set rating
                    star.addEventListener('click', function() {
                        const rating = parseInt(this.getAttribute('data-rating'));
                        ratingInput.value = rating;
                        updateStars(rating);
                    });
                    
                    // Hover effect
                    star.addEventListener('mouseenter', function() {
                        const rating = parseInt(this.getAttribute('data-rating'));
                        highlightStars(rating);
                    });
                });
                
                // Reset to selected rating on mouse leave
                document.getElementById('star-rating').addEventListener('mouseleave', function() {
                    const rating = parseInt(ratingInput.value) || 0;
                    updateStars(rating);
                });
                
                function updateStars(rating) {
                    stars.forEach((star, index) => {
                        if (index < rating) {
                            star.style.color = '#ffc107'; // Yellow for selected
                        } else {
                            star.style.color = '#ddd'; // Gray for unselected
                        }
                    });
                    
                    // Update text
                    if (rating > 0) {
                        ratingText.textContent = rating + ' Star' + (rating > 1 ? 's' : '');
                        ratingText.classList.remove('text-muted');
                        ratingText.classList.add('text-dark', 'fw-semibold');
                    } else {
                        ratingText.textContent = '';
                    }
                }
                
                function highlightStars(rating) {
                    stars.forEach((star, index) => {
                        if (index < rating) {
                            star.style.color = '#ffc107';
                        } else {
                            star.style.color = '#ddd';
                        }
                    });
                }
            });
        </script>
    @endpush

</x-app-layout>