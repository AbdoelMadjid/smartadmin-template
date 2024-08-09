@props(['target'])

<div {{ $attributes->merge(['class' => 'collapse', 'id' => $target]) }}>
    <div class="card card-body">
        {{ $slot }}
    </div>
</div>
