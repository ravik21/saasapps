@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'text-success text-center']) }}>
        {{ $status }}
    </div>
@endif
