@props([
    'div' => false,
    'text' => null,
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
    $attributes = $attributes->class([''])->merge([
        //
    ]);
@endphp

<{{ $div ? 'div' : 'span' }} {{ $attributes }}>
    {{ $text ?? $slot }}
    </{{ $div ? 'div' : 'span' }}>
