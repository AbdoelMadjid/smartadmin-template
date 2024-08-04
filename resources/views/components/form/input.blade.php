{{-- @props(['name', 'label', 'value' => '', 'id' => $name, 'type' => 'text'])
<div class="form-group">
    <label for="{{ $id }}" class="form-label">{{ $label }}</label>
    <input type="{{ $type }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'form-control']) }}
        name="{{ $name }}" value="{{ $value }}">
</div> --}}

@props([
    'name',
    'label',
    'value' => '',
    'id' => $name,
    'type' => 'text',
    'inline' => false, // default is non-inline
])

@php
    $formGroupClass = $inline ? 'form-group row' : 'form-group';
    $labelClass = $inline ? 'col-form-label col-12 col-lg-4 form-label text-lg-right' : 'form-label';
    $inputWrapperClass = $inline ? 'col-12 col-lg-8' : '';
@endphp

<div class="{{ $formGroupClass }}">
    <label for="{{ $id }}" class="{{ $labelClass }}">{{ $label }}</label>
    <div class="{{ $inputWrapperClass }}">
        <input type="{{ $type }}" id="{{ $id }}" {{ $attributes->merge(['class' => 'form-control']) }}
            name="{{ $name }}" value="{{ $value }}">
    </div>
</div>
