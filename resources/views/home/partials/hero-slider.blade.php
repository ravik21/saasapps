<footer class="col-span-1 md:col-span-2 mt-2 md:mt-16 -mx-8 md:mx-0">
    <ul id="marquee" class="marquee relative flex pb-10 items-center gap-0 overflow-hidden before:absolute before:inset-y-0 before:right-[95%] before:left-0 before:bg-gradient-to-l before:from-transparent before:to-gray-100 before:z-10 before:pointer-events-none after:absolute after:inset-y-0 after:left-[95%] after:right-0 after:bg-gradient-to-r after:from-transparent after:to-gray-100 after:z-10 after:pointer-events-none active"
        style="--speed: 3.75; --count: {{ count(config('landing.technologies')) }};">
        @foreach (config('landing.technologies') as $i => $technology)
            <li style="--index: {{ $i }};" class="marquee-item">
                <a href="javascript:void(0)" target="_blank" rel="noopener noreferrer">
                    {!! $technology !!}
                </a>
            </li>
        @endforeach
    </ul>
</footer>

@push('scripts')
<script>
    // Marquee initialization - simply add the active class on load
    document.addEventListener('DOMContentLoaded', function() {
        const marquee = document.getElementById('marquee');
        if (marquee) {
            marquee.classList.add('active');
        }
    });
</script>
@endpush