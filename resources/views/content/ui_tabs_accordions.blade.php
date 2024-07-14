@extends('inc.main')
@section('title', 'Tabs &amp; Accordions')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'UI Components'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-window'></i> Tabs & Accordions
                <small>
                    tabs-and-accordions description
                </small>
            </h1>
        </div>
        tabs-and-accordions
    </main>
@endsection
