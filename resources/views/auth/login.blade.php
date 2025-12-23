<x-guest-layout>
    <div class="px-xl-5 px-lg-4 px-3 py-3 page-body my-2 py-2">
        <div style="height: 90vh;" class="row justify-content-center align-items-center">
            <div class="col-xl-4 col-lg-5 col-md-7">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column align-items-center ">
                            <div class="no-thumbnail rounded-circle border bg-light p-2">
                                <div class="no-thumbnail rounded-circle border bg-white p-2">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class=" svg-stroke">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                        <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                        <path d="M16 19h6"></path>
                                        <path d="M19 16v6"></path>
                                        <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                    </svg>
                                </div>
                            </div>
                            <div class="mt-3 ">
                                <h6 class="text-capitalize text-center fw-bold">Login to your account
                                </h6>
                                <span class="text-muted text-capitalize">enter your details to
                                login</span>
                            </div>
                            <div class="mt-3 w-100">
                                <!-- Session Status -->
                                <x-auth-session-status class="mb-4" :status="session('status')" />
                                <form method="POST" class="form-horizontal" id="validateForm" action="{{ route('login') }}">
                                    @csrf
                                    <fieldset>
                                        <!--=== email ===-->
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email
                                            Address</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class=" svg-stroke">
                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path
                                                            d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                                        </path>
                                                        <path d="M3 7l9 6l9 -6"></path>
                                                    </svg>
                                                </span>
                                                <input type="email"
                                                    class="form-control border-start-0"
                                                    id="email" name="email" :value="old('email')" required autofocus autocomplete="username">
                                            </div>
                                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                        </div>
                                        <!-- Password input-->
                                        <div class="form-group">
                                            <label for="password"
                                                class="form-label">Password</label>
                                            <div class="input-group">
                                                <span class="input-group-text bg-transparent">
                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                        width="20" viewBox="0 0 24 24"
                                                        fill="none" stroke="currentColor"
                                                        stroke-linecap="round"
                                                        stroke-linejoin="round"
                                                        class=" svg-stroke">
                                                        <path stroke="none" d="M0 0h24v24H0z"
                                                            fill="none"></path>
                                                        <path
                                                            d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                                                        </path>
                                                        <path d="M8 11v-4a4 4 0 1 1 8 0v4">
                                                        </path>
                                                        <path d="M15 16h.01"></path>
                                                        <path d="M12.01 16h.01"></path>
                                                        <path d="M9.02 16h.01"></path>
                                                    </svg>
                                                </span>
                                                <input type="password"
                                                    class="form-control border-start-0"
                                                    id="password" name="password" required autocomplete="current-password">
                                            </div>
                                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                        </div>
                                        <!-- check -->
                                        <div class="d-flex justify-content-between my-3">
                                            <div class="form-check ">
                                                <input
                                                    class="form-check-input form-check-input-dark"
                                                    type="checkbox" value=""
                                                    id="flexCheckDefault" name="remember">
                                                <label class="form-check-label"
                                                    for="flexCheckDefault">{{ __('Remember me') }}</label>
                                            </div>
                                            @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}"
                                                class=" nav-link text-decoration-underline text-reverse fw-semibold text-capitalize">{{ __('Forgot your password?') }}</a>
                                            @endif
                                        </div>
                                        <!-- Button -->
                                        <div class="form-group">
                                            <x-primary-button class="btn btn-dark w-100">
                                                {{ __('Log in') }}
                                            </x-primary-button>
                                        </div>
                                        <div class="text-center mt-3 d-block d-sm-none">
                                            <p class="text-muted mb-0">
                                                Don't have an account
                                                <a class="text-reverse text-decoration-underline" href="{{ route('register') }}">Register</a>
                                            </p>
                                        </div>
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>