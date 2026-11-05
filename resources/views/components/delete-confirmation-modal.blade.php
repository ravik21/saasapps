<div x-data="{
        isOpen: false,
        isDeleting: false,
        action: '',
        title: 'Delete Project?',
        name: '',
        message: '',
        buttonText: 'Delete Project',

        open(data) {
            this.action = data.action || '';
            this.title = data.title || 'Delete Project?';
            this.name = data.name || '';
            this.buttonText = 'Delete Project';
            
            if (data.message) {
                this.message = data.message;
            } else if (this.name) {
                this.message = 'Are you sure you want to delete?';
            } else {
                this.message = 'Are you sure you want to delete?';
            }

            this.isDeleting = false;
            this.isOpen = true;
            document.body.classList.add('overflow-hidden');
        },

        close() {
            if (this.isDeleting) return;
            this.isOpen = false;
            document.body.classList.remove('overflow-hidden');
        },

        confirmDelete() {
            if (this.isDeleting || !this.action) return;
            this.isDeleting = true;

            this.$nextTick(() => {
                if (this.$refs.deleteForm) {
                    this.$refs.deleteForm.action = this.action;
                    this.$refs.deleteForm.submit();
                }
            });
        },

        escapeHtml(text) {
            const div = document.createElement('div');
            div.textContent = text;
            return div.innerHTML;
        }
     }"
     x-on:open-delete-modal.window="open($event.detail)"
     x-on:keydown.escape.window="if (isOpen && !isDeleting) close()"
     x-cloak
     class="admin-modal-backdrop"
     style="display: none;"
     x-show="isOpen"
     x-transition:enter="transition ease-out duration-200"
     x-transition:enter-start="opacity-0"
     x-transition:enter-end="opacity-100"
     x-transition:leave="transition ease-in duration-150"
     x-transition:leave-start="opacity-100"
     x-transition:leave-end="opacity-0"
     role="dialog"
     aria-modal="true"
     aria-labelledby="deleteModalTitle"
     aria-describedby="deleteModalMessage"
     @click.self="if (!isDeleting) close()">

    <!-- Centered White Modal Panel (#FFFFFF) -->
    <div class="admin-modal-panel"
         style="max-width: 460px; width: 100%; border-radius: 18px; border: 1px solid #E2E8F0; background-color: #FFFFFF; box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.1), 0 8px 10px -6px rgba(0, 0, 0, 0.04) !important;"
         @click.stop
         x-show="isOpen"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 transform scale-95 -translate-y-2"
         x-transition:enter-end="opacity-100 transform scale-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 transform scale-100 translate-y-0"
         x-transition:leave-end="opacity-0 transform scale-95 -translate-y-2">

        <!-- Modal Header & Body Container -->
        <div class="p-4 p-sm-4.5 position-relative">
            <!-- Close (X) button -->
            <button type="button" 
                    class="btn-close position-absolute top-0 end-0 m-3 p-2" 
                    style="font-size: 11px; cursor: pointer;"
                    :disabled="isDeleting"
                    @click="close()" 
                    aria-label="Close modal"></button>

            <!-- Red Danger Icon & Title Row -->
            <div class="d-flex align-items-start gap-3 mb-1 pe-4">
                <div class="rounded-circle d-flex align-items-center justify-content-center flex-shrink-0"
                     style="width: 44px; height: 44px; background-color: #FEF2F2; color: #DC2626; border: 1px solid #FEE2E2;">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#DC2626" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <polyline points="3 6 5 6 21 6"></polyline>
                        <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                        <line x1="10" y1="11" x2="10" y2="17"></line>
                        <line x1="14" y1="11" x2="14" y2="17"></line>
                    </svg>
                </div>
                <div style="min-width: 0; padding-top: 2px;">
                    <h3 id="deleteModalTitle" 
                        class="editorial-title mb-1.5" 
                        style="font-family: var(--font-serif-display); font-size: 1.28rem; font-weight: 500; color: #0F172A; letter-spacing: -0.02em; line-height: 1.25;"
                        x-text="title">
                        Delete Project?
                    </h3>
                    <p id="deleteModalMessage" 
                       class="mb-0 text-muted" 
                       style="font-family: var(--font-sans); font-size: 13.5px; color: #64748B !important; line-height: 1.55;"
                       x-html="message">
                        Are you sure you want to delete?
                    </p>
                </div>
            </div>
        </div>

        <!-- Hidden POST Form for Laravel DELETE Route -->
        <form :action="action" method="POST" x-ref="deleteForm" class="d-none">
            @csrf
            @method('DELETE')
        </form>

        <!-- Modal Actions Footer -->
        <div class="admin-modal-footer d-flex align-items-center justify-content-end gap-2 border-top"
             style="background-color: #FAFAFA; border-color: #F1F5F9 !important; padding: 14px 24px;">
            <button type="button" 
                    class="btn-action-cancel"
                    :disabled="isDeleting"
                    @click="close()">
                Cancel
            </button>

            <button type="button" 
                    class="btn-action-danger-confirm"
                    :disabled="isDeleting"
                    @click="confirmDelete()">
                <span x-show="isDeleting" 
                      class="spinner-border spinner-border-sm" 
                      style="width: 13px; height: 13px; border-width: 2px; display: none;" 
                      role="status" 
                      aria-hidden="true"></span>
                <span>Delete Project</span>
            </button>
        </div>
    </div>
</div>
