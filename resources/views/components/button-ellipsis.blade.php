@props([
    'menuItems' => [], // Array of menu items where each item is an array with 'text' and 'href'
    'iconClass' => 'fal fa-ellipsis-v', // Default icon class
    'dropdownClass' => 'dropdown-menu-right', // Default dropdown alignment
])

<div class="dropdown">
    <button class="btn btn-toolbar-master" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <i class="{{ $iconClass }}"></i>
    </button>
    <div class="dropdown-menu dropdown-menu-animated {{ $dropdownClass }}">
        @foreach ($menuItems as $item)
            @if ($item['divider'] ?? false)
                <div class="dropdown-divider m-0"></div>
            @else
                <a class="dropdown-item" href="{{ $item['href'] }}">{{ $item['text'] }}</a>
            @endif
        @endforeach
    </div>
</div>
