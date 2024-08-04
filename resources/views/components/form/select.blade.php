@props(['label' => null, 'value' => '', 'id' => 'select_'.rand(), 'placeholder' => $label, 'options' => []])

<div class="mb-3">
    @if ($label)
        <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    @endif
    <select {{ $attributes->merge(['class' => 'mb-3 form-select form-select-sm']) }} id="{{ $id }}" aria-label="{{ $id }}">
        <option selected value="">{{ $placeholder }}</option>
        @foreach ($options as $key => $item)
            <option value="{{ $item }}" @selected($value == $item)>{{ $key }}</option>
        @endforeach
        {{ $slot }}
    </select>
</div>