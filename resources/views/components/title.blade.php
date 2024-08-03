@props([
    'icon' => null,
    'title' => null,
    'subtitle' => null,
    'l' => null,
    'info' => false,
    'primary' => false,
    'secondary' => false,
    'warning' => false,
    'danger' => false,
    'success' => false,
    'xxl' => false,
    'xl' => false,
    'lg' => false,
    'md' => false,
    'sm' => false,
    'xs' => false,
    'nano' => false,
])

@php
    $attributes = $attributes->class(['fw-600', 'fs-xxl' => $xxl, 'fs-xl' => $xl, 'fs-lg' => $lg, 'fs-md' => $md, 'fs-sm' => $sm, 'fs-xs' => $xs, 'fs-nano' => $nano, 'text-warning' => $warning, 'text-success' => $success, 'text-info' => $info, 'text-primary' => $primary, 'text-danger' => $danger, 'text-secondary' => $secondary])->merge([
        //
    ]);
@endphp

<{{ $l ? "h{$l}" : 'span' }} {{ $attributes }}>
    @if ($icon)
        <x-icon fal :name="$icon" class="mr-2" />
    @endif
    @if ($title)
        {{ $title }}
    @endif
    <span class="fw-300"><i>{{ $subtitle ?? $slot }}</i></span>
    </{{ $l ? "h{$l}" : 'span' }}>
