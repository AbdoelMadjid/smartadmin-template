@props([
    'icon' => null,
    'label' => null,
    'color' => 'default',
    'dismissible' => false,
    'iconstack' => false,
    'title' => null,
    'deskripsi' => null,
    'bground' => false,
    'closeIcon' => null, // New prop for close button icon
])

@php
    $attributes = $attributes
        ->class([
            'alert alert-' . $color . ' fade show',
            'bg-' . $color . '-500' => $bground,
            'alert-dismissible' => $dismissible,
        ])
        ->merge([
            //
        ]);
@endphp

<div {{ $attributes }} role="alert">
    <div class="d-flex align-items-center">
        @if ($icon)
            <div class="alert-icon">
                @if ($iconstack)
                    {!! $iconstack !!}
                @else
                    <x-icon fal :name="$icon" />
                @endif
            </div>
        @endif
        @if ($title)
            <div class="flex-1">
                <span class="h5">{!! $title !!}</span>
                <br>
                {!! $deskripsi !!}
            </div>
        @endif
        {!! $label ?? $slot !!}
    </div>

    @if ($dismissible)
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">
                @if ($closeIcon)
                    <i class="fal fa-{{ $closeIcon }}"></i>
                @else
                    ×
                @endif
            </span>
        </button>
    @endif
</div>
