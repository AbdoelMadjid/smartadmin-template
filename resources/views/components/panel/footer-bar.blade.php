@php
    $attributes = $attributes->class(['panel-content d-flex py-2 rounded-bottom border-faded border-left-0 border-right-0 border-bottom-0 text-muted'])->merge([
        //
    ]);
@endphp

<div {{ $attributes }}>
    {{ $slot }}
</div>
