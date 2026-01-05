<section
    class="relative py-4 md:pt-20 md:pb-16 lg:py-24 -mx-8 md:mx-0 px-4 md:px-0 bg-gray-300 md:before:absolute md:before:inset-0 md:before:bg-gray-300 md:before:w-screen md:before:left-1/2 md:before:right-1/2 md:before:-mr-[50vw] md:before:-ml-[50vw] md:before:-z-10">
    <ul class="space-y-4 md:space-y-16 max-w-100 md:max-w-full w-full mx-auto">
        @forelse($topCases as $case)
        <li class="md:grid grid-cols-3 gap-4 md:gap-6">
            <div class="relative col-span-2 flex flex-col justify-end p-6 md:p-8 bg-gray-200 rounded-t-24 md:rounded-24 overflow-hidden aspect-[0.82] md:aspect-[1] lg:aspect-[3/2]">
                <div class="absolute inset-0">
                    @if($case->video_link)
                        <video class="object-cover w-full h-full select-none">
                            <source src="{{ $case->video_link }}" type="video/mp4">
                        </video>
                    @else
                        <img src="{{ asset('images/video-placeholder.png') }}" 
                             class="object-cover w-full h-full" 
                             alt="Video placeholder">
                    @endif
                </div>

                @if($case->video_link)
                <button class="video-trigger bg-gray-100 hover:bg-gray-200 transition px-6 py-4 rounded-12 absolute top-24 md:top-1/2 left-1/2 -translate-x-1/2 md:-translate-y-1/2"
                    data-src="{{ $case->video_link }}"
                    aria-label="Play video">
                    <svg class="size-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M19.75 10.7015C20.75 11.2788 20.75 12.7222 19.75 13.2995L7.75 20.2277C6.75 20.8051 5.5 20.0834 5.5 18.9287L5.5 5.07229C5.5 3.91758 6.75 3.1959 7.75 3.77325L19.75 10.7015Z"
                            fill="black" />
                    </svg>
                </button>
                @endif

                <h2 class="relative mb-3 md:mb-5 text-heading-mobile-sm md:text-heading-sm font-sans-heading text-gray-100 order-2">
                    {{ $case->company_name ?? $case->client_name }}
                </h2>

                <dl class="relative inline-grid grid-cols-2 md:grid-cols-4 gap-x-4 grid-rows-[1fr_auto] lg:pr-52 order-3">
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
                        800+
                    </dd>
                    <dt class="col-start-2 md:col-start-4 row-start-3 md:row-start-1 mt-4 md:mt-0 mb-1.5 md:mb-2.5 text-ui-13-normal text-gray-100/50">
                        Departments
                    </dt>
                    <dd class="col-start-2 md:col-start-4 row-start-4 md:row-start-2 text-ui-14 leading-[17px] text-gray-100">
                        21
                    </dd>
                </dl>
            </div>

            <div class="col-span-1 flex flex-col justify-between py-4 md:py-8 lg:pt-12 lg:pb-10 rounded-b-24 md:rounded-24 bg-gray-100 md:ring-hairline md:ring-gray-900/10 shadow-100">
                <svg class="size-6 mb-3 md:mb-0 md:size-8 ml-4 md:ml-8 lg:ml-12" viewBox="0 0 32 32" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M32.0001 13.3845C32.0001 13.4072 32 13.4298 31.9998 13.4524V27.5382H31.975C31.6622 23.7478 29.4868 20.7691 24.6157 20.7691C20.5374 20.7691 17.2311 17.4629 17.2311 13.3845C17.2311 9.30617 20.5372 6 24.6156 6C28.6939 6 32.0001 9.30617 32.0001 13.3845Z"
                        fill="black" />
                    <path
                        d="M7.38449 20.7691C12.245 20.781 14.4316 23.7554 14.7437 27.5382H14.7692V13.3845C14.7692 9.30616 11.4628 6.00001 7.38449 6.00001C3.30615 6.00001 0 9.30618 0 13.3845C0 17.4629 3.30615 20.7691 7.38449 20.7691Z"
                        fill="black" />
                </svg>
                <ul class="flex overflow-y-hidden overflow-x-scroll snap-x snap-mandatory scrollbar-none gap-x-4">
                    <li class="w-full flex-shrink-0 px-4 md:px-8 lg:px-12 snap-center">
                        <blockquote>
                            <p class="text-body-sm md:text-body-md text-gray-800">
                                {{ $case->review }}
                            </p>
                            <footer class="mt-3 md:mt-6">
                                <div class="flex items-center justify-center mb-4">
                                    <div class="flex space-x-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg class="size-5 {{ $i <= $case->rating ? 'text-yellow-400' : 'text-gray-300' }}" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z" />
                                            </svg>
                                        @endfor
                                    </div>
                                </div>
                                <div class="flex items-center gap-3 pt-4 border-t border-gray-200">
                                    @if($case->client_avatar)
                                    <img src="{{ $case->client_avatar }}" 
                                        class="size-12 md:size-14 rounded-lg object-cover" 
                                        alt="{{ $case->client_name }}">
                                    @endif
                                    <div>
                                        <p class="mb-2 text-ui-13 md:text-ui-14 text-gray-800">{{ $case->client_name }}</p>
                                        @if($case->company_name)
                                            <p class="text-ui-12-normal md:text-ui-13-normal text-gray-600">{{ $case->company_name }}</p>
                                        @endif
                                    </div>
                                </div>
                            </footer>
                        </blockquote>
                    </li>
                </ul>
            </div>
        </li>
        @empty
        <li class="text-center py-12">
            <p class="text-gray-600 text-lg">No client reviews available yet.</p>
        </li>
        @endforelse
    </ul>
</section>

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
});
</script>
@endpush
