<!DOCTYPE html>
<!--
Template Name:  SmartAdmin Responsive WebApp - Template build with Twitter Bootstrap 4
Version: 4.5.1
Author: Sunnyat A.
Website: http://gootbootstrap.com
Purchase: https://wrapbootstrap.com/theme/smartadmin-responsive-webapp-WB0573SK0?ref=myorange
License: You must have a valid license purchased only from wrapbootstrap.com (link above) in order to legally use this theme for your project.
-->
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('inc._head')
    <link rel="stylesheet" media="screen, print" href="/admin/css/page-login-alt.css">
</head>
<!-- BEGIN Body -->
<!-- Possible Classes

  * 'header-function-fixed'         - header is in a fixed at all times
  * 'nav-function-fixed'            - left panel is fixed
  * 'nav-function-minify'			  - skew nav to maximize space
  * 'nav-function-hidden'           - roll mouse on edge to reveal
  * 'nav-function-top'              - relocate left pane to top
  * 'mod-main-boxed'                - encapsulates to a container
  * 'nav-mobile-push'               - content pushed on menu reveal
  * 'nav-mobile-no-overlay'         - removes mesh on menu reveal
  * 'nav-mobile-slide-out'          - content overlaps menu
  * 'mod-bigger-font'               - content fonts are bigger for readability
  * 'mod-high-contrast'             - 4.5:1 text contrast ratio
  * 'mod-color-blind'               - color vision deficiency
  * 'mod-pace-custom'               - preloader will be inside content
  * 'mod-clean-page-bg'             - adds more whitespace
  * 'mod-hide-nav-icons'            - invisible navigation icons
  * 'mod-disable-animation'         - disables css based animations
  * 'mod-hide-info-card'            - hides info card from left panel
  * 'mod-lean-subheader'            - distinguished page header
  * 'mod-nav-link'                  - clear breakdown of nav links

  >>> more settings are described inside documentation page >>>
 -->

<body>
    <!-- DOC: script to save and load page settings -->
    @include('inc._script_page_settings')

    <div class="blankpage-form-field">
        <div
            class="page-logo m-0 w-100 align-items-center justify-content-center rounded border-bottom-left-radius-0 border-bottom-right-radius-0 px-4">
            <a href="javascript:void(0)" class="page-logo-link press-scale-down d-flex align-items-center">
                <img src="/admin/img/logo.png" alt="SmartAdmin WebApp" aria-roledescription="logo">
                <span class="page-logo-text mr-1">SmartAdmin WebApp</span>
                <i class="fal fa-angle-down d-inline-block ml-1 fs-lg color-primary-300"></i>
            </a>
        </div>
        <div class="card p-4 border-top-left-radius-0 border-top-right-radius-0">
            <form action="/intel_analytics_dashboard">
                <div class="form-group">
                    <label class="form-label" for="username">Username</label>
                    <input type="email" id="username" class="form-control" placeholder="your id or email"
                        value="drlantern@gotbootstrap.com">
                    <span class="help-block">
                        Your unique username to app
                    </span>
                </div>
                <div class="form-group">
                    <label class="form-label" for="password">Password</label>
                    <input type="password" id="password" class="form-control" placeholder="password"
                        value="password123">
                    <span class="help-block">
                        Your password
                    </span>
                </div>
                <div class="form-group text-left">
                    <div class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" id="rememberme">
                        <label class="custom-control-label" for="rememberme"> Remember me for the next 30 days</label>
                    </div>
                </div>
                <button type="submit" class="btn btn-default float-right">Secure login</button>
            </form>
        </div>
        <div class="blankpage-footer text-center">
            <a href="/page_auth_forget"><strong>Recover Password</strong></a> | <a
                href="/page_auth_register"><strong>Register
                    Account</strong></a>
        </div>
    </div>
    <div class="login-footer p-2">
        <div class="row">
            <div class="col col-sm-12 text-center">
                <i><strong>System Message:</strong> You were logged out from 198.164.246.1 on Saturday, March, 2017 at
                    10.56AM</i>
            </div>
        </div>
    </div>
    <video poster="/admin/img/backgrounds/clouds.png" id="bgvid" playsinline autoplay muted loop>
        <source src="/admin/media/video/cc.webm" type="video/webm">
        <source src="/admin/media/video/cc.mp4" type="video/mp4">
    </video>
    <!-- BEGIN Color profile -->
    <!-- this area is hidden and will not be seen on screens or screen readers -->
    <!-- we use this only for CSS color refernce for JS stuff -->
    @include('inc._color_profile')
    <!-- END Color profile -->
    @include('inc._script_bundle')
</body>
<!-- END Body -->

</html>
