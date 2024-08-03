@props([
    'id_panel' => null,
    'title' => null,
    'subtitle' => null,
    'randomtext' => null,
    'paneltoolbar' => false,
    'panelcontentbar' => false,
    'panelcontentfoot' => false,
    'tagpanel' => false,
])
@php
    $randomText = generateRandomText(5);
@endphp


<div id="panel-{{ $id_panel ?? $randomText }}" class="panel shadow-5">
    <div class="panel-hdr">
        <x-title :l="2" :title="__($title)">
            @if ($subtitle)
                {{ $subtitle }}
            @endif
        </x-title>
        @if ($paneltoolbar)
            {{ $paneltoolbar }}
        @endif
    </div>
    <div class="panel-container show">
        @if ($panelcontentbar)
            {{ $panelcontentbar }}
        @endif
        <div class="panel-content">
            @if ($tagpanel)
                <x-panel.tag> {{ $tagpanel }} </x-panel.tag>
            @endif

            {{ $slot }}
        </div>
        @if ($panelcontentfoot)
            <x-panel.footer-bar>{{ $panelcontentfoot }} </x-panel.footer-bar>
        @endif
    </div>
</div>
