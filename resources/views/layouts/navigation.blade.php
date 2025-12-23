<header class="px-xl-5 px-lg-4 px-3 sticky-top  top-0 top-0" data-bs-theme="none">
    <div
        class="d-flex flex-wrap justify-content-start justify-content-sm-between align-items-center py-sm-2 w-100">
        <ul class="header-menu flex-grow-1 justify-content-between justify-content-sm-end">
            <li class="nav-item dropdown px-md-1 d-none d-md-inline-flex">
                <a class="dropdown-toggle gray-6" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false" title="profile">
                    <svg class="svg-stroke" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                        <path d="M10.325 4.317c.426 -1.756 2.924 -1.756 3.35 0a1.724 1.724 0 0 0 2.573 1.066c1.543 -.94 3.31 .826 2.37 2.37a1.724 1.724 0 0 0 1.065 2.572c1.756 .426 1.756 2.924 0 3.35a1.724 1.724 0 0 0 -1.066 2.573c.94 1.543 -.826 3.31 -2.37 2.37a1.724 1.724 0 0 0 -2.572 1.065c-.426 1.756 -2.924 1.756 -3.35 0a1.724 1.724 0 0 0 -2.573 -1.066c-1.543 .94 -3.31 -.826 -2.37 -2.37a1.724 1.724 0 0 0 -1.065 -2.572c-1.756 -.426 -1.756 -2.924 0 -3.35a1.724 1.724 0 0 0 1.066 -2.573c-.94 -1.543 .826 -3.31 2.37 -2.37c1 .608 2.296 .07 2.572 -1.065z">
                        </path>
                        <path d="M9 12a3 3 0 1 0 6 0a3 3 0 0 0 -6 0"></path>
                    </svg>
                </a>
                <div class="dropdown-menu shadow rounded-4" id="ProfileDiv">
                    <div class="card border-0">
                        <div
                            class="card-header d-flex justify-content-between align-items-center py-3">
                            <h4 class="mb-0 text-gradient title-font">Settings</h4>
                        </div>
                        <ul class="card-body p-0 list-unstyled mb-0 custom_scroll ps-2">
                            <li class="mb-1">
                                <a class="dropdown-item rounded-pill" href="{{ route('profile.edit') }}" data-bs-theme-value="light">
                                    <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2"></path>
                                    </svg>
                                    {{ __('Profile') }}
                                </a>
                            </li>
                            <li class="mb-1">
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <a class="dropdown-item rounded-pill" href="{{ route('logout') }}" data-bs-theme-value="light" onclick="event.preventDefault(); this.closest('form').submit();">
                                        <svg xmlns="http://www.w3.org/2000/svg"  width="22" height="22" viewBox="0 0 24 24" fill="none" stroke-linecap="round" stroke-linejoin="round" class="svg-stroke">
                                            <path d="M21 12L13 12" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M18 15L20.913 12.087V12.087C20.961 12.039 20.961 11.961 20.913 11.913V11.913L18 9" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                                            <path d="M16 5V4.5V4.5C16 3.67157 15.3284 3 14.5 3H5C3.89543 3 3 3.89543 3 5V19C3 20.1046 3.89543 21 5 21H14.5C15.3284 21 16 20.3284 16 19.5V19.5V19" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                        {{ __('Log Out') }}
                                    </a>
                                </form>
                            </li>
                        </ul>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</header>