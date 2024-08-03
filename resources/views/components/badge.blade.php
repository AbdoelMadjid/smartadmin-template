@props([
    'color' => null,
    'label' => null,
    'fill' => false,
])
@php
    $attributes = $attributes->class(['badge badge-' . $color => $color, 'badge-pill' => $fill])->merge([
        //
    ]);
@endphp

{{-- <span class="badge badge-primary">New</span> --}}

@if ($color)
    <span {{ $attributes }}>
        {{ $label ?? $slot }}
    </span>
@endif
