<h5 class="fw-semibold mb-1">
    {{ __('Profile Information') }}
</h5>
<p class="text-muted small mb-4">
    {{ __("Update your account's profile information and email address.") }}
</p>

<form id="send-verification" method="POST" action="{{ route('verification.send') }}">
    @csrf
</form>

<form method="POST" action="{{ route('profile.update') }}">
    @csrf
    @method('PATCH')

    <div class="mb-3">
        <label class="form-label">{{ __('Name') }}</label>
        <input
            type="text"
            name="name"
            value="{{ old('name', $user->name) }}"
            class="form-control @error('name') is-invalid @enderror"
            required
        >
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('Email') }}</label>
        <input
            type="email"
            name="email"
            value="{{ old('email', $user->email) }}"
            class="form-control @error('email') is-invalid @enderror"
            required
        >
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror

        @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
            <div class="alert alert-warning small mt-3 mb-0">
                {{ __('Your email address is unverified.') }}
                <button
                    type="submit"
                    form="send-verification"
                    class="btn btn-link p-0 ms-1"
                >
                    {{ __('Resend verification email') }}
                </button>
            </div>
        @endif
    </div>

    <div class="d-flex align-items-center gap-3 mt-4">
        <button class="btn btn-primary">
            {{ __('Save Changes') }}
        </button>

        @if (session('status') === 'profile-updated')
            <span class="text-success small">
                {{ __('Saved successfully.') }}
            </span>
        @endif
    </div>

</form>