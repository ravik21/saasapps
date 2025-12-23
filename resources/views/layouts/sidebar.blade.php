<aside class="ps-3 pe-2 py-2 sidebar">
    <div class=" flex-grow-1">
        <div class="d-flex align-items-center mb-2 logo-info">
            <div class="d-flex align-items-center   ">
                <a href="{{ route('dashboard') }}" title="logo" class="brand-icon ">
                    <img id="LogoLg" src="/images/logo.svg" alt="SaaSApps" class="h-44">
                    <img id="LogoSm" src="/images/logo-sm.png" alt="SaaSApps" class="h-44 d-none">
                </a>
            </div>
            <button class="btn btn-sm btn-close sidebar-toggle border ms-auto d-lg-none" type="button"></button>
            <a class="ms-auto d-lg-inline-flex d-none menu-toggle shadow-sm align-items-center justify-content-center mini-btn"
                href="javascript:void(0)" title="Sidebar Toggle">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                    <path d="M15 12h-12"></path>
                    <path d="M7 8l-4 4l4 4"></path>
                    <path d="M12 21a9 9 0 0 0 0 -18"></path>
                </svg>
            </a>
        </div>
        <hr class="dropdown-divider mb-3" />
        <ul class="list-unstyled mb-2 menu-list ps-3">
            <li>
                <a href="{{ route('dashboard') }}" aria-label="Dashboard" data-bs-placement="right"
                    data-bs-title="Dashboard" data-bs-toggle="tooltip">
                    <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="24"
                        viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M5 12l-2 0l9 -9l9 9l-2 0"></path>
                        <path d="M5 12v7a2 2 0 0 0 2 2h10a2 2 0 0 0 2 -2v-7"></path>
                        <path d="M10 12h4v4h-4z"></path>
                    </svg>
                    <span class="mx-3">Dashboard</span>
                </a>
            </li>
        </ul>
    </div>
    <div>
        <div class="row g-0 align-items-center mt-2">
            <div class="col text-truncate ">
                <div class="d-flex align-items-center profile">
                    <img src="/images/landing/avatar.svg" alt="Avatar" class="rounded-circle avatar">
                    <div class="ms-3 profile-text">
                        <a href="#" title="" class="small">{{ Auth::user()->name }}</a>
                        <p class="mb-0 small">{{ Auth::user()->email }}</p>
                    </div>
                </div>
            </div>
            <!-- Dropdown -->
            <div class="col-auto">
                <div class="dropdown dropstart">
                    <a href="#" class="btn btn-link btn-sm dropdown-toggle" role="button"
                        data-bs-toggle="dropdown" aria-haspopup="true" data-expanded="false"
                        aria-expanded="false"></a>
                    <div class="dropdown-menu">
                        <a href="{{ route('profile.edit') }}" class="dropdown-item">{{ __('Profile') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</aside>