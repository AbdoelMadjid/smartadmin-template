@if (isset($item['children']))
    <div class="dropdown-multilevel">
        <div class="dropdown-item">{{ $item['label'] }}</div>
        <div class="dropdown-menu">
            @foreach ($item['children'] as $child)
                @include('components.dropdown-item', ['item' => $child])
            @endforeach
        </div>
    </div>
@else
    <a class="dropdown-item {{ isset($item['disabled']) && $item['disabled'] ? 'disabled' : '' }}"
        href="{{ $item['href'] ?? '#' }}">{{ $item['label'] }}</a>
@endif
