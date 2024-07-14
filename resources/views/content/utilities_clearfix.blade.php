@extends('inc.main')
@section('title', 'Clearfix')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/theme-demo.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Utilities'])
        <div class="subheader">
            @component('inc._page_heading', [
                'icon' => 'window',
                'heading1' => 'Clearfix',
            ])
                @slot('pagedescription')
                    Quickly and easily clear floated content within a container by adding a clearfix utility.
                @endslot
            @endcomponent
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Clearfix <span class="fw-300"><i>example</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip" data-offset="0,10"
                                data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Easily clear <code>float</code>s by adding <code>.clearfix</code> <strong>to the parent
                                    element</strong>. Can also be used as a mixin.
                            </div>
                            <div class="bg-info clearfix">
                                <button type="button" class="btn btn-secondary float-left">Example Button floated
                                    left</button>
                                <button type="button" class="btn btn-secondary float-right">Example Button floated
                                    right</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
