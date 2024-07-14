<ol class="breadcrumb page-breadcrumb">
    <li class="breadcrumb-item"><a href="/dashboard">{{ $profileApp->app_nama ?? '' }}</a></li>
    @isset($category_1)
        <li class="breadcrumb-item">{{ $category_1 }}</li>
    @endisset
    @isset($category_2)
        <li class="breadcrumb-item">{{ $category_2 }}</li>
    @endisset
    <li class="breadcrumb-item active">@yield('title', 'My App')</li>
    <li class="position-absolute pos-top pos-right d-none d-sm-block">
        {{-- <span class="js-get-date"><span> --}}
        <span>
            <script src="/admin/js/tanggal.js"></script>
            [
            @php
                echo toHijriah(now());
            @endphp
            ]
        </span>
    </li>
</ol>
