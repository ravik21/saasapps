<footer
    class="flex flex-col md:flex-row justify-between -mx-8 md:mx-0 px-8 md:px-0 py-12 md:pt-16 pb-20 border-t border-gray-300">
    <aside class="order-2 md:order-1 pt-8 md:pt-0 border-t-hairline md:border-none border-gray-400">
        <a href="/" aria-label="Home">
            <img src="{{ asset('images/logo.svg') }}" alt="SaaSApps Logo" class="w-28 md:w-64" />
        </a>
        <p class="mt-2.5 text-caption-lg text-gray-700">
            {{ date('Y') }} © {{  config('app.name', 'SaaSApps')}}.
        </p>
    </aside>
    <nav class="order-1 md:order-2 md:grid md:grid-cols-4 md:mt-2">
        <div class="col-span-1 flex md:block mb-8 md:mb-0">
            <h2 class="w-32 md:w-auto flex-shrink-0 md:mb-6 text-caption-lg text-gray-700">
                Company
            </h2>
            <ul class="-mt-1.25 md:mt-0">
                <li>
                    <a href="{{ route('why-us') }}" class="block py-1 text-body-md hover:underline">
                        Why us?
                    </a>
                </li>
                <li>
                    <a href="{{ route('about-us') }}" class="block py-1 text-body-md hover:underline">
                        About us
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-span-1 flex md:block mb-8 md:mb-0">
            <h2 class="w-32 md:w-auto flex-shrink-0 md:mb-6 text-caption-lg text-gray-700">
                Stories
            </h2>
            <ul class="-mt-1.25 md:mt-0">
                <li>
                    <a href="{{ route('cases') }}" class="block py-1 text-body-md hover:underline">
                        Cases
                    </a>
                </li>
                <li>
                    <a href="{{ route('portfolio') }}" class="block py-1 text-body-md hover:underline">
                        Portfolio
                    </a>
                </li>
            </ul>
        </div>
        <div class="col-span-1 flex md:block mb-8 md:mb-0">
            <h2 class="w-32 md:w-auto flex-shrink-0 md:mb-6 text-caption-lg text-gray-700">
                Contact
            </h2>
            <ul class="-mt-1.25 md:mt-0">
                <li>
                    <a href="mailto:contact@saasapps.com"
                        title="For all inquiries, please email us at contact@saasapps.com"
                        class="block py-1 text-body-md select-text cursor-text hover:underline break-all">
                        contact@saasapps.com
                    </a>
                </li>
                <li>
                    <a href="tel:+919876543210" title="For all inquiries, please call us at +91 98765 43210"
                        class="block py-1 text-body-md select-text cursor-text hover:underline">
                        +91 98765 43210
                    </a>
                </li>
                <li class="mt-4">
                    <a href="https://www.linkedin.com/company/saasapps" aria-label="LinkedIn">
                        <svg class="size-5 text-gray-900" fill="currentColor" viewBox="0 0 20 20" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M0 2.32372C0 1.65031 0.225232 1.09475 0.675676 0.657054C1.12612 0.219337 1.71172 0.000488281 2.43243 0.000488281C3.14029 0.000488281 3.71299 0.215963 4.15058 0.646953C4.60102 1.0914 4.82625 1.67051 4.82625 2.38433C4.82625 3.03079 4.60747 3.5695 4.16988 4.00049C3.71944 4.44493 3.12741 4.66715 2.39382 4.66715H2.37452C1.66666 4.66715 1.09396 4.44493 0.656371 4.00049C0.218784 3.55604 0 2.99711 0 2.32372ZM0.250965 20.0005V6.50554H4.53668V20.0005H0.250965ZM6.9112 20.0005H11.1969V12.4651C11.1969 11.9937 11.2484 11.6301 11.3514 11.3742C11.5315 10.9163 11.805 10.5291 12.1718 10.2126C12.5386 9.8961 12.9987 9.73786 13.5521 9.73786C14.9936 9.73786 15.7143 10.7547 15.7143 12.7884V20.0005H20V12.2631C20 10.2698 19.5496 8.75806 18.6486 7.72776C17.7477 6.69746 16.5573 6.18231 15.0772 6.18231C13.417 6.18231 12.1236 6.92978 11.1969 8.42473V8.46513H11.1776L11.1969 8.42473V6.50554H6.9112C6.93693 6.93651 6.94981 8.27657 6.94981 10.5257C6.94981 12.7749 6.93693 15.9331 6.9112 20.0005Z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </div>
    </nav>
</footer>