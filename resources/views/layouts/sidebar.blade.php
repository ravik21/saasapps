@php
    $roleMenuActive = request()->routeIs('roles.*') || request()->routeIs('permissions.*');
@endphp

<aside id="adminSidebarDrawer" class="ps-3 pe-2 py-2 sidebar" :class="{ 'open': sidebarOpen }">
    <div class=" flex-grow-1">
        <div class="d-flex align-items-center mb-2 logo-info">
            <div class="d-flex align-items-center   ">
                <a href="{{ route('dashboard') }}" title="logo" class="brand-icon ">
                    <img id="LogoLg" src="/images/logo.svg" alt="SaaSApps" class="h-44">
                    <img id="LogoSm" src="/images/logo-sm.png" alt="SaaSApps" class="h-44 d-none">
                </a>
            </div>
            <button class="btn btn-sm btn-close sidebar-toggle border ms-auto d-lg-none" type="button" @click="sidebarOpen = false" aria-label="Close navigation sidebar" style="width: 32px; height: 32px;"></button>
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
                <a href="{{ route('dashboard') }}" @click="if (window.innerWidth < 992) sidebarOpen = false" aria-label="Dashboard" data-bs-placement="right" class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
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
            @can('manage users')
                <li>
                    <a href="{{ route('users.index') }}" @click="if (window.innerWidth < 992) sidebarOpen = false" aria-label="Teams" data-bs-placement="right" class="{{ request()->routeIs('users.*') ? 'active' : '' }}"
                        data-bs-title="Teams" data-bs-toggle="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0"></path>
                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85"></path>
                        </svg>
                        <span class="mx-3">Teams</span>
                    </a>
                </li>
            @endcan

            @if(auth()->check() && (auth()->user()->hasRole('Admin') || auth()->user()->can('manage roles') || auth()->user()->can('manage permissions')))
                <li class="nav-item" x-data="{ open: {{ $roleMenuActive ? 'true' : 'false' }} }">
                    <a class="nav-link d-flex align-items-center {{ $roleMenuActive ? 'parent-active' : '' }}"
                        href="javascript:void(0)"
                        role="button"
                        @click.prevent="open = !open"
                        :aria-expanded="open.toString()"
                        aria-controls="rolePermissionMenu"
                        style="cursor: pointer;">

                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                            viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M12 3c2.21 0 4 1.79 4 4s-1.79 4-4 4s-4-1.79-4-4s1.79-4 4-4z"></path>
                            <path d="M6.34 7.5l1.06 1.06a4 4 0 0 0 5.66 5.66l1.06 1.06a8 8 0 1 1 -7.78 -7.78z"></path>
                            <path d="M16.24 16.24l1.06 1.06a8 8 0 0 1 -11.32 0l1.06 -1.06a6 6 0 0 0 8.2 0z"></path>
                        </svg>

                        <span class="mx-3">Access Control</span>

                        <i class="ms-auto bi bi-chevron-down sidebar-chevron" :class="{ 'rotate-180': open }"></i>
                    </a>

                    <!-- Submenu -->
                    <div id="rolePermissionMenu"
                        x-show="open"
                        x-cloak
                        x-transition:enter="transition-all ease-out duration-200"
                        x-transition:enter-start="opacity-0 -translate-y-1"
                        x-transition:enter-end="opacity-100 translate-y-0"
                        x-transition:leave="transition-all ease-in duration-150"
                        x-transition:leave-start="opacity-100 translate-y-0"
                        x-transition:leave-end="opacity-0 -translate-y-1">
                        <ul class="nav flex-column ms-4">
                            @if(auth()->user()->hasRole('Admin') || auth()->user()->can('manage roles'))
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('roles.*') ? 'active' : '' }}"
                                       @click="if (window.innerWidth < 992) sidebarOpen = false"
                                       href="{{ route('roles.index') }}">
                                        Roles
                                    </a>
                                </li>
                            @endif

                            @if(auth()->user()->hasRole('Admin') || auth()->user()->can('manage permissions'))
                                <li class="nav-item">
                                    <a class="nav-link {{ request()->routeIs('permissions.*') ? 'active' : '' }}"
                                       @click="if (window.innerWidth < 992) sidebarOpen = false"
                                       href="{{ route('permissions.index') }}">
                                        Permissions
                                    </a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </li>
            @endif

            @can('manage projects')
                <li>
                    <a href="{{ route('projects.index') }}" @click="if (window.innerWidth < 992) sidebarOpen = false" aria-label="Projects" data-bs-placement="right" class="{{ request()->routeIs('projects.*') ? 'active' : '' }}"
                        data-bs-title="Projects" data-bs-toggle="tooltip">
                        <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg" mirror-in-rtl="true" fill="currentColor" width="24" height="24" class="svg-stroke">
                            <g id="SVGRepo_bgCarrier" stroke-width="0"></g>
                            <g id="SVGRepo_tracerCarrier" stroke-linecap="round" stroke-linejoin="round"></g>
                            <g id="SVGRepo_iconCarrier">
                                <path fill="currentColor" d="M8 6H5c-.553 0-1-.448-1-1s.447-1 1-1h3c.553 0 1 .448 1 1s-.447 1-1 1zM13 10H5c-.553 0-1-.448-1-1s.447-1 1-1h8c.553 0 1 .448 1 1s-.447 1-1 1zM13 14H5c-.553 0-1-.448-1-1s.447-1 1-1h8c.553 0 1 .448 1 1s-.447 1-1 1z"></path>
                                <path fill="currentColor" d="M18 2v8c0 .55-.45 1-1 1s-1-.45-1-1V2.5c0-.28-.22-.5-.5-.5h-13c-.28 0-.5.22-.5.5v19c0 .28.22.5.5.5h13c.28 0 .5-.22.5-.5V21c0-.55.45-1 1-1s1 .45 1 1v1c0 1.1-.9 2-2 2H2c-1.1 0-2-.9-2-2V2C0 .9.9 0 2 0h14c1.1 0 2 .9 2 2z"></path>
                                <path fill="currentColor" d="M23.87 11.882c.31.54.045 1.273-.595 1.643l-9.65 5.57c-.084.05-.176.086-.265.11l-2.656.66c-.37.092-.72-.035-.88-.314-.162-.278-.09-.65.17-.913l1.907-1.958c.063-.072.137-.123.214-.167.004-.01.012-.015.012-.015l9.65-5.57c.64-.37 1.408-.234 1.72.305l.374.65z"></path>
                            </g>
                        </svg>
                        <span class="mx-3">Projects</span>
                    </a>
                </li>
            @endcan

            @can('manage client reviews')
                <li>
                    <a href="{{ route('client-reviews.index') }}" @click="if (window.innerWidth < 992) sidebarOpen = false" aria-label="Client Reviews" data-bs-placement="right" class="{{ request()->routeIs('client-reviews.*') ? 'active' : '' }}"
                        data-bs-title="Client Reviews" data-bs-toggle="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 20l1.5 -1.5a4 4 0 0 1 5.5 -5.5l2 -2a4 4 0 0 0 5.5 -5.5l1.5 -1.5a2.121 2.121 0 0 1 3 3l-1.5 1.5a4 4 0 0 1 -5.5 5.5l-2 2a4 4 0 0 0 -5.5 5.5l-1.5 1.5a2.121 2.121 0 0 1 -3 -3z"></path>
                        </svg>
                        <span class="mx-3">Client Reviews</span>
                    </a>
                </li>
            @endcan

            @can('manage contact submissions')
                <li>
                    <a href="{{ route('contact-submissions.index') }}" @click="if (window.innerWidth < 992) sidebarOpen = false" aria-label="Contact Submissions" data-bs-placement="right" class="{{ request()->routeIs('contact-submissions.*') ? 'active' : '' }}"
                        data-bs-title="Contact Submissions" data-bs-toggle="tooltip">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                            <path d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z"></path>
                            <path d="M3 7l9 6l9 -6"></path>
                        </svg>
                        <span class="mx-3">Contact Submissions</span>
                    </a>
                </li>
            @endcan
        </ul>
    </div>
    <div class="sidebar-footer-container">
        <div class="sidebar-profile-card d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center min-w-0" style="max-width: calc(100% - 28px);">
                <img src="{{ Auth::user()->avatar ?: '/images/avatar.png' }}" 
                     alt="{{ Auth::user()->name }}" 
                     class="rounded-circle object-fit-cover border flex-shrink-0" 
                     style="width: 36px; height: 36px; border-color: #E2E8F0 !important;"
                     onerror="this.src='/images/avatar.png';">
                <div class="ms-2 min-w-0 text-truncate" style="padding-left: 2px;">
                    <div class="fw-semibold text-truncate" style="font-size: 13px; color: #0F172A; line-height: 1.25;" title="{{ Auth::user()->name }}">
                        {{ Auth::user()->name }}
                    </div>
                    <div class="text-truncate" style="font-size: 11px; color: #64748B; line-height: 1.25; margin-top: 2px;" title="{{ Auth::user()->email }}">
                        {{ Auth::user()->email }}
                    </div>
                </div>
            </div>
            <div class="dropdown dropstart">
                <button class="btn btn-sm p-1 border-0 rounded-circle text-muted" type="button" data-bs-toggle="dropdown" aria-expanded="false" title="Account settings">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <circle cx="12" cy="12" r="1.5"></circle>
                        <circle cx="12" cy="5" r="1.5"></circle>
                        <circle cx="12" cy="19" r="1.5"></circle>
                    </svg>
                </button>
                <div class="dropdown-menu shadow-sm border py-1" style="font-size: 13px; border-color: #E2E8F0 !important;">
                    <a class="dropdown-item py-1.5 px-3 d-flex align-items-center" @click="if (window.innerWidth < 992) sidebarOpen = false" href="{{ route('profile.edit') }}" style="color: #334155;">
                        <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                        {{ __('Profile') }}
                    </a>
                    <hr class="dropdown-divider my-1" style="border-color: #F1F5F9;">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="dropdown-item py-1.5 px-3 text-danger d-flex align-items-center" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                            <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                <polyline points="16 17 21 12 16 7"></polyline>
                                <line x1="21" y1="12" x2="9" y2="12"></line>
                            </svg>
                            {{ __('Log Out') }}
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</aside>
