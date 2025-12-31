@foreach (config('landing.services') as $key => $service)
    <section id="service-{{ $key }}"
        class="relative grid grid-cols-12 grid-rows-auto gap-x-6 gap-y-8 md:gap-y-18 py-16 md:py-28 border-t border-gray-300 feature-nav"
        data-total-items="{{ count($service['deliverables']) }}">
        <h2 class="col-span-12 flex items-center text-heading-mobile-sm md:text-heading-md font-sans-heading">
            {!! str_replace(['class="size-6 flex-shrink-0 text-gray-900"', '#000000'], ['class="mr-4 size-12 flex-shrink-0 rounded-12 p-2 bg-gray-900 text-gray-100"', 'currentColor'], $service['icon']) !!}
            {{ $service['name'] }}
        </h2>
        <nav class="hidden lg:block lg:col-span-3">
            <ul class="sticky top-24 pb-24">
                @foreach ($service['deliverables'] as $deliverableKey => $deliverable)
                <li>
                    <a href="{{ route('services') }}#{{ $deliverable['slug'] }}"
                        class="nav-link block transition ease-out duration-150 relative w-full text-left py-3 text-heading-2xs font-sans-heading border-b text-gray-700 border-gray-100 hover:text-gray-800"
                        data-target="{{ $deliverable['slug'] }}">
                        {{ $deliverable['name'] }}
                    </a>
                </li>
                @endforeach
            </ul>
        </nav>
        <div class="col-span-12 lg:col-span-8 lg:col-start-5 space-y-16">
            @foreach ($service['deliverables'] as $deliverableKey => $deliverable)
                <div id="{{ $deliverable['slug'] }}" class="content-section mb-16" data-index="{{ $deliverableKey }}">
                    <h3 class="mb-4 text-heading-xs md:text-heading-sm font-sans-heading">
                        {{ $deliverable['name'] }}
                    </h3>
                    <div class="text-body-md md:text-body-lg mb-6">
                        {!! $deliverable['description'] !!}
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endforeach
@push('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Scroll-spy navigation for services sections
        const sections = document.querySelectorAll('.feature-nav');
        
        if (sections.length === 0) return;
        
        sections.forEach(section => {
        const navLinks = section.querySelectorAll('.nav-link');
        const contentSections = section.querySelectorAll('.content-section');
        
        if (navLinks.length === 0 || contentSections.length === 0) return;
        
        // Active classes to add
        const activeClasses = ['border-gray-900', 'before:transition-colors', 'before:ease-out', 'before:duration-150', 'before:absolute', 'before:h-4', 'before:w-px', 'before:-bottom-[3px]', 'before:right-[64px]', 'before:bg-gray-900', 'before:rotate-[45deg]', 'after:transition-colors', 'after:ease-out', 'after:duration-150', 'after:absolute', 'after:h-4', 'after:w-px', 'after:-bottom-[14px]', 'after:right-[32px]', 'after:bg-gray-900', 'after:-rotate-[45deg]'];
        const inactiveClasses = ['text-gray-700', 'border-gray-100', 'hover:text-gray-800'];
        
        function updateActiveNav(index) {
            navLinks.forEach((link, i) => {
                if (i === index) {
                    // Add active state
                    link.classList.remove(...inactiveClasses);
                    link.classList.add(...activeClasses);
                } else {
                    // Add inactive state
                    link.classList.remove(...activeClasses);
                    link.classList.add(...inactiveClasses);
                }
            });
        }
        
        // Initialize first item as active
        updateActiveNav(0);
        
        // Intersection Observer for scroll-spy
        const observerOptions = {
            root: null,
            rootMargin: '-20% 0px -70% 0px',
            threshold: 0
        };
        
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    const index = parseInt(entry.target.dataset.index);
                    updateActiveNav(index);
                }
            });
        }, observerOptions);
        
        // Observe all content sections
        contentSections.forEach(section => {
            observer.observe(section);
        });
        
        // Handle navigation link clicks
        navLinks.forEach((link, index) => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                const targetId = this.dataset.target;
                const targetSection = document.getElementById(targetId);
                
                if (targetSection) {
                    targetSection.scrollIntoView({ behavior: 'smooth', block: 'start' });
                    updateActiveNav(index);
                }
            });
        });
        });
    });
</script>
@endpush