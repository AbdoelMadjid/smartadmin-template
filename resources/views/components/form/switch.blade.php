@props([
    'id' => 'customSwitch',
    'checked' => false,
    'name' => '',
    'value' => '1',
    'labelChecked' => 'Ya',
    'labelUnchecked' => 'Tidak',
])

<div class="custom-control d-flex custom-switch mr-2">
    <input id="{{ $id }}" type="checkbox" class="custom-control-input" {{ $checked ? 'checked' : '' }}
        name="{{ $name }}" value="{{ $value }}" data-label-checked="{{ $labelChecked }}"
        data-label-unchecked="{{ $labelUnchecked }}" {{ $attributes }}>
    <label class="custom-control-label fw-500" for="{{ $id }}">
        {{ $checked ? $labelChecked : $labelUnchecked }}
    </label>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const switchElement = document.getElementById('{{ $id }}');
        const labelElement = switchElement.nextElementSibling;

        function updateLabel() {
            const labelChecked = switchElement.getAttribute('data-label-checked');
            const labelUnchecked = switchElement.getAttribute('data-label-unchecked');

            if (switchElement.checked) {
                labelElement.textContent = labelChecked;
            } else {
                labelElement.textContent = labelUnchecked;
            }
        }

        // Initialize label on page load
        updateLabel();

        // Update label on switch change
        switchElement.addEventListener('change', updateLabel);
    });
</script>
