@props([
    'title' => null,
    'subtitle' => null,
    'count' => null,
    'countLabel' => null,
    'pagination' => null,
    'empty' => false,
    'emptyMessage' => 'No records found.',
    'emptyIcon' => null,
    'tableClass' => '',
])

<div class="admin-card">
    @if ($title || isset($headerActions) || $count !== null)
        <div class="admin-card-header d-flex flex-wrap justify-content-between align-items-center gap-2">
            <div>
                @if ($title)
                    <h2 class="editorial-title mb-1" style="font-size: 1.35rem; letter-spacing: -0.02em;">
                        {{ $title }}
                    </h2>
                @endif
                @if ($subtitle)
                    <p class="mb-0 text-muted" style="font-size: 13px; color: #64748B !important;">
                        {{ $subtitle }}
                    </p>
                @endif
            </div>

            @if (isset($headerActions))
                <div>
                    {{ $headerActions }}
                </div>
            @elseif ($count !== null)
                <div>
                    <span class="badge-count-pill">
                        {{ $count }} {{ $countLabel ?? '' }}
                    </span>
                </div>
            @endif
        </div>
    @endif

    <div class="table-responsive">
        <table class="table admin-table align-middle mb-0 {{ $tableClass }}">
            @if (isset($thead))
                <thead>
                    {{ $thead }}
                </thead>
            @endif
            <tbody>
                @if ($empty)
                    <tr>
                        <td colspan="100" class="text-center text-muted py-5">
                            <div class="py-4">
                                @if (isset($emptyIcon))
                                    {{ $emptyIcon }}
                                @else
                                    <svg class="mx-auto mb-2 text-muted" xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" style="color: #94A3B8;">
                                        <circle cx="12" cy="12" r="10"></circle>
                                        <line x1="8" y1="12" x2="16" y2="12"></line>
                                    </svg>
                                @endif
                                <p class="mb-0" style="color: #64748B; font-size: 13.5px;">{{ $emptyMessage }}</p>
                            </div>
                        </td>
                    </tr>
                @else
                    {{ $slot }}
                @endif
            </tbody>
        </table>
    </div>

    @if ($pagination && method_exists($pagination, 'hasPages') && $pagination->hasPages())
        <div class="p-4 border-top" style="border-color: #F1F5F9 !important; background-color: #FFFFFF;">
            <div class="monochrome-pagination-wrapper">
                {{ $pagination->links() }}
            </div>
        </div>
    @endif
</div>
