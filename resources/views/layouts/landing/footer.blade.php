{{-- 14. Company footer --}}
<footer class="sh-footer">
    <div class="sh-wrap">
        <div class="sh-footer-top">
            <div class="sh-footer-brand"><a href="{{ route('home') }}" aria-label="SaaSApps home"><img src="{{ asset('images/logo.svg') }}" alt="SaaSApps"></a><p>Digital solutions, thoughtfully built for your business.</p><a class="sh-footer-mail" href="{{ route('contact-us') }}">Let's talk about your project ↗</a></div>
            <div class="sh-footer-col"><h3>Company</h3><a href="{{ route('about-us') }}">About Us</a><a href="{{ route('why-us') }}">Why Us?</a><a href="{{ route('contact-us') }}">Contact Us</a></div>
            <div class="sh-footer-col"><h3>Services</h3><a href="{{ route('services') }}">All Services</a>@foreach(config('landing.services', []) as $service)<a href="{{ route('services') }}#{{ $service['slug'] }}">{{ $service['name'] }}</a>@endforeach</div>
            <div class="sh-footer-col"><h3>Our Work</h3><a href="{{ route('cases') }}">Cases</a><a href="{{ route('portfolio') }}">Portfolio</a><a href="{{ route('cases') }}">Client Reviews</a></div>
            <div class="sh-footer-col"><h3>Get in touch</h3><a href="{{ route('contact-us') }}">Contact our team</a><a href="{{ route('legal.show', ['page' => 'privacy']) }}">Privacy Policy</a><a href="{{ route('legal.show', ['page' => 'terms']) }}">Terms and Conditions</a></div>
        </div>
        <div class="sh-footer-bottom"><span>© {{ date('Y') }} SaaSApps. All rights reserved.</span><a href="{{ route('home') }}">Built with care.</a></div>
    </div>
</footer>
