<h1 class="subheader-title">
    @isset($icon)
        <i class='subheader-icon fal fa-{{ $icon }}'></i>
    @endisset

    {{ $heading1 ?? View::yieldContent('title', 'My App') }}

    @isset($heading2)
        <span class='fw-300'>{{ $heading2 }}</span>
    @endisset

    @isset($sup)
        <sup class='badge badge-primary fw-500'>{{ $sup }}</sup>
    @endisset

    @isset($pagedescription)
        <small>
            {!! $pagedescription !!}
        </small>
    @endisset
</h1>
{{ $slot }}
