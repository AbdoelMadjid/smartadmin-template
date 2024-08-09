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
        'action' => null,
        'offset' => null,
        'original_title' => null,
        'click' => null,
        'pills' => false,
        'btnicon' => false,
        'circle' => false,
        'confirm' => false,
        'style' => false,
        'block' => false,
        'effect' => false,
        'dropdowntoggle' => false,
        'toogledropdown' => false,
        'dpsize' => null,
        'toggle' => null,
        'haspopup' => null,
        'expanded' => null,
        'collapses' => false,
        'target' => null,
        'controls' => null,
        'display' => null,
        'items' => [],
        'id' => null,
        'datatitle' => null,
        'message' => null,
        'redirecturl' => null,
        'title' => null,
        'btnpanel' => null,
    ])

    @php
        if ($route) {
            $href = route($route);
        } elseif ($url) {
            $href = url($url);
        }

        $attributes = $attributes
        ->class([
            $style ? 'btn btn-outline-' . $color : 'btn btn-' . $color,
            'btn-' . $size => $size,
            'btn-pills' => $pills,
            'btn-icon' => $btnicon,
            'rounded-circle' => $circle,
            'btn-block' => $block,
            'hover-effect-dot' => $effect,
            'dropdown-toggle' => $dropdowntoggle,
            'dropdown-toggle-split' => $toogledropdown,
            'dropdown-' . $dpsize => $dpsize,
            'btn-panel' => $btnpanel,
        ])
        ->merge([
            'type' => !$href ? $type : null,
            'href' => $href,
            'data-dismiss' => $dismiss,
            'data-toggle' => $toggle,
            'data-action' => $action,
            'data-offset' => $offset,
            'data-original-title' => $original_title,
            'aria-haspopup' => $haspopup,
            'aria-expanded' => $expanded,
            'data-display' => $display,
            'aria-controls' => $controls,
            'data-target' => $target,
            'id' => $id,
            'data-title' => $datatitle,
            'data-message' => $message,
            'data-redirect-url' => $redirecturl,
            'title' => $title,
            'wire:click' => $click,
            'onclick' => $confirm
                ? 'confirm(\'' . __('Are you sure?') . '\') || event.stopImmediatePropagation()'
                : null,
        ]);

    @endphp

    <{{ $href ? 'a' : 'button' }} {{ $attributes }}>
        <x-icon fal :name="$icon" />
        {{ $label ?? $slot }}
    </{{ $href ? 'a' : 'button' }}>

    @if ($dropdowntoggle)
        <div
            class="dropdown-menu {{ $dpsize ? 'dropdown-' . $dpsize : '' }} {{ $display ? 'dropdown-menu-right dropdown-menu-lg-left' : '' }}">
            @foreach ($items as $item)
                @if ($item === 'divider')
                    <div class="dropdown-divider"></div>
                @elseif(isset($item['children']))
                    <div class="dropdown-multilevel">
                        <div class="dropdown-item">{{ $item['label'] }}</div>
                        <div class="dropdown-menu">
                            @foreach ($item['children'] as $child)
                                @include('components.dropdown-item', ['item' => $child])
                            @endforeach
                        </div>
                    </div>
                @else
                    <a class="dropdown-item {{ isset($item['disabled']) && $item['disabled'] ? 'disabled' : '' }}"
                        href="{{ $item['href'] ?? '#' }}">{{ $item['label'] }}</a>
                @endif
            @endforeach
        </div>
    @endif
