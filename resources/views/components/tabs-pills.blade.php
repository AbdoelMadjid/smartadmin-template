<!-- resources/views/components/tab-component.blade.php -->

@props(['tabs'])

<div>
    <ul class="nav nav-tabs" role="tablist">
        @foreach ($tabs as $index => $tab)
            <li class="nav-item">
                <a class="nav-link {{ $index === 0 ? 'active' : '' }}" data-toggle="tab" href="#{{ $tab['id'] }}"
                    role="tab">{{ $tab['label'] }}</a>
            </li>
        @endforeach
    </ul>
    <div class="tab-content p-3">
        {{ $slot }}
    </div>
</div>
