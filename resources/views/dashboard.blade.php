<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 dashboard-page w-100">
        <div class="py-2 page-header mb-4">
            <ol class="breadcrumb mb-0 bg-transparent">
                <li class="breadcrumb-item"><a class="text-muted" href="{{ route('dashboard') }}" title="home">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page" title="Dashboard">Dashboard</li>
            </ol>
        </div>

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dashboard-hero rounded-4 p-4 p-lg-5 mb-4 text-white overflow-hidden position-relative">
                <div class="row align-items-center g-4 position-relative">
                    <div class="col-lg-8">
                        <span class="dashboard-kicker">Operations Overview</span>
                        <h3 class="display-6 fw-semibold mt-3 mb-3">Keep an eye on leads, projects, and team activity from one place.</h3>
                        <p class="mb-4 text-white-50">You now have contact submissions flowing into the dashboard, reply tracking for support follow-ups, and quick access to the areas that need attention first.</p>
                        <div class="d-flex flex-wrap gap-2">
                            @can('manage contact submissions')
                                <a href="{{ route('contact-submissions.index') }}" class="btn btn-light btn-sm px-3">Open Contact Inbox</a>
                            @endcan
                            @can('manage projects')
                                <a href="{{ route('projects.index') }}" class="btn btn-outline-light btn-sm px-3">Manage Projects</a>
                            @endcan
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="dashboard-highlight-card rounded-4 p-4">
                            <div class="small text-uppercase text-white-50 mb-2">Reply Queue</div>
                            <div class="display-5 fw-bold mb-2">{{ $stats['pending_replies'] }}</div>
                            <div class="text-white-50 mb-3">Contact submissions still waiting for a response</div>
                            <div class="small">
                                New in last 7 days: <span class="fw-semibold text-white">{{ $stats['new_contacts_this_week'] }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4 mb-4">
                <div class="col-md-6 col-xl-3">
                    <div class="dashboard-stat-card stat-users h-100 rounded-4 p-4 bg-white shadow-sm">
                        <div class="dashboard-stat-label">Teams</div>
                        <div class="dashboard-stat-value">{{ $stats['teams'] }}</div>
                        <div class="dashboard-stat-foot">Developer team members in the system</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="dashboard-stat-card stat-projects h-100 rounded-4 p-4 bg-white shadow-sm">
                        <div class="dashboard-stat-label">Projects</div>
                        <div class="dashboard-stat-value">{{ $stats['projects'] }}</div>
                        <div class="dashboard-stat-foot">Tracked portfolio and client work</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="dashboard-stat-card stat-reviews h-100 rounded-4 p-4 bg-white shadow-sm">
                        <div class="dashboard-stat-label">Client Reviews</div>
                        <div class="dashboard-stat-value">{{ $stats['client_reviews'] }}</div>
                        <div class="dashboard-stat-foot">Published or managed testimonials</div>
                    </div>
                </div>
                <div class="col-md-6 col-xl-3">
                    <div class="dashboard-stat-card stat-contacts h-100 rounded-4 p-4 bg-white shadow-sm">
                        <div class="dashboard-stat-label">Contact Submissions</div>
                        <div class="dashboard-stat-value">{{ $stats['contact_submissions'] }}</div>
                        <div class="dashboard-stat-foot">Inbound leads and support requests</div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <div class="col-xl-8">
                    <div class="bg-white overflow-hidden shadow-sm rounded-4 h-100">
                        <div class="p-4 border-bottom d-flex justify-content-between align-items-center flex-wrap gap-2">
                            <div>
                                <h3 class="h5 mb-1">Recent Contact Submissions</h3>
                                <p class="text-muted mb-0">Latest messages from the contact us page with reply status.</p>
                            </div>
                            @can('manage contact submissions')
                                <a href="{{ route('contact-submissions.index') }}" class="btn btn-dark btn-sm">View All</a>
                            @endcan
                        </div>

                        <div class="table-responsive">
                            <table class="table align-middle mb-0">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Subject</th>
                                        <th>Status</th>
                                        <th>Received</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($recentContactSubmissions as $contactSubmission)
                                        <tr>
                                            <td>
                                                <div class="fw-semibold">{{ $contactSubmission->name }}</div>
                                                <div class="text-muted small">{{ $contactSubmission->email }}</div>
                                            </td>
                                            <td>{{ $contactSubmission->subject }}</td>
                                            <td>
                                                @if ($contactSubmission->replied_at)
                                                    <span class="badge bg-success">Replied</span>
                                                @else
                                                    <span class="badge bg-warning text-dark">Pending</span>
                                                @endif
                                            </td>
                                            <td>{{ $contactSubmission->created_at->format('Y-m-d H:i') }}</td>
                                            <td>
                                                @can('manage contact submissions')
                                                    <a href="{{ route('contact-submissions.reply', $contactSubmission) }}" class="btn btn-sm btn-outline-dark">Reply</a>
                                                @else
                                                    <span class="text-muted small">No access</span>
                                                @endcan
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="5" class="text-center text-muted py-4">No contact submissions yet.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

                <div class="col-xl-4">
                    <div class="bg-white overflow-hidden shadow-sm rounded-4 mb-4">
                        <div class="p-4 border-bottom">
                            <h3 class="h5 mb-1">Quick Summary</h3>
                            <p class="text-muted mb-0">A simple snapshot of recent platform activity.</p>
                        </div>
                        <div class="p-4">
                            <div class="dashboard-mini-stat">
                                <span>Pending contact replies</span>
                                <strong>{{ $stats['pending_replies'] }}</strong>
                            </div>
                            <div class="dashboard-mini-stat">
                                <span>New contacts this week</span>
                                <strong>{{ $stats['new_contacts_this_week'] }}</strong>
                            </div>
                            <div class="dashboard-mini-stat">
                                <span>Latest review</span>
                                <strong>{{ $latestReview?->client_name ?? 'No reviews yet' }}</strong>
                            </div>
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm rounded-4 mb-4">
                        <div class="p-4 border-bottom">
                            <h3 class="h5 mb-1">Newest Team Members</h3>
                        </div>
                        <div class="p-4">
                            @forelse ($recentUsers as $user)
                                <div class="dashboard-list-row">
                                    <div>
                                        <div class="fw-semibold">{{ $user->name }}</div>
                                        <div class="text-muted small">{{ $user->email }}</div>
                                    </div>
                                    <span class="text-muted small">{{ $user->created_at->format('M d') }}</span>
                                </div>
                            @empty
                                <div class="text-muted">No team members found.</div>
                            @endforelse
                        </div>
                    </div>

                    <div class="bg-white overflow-hidden shadow-sm rounded-4">
                        <div class="p-4 border-bottom">
                            <h3 class="h5 mb-1">Recent Projects</h3>
                        </div>
                        <div class="p-4">
                            @forelse ($recentProjects as $project)
                                <div class="dashboard-list-row">
                                    <div>
                                        <div class="fw-semibold">{{ $project->name ?: 'Untitled Project' }}</div>
                                        <div class="text-muted small">{{ $project->client ?: 'No client set' }}</div>
                                    </div>
                                    <span class="text-muted small">{{ $project->created_at->format('M d') }}</span>
                                </div>
                            @empty
                                <div class="text-muted">No projects found.</div>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('styles')
        <style>
            .dashboard-page .dashboard-hero {
                background:
                    radial-gradient(circle at top right, rgba(255, 255, 255, 0.18), transparent 30%),
                    linear-gradient(135deg, #111827 0%, #1d4ed8 55%, #0f766e 100%);
            }

            .dashboard-page .dashboard-kicker {
                display: inline-block;
                padding: 0.35rem 0.8rem;
                border-radius: 999px;
                background: rgba(255, 255, 255, 0.12);
                letter-spacing: 0.08em;
                font-size: 0.75rem;
                text-transform: uppercase;
            }

            .dashboard-page .dashboard-highlight-card {
                background: rgba(255, 255, 255, 0.1);
                border: 1px solid rgba(255, 255, 255, 0.18);
                backdrop-filter: blur(8px);
            }

            .dashboard-page .dashboard-stat-card {
                border: 1px solid #eef2f7;
                position: relative;
                overflow: hidden;
            }

            .dashboard-page .dashboard-stat-card::before {
                content: "";
                position: absolute;
                inset: 0 auto auto 0;
                width: 100%;
                height: 4px;
            }

            .dashboard-page .stat-users::before { background: linear-gradient(90deg, #2563eb, #60a5fa); }
            .dashboard-page .stat-projects::before { background: linear-gradient(90deg, #0891b2, #22d3ee); }
            .dashboard-page .stat-reviews::before { background: linear-gradient(90deg, #7c3aed, #c084fc); }
            .dashboard-page .stat-contacts::before { background: linear-gradient(90deg, #ea580c, #fb923c); }

            .dashboard-page .dashboard-stat-label {
                color: #6b7280;
                font-size: 0.9rem;
                margin-bottom: 0.75rem;
            }

            .dashboard-page .dashboard-stat-value {
                font-size: 2rem;
                font-weight: 700;
                line-height: 1;
                color: #111827;
                margin-bottom: 0.5rem;
            }

            .dashboard-page .dashboard-stat-foot {
                color: #6b7280;
                font-size: 0.9rem;
            }

            .dashboard-page .dashboard-mini-stat,
            .dashboard-page .dashboard-list-row {
                display: flex;
                align-items: center;
                justify-content: space-between;
                gap: 1rem;
            }

            .dashboard-page .dashboard-mini-stat {
                padding: 0.85rem 0;
                border-bottom: 1px solid #eef2f7;
            }

            .dashboard-page .dashboard-mini-stat:last-child,
            .dashboard-page .dashboard-list-row:last-child {
                border-bottom: 0;
                padding-bottom: 0;
            }

            .dashboard-page .dashboard-mini-stat:first-child,
            .dashboard-page .dashboard-list-row:first-child {
                padding-top: 0;
            }

            .dashboard-page .dashboard-mini-stat strong {
                color: #111827;
            }

            .dashboard-page .dashboard-list-row {
                padding: 0.85rem 0;
                border-bottom: 1px solid #eef2f7;
            }
        </style>
    @endpush
</x-app-layout>
