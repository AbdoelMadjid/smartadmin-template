@props(['size' => 'lg', 'title', 'action' => null])
<div class="modal-dialog modal-{{ $size }}">
    <div class="modal-content">
        <form id="form_action" action="{{ $action }}" method="post">
            @csrf
            <div class="modal-header">
                <h5 class="modal-title" id="largeModalLabel">{{ $title }}</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                {{ $slot }}
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                @if ($action)
                    <button type="submit" class="btn btn-primary">Save</button>
                @endif
            </div>
        </form>
    </div>
</div>
