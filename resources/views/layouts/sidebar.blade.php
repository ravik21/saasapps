@php
    $roleMenuActive = request()->routeIs('roles.*') || request()->routeIs('permissions.*');
@endphp

<aside class="ps-3 pe-2 py-2 sidebar">
    <div class=" flex-grow-1">
        <div class="d-flex align-items-center mb-2 logo-info">
            <div class="d-flex align-items-center   ">
                <a href="{{ route('dashboard') }}" title="logo" class="brand-icon ">
                    <img id="LogoLg" src="/images/logo.png" alt="SaaSApps" class="h-44">
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
                <a href="{{ route('dashboard') }}" aria-label="Dashboard" data-bs-placement="right" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
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
            <li>
                <a href="{{ route('users.index') }}" aria-label="Users" data-bs-placement="right" class="{{ request()->routeIs('users.*') ? 'active' : '' }}"
                    data-bs-title="Users" data-bs-toggle="tooltip">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                        <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                        <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                    </svg>
                    <span class="mx-3">Users</span>
                </a>
            </li>

            @can('manage roles')
                <li class="nav-item">
                    <a class="nav-link d-flex align-items-center {{ $roleMenuActive ? '' : 'collapsed' }}"
                        data-bs-toggle="collapse"
                        href="#rolePermissionMenu"
                        role="button"
                        aria-expanded="{{ $roleMenuActive ? 'true' : 'false' }}"
                        aria-controls="rolePermissionMenu">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3c2.21 0 4 1.79 4 4s-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4z"></path>
                            <path d="M6.34 7.5l1.06 1.06a4 4 0 0 0 5.66 5.66l1.06 1.06a8 8 0 1 1 -7.78 -7.78z"></path>
                            <path d="M16.24 16.24l1.06 1.06a8 8 0 0 1 -11.32 0l1.06 -1.06a6 6 0 0 0 8.2 0z"></path>
                        </svg>

                        <span class="mx-3">Access Control</span>

                        <i class="ms-auto bi bi-chevron-down"></i>
                    </a>

                    <!-- Submenu -->
                    <div class="collapse {{ $roleMenuActive ? 'show' : '' }}" id="rolePermissionMenu">
                        <ul class="nav flex-column ms-4">

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}"
                                href="{{ route('roles.index') }}">
                                    Roles
                                </a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}"
                                href="{{ route('permissions.index') }}">
                                    Permissions
                                </a>
                            </li>

                        </ul>
                    </div>
                </li>

            @endcan
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