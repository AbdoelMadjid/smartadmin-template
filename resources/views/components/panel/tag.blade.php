@php
    $attributes = $attributes->class(['panel-tag'])->merge([
        //
    ]);
@endphp
<div {{ $attributes }}>
    {{ $slot }}
</div>
