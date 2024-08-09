@props([
    'vertical' => false,
    'size' => null, // Bisa diisi dengan 'xs', 'sm', 'lg' atau null untuk ukuran standar
    'buttons' => [],
])

@php
    $groupClasses = $vertical ? 'btn-group-vertical' : 'btn-group';

    // Tambahkan kelas ukuran jika $size diberikan
    if ($size) {
        $groupClasses .= ' btn-group-' . $size;
    }
@endphp

<div {{ $attributes->merge(['class' => $groupClasses, 'role' => 'group', 'aria-label' => 'Button group']) }}>
    @foreach ($buttons as $button)
        @php
            $buttonColor = $button['color'] ?? 'secondary'; // Default color is 'secondary' if not provided
        @endphp

        @if (isset($button['dropdown']) && $button['dropdown'])
            <div class="btn-group" role="group">
                <button id="btnGroup{{ $loop->index }}" type="button" class="btn btn-{{ $buttonColor }} dropdown-toggle"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    {{ $button['label'] ?? 'Dropdown' }}
                </button>
                <div class="dropdown-menu" aria-labelledby="btnGroup{{ $loop->index }}">
                    @foreach ($button['items'] as $item)
                        <a class="dropdown-item" href="{{ $item['url'] ?? '#' }}">{{ $item['label'] }}</a>
                    @endforeach
                </div>
            </div>
        @else
            @if (isset($button['url']))
                <a href="{{ $button['url'] }}"
                    class="btn btn-{{ $buttonColor }}">{{ $button['label'] ?? 'Button' }}</a>
            @else
                <button type="button" class="btn btn-{{ $buttonColor }}">{{ $button['label'] ?? 'Button' }}</button>
            @endif
        @endif
    @endforeach
</div>
