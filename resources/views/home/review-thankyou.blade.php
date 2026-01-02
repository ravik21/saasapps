<x-landing-layout>
    <main class="min-h-screen bg-gradient-to-br from-blue-50 via-indigo-50 to-purple-50 flex items-center justify-center py-16 px-4">
        <div class="max-w-2xl w-full">
            
            <!-- Success Card -->
            <div class="bg-white rounded-3xl shadow-2xl p-8 md:p-12 text-center fade-in">
                
                <!-- Success Icon -->
                <div class="mb-8 flex justify-center">
                    <div class="relative">
                        <div class="w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full flex items-center justify-center shadow-2xl animate-bounce-slow">
                            <i class="fas fa-check text-white text-6xl"></i>
                        </div>
                        <div class="absolute inset-0 w-32 h-32 bg-gradient-to-br from-green-400 to-emerald-600 rounded-full animate-ping opacity-20"></div>
                    </div>
                </div>

                <!-- Thank You Message -->
                <h1 class="text-5xl md:text-6xl font-black bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 bg-clip-text text-transparent mb-4">
                    Thank You!
                </h1>
                
                <p class="text-2xl md:text-3xl font-bold text-gray-800 mb-6">
                    Your Review Has Been Submitted
                </p>

                <div class="w-24 h-1 bg-gradient-to-r from-blue-500 via-indigo-500 to-purple-500 mx-auto mb-8 rounded-full"></div>

                <!-- Message -->
                <div class="space-y-4 mb-10">
                    <p class="text-lg text-gray-600 leading-relaxed">
                        We truly appreciate you taking the time to share your experience with us. Your feedback is invaluable and helps us continue to improve our services.
                    </p>
                    <p class="text-lg text-gray-600 leading-relaxed">
                        Your review will be reviewed by our team and published soon.
                    </p>
                </div>

                <!-- Stats/Features -->
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-10">
                    <div class="p-6 bg-gradient-to-br from-blue-50 to-indigo-50 rounded-2xl transform hover:scale-105 transition-all">
                        <div class="w-16 h-16 bg-gradient-to-br from-blue-500 to-indigo-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-heart text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Appreciated</h3>
                        <p class="text-sm text-gray-600">Your voice matters to us</p>
                    </div>

                    <div class="p-6 bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl transform hover:scale-105 transition-all">
                        <div class="w-16 h-16 bg-gradient-to-br from-purple-500 to-pink-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-star text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Reviewed</h3>
                        <p class="text-sm text-gray-600">Being verified now</p>
                    </div>

                    <div class="p-6 bg-gradient-to-br from-green-50 to-emerald-50 rounded-2xl transform hover:scale-105 transition-all">
                        <div class="w-16 h-16 bg-gradient-to-br from-green-500 to-emerald-600 rounded-full flex items-center justify-center mx-auto mb-4 shadow-lg">
                            <i class="fas fa-rocket text-white text-2xl"></i>
                        </div>
                        <h3 class="font-bold text-gray-800 text-lg mb-2">Published</h3>
                        <p class="text-sm text-gray-600">Coming soon</p>
                    </div>
                </div>

                <!-- Action Buttons -->
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="{{ route('home') }}" 
                       class="px-10 py-4 bg-gradient-to-r from-blue-600 via-indigo-600 to-purple-600 text-white rounded-xl hover:from-blue-700 hover:via-indigo-700 hover:to-purple-700 transition-all font-bold text-lg shadow-lg hover:shadow-xl transform hover:-translate-y-1 flex items-center justify-center gap-3">
                        <i class="fas fa-home text-xl"></i>
                        <span>Back to Home</span>
                    </a>
                    
                    <a href="{{ route('review') }}" 
                       class="px-10 py-4 bg-white text-gray-700 border-2 border-gray-300 rounded-xl hover:bg-gray-50 hover:border-gray-400 transition-all font-bold text-lg shadow-md hover:shadow-lg transform hover:-translate-y-1 flex items-center justify-center gap-3">
                        <i class="fas fa-plus text-xl"></i>
                        <span>Submit Another</span>
                    </a>
                </div>

                <!-- Social Share (Optional) -->
                <div class="mt-12 pt-8 border-t border-gray-200">
                    <p class="text-sm text-gray-500 mb-4">Share your experience on social media</p>
                    <div class="flex gap-3 justify-center">
                        <button class="w-12 h-12 bg-blue-600 hover:bg-blue-700 text-white rounded-full transition-all shadow-md hover:shadow-lg transform hover:scale-110 flex items-center justify-center">
                            <i class="fab fa-facebook-f"></i>
                        </button>
                        <button class="w-12 h-12 bg-blue-400 hover:bg-blue-500 text-white rounded-full transition-all shadow-md hover:shadow-lg transform hover:scale-110 flex items-center justify-center">
                            <i class="fab fa-twitter"></i>
                        </button>
                        <button class="w-12 h-12 bg-blue-700 hover:bg-blue-800 text-white rounded-full transition-all shadow-md hover:shadow-lg transform hover:scale-110 flex items-center justify-center">
                            <i class="fab fa-linkedin-in"></i>
                        </button>
                        <button class="w-12 h-12 bg-gradient-to-r from-purple-600 to-pink-600 hover:from-purple-700 hover:to-pink-700 text-white rounded-full transition-all shadow-md hover:shadow-lg transform hover:scale-110 flex items-center justify-center">
                            <i class="fab fa-instagram"></i>
                        </button>
                    </div>
                </div>
            </div>

            <!-- Decorative Elements -->
            <div class="mt-8 text-center">
                <div class="inline-flex items-center gap-2 text-gray-400 text-sm">
                    <i class="fas fa-shield-check"></i>
                    <span>Your information is secure and will not be shared</span>
                </div>
            </div>
        </div>
    </main>

    @push('styles')
    <style>
        @keyframes fadeIn {
            from { 
                opacity: 0; 
                transform: translateY(20px) scale(0.95); 
            }
            to { 
                opacity: 1; 
                transform: translateY(0) scale(1); 
            }
        }
        
        @keyframes bounce-slow {
            0%, 100% { 
                transform: translateY(0); 
            }
            50% { 
                transform: translateY(-10px); 
            }
        }

        .fade-in { 
            animation: fadeIn 0.6s ease-out; 
        }

        .animate-bounce-slow {
            animation: bounce-slow 2s ease-in-out infinite;
        }

        /* Confetti effect on load (optional) */
        @keyframes confetti-fall {
            to {
                transform: translateY(100vh) rotate(360deg);
                opacity: 0;
            }
        }
    </style>
    @endpush

    @push('scripts')
    <script>
        // Add a subtle confetti effect on load
        document.addEventListener('DOMContentLoaded', function() {
            // Optional: Add confetti particles
            const colors = ['#3B82F6', '#8B5CF6', '#EC4899', '#10B981', '#F59E0B'];
            
            for(let i = 0; i < 50; i++) {
                setTimeout(() => {
                    const confetti = document.createElement('div');
                    confetti.style.position = 'fixed';
                    confetti.style.width = '10px';
                    confetti.style.height = '10px';
                    confetti.style.backgroundColor = colors[Math.floor(Math.random() * colors.length)];
                    confetti.style.left = Math.random() * 100 + '%';
                    confetti.style.top = '-10px';
                    confetti.style.borderRadius = '50%';
                    confetti.style.pointerEvents = 'none';
                    confetti.style.zIndex = '9999';
                    confetti.style.animation = `confetti-fall ${2 + Math.random() * 2}s linear forwards`;
                    
                    document.body.appendChild(confetti);
                    
                    setTimeout(() => confetti.remove(), 4000);
                }, i * 30);
            }
        });
    </script>
    @endpush
</x-landing-layout>
