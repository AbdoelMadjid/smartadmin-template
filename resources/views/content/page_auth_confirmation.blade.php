@extends('inc.main_auth')
@section('title', 'Locin Confirmation')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('inc._auth_header')
        <span class="text-white opacity-50 ml-auto mr-2 hidden-sm-down">
            Already a member?
        </span>
        <a href="/page_auth_login" class="btn-link text-white ml-auto ml-sm-0">
            Secure Login
        </a>
    @endcomponent
    <div class="flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col-xl-12">
                    <h2 class="fs-xxl fw-500 mt-4 text-white text-center">
                        Thank you registrering! Please check your email.
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-70 hidden-sm-down">
                            We’ve sent a message to <strong>drlantern@gotbootstrap.com</strong> with a link
                            to activate your account.
                        </small>
                    </h2>
                </div>
                <div class="col-xl-6 ml-auto mr-auto">
                    <div class="card p-4 rounded-plus bg-faded">
                        <div class="alert alert-primary text-dark" role="alert">
                            <strong>Heads Up!</strong> Due to server maintenance from 9:30GTA to 12GTA, the
                            verification emails could be delayed by up to 10 minutes.
                        </div>
                        <a href="javascript:void(0);" class="h4">
                            <i class="fal fa-chevron-right mr-2"></i> Didn’t get an email?
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
            {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }} by&nbsp;<a
                href='https://www.gotbootstrap.com' class='text-white opacity-40 fw-500' title='gotbootstrap.com'
                target='_blank'>gotbootstrap.com</a>
        </div>
    </div>
@endsection
