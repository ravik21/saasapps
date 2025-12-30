@php
    $projects = \App\Models\Project::all();
@endphp

<section class="relative py-20 md:py-28">
    <header class="mb-10 md:mb-16">
        <h2 class="relative text-ui-32-normal md:text-heading-lg font-sans-heading mb-6">
            We <span class="relative px-2">customize<svg
                    class="absolute text-gray-900 w-[180px] md:w-[253px] -left-[8px] -bottom-[6px]" aria-hidden="true"
                    role="presentation" viewBox="0 0 253 59" fill="none" xmlns="http://www.w3.org/2000/svg"
                    preserveAspectRatio="none">
                    <path
                        d="M5 10.6727C8.40862 33.3848 8.50573 40.128 9.05954 52.9818C9.08359 53.54 9.57598 53.9719 10.1337 53.9383C107.89 48.0525 154.28 51.3072 244.953 50.6442C245.518 50.64 245.981 50.1648 245.96 49.6C245.459 35.891 246.338 28.6841 247 13.5005M246 6.00054C230 6.00054 211.686 6.87628 182 6.00052C147.5 4.98272 97.5 6.3282 62.5 8.50046C42.4258 9.74636 26.4635 10.2777 16.5 10.5042"
                        stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    <path
                        d="M1 11.0005C1 8.79135 2.79086 7.00049 5 7.00049C7.20914 7.00049 9 8.79135 9 11.0005C9 13.2096 7.70914 15.0005 5.5 15.0005C3.29086 15.0005 1 13.2096 1 11.0005Z"
                        fill="white" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    <path
                        d="M244.002 5.14007C243.924 2.93228 245.652 1.08001 247.859 1.00291C250.067 0.925813 251.92 2.65308 251.997 4.86088C252.074 7.06867 250.846 8.90349 248.638 8.98059C246.431 9.05769 244.079 7.34787 244.002 5.14007Z"
                        fill="white" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    <path
                        d="M242.016 49.6519C242.208 47.4512 244.148 45.8232 246.349 46.0157C248.55 46.2083 250.178 48.1484 249.985 50.3491C249.793 52.5499 248.351 54.2214 246.15 54.0289C243.949 53.8363 241.823 51.8526 242.016 49.6519Z"
                        fill="white" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                    <path
                        d="M5 54.0005C5 51.7913 6.79086 50.0005 9 50.0005C11.2091 50.0005 13 51.7913 13 54.0005C13 56.2096 11.7091 58.0005 9.5 58.0005C7.29086 58.0005 5 56.2096 5 54.0005Z"
                        fill="white" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" />
                </svg></span> your app to match your<br class="hidden md:block" /> visual identity and user experience.
        </h2>
    </header>

    <div data-projects-section>
        <nav class="mb-10 md:mb-16">
            <ul class="flex space-x-6 -mx-8 md:mx-0 px-8 md:px-0 py-6 md:py-0 overflow-x-scroll md:overflow-x-visible snap-x snap-mandatory scrollbar-none">
                @foreach($projects as $index => $project)
                <li class="snap-center">
                    <div class="transition-all group cursor-pointer" data-project-item data-project-id="{{ $project->id }}">
                        <button data-project-btn
                            class="size-16 flex items-center justify-center rounded-16 bg-gray-300 shadow-card-bumped hover:bg-gray-400 transition-colors"
                            aria-label="{{ $project->name }}">
                            @if($project->logo)
                                <img src="{{ $project->logo }}" alt="{{ $project->name }}" class="size-12 object-contain rounded-12">
                            @else
                                <span class="text-2xl font-bold text-gray-600">{{ substr($project->name, 0, 1) }}</span>
                            @endif
                        </button>
                        <p class="mt-2 text-caption-md text-center transition-colors tracking-wide group-hover:text-gray-900 cursor-default" data-project-label>
                            {{ $project->name }}
                        </p>
                        <div class="text-center text-[46px] leading-[0] -mt-1 transition {{ $index === 0 ? 'text-gray-900' : 'text-gray-400' }} mt-3" data-project-dot>
                            ·
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </nav>

        <!-- Project Images Display -->
        <div class="relative border-2 border-gray-200 rounded-24 p-6 md:p-8 bg-gradient-to-br from-white to-gray-50 shadow-lg" data-project-images>
            @foreach($projects as $index => $project)
            <div class="project-images-container {{ $index === 0 ? 'block opacity-100' : 'hidden opacity-0' }} transition-opacity duration-500 ease-in-out" data-project-images-container="{{ $project->id }}">
                <!-- Project Header -->
                <div class="mb-8 md:mb-12">
                    <div class="flex items-center gap-4 mb-4">
                        @if($project->logo)
                            <div class="w-16 h-16 rounded-12 bg-white shadow-card-bumped p-3 flex items-center justify-center">
                                <img src="{{ $project->logo }}" alt="{{ $project->name }}" class="w-full h-full object-contain">
                            </div>
                        @endif
                        <div>
                            <h3 class="text-2xl md:text-3xl font-bold text-gray-900">{{ $project->name }}</h3>
                            @if($project->client)
                                <p class="text-gray-600 mt-1">Client: {{ $project->client }}</p>
                            @endif
                        </div>
                    </div>
                    @if($project->description)
                        <p class="text-gray-700 text-lg leading-relaxed max-w-3xl">{!! $project->description !!}</p>
                    @endif
                    
                    <!-- Project Meta -->
                    <div class="flex flex-wrap gap-3 mt-4">
                        @if($project->technology && is_array($project->technology))
                            @foreach($project->technology as $tech)
                                <span class="inline-flex items-center px-3 py-1 rounded-full text-sm font-medium bg-blue-100 text-blue-800">
                                    {{ $tech['value'] }}
                                </span>
                            @endforeach
                        @endif
                        @if($project->link)
                            <a href="{{ $project->link }}" target="_blank" class="inline-flex items-center px-4 py-2 rounded-full text-sm font-medium bg-blue-600 text-white hover:bg-blue-700 transition-colors shadow-sm hover:shadow-md">
                                <svg class="w-4 h-4 mr-1.5 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path>
                                </svg>
                                Visit Site
                            </a>
                        @endif
                    </div>
                </div>

                @if($project->images && is_array($project->images) && count($project->images) > 0)
                    <!-- Images Carousel -->
                    <div class="relative" data-carousel="project-{{ $index }}">
                        <!-- Carousel Container -->
                        <div class="overflow-hidden rounded-16">
                            <div class="flex transition-transform duration-500 ease-out" data-carousel-inner>
                                @foreach(collect($project->images)->chunk(2) as $chunkIndex => $imageChunk)
                                <div class="min-w-full flex-shrink-0 px-2">
                                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                                        @foreach($imageChunk as $imgIndex => $image)
                                        <div class="group relative rounded-16 overflow-hidden bg-white shadow-lg">
                                            <div class="aspect-video overflow-hidden bg-gray-200 projects-image">
                                                <img src="{{ $image }}" 
                                                     alt="{{ $project->name }} - Image {{ $chunkIndex * 2 + $imgIndex + 1 }}" 
                                                     class="w-full h-full object-cover transition-transform duration-500 group-hover:scale-110" loading="lazy">
                                            </div>
                                            <!-- Image Overlay -->
                                            <div class="absolute inset-0 bg-gradient-to-t from-gray-900/80 via-gray-900/0 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                                <div class="absolute bottom-0 left-0 right-0 p-4">
                                                    <p class="text-white text-sm font-medium">{{ $project->name }}</p>
                                                    <button onclick="openImageModal('{{ $image }}')" class="mt-2 inline-flex items-center text-xs text-white/90 hover:text-white">
                                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0zM10 7v3m0 0v3m0-3h3m-3 0H7"></path>
                                                        </svg>
                                                        View Full Size
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>

                        @if(count($project->images) > 2)
                        <!-- Navigation Buttons -->
                        <button data-carousel-prev class="absolute left-2 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full p-2 shadow-lg transition-all duration-300 hover:scale-110 z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path>
                            </svg>
                        </button>
                        <button data-carousel-next class="absolute right-2 top-1/2 -translate-y-1/2 bg-white/90 hover:bg-white text-gray-800 rounded-full p-2 shadow-lg transition-all duration-300 hover:scale-110 z-10">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                            </svg>
                        </button>

                        <!-- Dots Indicator -->
                        <div class="flex justify-center mt-4 space-x-2" data-carousel-indicators>
                            @foreach(collect($project->images)->chunk(2) as $chunkIndex => $imageChunk)
                            <button class="w-2 h-2 rounded-full transition-all duration-300 {{ $chunkIndex === 0 ? 'bg-blue-600 w-8' : 'bg-gray-300 hover:bg-gray-400' }}" data-carousel-dot="{{ $chunkIndex }}"></button>
                            @endforeach
                        </div>
                        @endif
                    </div>
                @else
                    <div class="flex flex-col items-center justify-center h-64 bg-gray-50 rounded-24 border-2 border-dashed border-gray-300">
                        <svg class="w-16 h-16 text-gray-400 mb-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                        </svg>
                        <p class="text-gray-500 text-lg font-medium">No images available for this project</p>
                    </div>
                @endif
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Image Modal -->
<div id="imageModal" class="hidden fixed inset-0 z-50 bg-black/90 flex items-center justify-center p-4" onclick="closeImageModal()">
    <button onclick="closeImageModal()" class="absolute top-4 right-4 text-white/80 hover:text-white">
        <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
        </svg>
    </button>
    <img id="modalImage" src="" alt="" class="max-w-full max-h-full object-contain" onclick="event.stopPropagation()">
</div>

@push('scripts')
<script>
    function openImageModal(src) {
        document.getElementById('imageModal').classList.remove('hidden');
        document.getElementById('modalImage').src = src;
        document.body.style.overflow = 'hidden';
    }

    function closeImageModal() {
        document.getElementById('imageModal').classList.add('hidden');
        document.body.style.overflow = 'auto';
    }

    document.addEventListener('DOMContentLoaded', function() {
        const container = document.querySelector('[data-projects-section]');
        if (!container) return;
        
        const projectItems = container.querySelectorAll('[data-project-item]');
        const projectDots = container.querySelectorAll('[data-project-dot]');
        const projectButtons = container.querySelectorAll('[data-project-btn]');
        
        let currentIndex = 0;
        let autoRotateInterval;
        let isPaused = false;
        
        // Handle project tab clicks
        projectItems.forEach((item, index) => {
            item.addEventListener('click', function() {
                isPaused = true;
                clearInterval(autoRotateInterval);
                const projectId = this.getAttribute('data-project-id');
                currentIndex = index;
                switchToProject(projectId, index);
                
                // Resume auto-rotation after 5 seconds
                setTimeout(() => {
                    isPaused = false;
                    startAutoRotation();
                }, 10000);
            });
        });
        
        function switchToProject(projectId, index) {
            // Hide all project image containers
            const allContainers = container.querySelectorAll('[data-project-images-container]');
            allContainers.forEach(c => {
                c.classList.add('hidden', 'opacity-0');
                c.classList.remove('block', 'opacity-100');
            });
            
            // Show selected project images
            const selectedContainer = container.querySelector(`[data-project-images-container="${projectId}"]`);
            if (selectedContainer) {
                selectedContainer.classList.remove('hidden', 'opacity-0');
                selectedContainer.classList.add('block', 'opacity-100');
            }
            
            // Update dots
            projectDots.forEach((dot, i) => {
                if (i === index) {
                    dot.classList.remove('text-gray-400');
                    dot.classList.add('text-gray-900');
                } else {
                    dot.classList.remove('text-gray-900');
                    dot.classList.add('text-gray-400');
                }
            });
            
            // Update button styles
            projectButtons.forEach((btn, i) => {
                if (i === index) {
                    btn.classList.remove('bg-gray-300');
                    btn.classList.add('bg-blue-500');
                } else {
                    btn.classList.remove('bg-blue-500');
                    btn.classList.add('bg-gray-300');
                }
            });
        }
        
        function startAutoRotation() {
            if (projectItems.length <= 1) return;
            
            autoRotateInterval = setInterval(() => {
                if (!isPaused) {
                    currentIndex = (currentIndex + 1) % projectItems.length;
                    const nextItem = projectItems[currentIndex];
                    const projectId = nextItem.getAttribute('data-project-id');
                    switchToProject(projectId, currentIndex);
                }
            }, 3000); // Rotate every 3 seconds
        }
        
        // Initialize first project as active
        if (projectButtons.length > 0) {
            projectButtons[0].classList.remove('bg-gray-300');
            projectButtons[0].classList.add('bg-blue-500');
            startAutoRotation();
        }
        
        // Pause auto-rotation on hover
        container.addEventListener('mouseenter', () => {
            isPaused = true;
        });
        
        container.addEventListener('mouseleave', () => {
            isPaused = false;
        });

        // Carousel functionality - initialize all carousels properly
        const carouselStates = new Map();

        function initializeCarousels() {
            // Initialize carousels for all projects
            const allCarousels = container.querySelectorAll('[data-carousel]');
            
            allCarousels.forEach((carousel) => {
                const carouselId = carousel.getAttribute('data-carousel');
                
                // Skip if already initialized
                if (carouselStates.has(carouselId)) {
                    return;
                }

                const inner = carousel.querySelector('[data-carousel-inner]');
                const prevBtn = carousel.querySelector('[data-carousel-prev]');
                const nextBtn = carousel.querySelector('[data-carousel-next]');
                const dots = carousel.querySelectorAll('[data-carousel-dot]');
                const totalSlides = dots.length;
                
                // Store state for this carousel
                const state = {
                    index: 0,
                    inner: inner,
                    dots: dots,
                    totalSlides: totalSlides
                };
                
                carouselStates.set(carouselId, state);

                function updateCarousel() {
                    if (inner) {
                        inner.style.transform = `translateX(-${state.index * 100}%)`;
                        
                        // Update dots
                        dots.forEach((dot, i) => {
                            if (i === state.index) {
                                dot.classList.remove('bg-gray-300', 'w-2');
                                dot.classList.add('bg-blue-600', 'w-8');
                            } else {
                                dot.classList.remove('bg-blue-600', 'w-8');
                                dot.classList.add('bg-gray-300', 'w-2');
                            }
                        });
                    }
                }

                if (prevBtn) {
                    prevBtn.addEventListener('click', () => {
                        state.index = (state.index - 1 + totalSlides) % totalSlides;
                        updateCarousel();
                    });
                }

                if (nextBtn) {
                    nextBtn.addEventListener('click', () => {
                        state.index = (state.index + 1) % totalSlides;
                        updateCarousel();
                    });
                }

                dots.forEach((dot, i) => {
                    dot.addEventListener('click', () => {
                        state.index = i;
                        updateCarousel();
                    });
                });
                
                // Initialize first slide
                updateCarousel();
            });
        }

        // Initialize all carousels on load
        initializeCarousels();
    });
</script>
@endpush
