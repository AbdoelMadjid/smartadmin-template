@props([
    'icon' => null,
    'label' => null,
    'color' => 'default',
    'dismissible' => false,
    'title' => null,
    'bground' => false,
    'iconalt' => null,
])

@php
    $attributes = $attributes->class(['alert alert-' . $color . ' fade show', 'bg-' . $color . '-500' => $bground, 'alert-dismissible' => $dismissible])->merge([
        //
    ]);

    switch ($color) {
        case 'warning':
            $icon = 'exclamation-circle';
            break;
        case 'danger':
            $icon = 'times-circle';
            break;
        case 'info':
            $icon = 'info-circle';
            break;
        case 'success':
            $icon = 'check-circle';
            break;
        default:
            $color = 'secondary';
            break;
    }
@endphp

<div {{ $attributes }} role = 'alert'>
    <div class="d-flex align-items-center">
        @if ($icon)
            <div class="alert-icon">
                <x-icon fal :name="$icon" />
            </div>
        @elseif($iconalt)
            <div class="alert-icon">
                <x-icon fal :name="$iconalt" />
            </div>
        @else
        @endif
        <div class="flex-1 ml-1">
            @if ($title)
                <span class="h4 color-{{ $color }}-900">{!! $title !!}</span>
                <br>
            @endif
            {{ $label ?? $slot }}
        </div>
    </div>

    @if ($dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true"><i class="fal fa-times"></i></span>
        </button>
    @endif
</div>
