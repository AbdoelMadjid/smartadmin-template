@extends('layouts.main_auth')
@section('title', 'Auto Locked')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/assets/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('layouts._auth_header')
        <a href="/page_auth_register" class="btn-link text-white ml-auto">
            Create Account
        </a>
    @endcomponent
    <div class="d-flex flex-1"
        style="background: url(/assets/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0 text-white d-flex align-items-center justify-content-center">
            <form id="js-login" role="form" class="text-center text-white mb-5 pb-5" action="/intel_analytics_dashboard">
                <div class="py-3">
                    <img src="/assets/img/demo/avatars/avatar-admin-lg.png"
                        class="img-responsive rounded-circle img-thumbnail" alt="thumbnail">
                </div>
                <div class="form-group">
                    <h3>
                        Dr. Codex Lantern
                        <small>
                            drlantern@gotbootstrap.com
                        </small>
                    </h3>
                    <p class="text-white opacity-50">Enter password to unlock screen</p>
                    <div class="input-group input-group-lg">
                        <input type="text" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <button class="btn btn-success shadow-0" type="button" id="button-addon5"><i
                                    class="fal fa-key"></i></button>
                        </div>
                    </div>
                </div>
                <div class="text-center">
                    <a href="/page_auth_login_alt" class="text-white opacity-90">Not Dr. Codex Lantern ?</a>
                </div>
            </form>
            <div class="position-absolute pos-bottom pos-left pos-right p-3 text-center text-white">
                {{ $profileApp->app_tahun ?? '' }} © {{ $profileApp->app_nama ?? '' }} by&nbsp;<a
                    href='https://www.gotbootstrap.com' class='text-white opacity-40 fw-500' title='gotbootstrap.com'
                    target='_blank'>gotbootstrap.com</a>
            </div>
        </div>
    </div>
@endsection
@section('pages-script')
    <script>
        $("#js-login-btn").click(function(event) {

            // Fetch form to apply custom Bootstrap validation
            var form = $("#js-login")

            if (form[0].checkValidity() === false) {
                event.preventDefault()
                event.stopPropagation()
            }

            form.addClass('was-validated');
            // Perform ajax submit here...
        });
    </script>
@endsection
