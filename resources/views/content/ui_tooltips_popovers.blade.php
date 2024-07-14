@extends('inc.main')
@section('title', 'Tooltips &amp; Popovers')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'UI Components'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-window'></i> Tooltips & Popovers
                <small>
                    tooltips-and-popovers description
                </small>
            </h1>
        </div>
        tooltips-and-popovers
    </main>
@endsection
