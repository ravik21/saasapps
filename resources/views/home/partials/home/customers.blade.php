@php
    $cases = \App\Models\ClientReview::take(4)->inRandomOrder()->get();
@endphp

<section class="relative pt-20 pb-12 md:py-28 border-t border-gray-300">
    <header class="mb-8 lg:mb-16">
        <h2 class="inline-block relative mb-6 md:mb-8 text-ui-32-normal md:text-heading-lg font-sans-heading">
            What do our <br class="hidden md:block" />clients <span class="relative pl-2">say?<svg
                    class="absolute text-gray-900 w-[80px] md:w-[114px] -right-[2px] -bottom-[8px] md:-bottom-[10px]"
                    aria-hidden="true" role="presentation" viewBox="0 0 114 60" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M61.1407 5.29573C61.5825 5.29573 61.9407 4.93755 61.9407 4.49573C61.9407 4.0539 61.5825 3.69573 61.1407 3.69573V5.29573ZM25.6313 1.18441L25.5712 0.386673L25.6313 1.18441ZM65.1859 56.529L65.2466 57.3267L65.1859 56.529ZM102.238 49.5437L102.146 50.3384L102.238 49.5437ZM113 59L112.33 59.4366C112.546 59.7688 112.973 59.8924 113.333 59.7273C113.694 59.5621 113.879 59.1579 113.768 58.7772L113 59ZM113.483 45.9598C113.667 45.5584 113.492 45.0833 113.09 44.8986C112.689 44.7139 112.214 44.8896 112.029 45.291L113.483 45.9598ZM9.10831 45.245L8.60696 45.8685L8.60698 45.8685L9.10831 45.245ZM61.1407 3.69573C55.3296 3.69573 50.2958 2.60385 44.7326 1.62791C39.1822 0.654208 33.1789 -0.18624 25.5712 0.386673L25.6913 1.98216C33.1047 1.42388 38.9568 2.23909 44.4562 3.20384C49.9428 4.16636 55.1532 5.29573 61.1407 5.29573V3.69573ZM102.146 50.3384C103.978 50.5502 105.816 51.7049 107.587 53.4268C109.346 55.1369 110.954 57.3236 112.33 59.4366L113.67 58.5634C112.268 56.4103 110.585 54.1104 108.703 52.2797C106.832 50.4607 104.678 49.0204 102.329 48.749L102.146 50.3384ZM113.768 58.7772C113.392 57.4794 112.891 55.17 112.707 52.7136C112.521 50.2318 112.669 47.729 113.483 45.9598L112.029 45.291C111.04 47.4401 110.92 50.2798 111.112 52.8333C111.305 55.4122 111.828 57.8311 112.232 59.2228L113.768 58.7772ZM25.5712 0.386673C12.1968 1.39385 4.12231 9.70072 1.32012 19.2877C-1.46723 28.8239 0.948311 39.7092 8.60696 45.8685L9.60967 44.6216C2.5531 38.9466 0.211996 28.7819 2.85587 19.7366C5.4849 10.742 13.0295 2.93568 25.6913 1.98216L25.5712 0.386673ZM8.60698 45.8685C17.052 52.6596 27.4766 55.8004 37.6285 57.1087C47.7823 58.4172 57.7242 57.8998 65.2466 57.3267L65.1251 55.7313C57.6265 56.3026 47.8183 56.8086 37.833 55.5218C27.8456 54.2347 17.7419 51.1613 9.60965 44.6216L8.60698 45.8685ZM65.2466 57.3267C71.9263 56.8179 78.8981 54.7692 85.2941 53.0195C91.7606 51.2505 97.5723 49.8099 102.146 50.3384L102.329 48.749C97.3895 48.1782 91.2605 49.7286 84.8719 51.4762C78.4129 53.2432 71.6155 55.2369 65.1251 55.7313L65.2466 57.3267Z"
                        fill="black" />
                </svg></span>
        </h2>
        <a class="block text-button-lg hover:underline" href="/cases">
            Read all our cases →
        </a>
    </header>

    @if($cases->isNotEmpty())
    <div
        class="relative col-span-3 md:grid md:grid-cols-2 gap-6 items-end border-b-hairline border-gray-400 pb-8 md:pb-0 md:mb-32">
        @php
            $featuredCase = $cases->first();
        @endphp

        <div
            class="relative col-span-1 aspect-[3/2] flex items-center justify-center overflow-hidden rounded-16 md:rounded-b-none md:rounded-t-24">
            @if($featuredCase->video_link)
                <video class="absolute inset-0 w-full h-full object-cover" muted>
                    <source src="{{ $featuredCase->video_link }}" type="video/mp4">
                </video>
                <button
                    class="video-trigger absolute inset-0 bg-gray-900/40 hover:bg-gray-900/50 transition flex items-center justify-center cursor-pointer"
                    data-src="{{ $featuredCase->video_link }}"
                    aria-label="Play video">
                    <div class="bg-white hover:bg-gray-100 transition px-8 py-6 rounded-full shadow-lg">
                        <svg class="size-8" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M19.75 10.7015C20.75 11.2788 20.75 12.7222 19.75 13.2995L7.75 20.2277C6.75 20.8051 5.5 20.0834 5.5 18.9287L5.5 5.07229C5.5 3.91758 6.75 3.1959 7.75 3.77325L19.75 10.7015Z"
                                fill="black" />
                        </svg>
                    </div>
                </button>
                <dl class="hidden lg:inline-grid absolute bottom-7 left-7 grid-cols-2 md:grid-cols-4 gap-x-4 grid-rows-[1fr_auto] lg:pr-24">
                    <dt class="col-start-1 row-start-1 mb-1.5 md:mb-2.5 text-ui-13-normal text-gray-100/50">
                    Country
                    </dt>
                    <dd class="col-start-1 row-start-2 text-ui-14 leading-[17px] text-gray-100">
                    Denmark
                    </dd>
                    <dt class="col-start-2 row-start-1 mb-1.5 md:mb-2.5 text-ui-13-normal text-gray-100/50">
                    Industry
                    </dt>
                    <dd class="col-start-2 row-start-2 text-ui-14 leading-[17px] text-gray-100">
                    Food
                    </dd>
                    <dt class="col-start-1 md:col-start-3 row-start-3 md:row-start-1 mt-4 md:mt-0 mb-1.5 md:mb-2.5 text-ui-13-normal text-gray-100/50">
                    Employees
                    </dt>
                    <dd class="col-start-1 md:col-start-3 row-start-4 md:row-start-2 text-ui-14 leading-[17px] text-gray-100">
                    1500+
                    </dd>
                    <dt class="col-start-2 md:col-start-4 row-start-3 md:row-start-1 mt-4 md:mt-0 mb-1.5 md:mb-2.5 text-ui-13-normal text-gray-100/50">
                    Departments
                    </dt>
                    <dd class="col-start-2 md:col-start-4 row-start-4 md:row-start-2 text-ui-14 leading-[17px] text-gray-100">
                    46
                    </dd>
                </dl>
            @else
                <div class="absolute inset-0 bg-gray-300 flex items-center justify-center">
                    <span class="text-gray-500">No video available</span>
                </div>
            @endif
        </div>
        <blockquote
            class="col-span-1 md:mb-4 md:px-4 lg:px-12 mt-6 md:mt-0 md:self-stretch md:flex md:flex-col md:justify-center">
            <svg class="w-8 h-8" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M32.0001 13.3845C32.0001 13.4072 32 13.4298 31.9998 13.4524V27.5382H31.975C31.6622 23.7478 29.4868 20.7691 24.6157 20.7691C20.5374 20.7691 17.2311 17.4629 17.2311 13.3845C17.2311 9.30617 20.5372 6 24.6156 6C28.6939 6 32.0001 9.30617 32.0001 13.3845Z"
                    fill="black" />
                <path
                    d="M7.38449 20.7691C12.245 20.781 14.4316 23.7554 14.7437 27.5382H14.7692V13.3845C14.7692 9.30616 11.4628 6.00001 7.38449 6.00001C3.30615 6.00001 0 9.30618 0 13.3845C0 17.4629 3.30615 20.7691 7.38449 20.7691Z"
                    fill="black" />
            </svg>
            <p class="mt-2 md:mt-4 text-body-md lg:text-subtitle-md">
                {{ $featuredCase->review }}
            </p>
            <footer class="flex items-center gap-4 mt-8">
                @if($featuredCase->client_avatar)
                <div class="flex-shrink-0">
                    <img src="{{ $featuredCase->client_avatar }}" alt="{{ $featuredCase->client_name }}" class="w-12 h-12 md:w-16 md:h-16 rounded object-cover border-2 border-white shadow-md">
                </div>
                @endif
                <div class="flex-1 min-w-0">
                    <p class="text-caption-md md:text-body-md font-medium">
                        {{ $featuredCase->client_name }}
                    </p>
                    <p class="text-caption-md text-gray-700">
                        {{ $featuredCase->company_name }}
                    </p>
                </div>
                @if($featuredCase->rating)
                <div class="flex items-center gap-1 ml-auto">
                    @for($i = 1; $i <= 5; $i++)
                        <svg class="size-5 {{ $i <= $featuredCase->rating ? 'text-yellow-500' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                        </svg>
                    @endfor
                </div>
                @endif
            </footer>
        </blockquote>
    </div>
    @endif

    @if($cases->count() > 1)
    <div class="flex flex-col testimonial-slider" data-total-items="{{ $cases->count() - 1 }}">
        <ul
            class="flex -mx-8 md:mx-0 px-8 pt-20 pb-8 md:py-0 md:px-0 overflow-x-scroll md:overflow-x-visible snap-x snap-mandatory md:grid md:grid-cols-3 gap-8 lg:gap-16 scrollbar-none">
            @foreach($cases->skip(1) as $index => $case)
            @php
                $rotations = ['md:-rotate-2', 'md:rotate-3', 'md:-rotate-1'];
                $rotation = $rotations[$index % 3];
            @endphp
            <li class="slider-item snap-center w-full flex-shrink-0 col-span-1 {{ $rotation }}" data-index="{{ $index }}">
                <blockquote
                    class="relative p-6 rounded-24 bg-gray-100 shadow-card-bumped before:absolute before:inset-0 before:border-hairline before:border-gray-400 before:bg-gray-200 before:-rotate-4 before:rounded-24 before:-z-10">
                    <svg class="size-6" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M32.0001 13.3845C32.0001 13.4072 32 13.4298 31.9998 13.4524V27.5382H31.975C31.6622 23.7478 29.4868 20.7691 24.6157 20.7691C20.5374 20.7691 17.2311 17.4629 17.2311 13.3845C17.2311 9.30617 20.5372 6 24.6156 6C28.6939 6 32.0001 9.30617 32.0001 13.3845Z"
                            fill="black" />
                        <path
                            d="M7.38449 20.7691C12.245 20.781 14.4316 23.7554 14.7437 27.5382H14.7692V13.3845C14.7692 9.30616 11.4628 6.00001 7.38449 6.00001C3.30615 6.00001 0 9.30618 0 13.3845C0 17.4629 3.30615 20.7691 7.38449 20.7691Z"
                            fill="black" />
                    </svg>
                    <p class="mt-4 text-body-md text-gray-800">
                        {{ $case->review }}
                    </p>
                    <footer class="mt-6">
                        <div class="flex items-start gap-3">
                            @if($case->client_avatar)
                            <div class="flex-shrink-0">
                                <img src="{{ $case->client_avatar }}" alt="{{ $case->client_name }}" class="w-10 h-10 rounded object-cover border-2 border-white shadow-sm">
                            </div>
                            @endif
                            <div class="flex-1 min-w-0">
                                <p class="text-caption-lg font-medium">
                                    {{ $case->client_name }}
                                </p>
                                <p class="text-caption-md text-gray-700">
                                    {{ $case->company_name }}
                                </p>
                            </div>
                            @if($case->rating)
                            <div class="flex items-center gap-0.5 ml-2">
                                @for($i = 1; $i <= 5; $i++)
                                    <svg class="size-4 {{ $i <= $case->rating ? 'text-yellow-500' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                                    </svg>
                                @endfor
                            </div>
                            @endif
                        </div>
                    </footer>
                </blockquote>
            </li>
            @endforeach
        </ul>
        <aside
            class="md:hidden inline-flex space-x-2 mx-auto ring-hairline ring-gray-900/10 shadow-100 px-2.5 py-2 rounded-full">
            @foreach($cases->skip(1) as $index => $case)
            <span class="slider-dot block size-2 {{ $index === 0 ? 'bg-gray-900' : 'bg-gray-500' }} rounded-full transition" data-index="{{ $index }}">
            </span>
            @endforeach
        </aside>
    </div>
    @endif
</section></section>

<div id="videoPlaybackModal" class="fixed inset-0 flex items-center justify-center z-50 hidden">
    <div class="absolute inset-0 bg-black/80" id="modalBackdrop"></div>
    <div class="relative max-w-248 w-full aspect-[16/9] mx-4 -mt-24 bg-gray-800 ring-4 ring-gray-800 shadow-300 rounded-12 md:rounded-24">
        <button type="button" id="closeVideoModal" class="absolute bottom-full -right-1 pb-7 px-1 pt-1 -mb-6 bg-gray-800 rounded-t-8">
            <svg class="size-8 text-gray-100 hover:text-gray-500 transition" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
        <video id="modalVideoPlayer" class="relative rounded-12 md:rounded-24" controls></video>
    </div>
</div>

@push('styles')
<style>
    #modalBackdrop {
        background-color: rgb(6 8 16 / 0.1);
    }
</style>
@endpush

@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Video trigger functionality
        const modal = document.getElementById('videoPlaybackModal');
        const videoPlayer = document.getElementById('modalVideoPlayer');
        const closeBtn = document.getElementById('closeVideoModal');
        const backdrop = document.getElementById('modalBackdrop');
        const videoTriggers = document.querySelectorAll('.video-trigger');

        function openModal(videoSrc) {
            videoPlayer.src = videoSrc;
            modal.classList.remove('hidden');
            videoPlayer.play();
        }

        function closeModal() {
            modal.classList.add('hidden');
            videoPlayer.pause();
            videoPlayer.src = '';
        }

        videoTriggers.forEach(trigger => {
            trigger.addEventListener('click', function() {
                openModal(this.dataset.src);
            });
        });

        closeBtn.addEventListener('click', closeModal);
        backdrop.addEventListener('click', closeModal);

        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && !modal.classList.contains('hidden')) {
                closeModal();
            }
        });

        // Testimonial slider functionality
        const sliders = document.querySelectorAll('.testimonial-slider');

        sliders.forEach(slider => {
            const ul = slider.querySelector('ul');
            const items = slider.querySelectorAll('.slider-item');
            const dots = slider.querySelectorAll('.slider-dot');

            if (items.length === 0 || dots.length === 0) return;

            let currentIndex = 0;

            function updateSlider(index) {
                currentIndex = index;
                
                // Update dots
                dots.forEach((dot, i) => {
                    if (i === index) {
                        dot.classList.remove('bg-gray-500');
                        dot.classList.add('bg-gray-900');
                    } else {
                        dot.classList.remove('bg-gray-900');
                        dot.classList.add('bg-gray-500');
                    }
                });
            }

            // Click handlers for dots
            dots.forEach((dot, index) => {
                dot.addEventListener('click', function() {
                    items[index].scrollIntoView({ behavior: 'smooth', inline: 'center', block: 'nearest' });
                    updateSlider(index);
                });
            });

            // Scroll sync for mobile swipe
            let scrollTimeout;
            ul.addEventListener('scroll', function() {
                clearTimeout(scrollTimeout);
                scrollTimeout = setTimeout(function() {
                    const scrollLeft = ul.scrollLeft;
                    const itemWidth = items[0].offsetWidth;
                    const index = Math.round(scrollLeft / itemWidth);
                    updateSlider(index);
                }, 100);
            });

            // Initialize first dot as active
            updateSlider(0);
        });
    });
</script>
@endpush
