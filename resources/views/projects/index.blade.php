<x-app-layout>
    <x-slot name="header">
        <h1 class="editorial-title mb-0" style="font-family: var(--font-serif-display); font-size: 1.85rem; font-weight: 400; color: #111827; letter-spacing: -0.025em; line-height: 1.2;">
            {{ __('Projects') }}
        </h1>
    </x-slot>

    <div class="py-3 w-100">
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
                    <li class="breadcrumb-item active" aria-current="page">Projects</li>
                </ol>
            </nav>
            @can('manage projects')
                <div class="d-flex align-items-center">
                    <a href="{{ route('projects.create') }}" class="btn-primary-pill">
                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg>
                        <span>Add Project</span>
                    </a>
                </div>
            @endcan
        </div>

        <!-- Shared Minimal Table Component -->
        <x-admin-table 
            title="Portfolio & Case Study Projects" 
            subtitle="Manage dynamic case studies, portfolio showcases, technologies and client testimonials."
            :count="$projects->total()" 
            countLabel="{{ Str::plural('project', $projects->total()) }}"
            :pagination="$projects"
            :empty="$projects->isEmpty()"
            emptyMessage="No projects found.">

            <x-slot name="thead">
                <tr>
                    <th scope="col" style="min-width: 180px; max-width: 240px;">Title</th>
                    <th scope="col" style="width: 60px;">Visual</th>
                    <th scope="col" style="min-width: 140px;">Category</th>
                    <th scope="col" style="min-width: 130px;">Live URL</th>
                    <th scope="col" style="min-width: 160px;">Technologies</th>
                    <th scope="col" style="width: 100px;">Status</th>
                    <th scope="col" style="width: 70px;">Order</th>
                    <th scope="col" class="text-end text-sm-start text-nowrap" style="width: 140px;">Actions</th>
                </tr>
            </x-slot>

            @foreach ($projects as $project)
                <tr>
                    <!-- Title: Natural wrap -->
                    <td style="max-width: 240px;">
                        <span class="fw-semibold text-dark d-block" style="font-size: 13.5px; color: #0F172A !important; line-height: 1.35;">
                            {{ $project->title ?: $project->name }}
                        </span>
                        @if ($project->client && $project->client !== ($project->title ?: $project->name))
                            <span class="text-muted small d-block" style="font-size: 11.5px; color: #64748B;">
                                {{ $project->client }}
                            </span>
                        @endif
                    </td>

                    <!-- Visual / Logo: 44px with robust fallback -->
                    <td>
                        <div class="position-relative" style="width: 44px; height: 44px;">
                            @if (!empty($project->image_url))
                                <img src="{{ $project->image_url }}" 
                                     alt="{{ $project->title ?: $project->name }}" 
                                     class="rounded-3 object-fit-contain border p-1 bg-white" 
                                     style="width: 44px; height: 44px; border-color: #E2E8F0 !important;"
                                     onerror="this.style.display='none'; this.nextElementSibling.classList.remove('d-none');">
                                <div class="d-none rounded-3 border d-flex align-items-center justify-content-center bg-light text-muted fw-semibold" style="width: 44px; height: 44px; border-color: #E2E8F0 !important; font-size: 13px; color: #64748B;">
                                    {{ strtoupper(substr($project->title ?: $project->name, 0, 2)) }}
                                </div>
                            @else
                                <div class="rounded-3 border d-flex align-items-center justify-content-center bg-light" style="width: 44px; height: 44px; border-color: #E2E8F0 !important;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                        <rect x="2" y="7" width="20" height="14" rx="2" ry="2"></rect>
                                        <path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"></path>
                                    </svg>
                                </div>
                            @endif
                        </div>
                    </td>

                    <!-- Category -->
                    <td>
                        <span class="badge-designation-pill" style="font-size: 11.5px; padding: 2px 8px;">
                            {{ $project->category ?: ($project->client ?: 'General') }}
                        </span>
                    </td>

                    <!-- Link: Compact & clickable -->
                    <td>
                        @if ($project->link)
                            <a href="{{ $project->link }}" target="_blank" rel="noopener noreferrer" class="d-inline-flex align-items-center gap-1 text-decoration-none text-truncate" style="max-width: 140px; font-size: 12.5px; color: #475569;" title="{{ $project->link }}">
                                <span class="text-truncate">{{ parse_url($project->link, PHP_URL_HOST) ?: Str::limit($project->link, 18) }}</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="flex-shrink: 0; opacity: 0.6;">
                                    <path d="M18 13v6a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h6"></path>
                                    <polyline points="15 3 21 3 21 9"></polyline>
                                    <line x1="10" y1="14" x2="21" y2="3"></line>
                                </svg>
                            </a>
                        @else
                            <span class="text-muted small">—</span>
                        @endif
                    </td>

                    <!-- Technology: Minimal monochrome tags -->
                    <td>
                        <div class="d-flex flex-wrap gap-1" style="max-width: 200px;">
                            @php
                                $techList = $project->technologies;
                            @endphp
                            @if (!empty($techList) && count($techList) > 0)
                                @foreach (array_slice($techList, 0, 3) as $tech)
                                    <span class="badge-designation-pill" style="font-size: 10.5px; padding: 2px 7px;">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                                @if (count($techList) > 3)
                                    <span class="badge-count-pill" style="font-size: 10px; padding: 2px 5px;" title="{{ implode(', ', $techList) }}">
                                        +{{ count($techList) - 3 }}
                                    </span>
                                @endif
                            @else
                                <span class="text-muted small">—</span>
                            @endif
                        </div>
                    </td>

                    <!-- Status -->
                    <td>
                        @if ($project->is_published)
                            <span class="badge rounded-pill" style="background-color: #0F172A; color: #FFFFFF; font-size: 11px; font-weight: 500; padding: 3px 9px;">
                                Published
                            </span>
                        @else
                            <span class="badge rounded-pill" style="background-color: #F8FAFC; color: #64748B; border: 1px solid #E2E8F0; font-size: 11px; font-weight: 500; padding: 3px 9px;">
                                Draft
                            </span>
                        @endif
                    </td>

                    <!-- Order -->
                    <td>
                        <span class="badge-count-pill" style="font-size: 11px;">
                            #{{ $project->sort_order }}
                        </span>
                    </td>

                    <!-- Actions: Horizontally aligned -->
                    <td class="text-end text-sm-start text-nowrap">
                        @can('manage projects')
                            <div class="d-inline-flex align-items-center gap-2 text-nowrap">
                                <a href="{{ route('projects.edit', $project->id) }}" class="btn-action-edit">
                                    Edit
                                </a>
                                <button type="button" 
                                        class="btn-action-delete"
                                        @click="$dispatch('open-delete-modal', {
                                            action: '{{ route('projects.destroy', $project->id) }}',
                                            title: 'Delete Project?',
                                            name: '{{ addslashes($project->title ?: $project->name) }}',
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
    </div>
</x-app-layout>
