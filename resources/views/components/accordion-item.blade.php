<div class="card">
    <div class="card-header">
        <a href="javascript:void(0);" class="card-title {{ $attributes->get('collapsed') ? 'collapsed' : '' }}"
            data-toggle="collapse" data-target="#{{ $id }}"
            aria-expanded="{{ $attributes->get('collapsed') ? 'false' : 'true' }}">
            @if (isset($icon))
                <i class="fa fal-{{ $icon }} width-2 fs-xl"></i>
            @endif
            @if ($showCollapseIconsLeft ?? false)
                <span class="mr-2">
                    <span class="collapsed-reveal">
                        <i class="fal fa-minus fs-xl"></i>
                    </span>
                    <span class="collapsed-hidden">
                        <i class="fal fa-plus fs-xl"></i>
                    </span>
                </span>
            @endif

            {{ $title }}

            @if ($showCollapseIconsRight ?? false)
                <span class="ml-auto">
                    <span class="collapsed-reveal">
                        <i class="fal fa-minus fs-xl"></i>
                    </span>
                    <span class="collapsed-hidden">
                        <i class="fal fa-plus fs-xl"></i>
                    </span>
                </span>
            @endif

            @if ($showCollapseIconsRightOther ?? false)
                <span class="ml-auto">
                    <span class="collapsed-reveal">
                        <i class="fal fa-minus-circle text-danger fs-xl"></i>
                    </span>
                    <span class="collapsed-hidden">
                        <i class="fal fa-plus-circle text-success fs-xl"></i>
                    </span>
                </span>
            @endif

            @if ($showCollapseIconsChevron ?? false)
                <span class="ml-auto">
                    <span class="collapsed-reveal">
                        <i class="fal fa-chevron-up fs-xl"></i>
                    </span>
                    <span class="collapsed-hidden">
                        <i class="fal fa-chevron-down fs-xl"></i>
                    </span>
                </span>
            @endif

        </a>
    </div>
    <div id="{{ $id }}" class="collapse {{ $attributes->get('collapsed') ? '' : 'show' }}"
        data-parent="#{{ $parentId }}">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div>
