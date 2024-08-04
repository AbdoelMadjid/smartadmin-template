@props([
    'sizes' => [],
    'useCards' => [], // Array untuk menentukan apakah card digunakan untuk setiap slot
])

<div class="row">
    @foreach ($sizes as $index => $size)
        <div class="col-12 col-sm-6 col-md-{{ $size }}">
            @php
                $useCard = $useCards[$index] ?? false;
            @endphp

            @if ($useCard)
                <div class="card mb-g p-2">
                    <div class="card-body">
                        @isset(${'slot' . $index})
                            {{ ${'slot' . $index} }}
                        @else
                            {{ $slot }}
                        @endisset
                    </div>
                </div>
            @else
                @isset(${'slot' . $index})
                    {{ ${'slot' . $index} }}
                @else
                    {{ $slot }}
                @endisset
            @endif
        </div>
    @endforeach
</div>
