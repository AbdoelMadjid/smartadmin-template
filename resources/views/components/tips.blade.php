@props([
    'icon' => 'ni ni-blog-read',
    'title' => 'Pro Tip!',
    'text' => '',
    'link' => '#',
    'linkText' => 'Call to action >>',
])

<div {{ $attributes->merge(['class' => 'alert alert-primary']) }}>
    <div class="d-flex flex-start w-100">
        <div class="mr-2 hidden-md-down">
            <span class="icon-stack icon-stack-lg">
                <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                <i class="{{ $icon }} icon-stack-1x opacity-100 color-white"></i>
            </span>
        </div>
        <div class="d-flex flex-fill">
            <div class="flex-fill">
                <h5 class="h5">{{ $title }}</h5>
                <p>{{ $text }}</p>
                <p class="m-0">
                    <a href="{{ $link }}" target="_blank">{{ $linkText }}</a>
                </p>
            </div>
        </div>
    </div>
</div>
