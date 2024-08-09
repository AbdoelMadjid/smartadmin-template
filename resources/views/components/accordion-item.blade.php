<div class="card">
    <div class="card-header">
        <a href="javascript:void(0);" class="card-title {{ $attributes->get('collapsed') ? 'collapsed' : '' }}"
            data-toggle="collapse" data-target="#{{ $id }}"
            aria-expanded="{{ $attributes->get('collapsed') ? 'false' : 'true' }}">
            {{ $title }}
            <span class="ml-auto">
                <span class="collapsed-reveal">
                    <i class="fal fa-minus-circle text-danger fs-xl"></i>
                </span>
                <span class="collapsed-hidden">
                    <i class="fal fa-plus-circle text-success fs-xl"></i>
                </span>
            </span>
        </a>
    </div>
    <div id="{{ $id }}" class="collapse {{ $attributes->get('collapsed') ? '' : 'show' }}"
        data-parent="#{{ $parentId }}">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
