<header class="admin-header px-xl-5 px-lg-4 px-3 sticky-top top-0" style="background-color: #FFFFFF; border-bottom: 1px solid #E5E7EB; z-index: 1020;">
    <div class="d-flex align-items-center justify-content-between py-2 w-100">
        <div class="d-flex align-items-center gap-2.5 min-w-0">
            <!-- Mobile Hamburger Toggle Button (Accessible Navigation Drawer Trigger) -->
            <button type="button"
                    @click="sidebarOpen = !sidebarOpen"
                    aria-label="Toggle navigation menu"
                    :aria-expanded="sidebarOpen.toString()"
                    aria-controls="adminSidebarDrawer"
                    class="btn btn-sm admin-mobile-toggle d-lg-none d-inline-flex align-items-center justify-center p-0 rounded-2 border flex-shrink-0"
                    style="width: 38px; height: 38px; background-color: #F8FAFC; border-color: #E2E8F0 !important; color: #0F172A; transition: all 0.15s ease;">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="3" y1="12" x2="21" y2="12"></line>
                    <line x1="3" y1="6" x2="21" y2="6"></line>
                    <line x1="3" y1="18" x2="21" y2="18"></line>
                </svg>
            </button>

            @isset($header)
                <div class="d-flex align-items-center min-w-0">
                    {{ $header }}
                </div>
            @endisset
        </div>

        <ul class="header-menu d-flex align-items-center list-unstyled mb-0 ms-auto flex-shrink-0">
            <li class="nav-item dropdown">
                <a class="p-2 text-muted rounded-circle d-inline-flex align-items-center justify-content-center" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" title="Settings" style="width: 36px; height: 36px; background-color: #F8FAFC; border: 1px solid #E2E8F0; color: #475569; transition: all 0.15s ease;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z"></path>
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                    </svg>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-sm border p-2 rounded-3" style="width: 200px; border-color: #E2E8F0 !important;">
                    <div class="px-3 py-1.5 border-bottom mb-1" style="border-color: #F1F5F9 !important;">
                        <span class="fw-semibold text-dark small" style="font-size: 12px; letter-spacing: 0.02em;">SETTINGS</span>
                    </div>
                    <ul class="list-unstyled mb-0">
                        <li>
                            <a class="dropdown-item rounded-2 py-2 px-3 small d-flex align-items-center text-dark" href="{{ route('profile.edit') }}">
                                <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                </svg>
                                {{ __('Profile') }}
                            </a>
                        </li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <a class="dropdown-item rounded-2 py-2 px-3 small d-flex align-items-center text-danger" href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                    <svg class="me-2" xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path>
                                        <polyline points="16 17 21 12 16 7"></polyline>
                                        <line x1="21" y1="12" x2="9" y2="12"></line>
                                    </svg>
                                    {{ __('Log Out') }}
                                </a>
                            </form>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</header>
