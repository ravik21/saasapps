<x-landing-layout>
    <main class="flex-1">
        <section class="review-hero-section">
            <div class="review-hero-container">
                <div class="review-hero-content">
                    <!-- Badge -->
                    <div class="review-hero-badge-wrapper">
                        <span class="review-hero-badge">
                            <i class="fas fa-star review-hero-star-icon"></i>
                            Share Your Experience
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="relative mt-10 md:mt-0 text-heading-mobile-hero md:text-heading-lg lg:text-heading-hero font-sans-heading text-center md:text-left mb-6 md:mb-8">
                        Tell Us Your 
                        <span class="review-hero-heading-highlight">
                            Amazing
                            <svg class="review-hero-underline" aria-hidden="true" viewBox="0 0 188 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M187 2.43158C175.315 1.87289 163.847 1.48993 152.597 1.26169M187 7.00005C169.462 5.47673 141.769 3.9541 117.308 7.00005C130.359 4.14738 137.762 2.62071 152.597 1.26169M152.597 1.26169C140.718 1.02069 128.656 0.981649 116.5 1.11023M94.5 1.51622C63.2898 2.32629 31.806 4.09227 1.5 6.24457" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        Story
                    </h1>

                    <!-- Subtitle -->
                    <p class="review-hero-subtitle">
                        Your feedback <span class="review-hero-highlight-text">empowers us</span> to grow and serve you <span class="review-hero-highlight-text">better</span>
                    </p>

                    <!-- Trust indicators -->
                    <div class="review-hero-trust-wrapper">
                        <div class="review-hero-trust-card">
                            <div class="review-hero-trust-icon">
                                <i class="fa-solid fa-shield"></i>
                            </div>
                            <div class="review-hero-trust-text">
                                <span class="review-hero-trust-title">100% Secure</span>
                                <span class="review-hero-trust-desc">End-to-end encrypted</span>
                            </div>
                        </div>
                        <div class="review-hero-trust-card">
                            <div class="review-hero-trust-icon">
                                <i class="fas fa-lock"></i>
                            </div>
                            <div class="review-hero-trust-text">
                                <span class="review-hero-trust-title">100% Private</span>
                                <span class="review-hero-trust-desc">Your data is safe</span>
                            </div>
                        </div>
                        <div class="review-hero-trust-card">
                            <div class="review-hero-trust-icon">
                                <i class="fas fa-clock"></i>
                            </div>
                            <div class="review-hero-trust-text">
                                <span class="review-hero-trust-title">2 Minutes</span>
                                <span class="review-hero-trust-desc">Quick & easy</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="relative pt-4 pb-12 md:py-20 md:bg-gray-300 md:before:absolute md:before:inset-0 md:before:bg-gray-300 md:before:w-screen md:before:left-1/2 md:before:right-1/2 md:before:-mr-[50vw] md:before:-ml-[50vw] md:before:-z-10">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto bg-white rounded-24 shadow-2xl border border-gray-100 overflow-hidden">
                    <div class="bg-gradient-to-br from-green-50 to-emerald-50 px-8 py-6 border-b border-gray-100">
                        <div class="flex items-center gap-3">
                            <div class="w-12 h-12 bg-gradient-to-br from-green-500 to-emerald-600 rounded-xl flex items-center justify-center shadow-lg">
                                <i class="fas fa-pen-fancy text-white text-xl"></i>
                            </div>
                            <div>
                                <h2 class="text-2xl font-bold text-gray-900">Review Form</h2>
                                <p class="text-sm text-gray-600">Please fill in all required fields</p>
                            </div>
                        </div>
                    </div>

                    <form id="reviewForm" action="{{ route('review.store') }}" method="POST" class="p-6 md:p-12 space-y-10">
                        @csrf

                        <input type="hidden" name="public_review" value="1">

                        <!-- Avatar Section -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 border border-gray-200 mb-4">
                            <div class="flex items-center gap-2 mb-6">
                                <div class="w-10 h-10 bg-gradient-to-br from-green-500 to-emerald-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-user-circle text-white"></i>
                                </div>
                                <h3 class="text-lg font-bold text-gray-900">Your Photo</h3>
                            </div>
                            <div class="flex flex-col md:flex-row items-center md:items-start gap-8">
                                <div class="relative group flex-shrink-0">
                                    <div class="w-36 h-36 rounded-2xl overflow-hidden bg-white shadow-2xl border-4 border-white ring-2 ring-gray-200 transition-all group-hover:ring-green-500">
                                        <img id="avatarPreview" src="/images/avatar.png" alt="Avatar" class="w-full h-full object-cover">
                                    </div>
                                </div>
                                <div class="flex-1 w-full">
                                    <p class="text-sm text-gray-600 mb-4">Add a professional photo to personalize your review</p>
                                    <div class="flex flex-wrap gap-3">
                                        <button type="button" id="captureAvatarBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-brand-500 text-brand-over-500 ring-gray-900/20 shadow-cta ring-hairline z-10">
                                            <i class="fas fa-camera mr-2"></i>
                                            <span>Take Photo</span>
                                        </button>
                                        <button type="button" id="uploadAvatarBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-white text-gray-800 ring-gray-900/20 shadow-cta ring-hairline z-10 border border-gray-300">
                                            <i class="fas fa-upload mr-2"></i>
                                            <span>Upload Photo</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <input type="file" id="avatarFileInput" accept="image/*" class="hidden">
                            <input type="hidden" name="client_avatar" id="client_avatar" value="{{ old('client_avatar') }}">
                            @error('client_avatar')
                                <p class="mt-2 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Personal Info -->
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-4">
                            <div>
                                <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-user text-green-600"></i>
                                    Your Name <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="client_name" value="{{ old('client_name') }}" required class="w-full px-4 py-3 border-2 @error('client_name') border-red-500 @else border-gray-200 @enderror rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-100 transition-all outline-none" placeholder="John Doe">
                                @error('client_name')
                                    <p class="mt-1 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-building text-green-600"></i>
                                    Company <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="company_name" value="{{ old('company_name') }}" required class="w-full px-4 py-3 border-2 @error('company_name') border-red-500 @else border-gray-200 @enderror rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-100 transition-all outline-none" placeholder="Acme Inc">
                                @error('company_name')
                                    <p class="mt-1 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-briefcase text-green-600"></i>
                                    Job Title <span class="text-red-500">*</span>
                                </label>
                                <input type="text" name="job_title" value="{{ old('job_title') }}" required class="w-full px-4 py-3 border-2 @error('job_title') border-red-500 @else border-gray-200 @enderror rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-100 transition-all outline-none" placeholder="CEO">
                                @error('job_title')
                                    <p class="mt-1 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                                @enderror
                            </div>
                            <div>
                                <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-clock text-green-600"></i>
                                    Duration
                                </label>
                                <input type="text" name="duration" value="{{ old('duration') }}" class="w-full px-4 py-3 border-2 @error('duration') border-red-500 @else border-gray-200 @enderror rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-100 transition-all outline-none" placeholder="6 months">
                                @error('duration')
                                    <p class="mt-1 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <!-- Review -->
                        <div class="mb-4">
                            <label class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                <i class="fas fa-pen text-green-600"></i>
                                Your Review <span class="text-red-500">*</span>
                            </label>
                            <textarea name="review" required rows="5" class="w-full px-4 py-3 border-2 @error('review') border-red-500 @else border-gray-200 @enderror rounded-xl focus:border-green-500 focus:ring-4 focus:ring-green-100 transition-all outline-none resize-none" placeholder="Share your experience with us...">{{ old('review') }}</textarea>
                            @error('review')
                                <p class="mt-1 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Rating -->
                        <div class="bg-gradient-to-br from-amber-50 to-yellow-50 rounded-2xl p-6 border-2 border-amber-200 mb-4">
                            <div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
                                <div class="flex items-center gap-2">
                                    <div class="w-10 h-10 bg-gradient-to-br from-amber-500 to-yellow-600 rounded-lg flex items-center justify-center flex-shrink-0">
                                        <i class="fas fa-star text-white"></i>
                                    </div>
                                    <h3 class="text-lg font-bold text-gray-900">Rating <span class="text-red-500">*</span></h3>
                                </div>
                                <div class="flex items-center gap-3">
                                    @for ($i = 1; $i <= 5; $i++)
                                        <button type="button" class="rating-star text-4xl text-gray-300 hover:text-yellow-400 transition-all hover:scale-110 focus:outline-none" data-rating="{{ $i }}">
                                            <i class="fas fa-star"></i>
                                        </button>
                                    @endfor
                                    <span id="ratingText" class="ml-2 text-base font-semibold text-gray-700 min-w-[80px]"></span>
                                </div>
                            </div>
                            <input type="hidden" name="rating" id="ratingInput" value="{{ old('rating') }}" required>
                            @error('rating')
                                <p class="mt-2 text-sm text-red-600 text-center"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Video -->
                        <div class="bg-gradient-to-br from-gray-50 to-gray-100 rounded-2xl p-6 border border-gray-200 mb-4">
                            <div class="flex items-center gap-2 mb-6">
                                <div class="w-10 h-10 bg-gradient-to-br from-purple-500 to-pink-600 rounded-lg flex items-center justify-center">
                                    <i class="fas fa-video text-white"></i>
                                </div>
                                <div>
                                    <h3 class="text-lg font-bold text-gray-900">Video Testimonial</h3>
                                    <p class="text-sm text-gray-600">(Optional)</p>
                                </div>
                            </div>
                            
                            <div id="videoPreviewContainer" class="hidden mb-6">
                                <div class="rounded-2xl overflow-hidden bg-black shadow-2xl" style="height: 400px;">
                                    <video id="videoPreview" controls class="w-full h-full object-contain"></video>
                                </div>
                                <button type="button" id="removeVideoBtn" class="mt-4 mx-auto flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-red-600 text-white ring-gray-900/20 shadow-cta ring-hairline z-10">
                                    <i class="fas fa-trash mr-2"></i>
                                    <span>Remove Video</span>
                                </button>
                            </div>

                            <div id="recordingControls">
                                <div id="initialVideoButtons">
                                    <p class="text-sm text-gray-600 mb-4">Record or upload a video testimonial (optional but highly recommended)</p>
                                    <div class="flex flex-wrap gap-3">
                                        <button type="button" id="recordVideoBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-brand-500 text-white ring-gray-900/20 shadow-cta ring-hairline z-10">
                                            <i class="fas fa-video mr-2"></i>
                                            <span>Record Video</span>
                                        </button>
                                        <button type="button" id="uploadVideoBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-white text-gray-800 ring-gray-900/20 shadow-cta ring-hairline z-10 border border-gray-300">
                                            <i class="fas fa-upload mr-2"></i>
                                            <span>Upload Video</span>
                                        </button>
                                    </div>
                                </div>
                                <input type="file" id="videoFileInput" accept="video/*" class="hidden">
                            </div>
                            <input type="hidden" name="video_link" id="video_link" value="{{ old('video_link') }}">
                            @error('video_link')
                                <p class="mt-2 text-sm text-red-600"><i class="fas fa-exclamation-circle mr-1"></i>{{ $message }}</p>
                            @enderror
                        </div>

                        <!-- Submit -->
                        <div class="pt-6 border-t border-gray-200 flex justify-center">
                            <button type="submit" id="submitBtn" class="flex items-center gap-1 justify-center text-center h-11 lg:h-14 px-4 lg:px-5 rounded-8 text-sm lg:text-lg bg-brand-500 text-brand-over-500 ring-gray-900/20 shadow-cta ring-hairline z-10 font-bold">
                                <i class="fas fa-paper-plane text-xl lg:text-2xl mr-2"></i>
                                <span>Submit Your Review</span>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        @include('home.partials.get-app-section')
    </main>

    <!-- Avatar Capture Modal -->
    <div id="avatarCaptureModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="max-w-198 min-h-90 md:min-h-110 mx-4 -mt-24 md:grid bg-gray-100 ring-hairline ring-gray-900/10 shadow-100 rounded-24 overflow-hidden z-50">
            <div class="relative p-6 md:p-8 width-full">
                <button type="button" id="closeAvatarCaptureBtn" class="absolute right-6 top-6 flex items-center justify-center">
                    <svg class="size-8 text-gray-600 hover:text-gray-800 transition-colors" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 17L12 12M12 12L7 7M12 12L17 7M12 12L7 17" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-camera text-white text-lg"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Capture Your Photo</h3>
                </div>
                <div class="rounded-2xl overflow-hidden bg-black mb-6" style="height: 400px;">
                    <video id="avatarCamera" autoplay playsinline class="w-full h-full object-cover"></video>
                </div>
                <div class="flex gap-3 justify-end">
                    <button type="button" id="cancelAvatarCaptureBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-white text-gray-700 ring-gray-900/20 shadow-cta ring-hairline z-10 border border-gray-300">
                        Cancel
                    </button>
                    <button type="button" id="capturePhotoBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-brand-500 text-brand-over-500 ring-gray-900/20 shadow-cta ring-hairline z-10">
                        <i class="fas fa-camera mr-2"></i>Take Photo
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Avatar Cropper Modal -->
    <div id="avatarCropperModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="max-w-198 min-h-90 md:min-h-110 mx-4 -mt-24 md:grid bg-gray-100 ring-hairline ring-gray-900/10 shadow-100 rounded-24 overflow-hidden z-50">
            <div class="relative p-6 md:p-8 width-full">
                <button type="button" id="closeAvatarCropperBtn" class="absolute right-6 top-6 flex items-center justify-center">
                    <svg class="size-8 text-gray-600 hover:text-gray-800 transition-colors" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 17L12 12M12 12L7 7M12 12L17 7M12 12L7 17" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-crop-alt text-white text-lg"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Crop Your Photo</h3>
                </div>
                <div class="rounded-2xl overflow-hidden bg-black mb-6" style="height: 400px;">
                    <img id="cropperImage" class="max-w-full h-full object-contain">
                </div>
                <div class="flex gap-3 justify-end">
                    <button type="button" id="cancelAvatarCropBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-white text-gray-700 ring-gray-900/20 shadow-cta ring-hairline z-10 border border-gray-300">
                        Cancel
                    </button>
                    <button type="button" id="cropAvatarBtn" class="flex-shrink-0 flex items-center text-center h-9 lg:h-11 px-4 lg:px-5 rounded-8 text-sm lg:text-base bg-brand-500 text-brand-over-500 ring-gray-900/20 shadow-cta ring-hairline z-10">
                        <i class="fas fa-check-circle mr-2"></i>Save Photo
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Camera Container Modal -->
    <div id="cameraContainer" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="max-w-198 min-h-90 md:min-h-110 mx-4 -mt-24 md:grid bg-gray-100 ring-hairline ring-gray-900/10 shadow-100 rounded-24 overflow-hidden z-50">
            <div class="relative p-6 md:p-8 width-full">
                <button type="button" id="stopCameraBtn" class="absolute right-6 top-6 flex items-center justify-center">
                    <svg class="size-8 text-gray-600 hover:text-gray-800 transition-colors" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M17 17L12 12M12 12L7 7M12 12L17 7M12 12L7 17" stroke="currentColor" stroke-width="1.33333" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                </button>
                <div class="flex items-center gap-3 mb-6">
                    <div class="w-10 h-10 rounded-xl flex items-center justify-center">
                        <i class="fas fa-video text-white text-lg"></i>
                    </div>
                    <h3 class="text-2xl font-bold text-gray-900">Record Video</h3>
                </div>
                <div class="rounded-2xl overflow-hidden bg-black mb-6" style="height: 400px;">
                    <video id="cameraFeed" autoplay muted playsinline class="w-full h-full object-cover"></video>
                </div>
                <div class="flex justify-center">
                    <button type="button" id="startRecordingBtn" class="flex-shrink-0 flex items-center text-center h-11 lg:h-14 px-4 lg:px-5 rounded-8 text-sm lg:text-lg bg-red-600 text-white ring-gray-900/20 shadow-cta ring-hairline z-10 font-bold">
                        <i class="fas fa-circle animate-pulse mr-2"></i>Start Recording
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Recording In Progress Modal -->
    <div id="recordingInProgress" class="fixed inset-0 flex items-center justify-center z-50 hidden">
        <div class="absolute inset-0 bg-black/60 backdrop-blur-sm"></div>
        <div class="max-w-198 min-h-90 md:min-h-110 mx-4 -mt-24 md:grid bg-gray-100 ring-hairline ring-gray-900/10 shadow-100 rounded-24 overflow-hidden z-50">
            <div class="relative p-6 md:p-8 width-full">
                <div class="flex items-center justify-center gap-4 mb-6">
                    <div class="w-5 h-5 rounded-full bg-red-600 animate-pulse"></div>
                    <span class="text-2xl font-black text-gray-900">RECORDING</span>
                    <p id="recordingTimer" class="text-2xl font-black text-red-600" style="font-variant-numeric: tabular-nums;">00:00</p>
                </div>
                <div class="rounded-2xl overflow-hidden bg-black mb-6" style="height: 400px;">
                    <video id="recordingFeed" autoplay muted playsinline class="w-full h-full object-cover"></video>
                </div>
                <div class="flex justify-center">
                    <button type="button" id="stopRecordingBtn" class="w-full flex items-center justify-center text-center h-11 lg:h-14 px-4 lg:px-5 rounded-8 text-sm lg:text-lg bg-red-600 text-white ring-gray-900/20 shadow-cta ring-hairline z-10 font-bold">
                        <i class="fas fa-stop-circle mr-2"></i>Stop Recording
                    </button>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .fade-in {
                animation: fadeIn 0.5s ease-in-out;
            }
            @keyframes fadeIn {
                from { opacity: 0; transform: translateY(-10px); }
                to { opacity: 1; transform: translateY(0); }
            }

            .bg-white {
                background-color: #ffffff;
            }

            .absolute.inset-0.bg-black\/60.backdrop-blur-sm {
                background-color: rgb(6 8 16 / 0.1);
            }

            .text-center {
                text-align: center;
            }

            /* Hero Section */
            .review-hero-section {
                padding: 60px 20px;
            }

            .review-hero-container {
                max-width: 1200px;
                margin: 0 auto;
            }

            .review-hero-content {
                text-align: center;
                max-width: 900px;
                margin: 0 auto;
            }

            /* Badge */
            .review-hero-badge-wrapper {
                margin-bottom: 32px;
                display: flex;
                justify-content: center;
            }

            .review-hero-badge {
                display: inline-flex;
                align-items: center;
                gap: 8px;
                background-color: #87ed82;
                padding: 10px 24px;
                border-radius: 30px;
                font-size: 14px;
                font-weight: 600;
                box-shadow: 0 4px 12px rgba(135, 237, 130, 0.3);
                transition: all 0.3s ease;
            }

            .review-hero-badge:hover {
                transform: translateY(-2px);
                box-shadow: 0 6px 20px rgba(135, 237, 130, 0.4);
            }

            .review-hero-star-icon {
                font-size: 14px;
            }

            /* Main Heading */
            .review-hero-heading {
                font-size: 48px;
                font-weight: 800;
                line-height: 1.2;
                margin-bottom: 24px;
                letter-spacing: -0.02em;
            }

            @media (min-width: 768px) {
                .review-hero-heading {
                    font-size: 68px;
                }
            }

            @media (min-width: 1024px) {
                .review-hero-heading {
                    font-size: 88px;
                }
            }

            .review-hero-heading-highlight {
                position: relative;
                display: inline-block;
            }

            .review-hero-underline {
                position: absolute;
                left: 0;
                bottom: -8px;
                width: 100%;
                height: auto;
                pointer-events: none;
            }

            /* Subtitle */
            .review-hero-subtitle {
                font-size: 18px;
                line-height: 1.6;
                color: #4a5568;
                margin-bottom: 48px;
                max-width: 700px;
                margin-left: auto;
                margin-right: auto;
            }

            @media (min-width: 768px) {
                .review-hero-subtitle {
                    font-size: 20px;
                }
            }

            @media (min-width: 1024px) {
                .review-hero-subtitle {
                    font-size: 22px;
                }
            }

            .review-hero-highlight-text {
                font-weight: 700;
                position: relative;
            }

            /* Trust Indicators */
            .review-hero-trust-wrapper {
                display: flex;
                flex-wrap: wrap;
                gap: 24px;
                justify-content: center;
                align-items: center;
            }

            @media (max-width: 767px) {
                .review-hero-trust-wrapper {
                    flex-direction: column;
                    gap: 16px;
                }
            }

            .review-hero-trust-card {
                display: flex;
                align-items: center;
                gap: 12px;
                background-color: #ffffff;
                padding: 16px 24px;
                border-radius: 16px;
                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
                transition: all 0.3s ease;
                border: 1px solid #e2e8f0;
            }

            .review-hero-trust-card:hover {
                transform: translateY(-3px);
                box-shadow: 0 8px 16px rgba(0, 0, 0, 0.12);
                border-color: #87ed82;
            }

            .review-hero-trust-icon {
                width: 40px;
                height: 40px;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #f0fdf4;
                border-radius: 12px;
                font-size: 18px;
                color: #87ed82;
                flex-shrink: 0;
            }

            .review-hero-trust-text {
                display: flex;
                flex-direction: column;
                gap: 2px;
            }

            .review-hero-trust-title {
                font-size: 15px;
                font-weight: 700;
                line-height: 1.3;
            }

            .review-hero-trust-desc {
                font-size: 13px;
                color: #6b7280;
                line-height: 1.3;
            }

            @media (max-width: 767px) {
                .review-hero-section {
                    padding: 40px 16px;
                }

                .review-hero-badge {
                    padding: 8px 20px;
                    font-size: 13px;
                }

                .review-hero-heading {
                    font-size: 36px;
                }

                .review-hero-subtitle {
                    font-size: 16px;
                    margin-bottom: 32px;
                }

                .review-hero-trust-card {
                    width: 100%;
                    max-width: 320px;
                }
            }
        </style>
    @endpush

    @push('scripts')
    <script>
        // Simple notification system
        function notify(message, type = 'info') {
            const colors = { error: 'bg-red-600', success: 'bg-green-600', info: 'bg-blue-600' };
            const notif = document.createElement('div');
            notif.className = `fixed top-4 left-1/2 -translate-x-1/2 ${colors[type]} text-white px-6 py-3 rounded-xl shadow-lg z-50 text-center font-semibold fade-in`;
            notif.textContent = message;
            document.body.appendChild(notif);
            setTimeout(() => notif.remove(), 4000);
        }

        // Rating
        const stars = document.querySelectorAll('.rating-star');
        const ratingInput = document.getElementById('ratingInput');
        const ratingText = document.getElementById('ratingText');

        stars.forEach(star => {
            star.addEventListener('click', function() {
                const rating = parseInt(this.dataset.rating);
                ratingInput.value = rating;
                ratingText.textContent = `${rating} / 5`;
                
                stars.forEach((s, i) => {
                    s.classList.toggle('text-yellow-400', i < rating);
                    s.classList.toggle('text-gray-300', i >= rating);
                });
            });
        });

        // Avatar
        let avatarCropper = null;
        let avatarStream = null;

        document.getElementById('captureAvatarBtn').addEventListener('click', async () => {
            try {
                // Check if getUserMedia is available
                if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
                    notify('Camera not supported in this browser', 'error');
                    return;
                }
                
                // Request camera permission - this will show browser permission popup
                avatarStream = await navigator.mediaDevices.getUserMedia({ 
                    video: { facingMode: 'user' }
                });
                
                const video = document.getElementById('avatarCamera');
                video.srcObject = avatarStream;
                
                // Wait for video to load
                await new Promise(resolve => {
                    video.onloadedmetadata = resolve;
                });
                await video.play();
                
                document.getElementById('avatarCaptureModal').classList.remove('hidden');
                document.documentElement.classList.add('overflow-hidden');
                document.body.classList.add('overflow-hidden');
                notify('Camera ready!', 'success');
            } catch (err) {
                console.error('Camera error:', err);
                if (err.name === 'NotAllowedError') {
                    notify('Camera permission denied. Please click Allow when browser asks.', 'error');
                } else if (err.name === 'NotFoundError') {
                    notify('No camera found on your device', 'error');
                } else {
                    notify('Unable to access camera: ' + err.message, 'error');
                }
            }
        });

        document.getElementById('capturePhotoBtn').addEventListener('click', () => {
            const video = document.getElementById('avatarCamera');
            const canvas = document.createElement('canvas');
            canvas.width = video.videoWidth;
            canvas.height = video.videoHeight;
            canvas.getContext('2d').drawImage(video, 0, 0);
            
            if (avatarStream) {
                avatarStream.getTracks().forEach(track => track.stop());
            }
            
            document.getElementById('avatarCaptureModal').classList.add('hidden');
            document.documentElement.classList.remove('overflow-hidden');
            document.body.classList.remove('overflow-hidden');
            
            canvas.toBlob(blob => {
                const reader = new FileReader();
                reader.onload = e => showAvatarCropper(e.target.result);
                reader.readAsDataURL(blob);
            }, 'image/png');
        });

        document.getElementById('uploadAvatarBtn').addEventListener('click', () => {
            document.getElementById('avatarFileInput').click();
        });

        document.getElementById('avatarFileInput').addEventListener('change', e => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => showAvatarCropper(e.target.result);
                reader.readAsDataURL(file);
            }
        });

        function showAvatarCropper(imageData) {
            document.getElementById('avatarCropperModal').classList.remove('hidden');
            document.documentElement.classList.add('overflow-hidden');
            document.body.classList.add('overflow-hidden');
            const img = document.getElementById('cropperImage');
            img.src = imageData;
            
            if (avatarCropper) avatarCropper.destroy();
            
            avatarCropper = new Cropper(img, {
                aspectRatio: 1,
                viewMode: 1,
                autoCropArea: 1
            });
        }

        document.getElementById('cropAvatarBtn').addEventListener('click', () => {
            const canvas = avatarCropper.getCroppedCanvas({ width: 400, height: 400 });
            const croppedImage = canvas.toDataURL('image/png');
            document.getElementById('avatarPreview').src = croppedImage;
            document.getElementById('client_avatar').value = croppedImage;
            document.getElementById('avatarCropperModal').classList.add('hidden');
            if (avatarCropper) avatarCropper.destroy();
            document.documentElement.classList.remove('overflow-hidden');
            document.body.classList.remove('overflow-hidden');
            notify('Photo saved!', 'success');
        });

        [document.getElementById('closeAvatarCaptureBtn'), document.getElementById('cancelAvatarCaptureBtn')].forEach(btn => {
            btn.addEventListener('click', () => {
                if (avatarStream) avatarStream.getTracks().forEach(track => track.stop());
                document.getElementById('avatarCaptureModal').classList.add('hidden');
                document.documentElement.classList.remove('overflow-hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });

        [document.getElementById('closeAvatarCropperBtn'), document.getElementById('cancelAvatarCropBtn')].forEach(btn => {
            btn.addEventListener('click', () => {
                document.getElementById('avatarCropperModal').classList.add('hidden');
                if (avatarCropper) avatarCropper.destroy();
                document.documentElement.classList.remove('overflow-hidden');
                document.body.classList.remove('overflow-hidden');
            });
        });

        // Video Recording
        let mediaRecorder = null;
        let recordedChunks = [];
        let videoStream = null;
        let timerInterval = null;
        let recordingSeconds = 0;

        document.getElementById('recordVideoBtn').addEventListener('click', async () => {
            try {
                // Check if getUserMedia is available
                if (!navigator.mediaDevices || !navigator.mediaDevices.getUserMedia) {
                    notify('Camera/microphone not supported in this browser', 'error');
                    return;
                }
                
                // Request camera and microphone permission - this will show browser permission popup
                videoStream = await navigator.mediaDevices.getUserMedia({ 
                    video: { facingMode: 'user' },
                    audio: true
                });
                
                const video = document.getElementById('cameraFeed');
                video.srcObject = videoStream;
                
                // Wait for video to load
                await new Promise(resolve => {
                    video.onloadedmetadata = resolve;
                });
                await video.play();
                
                document.getElementById('initialVideoButtons').classList.add('hidden');
                document.getElementById('cameraContainer').classList.remove('hidden');
                document.documentElement.classList.add('overflow-hidden');
                document.body.classList.add('overflow-hidden');
                notify('Camera ready! Click Start Recording', 'success');
            } catch (err) {
                console.error('Video error:', err);
                if (err.name === 'NotAllowedError') {
                    notify('Permission denied. Please click Allow for camera and microphone.', 'error');
                } else if (err.name === 'NotFoundError') {
                    notify('Camera or microphone not found', 'error');
                } else {
                    notify('Unable to access camera/microphone: ' + err.message, 'error');
                }
            }
        });

        document.getElementById('startRecordingBtn').addEventListener('click', () => {
            recordedChunks = [];
            recordingSeconds = 0;
            
            try {
                mediaRecorder = new MediaRecorder(videoStream);
                
                mediaRecorder.ondataavailable = e => {
                    if (e.data.size > 0) recordedChunks.push(e.data);
                };
                
                mediaRecorder.onstop = () => {
                    const blob = new Blob(recordedChunks, { type: 'video/webm' });
                    const reader = new FileReader();
                    reader.onloadend = () => {
                        document.getElementById('video_link').value = reader.result;
                        document.getElementById('videoPreview').src = reader.result;
                        document.getElementById('videoPreviewContainer').classList.remove('hidden');
                        notify('Video recorded successfully!', 'success');
                    };
                    reader.readAsDataURL(blob);
                    
                    if (videoStream) videoStream.getTracks().forEach(track => track.stop());
                    document.getElementById('recordingInProgress').classList.add('hidden');
                    document.getElementById('recordingControls').classList.add('hidden');
                    document.documentElement.classList.remove('overflow-hidden');
                    document.body.classList.remove('overflow-hidden');
                };
                
                mediaRecorder.start();
                
                // Show camera feed in recording modal
                const recordingFeed = document.getElementById('recordingFeed');
                recordingFeed.srcObject = videoStream;
                recordingFeed.play();
                
                document.getElementById('cameraContainer').classList.add('hidden');
                document.getElementById('recordingInProgress').classList.remove('hidden');
                document.documentElement.classList.add('overflow-hidden');
                document.body.classList.add('overflow-hidden');
                
                timerInterval = setInterval(() => {
                    recordingSeconds++;
                    const mins = Math.floor(recordingSeconds / 60);
                    const secs = recordingSeconds % 60;
                    document.getElementById('recordingTimer').textContent = 
                        `${String(mins).padStart(2, '0')}:${String(secs).padStart(2, '0')}`;
                }, 1000);
            } catch (err) {
                console.error('Recording error:', err);
                notify('Failed to start recording', 'error');
            }
        });

        document.getElementById('stopRecordingBtn').addEventListener('click', () => {
            if (timerInterval) clearInterval(timerInterval);
            if (mediaRecorder && mediaRecorder.state !== 'inactive') mediaRecorder.stop();
        });

        document.getElementById('stopCameraBtn').addEventListener('click', () => {
            if (videoStream) videoStream.getTracks().forEach(track => track.stop());
            document.getElementById('cameraContainer').classList.add('hidden');
            document.getElementById('initialVideoButtons').classList.remove('hidden');
            document.documentElement.classList.remove('overflow-hidden');
            document.body.classList.remove('overflow-hidden');
        });

        document.getElementById('uploadVideoBtn').addEventListener('click', () => {
            document.getElementById('videoFileInput').click();
        });

        document.getElementById('videoFileInput').addEventListener('change', e => {
            const file = e.target.files[0];
            if (file) {
                const reader = new FileReader();
                reader.onload = e => {
                    document.getElementById('video_link').value = e.target.result;
                    document.getElementById('videoPreview').src = e.target.result;
                    document.getElementById('videoPreviewContainer').classList.remove('hidden');
                    document.getElementById('recordingControls').classList.add('hidden');
                    notify('Video uploaded!', 'success');
                };
                reader.readAsDataURL(file);
            }
        });

        document.getElementById('removeVideoBtn').addEventListener('click', () => {
            document.getElementById('video_link').value = '';
            document.getElementById('videoPreview').src = '';
            document.getElementById('videoPreviewContainer').classList.add('hidden');
            document.getElementById('recordingControls').classList.remove('hidden');
            document.getElementById('initialVideoButtons').classList.remove('hidden');
        });

        // Form validation before submit
        document.getElementById('reviewForm').addEventListener('submit', function(e) {
            if (!ratingInput.value) {
                e.preventDefault();
                notify('Please select a rating', 'error');
                return false;
            }
            
            // Show loading state
            const submitBtn = document.getElementById('submitBtn');
            submitBtn.disabled = true;
            submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin text-xl lg:text-2xl mr-2"></i><span>Submitting...</span>';
            
            // Form will submit normally via PHP
            return true;
        });
    </script>
    @endpush
</x-landing-layout>
