<x-landing-layout>
    <main class="flex-1">
        <!-- Hero Banner Section -->
        <section class="review-hero-section">
            <div class="review-hero-container">
                <div class="review-hero-content">
                    <!-- Badge -->
                    <div class="review-hero-badge-wrapper">
                        <span class="review-hero-badge">
                            <i class="fas fa-envelope review-hero-star-icon"></i>
                            Get In Touch
                        </span>
                    </div>

                    <!-- Main Heading -->
                    <h1 class="relative mt-10 md:mt-0 text-heading-mobile-hero md:text-heading-lg lg:text-heading-hero font-sans-heading text-center md:text-left mb-6 md:mb-8">
                        Let's Start a 
                        <span class="review-hero-heading-highlight">
                            Conversation
                            <svg class="review-hero-underline" aria-hidden="true" viewBox="0 0 188 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M187 2.43158C175.315 1.87289 163.847 1.48993 152.597 1.26169M187 7.00005C169.462 5.47673 141.769 3.9541 117.308 7.00005C130.359 4.14738 137.762 2.62071 152.597 1.26169M152.597 1.26169C140.718 1.02069 128.656 0.981649 116.5 1.11023M94.5 1.51622C63.2898 2.32629 31.806 4.09227 1.5 6.24457" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </span>
                        Together
                    </h1>

                    <!-- Subtitle -->
                    <p class="review-hero-subtitle">
                        We're here to <span class="review-hero-highlight-text">listen</span> and help turn your ideas into <span class="review-hero-highlight-text">reality</span>
                    </p>

                    <!-- Trust indicators -->
                    <div class="review-hero-trust-wrapper">
                        <div class="review-hero-trust-card">
                            <div class="review-hero-trust-icon">
                                <i class="fa-solid fa-clock"></i>
                            </div>
                            <div class="review-hero-trust-text">
                                <span class="review-hero-trust-title">24/7 Support</span>
                                <span class="review-hero-trust-desc">Always available</span>
                            </div>
                        </div>
                        <div class="review-hero-trust-card">
                            <div class="review-hero-trust-icon">
                                <i class="fas fa-reply"></i>
                            </div>
                            <div class="review-hero-trust-text">
                                <span class="review-hero-trust-title">Quick Response</span>
                                <span class="review-hero-trust-desc">Within 24 hours</span>
                            </div>
                        </div>
                        <div class="review-hero-trust-card">
                            <div class="review-hero-trust-icon">
                                <i class="fas fa-shield"></i>
                            </div>
                            <div class="review-hero-trust-text">
                                <span class="review-hero-trust-title">100% Secure</span>
                                <span class="review-hero-trust-desc">Your data is safe</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form Section -->
        <section class="relative pt-4 pb-12 md:py-20 md:bg-gray-300 md:before:absolute md:before:inset-0 md:before:bg-gray-300 md:before:w-screen md:before:left-1/2 md:before:right-1/2 md:before:-mr-[50vw] md:before:-ml-[50vw] md:before:-z-10">
            <div class="container mx-auto px-4">
                <div class="max-w-4xl mx-auto bg-white rounded-24 shadow-2xl border border-gray-100 overflow-hidden">
                    <!-- Form Header -->
                    <div class="bg-gradient-to-r from-blue-50 to-indigo-50 p-6 md:p-8 border-b border-gray-100">
                        <div class="flex items-center justify-center gap-3">
                            <div class="w-12 h-12 rounded-xl bg-gradient-to-br from-blue-500 to-indigo-600 flex items-center justify-center shadow-lg">
                                <i class="fas fa-envelope text-white text-xl"></i>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800">Contact Us</h2>
                        </div>
                        <p class="text-center text-gray-600 mt-3">Fill out the form below and we'll get back to you soon</p>
                    </div>
                    <form id="template-contactform" name="template-contactform" action="include/form.php" method="post" class="p-6 md:p-12 space-y-8" novalidate="novalidate">
                        <div class="form-widget">
                            <div class="form-result"></div>
                            <!-- Personal Info -->
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="form-group">
                                    <label for="template-contactform-name" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-user text-blue-600"></i>
                                        Name <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="text" 
                                        id="template-contactform-name" 
                                        name="template-contactform-name" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none required"
                                        placeholder="John Doe"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="template-contactform-email" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-envelope text-blue-600"></i>
                                        Email <span class="text-red-500">*</span>
                                    </label>
                                    <input 
                                        type="email" 
                                        id="template-contactform-email" 
                                        name="template-contactform-email" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none required email"
                                        placeholder="john@example.com"
                                    >
                                </div>
                            </div>
                            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                                <div class="form-group">
                                    <label for="template-contactform-phone" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-phone text-blue-600"></i>
                                        Phone
                                    </label>
                                    <input 
                                        type="text" 
                                        id="template-contactform-phone" 
                                        name="template-contactform-phone" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none"
                                        placeholder="+1 (555) 000-0000"
                                    >
                                </div>
                                <div class="form-group">
                                    <label for="template-contactform-service" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                        <i class="fas fa-briefcase text-blue-600"></i>
                                        Services
                                    </label>
                                    <select 
                                        id="template-contactform-service" 
                                        name="template-contactform-service" 
                                        class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none bg-white"
                                    >
                                        <option value="">-- Select One --</option>
                                        @foreach (config('landing.services') as $service)
                                            <option value="{{ $service['name'] }}">{{ $service['name'] }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group mb-6">
                                <label for="template-contactform-subject" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-tag text-blue-600"></i>
                                    Subject <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="template-contactform-subject" 
                                    name="subject" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none required"
                                    placeholder="How can we help you?"
                                >
                            </div>
                            <div class="form-group mb-6">
                                <label for="template-contactform-message" class="flex items-center gap-2 text-sm font-semibold text-gray-700 mb-2">
                                    <i class="fas fa-comment-dots text-blue-600"></i>
                                    Message <span class="text-red-500">*</span>
                                </label>
                                <textarea 
                                    id="template-contactform-message" 
                                    name="template-contactform-message" 
                                    rows="6" 
                                    class="w-full px-4 py-3 border-2 border-gray-200 rounded-xl focus:border-blue-500 focus:ring-4 focus:ring-blue-100 transition-all outline-none required resize-none"
                                    placeholder="Tell us about your project..."
                                ></textarea>
                            </div>
                            <div class="hidden form-group">
                                <input 
                                    type="text" 
                                    id="template-contactform-botcheck" 
                                    name="template-contactform-botcheck" 
                                    class="w-full"
                                >
                            </div>
                            <div class="form-group flex justify-center">
                                <button 
                                    type="submit" 
                                    id="template-contactform-submit" 
                                    name="template-contactform-submit" 
                                    value="submit"
                                    class="flex items-center text-center h-11 lg:h-12 px-8 lg:px-10 rounded-8 text-sm lg:text-base bg-brand-500 text-brand-over-500 ring-gray-900/20 shadow-cta ring-hairline z-10 hover:bg-brand-600 transition-all duration-200"
                                >
                                    <i class="fas fa-paper-plane mr-2"></i>
                                    Send Message
                                </button>
                            </div>
                            <input type="hidden" name="prefix" value="template-contactform-">
                        </div>
                    </form>
                </div>
            </div>
        </section>
    </main>

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

    /* Custom Text Sizes */
    .text-2xl {
        font-size: 1.5rem;
        line-height: 2rem;
    }

    @media (min-width: 768px) {
        .md\:text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem;
        }
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
</x-landing-layout>