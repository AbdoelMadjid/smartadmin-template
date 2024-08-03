@props([
    'size1' => null,
    'size2' => null,
    'size3' => null,
    'content1' => null,
    'content2' => null,
    'content3' => null,
])


<div class="row">
    <div {{ $attributes->class(['col-12 col-sm-6 col-md-' . $size1 => $size1]) }}>
        {{ $content1 ?? $slot }}
    </div>
    @if ($size2)
        <div {{ $attributes->class(['col-12 col-sm-6 col-md-' . $size2 => $size2]) }}>
            {{ $content2 ?? $slot }}
        </div>
    @endif
    @if ($size3)
        <div {{ $attributes->class(['col-12 col-sm-6 col-md-' . $size3 => $size3]) }}>
            {{ $content3 ?? $slot }}
        </div>
    @endif
</div>
