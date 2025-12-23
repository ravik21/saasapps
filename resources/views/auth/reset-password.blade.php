<x-guest-layout>
    <div class="px-xl-5 px-lg-4 px-3 py-3 page-body">
        <div style="height: 90vh;" class="row justify-content-center align-items-center">
            <div class="col-md-6 col-lg-4 col-12">
                <div class="card">
                    <div class="card-header text-center justify-content-center">
                        <div class="no-thumbnail rounded-circle border bg-light p-2 mb-4">
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
                        <h4 class="text-center w-100">{{ __('Reset Password') }}</h4>
                        <span class="text-center w-100">{{ __('Please create a new password') }}</span>
                    </div>
                    <div class="card-body">
                        <x-auth-session-status class="mb-4" :status="session('status')" />
                        <form method="POST" action="{{ route('password.store') }}">
                            @csrf
                            <input type="hidden" name="token" value="{{ $request->route('token') }}">
                            <div class="form-group mb-3">
                                <label for="email" class="form-label">{{ __('Email Address') }}</label>
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
                                        id="email" name="email" :value="old('email', $request->email)" required autofocus autocomplete="username">
                                </div>
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>
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
                            <x-primary-button class="btn btn-dark btn-block w-100 mt-3">
                                {{ __('Reset Password') }}
                            </x-primary-button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-guest-layout>