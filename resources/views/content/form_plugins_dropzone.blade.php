@extends('inc.main')
@section('title', 'Dropzone')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/formplugins/dropzone/dropzone.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('inc._page_breadcrumb', ['category_1' => 'Form Plugins'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-credit-card-front'></i> Dropzone<sup
                    class='badge badge-primary fw-500'>ADDON</sup>
                <small>
                    DropzoneJS is an open source library that provides drag’n’drop file uploads with image previews
                </small>
            </h1>
        </div>
        <div class="alert alert-primary">
            <div class="d-flex flex-start w-100">
                <div class="mr-2 hidden-md-down">
                    <span class="icon-stack icon-stack-lg">
                        <i class="base base-6 icon-stack-3x opacity-100 color-primary-500"></i>
                        <i class="base base-10 icon-stack-2x opacity-100 color-primary-300 fa-flip-vertical"></i>
                        <i class="ni ni-blog-read icon-stack-1x opacity-100 color-white"></i>
                    </span>
                </div>
                <div class="d-flex flex-fill">
                    <div class="flex-fill">
                        <span class="h5">About</span>
                        <p>Dropzone will find all form elements with the class dropzone, automatically attach itself to it,
                            and upload files dropped into it to the specified action attribute. If you want your file
                            uploads to work even without JavaScript, you can include an element with the class fallback that
                            dropzone will remove if the browser is supported </p>
                        <p class="m-0">
                            Find in-depth, guidelines, tutorials and more on Dropzone's <a
                                href="https://www.dropzonejs.com/" target="_blank">Official Documentation</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Panel <span class="fw-300"><i>Title</i></span>
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
                                Dropzone does not handle your file uploads on the server. You have to implement the code to
                                receive and store the file yourself. See the section Server side implementation for more
                                information.
                            </div>
                            <form action="/upload" class="dropzone needsclick" style="min-height: 7rem;">
                                <div class="dz-message needsclick">
                                    <i class="fal fa-cloud-upload text-muted mb-3"></i> <br>
                                    <span class="text-uppercase">Drop files here or click to upload.</span>
                                    <br>
                                    <span class="fs-sm text-muted">This is just a demo dropzone. Selected files are
                                        <strong>not</strong> actually uploaded.</span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
@section('pages-script')
    <script src="/admin/js/formplugins/dropzone/dropzone.js"></script>
@endsection
