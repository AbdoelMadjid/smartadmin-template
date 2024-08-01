@extends('layouts.main')
@section('title', 'Dashboard')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/assets/css/fa-solid.css">
    <link rel="stylesheet" media="screen, print" href="/assets/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/assets/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb')
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'home',
                'heading1' => 'Dashboard',
                'heading2' => 'Admin',
                'sup' => 'ADDON',
                'pagedescription' => 'Administration with dashboard',
            ])
                <div class="subheader-block d-lg-flex align-items-center">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Selamat Datang</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-primary-500">
                            Abdul Madjid
                        </span>
                    </div>
                </div>
                <div
                    class="subheader-block d-lg-flex align-items-center border-faded border-right-0 border-top-0 border-bottom-0 ml-3 pl-3">
                    <div class="d-inline-flex flex-column justify-content-center mr-3">
                        <span class="fw-300 fs-xs d-block opacity-50">
                            <small>Status</small>
                        </span>
                        <span class="fw-500 fs-xl d-block color-danger-500">
                            MASTER
                        </span>
                    </div>
                </div>
            @endcomponent
        </div>

        <div class="fs-lg fw-300 p-5 bg-white border-faded rounded mb-g shadow-5">
            <div class="input-group input-group-lg mb-g">
                <input type="text" class="form-control shadow-inset-2" placeholder="Search Threads">
                <div class="input-group-append">
                    <span class="input-group-text"><i class="fal fa-search"></i></span>
                </div>
            </div>
            <h3 class="mb-g">
                Hi Everyone,
            </h3>
            <p>
                Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or just peeking around
                the corner, and WOW, did you deliver! After reading each and everyone of your replies on the survey, we have
                taken each piece of praise and criticism to heart to scope out our plans for Smart All feedback will
                be used to make your favorite theme that much better, but these were some of the highlights.
            </p>
            <p>
                A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is and a revolutionary
                view on what a good bootstrap based template should be, having something new to look at can make anyone feel
                invigorated. And let's be honest, who doesn't like a modern update of your favorite theme! While most you
                are still happy with the current variations, around 50% of you have asked for vue.js support. With this
                framework rapidly gaining popularity it is surely one to include in the family of frameworks! And, last, but
                certainly not least, a very large majority of a staggering 90% wanted more plugins and regular updates.
            </p>
            <p>
                SmartAdmin takes great care to ensure that valuable and popular plugins are supported as much as possible on
                a drop-in basis, meaning without doing heavy modifications to extend the look and feel of your favorite
                admin template :) . And if the plugin is in demand enough, we won't hesitate to put in the hours to support
                the look and feel of Smart
            </p>
            <p>
                But how you ask? Well in order to make the next version of SmartAdmin the best ever and to re-deliver on our
                promise of continued support and quality, we wrote the theme from the ground-up using the latest Bootstrap
                practises. As a result we are better able to support new frameworks as they come up and ensure that plugin
                support is quick and reliable. In addition we have partnered up with some of the communities best developers
                to ensure that our tailor made variations are of top-notch quality and follow the principles that we at
                SmartAdmin take to heart.
            </p>
            <p>
                We're really confident that SmartAdmin 4.0 will bring back that first theme experience while still keeping
                the familiarity that you have grown used to. It's a brand new theme, but with all the things you love and
                then some. And to ensure that you our loyal customers get this experience first-hand, we will be publishing
                the HTML update free-of-charge as an update to your current SmartAdmin license!
            </p>
            <p>
                Last but not least, we would like to thank each and everyone of you, our loyal customers, for your patience
                and continued support in Smart Without you this would not have been possible!
            </p>
            <p>
                Sincerely,<br>
                The SmartAdmin Team<br>
            </p>
        </div>
    </main>
@endsection
