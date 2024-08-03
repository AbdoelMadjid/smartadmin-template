@props([
    'title' => null,
    'subtitle' => null,
    'id' => null,
    'size' => null,
])

@php
    $attributes = $attributes->class(['modal fade'])->merge([
        'id' => $id,
        'tabindex' => '-1',
        'role' => 'dialog',
        'aria-hidden' => 'true',
    ]);
@endphp

<div {{ $attributes }}>
    <div class="modal-dialog {{ $size ?? '' }}" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    {{ $title }}
                    @if ($subtitle)
                        <small class="m-0 text-muted">
                            {{ $subtitle }}
                        </small>
                    @endif
                </h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true"><i class="fal fa-times"></i></span>
                </button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>
