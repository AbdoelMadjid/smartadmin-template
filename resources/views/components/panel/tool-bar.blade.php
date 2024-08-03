@php
    $attributes = $attributes->class(['panel-toolbar'])->merge([
        //
    ]);
@endphp
<div {{ $attributes }}>
    {{ $slot }}
</div>
