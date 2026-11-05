<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Client Reviews') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100" x-data="{
        showModal: false,
        activeReview: {},
        openReview(data) {
            this.activeReview = data;
            this.showModal = true;
        }
    }">
        <!-- Success Alert -->
        @if (session('success'))
            <div class="mb-4 d-flex align-items-center justify-content-between p-3 rounded-3" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; color: #0F172A; font-size: 13.5px;">
                <div class="d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="color: #0F172A; flex-shrink: 0;">
                        <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                        <polyline points="22 4 12 14.01 9 11.01"></polyline>
                    </svg>
                    <span>{{ session('success') }}</span>
                </div>
                <button type="button" class="btn-close btn-close-sm" onclick="this.parentElement.remove()" aria-label="Close" style="font-size: 10px;"></button>
            </div>
        @endif

        <!-- Page Header: Breadcrumb and Right-Aligned Black Pill Button -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Client Reviews</li>
                </ol>
            </nav>
            @can('manage client reviews')
                <div class="d-flex align-items-center">
                    <a href="{{ route('client-reviews.create') }}" class="btn-primary-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        <span>Add Review</span>
                    </a>
                </div>
            @endcan
        </div>

        <!-- Shared Minimal Table Component -->
        <x-admin-table 
            title="Client Testimonials" 
            subtitle="Curated feedback and project ratings from client engagements."
            :count="$reviews->total()" 
            countLabel="{{ Str::plural('review', $reviews->total()) }}"
            :pagination="$reviews"
            :empty="$reviews->isEmpty()"
            emptyMessage="No client reviews found.">

            <x-slot name="thead">
                <tr>
                    <th scope="col" style="min-width: 170px;">Client Name</th>
                    <th scope="col" style="min-width: 160px;">Company Name</th>
                    <th scope="col" style="min-width: 280px; max-width: 420px;">Review</th>
                    <th scope="col" style="width: 110px;">Rating</th>
                    <th scope="col" class="text-nowrap" style="min-width: 120px;">Created At</th>
                    <th scope="col" class="text-end text-sm-start text-nowrap" style="width: 160px;">Actions</th>
                </tr>
            </x-slot>

            @foreach ($reviews as $review)
                <tr>
                    <!-- Client Name: Clean typography with subtle avatar/initials -->
                    <td>
                        <div class="d-flex align-items-center gap-2">
                            <img src="{{ $review->client_avatar }}" 
                                 alt="{{ $review->client_name }}" 
                                 class="rounded-circle border" 
                                 style="width: 32px; height: 32px; object-fit: cover; border-color: #E2E8F0 !important;"
                                 onerror="this.src='/images/avatar.png';">
                            <div>
                                <span class="fw-semibold text-dark d-block" style="font-size: 13.5px; color: #0F172A !important; line-height: 1.3;">
                                    {{ $review->client_name }}
                                </span>
                                @if ($review->job_title)
                                    <span class="text-muted small d-block" style="font-size: 11.5px; color: #64748B;">
                                        {{ $review->job_title }}
                                    </span>
                                @endif
                            </div>
                        </div>
                    </td>

                    <!-- Company Name -->
                    <td>
                        <span class="text-dark" style="font-size: 13px; color: #334155;">
                            {{ $review->company_name ?: '—' }}
                        </span>
                    </td>

                    <!-- Review: Truncated preview with View Review interaction -->
                    <td style="min-width: 280px; max-width: 420px;">
                        <div class="review-preview-text" style="font-size: 13px; color: #334155; line-height: 1.45;">
                            {{ $review->review }}
                        </div>
                        @if (mb_strlen($review->review) > 75)
                            <button type="button" 
                                    class="btn btn-link p-0 mt-1 text-decoration-none fw-medium d-inline-flex align-items-center gap-1" 
                                    style="font-size: 11.5px; color: #0F172A;" 
                                    @click="openReview(@js([
                                        'client' => $review->client_name,
                                        'company' => $review->company_name,
                                        'job' => $review->job_title,
                                        'rating' => number_format($review->rating, 1),
                                        'review' => $review->review,
                                        'date' => $review->created_at ? $review->created_at->format('Y-m-d') : '—',
                                        'video' => $review->video_link ?: null
                                    ]))">
                                <span>View full review</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <line x1="5" y1="12" x2="19" y2="12"></line>
                                    <polyline points="12 5 19 12 12 19"></polyline>
                                </svg>
                            </button>
                        @endif
                    </td>

                    <!-- Rating: Restrained minimal typography & star -->
                    <td>
                        <div class="d-inline-flex align-items-center gap-1 px-2 py-1 rounded-pill" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; font-size: 12px; font-weight: 500; color: #0F172A;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#0F172A" stroke="#0F172A" stroke-width="1">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <span>{{ number_format($review->rating, 1) }}</span>
                        </div>
                    </td>

                    <!-- Created At: Single line -->
                    <td class="text-nowrap">
                        <span class="text-muted text-nowrap" style="font-size: 12.5px; color: #64748B !important; white-space: nowrap;">
                            {{ $review->created_at ? $review->created_at->format('Y-m-d') : '—' }}
                        </span>
                    </td>

                    <!-- Actions: Horizontally aligned -->
                    <td class="text-end text-sm-start text-nowrap">
                        @can('manage client reviews')
                            <div class="d-inline-flex align-items-center gap-2 text-nowrap">
                                <a href="{{ route('client-reviews.edit', $review->id) }}" class="btn-action-edit">
                                    Edit
                                </a>
                                <button type="button" 
                                        class="btn-action-delete"
                                        @click="$dispatch('open-delete-modal', {
                                            action: '{{ route('client-reviews.destroy', $review->id) }}',
                                            title: 'Delete Client Review?',
                                            name: '{{ addslashes($review->client_name) }}',
                                            message: 'Are you sure you want to delete?',
                                            buttonText: 'Delete Project'
                                        })">
                                    Delete
                                </button>
                            </div>
                        @else
                            <span class="text-muted small">—</span>
                        @endcan
                    </td>
                </tr>
            @endforeach
        </x-admin-table>

        <!-- Alpine Detail Modal for Full Review -->
        <div x-show="showModal" 
             x-cloak 
             class="admin-modal-backdrop" 
             @keydown.escape.window="showModal = false"
             style="display: none;">
            <div class="admin-modal-panel" @click.away="showModal = false">
                <div class="admin-modal-header">
                    <div>
                        <h3 class="editorial-title mb-0" style="font-size: 1.25rem;" x-text="activeReview.client"></h3>
                        <p class="mb-0 text-muted small" style="color: #64748B;">
                            <span x-text="activeReview.company"></span>
                            <template x-if="activeReview.job">
                                <span> &bull; <span x-text="activeReview.job"></span></span>
                            </template>
                        </p>
                    </div>
                    <button type="button" class="btn-close" @click="showModal = false" aria-label="Close" style="font-size: 11px;"></button>
                </div>
                <div class="admin-modal-body">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <div class="d-inline-flex align-items-center gap-1 px-2.5 py-1 rounded-pill" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; font-size: 12px; font-weight: 500; color: #0F172A;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#0F172A" stroke="#0F172A" stroke-width="1">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                            <span x-text="activeReview.rating"></span> / 5.0
                        </div>
                        <span class="text-muted small" x-text="'Date: ' + activeReview.date" style="color: #94A3B8;"></span>
                    </div>

                    <div class="p-3 rounded-3" style="background-color: #F8FAFC; border: 1px solid #E2E8F0; font-size: 13.5px; line-height: 1.6; color: #1E293B;">
                        <p class="mb-0" style="white-space: pre-wrap;" x-text="activeReview.review"></p>
                    </div>

                    <template x-if="activeReview.video">
                        <div class="mt-3 pt-2">
                            <a :href="activeReview.video" target="_blank" rel="noopener noreferrer" class="btn-action-edit d-inline-flex align-items-center gap-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="13" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                    <polygon points="5 3 19 12 5 21 5 3"></polygon>
                                </svg>
                                <span>Watch Video Testimonial</span>
                            </a>
                        </div>
                    </template>
                </div>
                <div class="admin-modal-footer">
                    <button type="button" class="btn-action-edit" @click="showModal = false">
                        Close
                    </button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>