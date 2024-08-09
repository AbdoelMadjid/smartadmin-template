@props([
    'color' => 'secondary', // Default color is 'secondary' if not provided
    'background' => null, // Optional background color for badge
    'label' => null, // Badge label
    'fill' => false, // Badge fill (pill shape)
    'heading' => null, // Heading level (h1, h2, etc.), if not null, wraps badge in heading
    'border' => false, // Whether to include border
    'href' => null, // Optional href for link badges
    'extraClasses' => '', // Additional classes to add
])

@php
    // Initialize classes array with basic badge classes
    $badgeClasses = ['badge'];

    // Handle background color
    if ($background) {
        $badgeClasses[] = 'bg-' . $background;
    }

    // Handle border
    if ($border) {
        $badgeClasses[] = 'border';
        $badgeClasses[] = 'border-' . $color;
        $badgeClasses[] = 'text-' . $color;
    } else {
        // Handle text color when border is not present
        if (!$extraClasses) {
            $badgeClasses[] = 'badge-' . $color;
        }
    }

    // Handle pill shape
    if ($fill) {
        $badgeClasses[] = 'badge-pill';
    }

    // Add extra classes if provided
    if ($extraClasses) {
        $badgeClasses[] = $extraClasses;
    }

    $attributes = $attributes->class($badgeClasses)->merge([]);

    // Determine if we should render an <a> tag or <span> tag
    $tag = $href ? 'a' : 'span';

@endphp

@if ($heading)
    {{-- Heading with Badge --}}
    <{{ $heading }}>
        {{ $slot }}
        @if ($label)
            <{{ $tag }} {{ $attributes->merge(['href' => $href]) }}>
                {{ $label ?? $slot }}
                </{{ $tag }}>
        @endif
        </{{ $heading }}>
    @else
        {{-- Regular Badge --}}
        <{{ $tag }} {{ $attributes->merge(['href' => $href]) }}>
            {{ $label ?? $slot }}
            </{{ $tag }}>
@endif
