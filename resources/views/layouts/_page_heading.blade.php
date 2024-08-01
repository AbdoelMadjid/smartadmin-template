<h1 class="subheader-title">
    @isset($icon)
        <i class='subheader-icon fal fa-{{ $icon }}'></i>
    @endisset
    @isset($heading1)
        {{ $heading1 }}
    @endisset
    @isset($heading2)
        <span class='fw-300'>{{ $heading2 }}</span>
        @isset($sup)
            <sup class='badge badge-primary fw-500'>{{ $sup }}</sup>
        @endisset
    @endisset
    @isset($pagedescription)
        <small>
            {{ $pagedescription }}
        </small>
    @endisset
</h1>
{{ $slot }}
