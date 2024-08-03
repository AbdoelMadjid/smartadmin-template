.

# COMPONENT BUTTON DISPLAY

@props([
'icon' => null,
'label' => null,
'color' => 'primary',
'size' => null,
'type' => 'button',
'route' => null,
'url' => null,
'href' => null,
'dismiss' => null,
'toggle' => null,
'click' => null,
'pills' => false,
'btnicon' => false,
'circle' => false,
'confirm' => false,
'style' => false,
'block' => false,
'effect' => false,
'dropdowntoggle' => false,
'toggle' => null,
'haspopup' => null,
'expanded' => null,
'display' => null,
'items' => [],
'id' => null,
'datatitle' => null,
'message' => null,
'redirecturl' => null,
'title' => null,
])

@php
if ($route) {
        $href = route($route);
} elseif ($url) {
        $href = url($url);
}

    $attributes = $attributes->class(
        [$style ? 'btn btn-outline-' . $color : 'btn btn-' . $color,
        'btn-' . $size => $size,
        'btn-pills' => $pills,
        'btn-icon' => $btnicon,
        'rounded-circle' => $circle,
        'btn-block' => $block,
        'hover-effect-dot' => $effect,
        'dropdown-toggle' => $dropdowntoggle]
    )->merge([
        'type' => !$href ? $type : null,
        'href' => $href,
        'data-dismiss' => $dismiss,
        'data-toggle' => $toggle,
        'aria-haspopup' => $haspopup,
        'aria-expanded' => $expanded,
        'data-display' => $display,
        'id' => $id,
        'data-title' => $datatitle,
        'data-message' => $message,
        'data-redirect-url' => $redirecturl,
        'title' => $title,
        'wire:click' => $click,
        'onclick' => $confirm ? 'confirm(\'' . __('Are you sure?') . '\') || event.stopImmediatePropagation()' : null,
    ]);

@endphp

<{{ $href ? 'a' : 'button' }} {{ $attributes }}>
<x-icon fal :name="$icon" />

    {{ $label ?? $slot }}
    </{{ $href ? 'a' : 'button' }}>

    @if ($expanded)
        <div class="dropdown-menu {{ $display ? 'dropdown-menu-right dropdown-menu-lg-left' : '' }}">
            @foreach ($items as $item)
                @if ($item === 'divider')
                    <div class="dropdown-divider"></div>
                @else
                    {{-- Make href dynamic --}}
                    <a class="dropdown-item" href="{{ $item['href'] ?? '#' }}">{{ $item['label'] }}</a>
                @endif
            @endforeach
        </div>
    @endif
