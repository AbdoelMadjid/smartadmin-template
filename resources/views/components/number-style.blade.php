@props([
    'color' => null,
    'label' => null,
])
@php
    $attributes = $attributes->class(['d-inline-flex width-1 height-1 rounded-circle fw-500 mr-2 align-items-center justify-content-center border border-' . $color => $color, 'text-' . $color => $color])->merge([
        //
    ]);
@endphp

@if ($color)
    <span {{ $attributes }}>
        {{ $label ?? $slot }}
    </span>
@endif
