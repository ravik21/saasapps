<h5 class="fw-semibold text-danger mb-1">
    {{ __('Delete Account') }}
</h5>
<p class="text-muted small mb-4">
    {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
</p>

<button
    class="btn btn-outline-danger"
    data-bs-toggle="modal"
    data-bs-target="#confirmUserDeletionModal"
>
    {{ __('Delete Account') }}
</button>

<!-- Modal -->
<div
    class="modal fade"
    id="confirmUserDeletionModal"
    tabindex="-1"
    aria-labelledby="confirmUserDeletionLabel"
    aria-hidden="true"
>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <form method="POST" action="{{ route('profile.destroy') }}">
                @csrf
                @method('DELETE')

                <div class="modal-header">
                    <h5 class="modal-title" id="confirmUserDeletionLabel">
                        {{ __('Are you sure you want to delete your account?') }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <div class="modal-body">
                    <p class="text-muted small">
                        {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                    </p>

                    <div class="mb-3">
                        <label for="password" class="form-label visually-hidden">
                            {{ __('Password') }}
                        </label>

                        <input
                            type="password"
                            class="form-control @error('password', 'userDeletion') is-invalid @enderror"
                            id="password"
                            name="password"
                            placeholder="{{ __('Password') }}"
                            required
                        >

                        @error('password', 'userDeletion')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                </div>

                <div class="modal-footer">
                    <button
                        type="button"
                        class="btn btn-secondary"
                        data-bs-dismiss="modal"
                    >
                        {{ __('Cancel') }}
                    </button>

                    <button type="submit" class="btn btn-danger">
                        {{ __('Delete Account') }}
                    </button>
                </div>

            </form>

        </div>
    </div>
</div>
