<h5 class="fw-semibold mb-1">
    {{ __('Update Password') }}
</h5>
<p class="text-muted small mb-4">
    {{ __('Ensure your account is using a long, random password to stay secure.') }}
</p>

<form method="POST" action="{{ route('password.update') }}">
    @csrf
    @method('PUT')

    <div class="mb-3">
        <label class="form-label">{{ __('Current Password') }}</label>
        <input
            type="password"
            name="current_password"
            class="form-control @error('current_password', 'updatePassword') is-invalid @enderror"
        >
        @error('current_password', 'updatePassword')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-3">
        <label class="form-label">{{ __('New Password') }}</label>
        <input
            type="password"
            name="password"
            class="form-control @error('password', 'updatePassword') is-invalid @enderror"
        >
        @error('password', 'updatePassword')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="mb-4">
        <label class="form-label">{{ __('Confirm Password') }}</label>
        <input
            type="password"
            name="password_confirmation"
            class="form-control @error('password_confirmation', 'updatePassword') is-invalid @enderror"
        >
        @error('password_confirmation', 'updatePassword')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>

    <div class="d-flex align-items-center gap-3">
        <button class="btn btn-primary">
            {{ __('Update Password') }}
        </button>

        @if (session('status') === 'password-updated')
            <span class="text-success small">
                {{ __('Password updated.') }}
            </span>
        @endif
    </div>

</form>
