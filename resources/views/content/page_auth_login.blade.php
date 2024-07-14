@extends('inc.main_auth')
@section('title', 'Login')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/admin/css/fa-brands.css">
@endsection
@section('pages-content')
    @component('inc._auth_header')
        <a href="/page_auth_register" class="btn-link text-white ml-auto">
            Create Account
        </a>
    @endcomponent
    <div class="flex-1"
        style="background: url(/admin/img/svg/pattern-1.svg) no-repeat center bottom fixed; background-size: cover;">
        <div class="container py-4 py-lg-5 my-lg-5 px-4 px-sm-0">
            <div class="row">
                <div class="col col-md-6 col-lg-7 hidden-sm-down">
                    <h2 class="fs-xxl fw-500 mt-4 text-white">
                        The simplest UI toolkit for developers &amp; programmers
                        <small class="h3 fw-300 mt-3 mb-5 text-white opacity-60">
                            Presenting you with the next level of innovative UX design and engineering. The
                            most modular toolkit available with over 600+ layout permutations. Experience
                            the simplicity of SmartAdmin, everywhere you go!
                        </small>
                    </h2>
                    <a href="#" class="fs-lg fw-500 text-white opacity-70">Learn more &gt;&gt;</a>
                    <div class="d-sm-flex flex-column align-items-center justify-content-center d-md-block">
                        <div class="px-0 py-1 mt-5 text-white fs-nano opacity-50">
                            Find us on social media
                        </div>
                        <div class="d-flex flex-row opacity-70">
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-google-plus-square"></i>
                            </a>
                            <a href="#" class="mr-2 fs-xxl text-white">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-6 col-lg-5 col-xl-4 ml-auto">
                    <h1 class="text-white fw-300 mb-3 d-sm-block d-md-none">
                        Secure login
                    </h1>
                    <div class="card p-4 rounded-plus bg-faded">
                        <form id="js-login" novalidate="" action="/">
                            <div class="form-group">
                                <label class="form-label" for="username">Username</label>
                                <input type="email" id="username" class="form-control form-control-lg"
                                    placeholder="your id or email" value="drlantern@gotbootstrap.com" required>
                                <div class="invalid-feedback">No, you missed this one.</div>
                                <div class="help-block">Your unique username to app</div>
                            </div>
                            <div class="form-group">
                                <label class="form-label" for="password">Password</label>
                                <input type="password" id="password" class="form-control form-control-lg"
                                    placeholder="password" value="password123" required>
                                <div class="invalid-feedback">Sorry, you missed this one.</div>
                                <div class="help-block">Your password</div>
                            </div>
                            <div class="form-group text-left">
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="rememberme">
                                    <label class="custom-control-label" for="rememberme"> Remember me for
                                        the next 30 days</label>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <div class="col-lg-6 pr-lg-1 my-2">
                                    <button type="submit" class="btn btn-info btn-block btn-lg">Sign in
                                        with <i class="fab fa-google"></i></button>
                                </div>
                                <div class="col-lg-6 pl-lg-1 my-2">
                                    <button id="js-login-btn" type="submit" class="btn btn-danger btn-block btn-lg">Secure
                                        login</button>
                                </div>
                            </div>
                            <div class="row no-gutters">
                                <a href="/page_auth_forget"><strong>Recover Password</strong></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
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
