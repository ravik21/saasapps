<header id="header" class="border-bottom-0 no-sticky transparent-header header-custom-size">
    <div id="header-wrap">
        <div class="container">
            <div class="header-row">

                <!-- Logo
                ============================================= -->
                <div id="logo" class="me-lg-5">
                    <a href="/" ><img src="/images/logo.svg" alt="SaasApps Logo" class="py-3"></a>
                </div><!-- #logo end -->

                <div class="header-misc">

                    <!-- Top Search
                    ============================================= -->
                    <a href="{{ route('contact-us') }}" class="button bg-white rounded-pill text-dark h-shadow-sm box-shadow">Contact Us <i class="bi-arrow-right me-0 ms-1"></i></a>

                </div>

                <div class="primary-menu-trigger">
                    <button class="cnvs-hamburger" type="button" title="Open Mobile Menu">
                        <span class="cnvs-hamburger-box"><span class="cnvs-hamburger-inner"></span></span>
                    </button>
                </div>

                <!-- Primary Navigation
                ============================================= -->
                <nav class="primary-menu me-lg-auto">

                    <ul class="menu-container">
                        <li class="menu-item"><a class="menu-link {{ Route::is('about-us') ? 'active' : '' }}" href="{{ route('about-us') }}"><div>About Us</div></a></li>
                        <li class="menu-item"><a class="menu-link {{ Route::is('blog') ? 'active' : '' }}" href="{{ route('blog') }}"><div>Blog</div></a></li>
                        <li class="menu-item"><a class="menu-link {{ Route::is('help-supports') ? 'active' : '' }}" href="{{ route('help-supports') }}"><div>Help &amp; Supports</div></a></li>
                    </ul>

                </nav><!-- #primary-menu end -->

            </div>
        </div>
    </div>
    <div class="header-wrap-clone"></div>
</header>