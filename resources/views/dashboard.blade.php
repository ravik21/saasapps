<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Dashboard') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
        <!-- Breadcrumb Navigation -->
        <div class="d-flex flex-column flex-sm-row justify-content-between align-items-sm-center gap-3 py-2 mb-4">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb admin-breadcrumb mb-0">
                    <li class="breadcrumb-item">
                        <a href="{{ route('dashboard') }}" title="Home">Home</a>
                    </li>
                    <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                </ol>
            </nav>
        </div>

        <!-- 1. Dashboard Hero: Editorial Dark Charcoal Panel (#222526) -->
        <div class="dashboard-hero-panel rounded-4 p-4 p-lg-5 mb-4 position-relative overflow-hidden" style="background-color: #222526 !important; border: 1px solid rgba(255, 255, 255, 0.08) !important; min-height: 250px;">
            <div class="row align-items-center g-4 position-relative">
                <div class="col-lg-8" style="min-width: 0;">
                    <span class="dashboard-kicker mb-3">
                        OPERATIONS OVERVIEW
                    </span>
                    <h2 class="editorial-title text-white mb-2" style="font-family: var(--font-serif-display) !important; font-size: clamp(28px, 2.8vw, 38px) !important; font-weight: 400 !important; line-height: 1.15 !important; letter-spacing: -0.025em !important; color: #FFFFFF !important; overflow-wrap: anywhere;">
                        Your business, all in one place.
                    </h2>
                    <p class="mb-4" style="font-family: var(--font-sans); font-size: 14px; line-height: 1.55; color: #9CA3AF; max-width: 580px; overflow-wrap: anywhere;">
                        Monitor projects, teams, customer reviews and incoming enquiries from a single dashboard.
                    </p>
                    <div class="d-flex flex-wrap gap-2.5">
                        @can('manage contact submissions')
                            <a href="{{ route('contact-submissions.index') }}" class="btn-primary-pill text-nowrap" style="background-color: #FFFFFF !important; color: #0F172A !important; border-color: #FFFFFF !important; font-weight: 600; padding: 7px 20px !important;">
                                <span>Open Contact Inbox</span>
                            </a>
                        @endcan
                        @can('manage projects')
                            <a href="{{ route('projects.index') }}" class="btn-action-edit text-nowrap" style="background-color: rgba(255, 255, 255, 0.08) !important; color: #F8FAFC !important; border-color: rgba(255, 255, 255, 0.2) !important; padding: 7px 20px !important; font-size: 13px !important;">
                                <span>Manage Projects</span>
                            </a>
                        @endcan
                    </div>
                </div>

                <!-- Hero Reply Queue Highlight -->
                <div class="col-lg-4" style="min-width: 0;">
                    <div class="rounded-3 p-3 p-xl-4" style="background: rgba(255, 255, 255, 0.04); border: 1px solid rgba(255, 255, 255, 0.1); min-width: 0;">
                        <div class="text-uppercase fw-semibold mb-1" style="font-size: 11px; letter-spacing: 0.08em; color: #9CA3AF;">
                            Reply Queue
                        </div>
                        <div class="editorial-title text-white mb-1" style="font-family: var(--font-serif-display) !important; font-size: 2.5rem; font-weight: 400; line-height: 1; letter-spacing: -0.02em; color: #FFFFFF !important;">
                            {{ $stats['pending_replies'] }}
                        </div>
                        <div class="mb-3" style="font-size: 12.5px; color: #9CA3AF; line-height: 1.4; overflow-wrap: anywhere;">
                            Contact submissions still waiting for a response
                        </div>
                        <div class="pt-2 border-top d-flex align-items-center justify-content-between gap-2" style="border-color: rgba(255, 255, 255, 0.1) !important; font-size: 12px; color: #9CA3AF;">
                            <span class="text-truncate">New in last 7 days</span>
                            <span class="badge-count-pill flex-shrink-0" style="background-color: rgba(255, 255, 255, 0.12) !important; color: #FFFFFF !important; border-color: rgba(255, 255, 255, 0.18) !important; padding: 2px 8px; font-size: 11px;">
                                {{ $stats['new_contacts_this_week'] }}
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- 2. Four Statistics Cards: Minimalist White Surfaces -->
        <div class="row g-3 mb-4">
            <!-- Teams -->
            <div class="col-sm-6 col-xl-3" style="min-width: 0;">
                <div class="admin-card p-4 h-100 d-flex flex-column justify-content-between" style="min-width: 0;">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="text-muted fw-medium" style="font-size: 13px; color: #64748B !important;">Teams</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                <circle cx="9" cy="7" r="4"></circle>
                                <path d="M23 21v-2a4 4 0 0 0-3-3.87"></path>
                                <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                            </svg>
                        </div>
                        <div class="editorial-title text-dark mb-1" style="font-family: var(--font-serif-display); font-size: 2.25rem; font-weight: 400; line-height: 1.1; letter-spacing: -0.025em; color: #0F172A !important;">
                            {{ $stats['teams'] }}
                        </div>
                    </div>
                    <div class="text-muted small mt-2" style="font-size: 12px; color: #64748B !important; line-height: 1.4;">
                        Developer team members in the system
                    </div>
                </div>
            </div>

            <!-- Projects -->
            <div class="col-sm-6 col-xl-3" style="min-width: 0;">
                <div class="admin-card p-4 h-100 d-flex flex-column justify-content-between" style="min-width: 0;">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="text-muted fw-medium" style="font-size: 13px; color: #64748B !important;">Projects</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                            </svg>
                        </div>
                        <div class="editorial-title text-dark mb-1" style="font-family: var(--font-serif-display); font-size: 2.25rem; font-weight: 400; line-height: 1.1; letter-spacing: -0.025em; color: #0F172A !important;">
                            {{ $stats['projects'] }}
                        </div>
                    </div>
                    <div class="text-muted small mt-2" style="font-size: 12px; color: #64748B !important; line-height: 1.4;">
                        Tracked portfolio and client work
                    </div>
                </div>
            </div>

            <!-- Client Reviews -->
            <div class="col-sm-6 col-xl-3" style="min-width: 0;">
                <div class="admin-card p-4 h-100 d-flex flex-column justify-content-between" style="min-width: 0;">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="text-muted fw-medium" style="font-size: 13px; color: #64748B !important;">Client Reviews</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                            </svg>
                        </div>
                        <div class="editorial-title text-dark mb-1" style="font-family: var(--font-serif-display); font-size: 2.25rem; font-weight: 400; line-height: 1.1; letter-spacing: -0.025em; color: #0F172A !important;">
                            {{ $stats['client_reviews'] }}
                        </div>
                    </div>
                    <div class="text-muted small mt-2" style="font-size: 12px; color: #64748B !important; line-height: 1.4;">
                        Published or managed testimonials
                    </div>
                </div>
            </div>

            <!-- Contact Submissions -->
            <div class="col-sm-6 col-xl-3" style="min-width: 0;">
                <div class="admin-card p-4 h-100 d-flex flex-column justify-content-between" style="min-width: 0;">
                    <div>
                        <div class="d-flex align-items-center justify-content-between mb-2">
                            <span class="text-muted fw-medium" style="font-size: 13px; color: #64748B !important;">Contact Submissions</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                <polyline points="22,6 12,13 2,6"></polyline>
                            </svg>
                        </div>
                        <div class="editorial-title text-dark mb-1" style="font-family: var(--font-serif-display); font-size: 2.25rem; font-weight: 400; line-height: 1.1; letter-spacing: -0.025em; color: #0F172A !important;">
                            {{ $stats['contact_submissions'] }}
                        </div>
                    </div>
                    <div class="text-muted small mt-2" style="font-size: 12px; color: #64748B !important; line-height: 1.4;">
                        Inbound leads and support requests
                    </div>
                </div>
            </div>
        </div>

        <!-- 3. Lower Dashboard Grid: Two Independent Vertical Column Stacks -->
        <div class="dashboard-columns-grid mb-4">
            <!-- Left Column Stack: Contact Submissions, Projects, Client Reviews -->
            <div class="dashboard-stack-left">
                <!-- 1. Recent Contact Submissions Card -->
                <div class="admin-card">
                    <div class="admin-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                        <div>
                            <h2 class="editorial-title mb-1" style="font-size: 1.25rem; letter-spacing: -0.02em;">
                                Recent Contact Submissions
                            </h2>
                            <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                                Latest messages from the contact us page with reply status.
                            </p>
                        </div>
                        @can('manage contact submissions')
                            <div>
                                <a href="{{ route('contact-submissions.index') }}" class="btn-action-edit" style="font-size: 12px; padding: 4px 14px !important;">
                                    View All &rarr;
                                </a>
                            </div>
                        @endcan
                    </div>

                    <div class="table-responsive">
                        <table class="table admin-table align-middle mb-0">
                            <thead>
                                <tr>
                                    <th scope="col" style="min-width: 110px;">Name</th>
                                    <th scope="col" style="min-width: 140px;">Subject</th>
                                    <th scope="col" style="width: 85px;">Status</th>
                                    <th scope="col" class="text-nowrap" style="width: 115px;">Received</th>
                                    <th scope="col" class="text-end text-sm-start text-nowrap" style="width: 75px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($recentContactSubmissions->take(5) as $contactSubmission)
                                    <tr>
                                        <!-- Name -->
                                        <td>
                                            <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 13px; color: #0F172A !important; line-height: 1.35; max-width: 130px;" title="{{ $contactSubmission->name }}">
                                                {{ $contactSubmission->name }}
                                            </span>
                                        </td>

                                        <!-- Subject -->
                                        <td>
                                            <span class="d-block text-truncate fw-medium text-dark" style="max-width: 160px; font-size: 12.5px; color: #1E293B;" title="{{ $contactSubmission->subject }}">
                                                {{ $contactSubmission->subject ?: '—' }}
                                            </span>
                                        </td>

                                        <!-- Status Badge -->
                                        <td>
                                            @if ($contactSubmission->replied_at)
                                                <span class="badge rounded-pill" style="background-color: #0F172A; color: #FFFFFF; font-size: 10.5px; font-weight: 500; padding: 3px 8px;">
                                                    Replied
                                                </span>
                                            @else
                                                <span class="badge rounded-pill" style="background-color: #F8FAFC; color: #475569; border: 1px solid #E2E8F0; font-size: 10.5px; font-weight: 500; padding: 3px 8px;">
                                                    Pending
                                                </span>
                                            @endif
                                        </td>

                                        <!-- Received Date -->
                                        <td class="text-nowrap">
                                            <span class="text-muted text-nowrap" style="font-size: 12px; color: #64748B !important; white-space: nowrap;">
                                                {{ $contactSubmission->created_at->format('Y-m-d H:i') }}
                                            </span>
                                        </td>

                                        <!-- Action -->
                                        <td class="text-end text-sm-start text-nowrap">
                                            @can('manage contact submissions')
                                                <a href="{{ route('contact-submissions.reply', $contactSubmission) }}" class="btn-action-edit" style="font-size: 11px; padding: 2px 10px !important;">
                                                    Reply
                                                </a>
                                            @else
                                                <span class="text-muted small">—</span>
                                            @endcan
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center text-muted py-4">
                                            <div class="py-2">
                                                <svg class="mx-auto mb-2 text-muted" xmlns="http://www.w3.org/2000/svg" width="26" height="26" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                                    <polyline points="22,6 12,13 2,6"></polyline>
                                                </svg>
                                                <p class="mb-0" style="color: #64748B; font-size: 13px;">No contact submissions yet.</p>
                                            </div>
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>

                <!-- 2. Recent Projects Card -->
                <div class="admin-card">
                    <div class="admin-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                        <div>
                            <h2 class="editorial-title mb-1" style="font-size: 1.25rem; letter-spacing: -0.02em;">
                                Recent Projects
                            </h2>
                            <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                                Portfolio work, case studies, and deployments.
                            </p>
                        </div>
                        @can('manage projects')
                            <div>
                                <a href="{{ route('projects.index') }}" class="btn-action-edit" style="font-size: 12px; padding: 4px 14px !important;">
                                    View All &rarr;
                                </a>
                            </div>
                        @endcan
                    </div>

                    <div class="p-3 p-sm-4 d-flex flex-column gap-2.5">
                        @forelse ($recentProjects->take(4) as $project)
                            <div class="d-flex align-items-center justify-content-between gap-3 p-2.5 rounded-3 border" style="border-color: #F1F5F9; background-color: #FFFFFF;">
                                <div class="d-flex align-items-center gap-3" style="min-width: 0; flex: 1 1 auto;">
                                    <!-- Project Thumbnail / Fallback -->
                                    <div class="position-relative flex-shrink-0" style="width: 40px; height: 40px;">
                                        @php
                                            $dashLogo = $project->image_url ?: $project->logo;
                                        @endphp
                                        @if (!empty($dashLogo))
                                            <img src="{{ $dashLogo }}" alt="{{ $project->name }}" class="rounded-3 border object-fit-contain p-1 bg-white" style="width: 40px; height: 40px; border-color: #E2E8F0 !important;" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                                            <div class="d-none rounded-3 border d-flex align-items-center justify-content-center bg-light text-muted fw-semibold" style="width: 40px; height: 40px; border-color: #E2E8F0 !important; font-size: 12px; color: #64748B;">
                                                {{ strtoupper(substr($project->name, 0, 2)) }}
                                            </div>
                                        @else
                                            <div class="rounded-3 border d-flex align-items-center justify-content-center bg-light" style="width: 40px; height: 40px; border-color: #E2E8F0 !important;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                                    <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                                    <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                                </svg>
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Details -->
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <a href="{{ route('projects.edit', $project->id) }}" class="fw-semibold text-dark d-block text-truncate text-decoration-none" style="font-size: 13px; color: #0F172A !important; line-height: 1.35;" title="{{ $project->name }}">
                                            {{ $project->name ?: 'Untitled Project' }}
                                        </a>
                                        <span class="text-muted small d-block text-truncate" style="font-size: 11.5px; color: #64748B !important;" title="{{ $project->client ? 'Client: ' . $project->client : (strip_tags($project->description) ?: 'Internal Project') }}">
                                            {{ $project->client ? 'Client: ' . $project->client : (strip_tags($project->description) ? Str::limit(strip_tags($project->description), 50) : 'Internal Project') }}
                                        </span>
                                    </div>
                                </div>

                                <!-- Date & Link -->
                                <div class="text-end flex-shrink-0">
                                    <span class="text-muted text-nowrap d-block" style="font-size: 11.5px; color: #94A3B8 !important;">
                                        {{ $project->created_at ? $project->created_at->format('M d, Y') : '—' }}
                                    </span>
                                    @if ($project->link)
                                        <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer" class="small text-decoration-none text-muted" style="font-size: 11px;">
                                            Visit &nearr;
                                        </a>
                                    @endif
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-4">
                                <p class="mb-0" style="color: #64748B; font-size: 13px;">No projects found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>

                <!-- 3. Recent Client Reviews Card -->
                <div class="admin-card">
                    <div class="admin-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
                        <div>
                            <h2 class="editorial-title mb-1" style="font-size: 1.25rem; letter-spacing: -0.02em;">
                                Recent Client Reviews
                            </h2>
                            <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                                Published client testimonials and project ratings.
                            </p>
                        </div>
                        @can('manage client reviews')
                            <div>
                                <a href="{{ route('client-reviews.index') }}" class="btn-action-edit" style="font-size: 12px; padding: 4px 14px !important;">
                                    View All &rarr;
                                </a>
                            </div>
                        @endcan
                    </div>

                    <div class="p-3 p-sm-4 d-flex flex-column gap-2.5">
                        @php
                            $reviewsToDisplay = $recentClientReviews ?? \App\Models\ClientReview::latest()->take(3)->get();
                        @endphp
                        @forelse ($reviewsToDisplay->take(3) as $review)
                            <div class="d-flex align-items-start justify-content-between gap-3 p-2.5 rounded-3 border" style="border-color: #F1F5F9; background-color: #FFFFFF;">
                                <div class="d-flex align-items-start gap-3" style="min-width: 0; flex: 1 1 auto;">
                                    <!-- Avatar -->
                                    <div class="position-relative flex-shrink-0" style="width: 38px; height: 38px;">
                                        @if (!empty($review->client_avatar) && $review->client_avatar !== '/images/avatar.png')
                                            <img src="{{ $review->client_avatar }}" alt="{{ $review->client_name }}" class="rounded-circle border object-fit-cover" style="width: 38px; height: 38px; border-color: #E2E8F0 !important;" onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                                            <div class="d-none rounded-circle border d-flex align-items-center justify-content-center bg-light text-muted fw-semibold" style="width: 38px; height: 38px; border-color: #E2E8F0 !important; font-size: 11px; color: #475569;">
                                                {{ strtoupper(substr($review->client_name, 0, 2)) }}
                                            </div>
                                        @else
                                            <div class="rounded-circle border d-flex align-items-center justify-content-center bg-light text-muted fw-semibold" style="width: 38px; height: 38px; border-color: #E2E8F0 !important; font-size: 11px; color: #475569;">
                                                {{ strtoupper(substr($review->client_name, 0, 2)) }}
                                            </div>
                                        @endif
                                    </div>

                                    <!-- Content -->
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <div class="d-flex align-items-center justify-content-between gap-2 mb-0.5">
                                            <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 13px; color: #0F172A !important; line-height: 1.35;" title="{{ $review->client_name }}">
                                                {{ $review->client_name }}
                                            </span>
                                            <div class="d-flex align-items-center gap-1 flex-shrink-0" style="font-size: 11px; color: #475569;">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="#0F172A" stroke="#0F172A" stroke-width="1.5">
                                                    <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                                </svg>
                                                <span class="fw-semibold">{{ number_format($review->rating ?? 5, 1) }}</span>
                                            </div>
                                        </div>
                                        <span class="text-muted small d-block text-truncate mb-1" style="font-size: 11.5px; color: #64748B !important;" title="{{ $review->job_title ? $review->job_title . ($review->company_name ? ', ' . $review->company_name : '') : ($review->company_name ?: 'Verified Client') }}">
                                            {{ $review->job_title ? $review->job_title . ($review->company_name ? ', ' . $review->company_name : '') : ($review->company_name ?: 'Verified Client') }}
                                        </span>
                                        @if (!empty($review->review))
                                            <p class="mb-0 text-muted small text-truncate" style="font-size: 11.5px; color: #475569 !important; font-style: italic; line-height: 1.4;" title="{{ strip_tags($review->review) }}">
                                                &ldquo;{{ strip_tags($review->review) }}&rdquo;
                                            </p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        @empty
                            <div class="text-center text-muted py-4">
                                <p class="mb-0" style="color: #64748B; font-size: 13px;">No client reviews found.</p>
                            </div>
                        @endforelse
                    </div>
                </div>
            </div>

            <!-- Right Column Stack: Quick Summary, Recent Team Members, Quick Actions -->
            <div class="dashboard-stack-right">
                <!-- 1. Quick Summary Card -->
                <div class="admin-card p-4">
                    <div class="mb-3 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h3 class="editorial-title mb-1" style="font-size: 1.15rem; letter-spacing: -0.02em;">Quick Summary</h3>
                        <p class="mb-0 text-muted" style="font-size: 12.5px; color: #64748B !important;">A simple snapshot of recent platform activity.</p>
                    </div>
                    <div class="d-flex flex-column gap-2">
                        <div class="d-flex align-items-center justify-content-between py-2 border-bottom" style="border-color: #F8FAFC !important;">
                            <span class="text-muted" style="font-size: 13px; color: #475569 !important;">Pending contact replies</span>
                            <span class="badge-count-pill" style="font-size: 11.5px;">{{ $stats['pending_replies'] }}</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-2 border-bottom" style="border-color: #F8FAFC !important;">
                            <span class="text-muted" style="font-size: 13px; color: #475569 !important;">New contacts this week</span>
                            <span class="badge-count-pill" style="font-size: 11.5px;">{{ $stats['new_contacts_this_week'] }}</span>
                        </div>
                        <div class="d-flex align-items-center justify-content-between py-2">
                            <span class="text-muted" style="font-size: 13px; color: #475569 !important;">Latest client review</span>
                            <span class="fw-semibold text-dark text-truncate text-end ps-2" style="font-size: 13px; color: #0F172A !important; max-width: 160px;" title="{{ $latestReview?->client_name }}">
                                {{ $latestReview?->client_name ?? 'No reviews yet' }}
                            </span>
                        </div>
                    </div>
                </div>

                <!-- 2. Recent Team Members Card -->
                <div class="admin-card p-4">
                    <div class="d-flex align-items-center justify-content-between mb-3 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h3 class="editorial-title mb-0" style="font-size: 1.15rem; letter-spacing: -0.02em;">Recent Team Members</h3>
                        @can('manage users')
                            <a href="{{ route('users.index') }}" class="btn-action-edit" style="font-size: 11px; padding: 2px 10px !important;">
                                View All
                            </a>
                        @endcan
                    </div>
                    <div class="d-flex flex-column gap-3">
                        @forelse ($recentUsers->take(4) as $user)
                            <div class="d-flex align-items-center justify-content-between gap-2">
                                <div class="d-flex align-items-center gap-2.5" style="min-width: 0; flex: 1 1 auto;">
                                    <div class="rounded-circle border d-flex align-items-center justify-content-center bg-light text-dark fw-semibold flex-shrink-0" style="width: 30px; height: 30px; min-width: 30px; border-color: #E2E8F0 !important; font-size: 11px; color: #334155;">
                                        {{ strtoupper(substr($user->name, 0, 2)) }}
                                    </div>
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 12.5px; color: #0F172A !important; line-height: 1.3;" title="{{ $user->name }}">
                                            {{ $user->name }}
                                        </span>
                                        <span class="text-muted small d-block text-truncate" style="font-size: 11.5px; color: #64748B !important;" title="{{ $user->email }}">
                                            {{ $user->email }}
                                        </span>
                                    </div>
                                </div>
                                <span class="text-muted text-nowrap flex-shrink-0" style="font-size: 11.5px; color: #94A3B8 !important;">
                                    {{ $user->created_at->format('M d') }}
                                </span>
                            </div>
                        @empty
                            <div class="text-muted small py-2" style="color: #64748B;">No team members found.</div>
                        @endforelse
                    </div>
                </div>

                <!-- 3. Quick Actions Card -->
                <div class="admin-card p-4">
                    <div class="mb-3 pb-2 border-bottom" style="border-color: #F1F5F9 !important;">
                        <h3 class="editorial-title mb-1" style="font-size: 1.15rem; letter-spacing: -0.02em;">Quick Actions</h3>
                        <p class="mb-0 text-muted" style="font-size: 12.5px; color: #64748B !important;">Frequently used operational shortcuts.</p>
                    </div>

                    <div class="d-flex flex-column gap-2.5">
                        @can('manage projects')
                            <a href="{{ route('projects.create') }}" class="quick-action-link">
                                <div class="d-flex align-items-center gap-3" style="min-width: 0; flex: 1 1 auto;">
                                    <div class="action-icon-box flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <line x1="12" y1="5" x2="12" y2="19"></line>
                                            <line x1="5" y1="12" x2="19" y2="12"></line>
                                        </svg>
                                    </div>
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 13px; color: #0F172A;" title="Add Project">Add Project</span>
                                        <span class="text-muted small d-block text-truncate" style="font-size: 11.5px; color: #64748B;" title="Create a portfolio showcase">Create a portfolio showcase</span>
                                    </div>
                                </div>
                                <span class="text-muted small flex-shrink-0">&rarr;</span>
                            </a>
                        @endcan

                        @can('manage users')
                            <a href="{{ route('users.create') }}" class="quick-action-link">
                                <div class="d-flex align-items-center gap-3" style="min-width: 0; flex: 1 1 auto;">
                                    <div class="action-icon-box flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                            <circle cx="9" cy="7" r="4"></circle>
                                            <line x1="20" y1="8" x2="20" y2="14"></line>
                                            <line x1="23" y1="11" x2="17" y2="11"></line>
                                        </svg>
                                    </div>
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 13px; color: #0F172A;" title="Add Team Member">Add Team Member</span>
                                        <span class="text-muted small d-block text-truncate" style="font-size: 11.5px; color: #64748B;" title="Register a new developer">Register a new developer</span>
                                    </div>
                                </div>
                                <span class="text-muted small flex-shrink-0">&rarr;</span>
                            </a>
                        @endcan

                        @can('manage client reviews')
                            <a href="{{ route('client-reviews.index') }}" class="quick-action-link">
                                <div class="d-flex align-items-center gap-3" style="min-width: 0; flex: 1 1 auto;">
                                    <div class="action-icon-box flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"></polygon>
                                        </svg>
                                    </div>
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 13px; color: #0F172A;" title="View Client Reviews">View Client Reviews</span>
                                        <span class="text-muted small d-block text-truncate" style="font-size: 11.5px; color: #64748B;" title="Manage testimonials & ratings">Manage testimonials & ratings</span>
                                    </div>
                                </div>
                                <span class="text-muted small flex-shrink-0">&rarr;</span>
                            </a>
                        @endcan

                        @can('manage contact submissions')
                            <a href="{{ route('contact-submissions.index') }}" class="quick-action-link">
                                <div class="d-flex align-items-center gap-3" style="min-width: 0; flex: 1 1 auto;">
                                    <div class="action-icon-box flex-shrink-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                                            <polyline points="22,6 12,13 2,6"></polyline>
                                        </svg>
                                    </div>
                                    <div style="min-width: 0; overflow: hidden; flex: 1 1 auto;">
                                        <span class="fw-semibold text-dark d-block text-truncate" style="font-size: 13px; color: #0F172A;" title="Open Contact Submissions">Open Contact Submissions</span>
                                        <span class="text-muted small d-block text-truncate" style="font-size: 11.5px; color: #64748B;" title="Respond to client inquiries">Respond to client inquiries</span>
                                    </div>
                                </div>
                                <span class="text-muted small flex-shrink-0">&rarr;</span>
                            </a>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
