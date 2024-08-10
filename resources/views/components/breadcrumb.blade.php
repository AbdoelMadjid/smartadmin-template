@props(['items' => [], 'active' => ''])

<ol class="breadcrumb">
    @foreach ($items as $item)
        <li class="breadcrumb-item">
            <a href="{{ $item['url'] }}">{{ $item['text'] }}</a>
        </li>
    @endforeach
    @if ($active)
        <li class="breadcrumb-item active">{{ $active }}</li>
    @endif
</ol>
