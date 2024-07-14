@extends('inc.main_auth')
@section('title', 'Error Page')
@section('pages-content')
    @component('inc._auth_header')
        <a href="/dashboard" class="btn-link text-white ml-auto">
            Dashboard
        </a>
    @endcomponent
    <div class="d-flex flex-1"
        style="background: url(/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
            <div class="h-alt-hf d-flex flex-column align-items-center justify-content-center text-center">
                {{--                             <div class="py-3">
                <img src="/img/perbaikan.webp" alt="thumbnail">
            </div> --}}
                <h1 class="page-error color-fusion-50">
                    ERROR 404
                    <small class="fw-500">
                        Something <u>went</u> wrong!
                    </small>
                </h1>
                <div class="mt-2">
                    <a href="/" class="btn btn-success">
                        <span class="fw-700">Logout</span>
                    </a>
                    <a href="/dashboard" class="btn btn-primary">
                        <span class="fw-700">Dashboard</span>
                    </a>
                </div>
            </div>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }}
            </div>
        </div>
    </div>
@endsection
