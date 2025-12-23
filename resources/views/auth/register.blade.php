<x-guest-layout>
    <div class="row justify-content-center align-items-center my-5 py-5">
        <div class=" col-lg-5 col-xl-4 col-md-7">
            <div class="card ">
                <div class="card-body">
                    <div class="d-flex flex-column align-items-center ">
                        <div class="no-thumbnail rounded-circle border bg-light p-2">
                            <div class="no-thumbnail rounded-circle border bg-white p-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="34" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" class=" svg-stroke">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0"></path>
                                    <path d="M16 19h6"></path>
                                    <path d="M19 16v6"></path>
                                    <path d="M6 21v-2a4 4 0 0 1 4 -4h4"></path>
                                </svg>
                            </div>
                        </div>
                        <div class="mt-3 ">
                            <h6 class="text-capitalize text-center fw-bold">create a new account</h6>
                            <span class="text-muted text-capitalize">enter your details to
                            register</span>
                        </div>
                        <div class="mt-3 w-100">
                            <x-auth-session-status class="mb-4" :status="session('status')" />
                            <form class="form-horizontal" id="validateForm" method="POST" action="{{ route('register') }}">
                                @csrf
                                <fieldset>
                                    <!-- full name-->
                                    <div class="form-group mb-3">
                                        <label for="fullName" class="form-label">{{ __('Name') }}</label>
                                        <div class="input-group ">
                                            <span class="input-group-text bg-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" class=" svg-stroke">
                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                        fill="none"></path>
                                                    <path d="M8 7a4 4 0 1 0 8 0a4 4 0 0 0 -8 0">
                                                    </path>
                                                    <path
                                                        d="M6 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2">
                                                    </path>
                                                </svg>
                                            </span>
                                            <input type="text" class="form-control border-start-0"
                                                id="fullName" name="name" :value="old('name')" required autofocus autocomplete="name">
                                        </div>
                                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                                    </div>
                                    <!--=== email ===-->
                                    <div class="form-group mb-3">
                                        <label for="email" class="form-label">{{ __('Email') }}</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" class=" svg-stroke">
                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                        fill="none"></path>
                                                    <path
                                                        d="M3 7a2 2 0 0 1 2 -2h14a2 2 0 0 1 2 2v10a2 2 0 0 1 -2 2h-14a2 2 0 0 1 -2 -2v-10z">
                                                    </path>
                                                    <path d="M3 7l9 6l9 -6"></path>
                                                </svg>
                                            </span>
                                            <input type="email" class="form-control border-start-0"
                                                id="email" name="email" :value="old('email')" required autocomplete="username">
                                        </div>
                                        <x-input-error :messages="$errors->get('email')" class="mt-2" />
                                    </div>
                                    <!-- Password input-->
                                    <div class="form-group mb-3">
                                        <label for="password" class="form-label">{{__('Password')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" class=" svg-stroke">
                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                        fill="none"></path>
                                                    <path
                                                        d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                                                    </path>
                                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                                    <path d="M15 16h.01"></path>
                                                    <path d="M12.01 16h.01"></path>
                                                    <path d="M9.02 16h.01"></path>
                                                </svg>
                                            </span>
                                            <input type="password"
                                                class="form-control border-start-0" id="password"
                                                name="password" required autocomplete="new-password">
                                        </div>
                                        <x-input-error :messages="$errors->get('password')" class="mt-2" />
                                    </div>
                                    <div class="form-group mb-3">
                                        <label for="password_confirmation" class="form-label">{{__('Confirm Password')}}</label>
                                        <div class="input-group">
                                            <span class="input-group-text bg-transparent">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                    viewBox="0 0 24 24" fill="none"
                                                    stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" class=" svg-stroke">
                                                    <path stroke="none" d="M0 0h24v24H0z"
                                                        fill="none"></path>
                                                    <path
                                                        d="M5 13a2 2 0 0 1 2 -2h10a2 2 0 0 1 2 2v6a2 2 0 0 1 -2 2h-10a2 2 0 0 1 -2 -2z">
                                                    </path>
                                                    <path d="M8 11v-4a4 4 0 1 1 8 0v4"></path>
                                                    <path d="M15 16h.01"></path>
                                                    <path d="M12.01 16h.01"></path>
                                                    <path d="M9.02 16h.01"></path>
                                                </svg>
                                            </span>
                                            <input type="password"
                                                class="form-control border-start-0" id="password_confirmation"
                                                name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                        <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                                    </div>
                                    <!-- Button -->
                                    <div class="form-group">
                                        <x-primary-button class="btn btn-dark w-100">
                                            {{ __('Register') }}
                                        </x-primary-button>
                                    </div>
                                    <div class="text-center mt-4">
                                        <span class="text-muted">Lorem ipsum dolor sit amet
                                        consectetur adipisicing elit. Commodi voluptas earum
                                        nobis.</span>
                                        <a href="javascript:void(0);"
                                            class="text-reverse fw-semibold text-capitalize text-center mt-4 text-decoration-underline d-block">terms
                                        and condition</a>
                                        </p>
                                        <p class="text-muted justify-content-center d-block d-sm-none">
                                            Already have an account
                                            <a class="text-reverse text-decoration-underline" href="{{ route('login') }}">Login</a>
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
</x-guest-layout>