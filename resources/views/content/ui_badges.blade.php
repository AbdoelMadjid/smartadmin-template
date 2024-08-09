@extends('layouts.main')
@section('title', 'Badges')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb', ['category_1' => 'UI Components'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-window'></i> Badges
                <small>
                    Small and adaptive tag for adding context to just about any content.
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
                        <span class="h5">Conveying meaning to assistive technologies</span>
                        <br> Using color to add meaning only provides a visual indication, which will not be conveyed to
                        users of assistive technologies – such as screen readers. Ensure that information denoted by the
                        color is either obvious from the content itself (e.g. the visible text), or is included through
                        alternative means, such as additional text hidden with the <code>.sr-only</code> class.
                        <br>
                        <br> Learn more about this component on bootstrap's
                        <a href="https://getbootstrap.com/docs/4.5/components/badge/" target="_blank">official
                            documentation</a>.
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-6">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Badge <span class="fw-300"><i>scaling</i></span>
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
                                Badges scale to match the size of the immediate parent element by using relative font sizing
                                and <code>em</code> units
                            </div>
                            <div class="demo-v-spacing">
                                <x-badge heading="h1" color="primary" :label="__('New')"> Example heading </x-badge>
                                <x-badge heading="h2" color="success" :label="__('New')"> Example heading </x-badge>
                                <x-badge heading="h3" color="info" :label="__('New')"> Example heading </x-badge>
                                <x-badge heading="h4" color="danger" :label="__('New')"> Example heading </x-badge>
                                <x-badge heading="h5" color="warning" :label="__('New')"> Example heading </x-badge>
                                <x-badge heading="h6" color="secondary" :label="__('New')"> Example heading </x-badge>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Badge <span class="fw-300"><i>in buttons</i></span>
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
                                Badges scale to match the size of the immediate parent element by using relative font sizing
                                and <code>em</code> units
                            </div>
                            <h5 class="frame-heading">
                                Regular buttons
                            </h5>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-button size="lg" color="primary"> Messages
                                        <x-badge background="primary-300 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button size="lg" color="secondary"> Messages
                                        <x-badge background="fusion-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button size="lg" color="default"> Messages
                                        <x-badge background="primary-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                </div>
                                <div class="demo">
                                    <x-button color="default"> Messages
                                        <x-badge background="primary-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button color="success"> Messages
                                        <x-badge background="success-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button color="warning"> Messages
                                        <x-badge background="warning-200 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                </div>
                                <div class="demo">
                                    <x-button size="sm" color="info"> Messages
                                        <x-badge background="info-700 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button size="sm" color="danger"> Messages
                                        <x-badge background="danger-800 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button size="sm" color="dark"> Messages
                                        <x-badge background="fusion-300 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Outline buttons
                            </h5>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-button style size="lg" color="primary"> Messages
                                        <x-badge background="primary-300 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button style size="lg" color="secondary"> Messages
                                        <x-badge background="fusion-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button style size="lg" color="default"> Messages
                                        <x-badge background="primary-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                </div>
                                <div class="demo">
                                    <x-button style color="default"> Messages
                                        <x-badge background="primary-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button style color="success"> Messages
                                        <x-badge background="success-500 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button style color="warning"> Messages
                                        <x-badge background="warning-200 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                </div>
                                <div class="demo">
                                    <x-button style size="sm" color="info"> Messages
                                        <x-badge background="info-700 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button style size="sm" color="danger"> Messages
                                        <x-badge background="danger-800 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                    <x-button style size="sm" color="dark"> Messages
                                        <x-badge background="fusion-300 ml-2"> {{ __('4') }} </x-badge>
                                    </x-button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-3" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Icon <span class="fw-300"><i>badges</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Use utility classes with <code>.btn-icon</code> to place the badge
                            </div>
                            <div class="demo demo-h-spacing mb-4">
                                <x-button href="javascript:void(0);" color="primary" icon="print" size="lg"
                                    btnicon circle class="position-relative js-waves-off">
                                    <x-badge background="border border-light rounded-pill bg-danger-500"
                                        extra-classes="position-absolute pos-top pos-right" :label="__('9')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="secondary" icon="volume-mute fs-md"
                                    size="lg" btnicon class="position-relative js-waves-off">
                                    <x-badge background="border border-light rounded-pill bg-success-700"
                                        extra-classes="position-absolute pos-bottom pos-right" :label="__('18')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="default" icon="envelope" size="lg"
                                    btnicon circle class="position-relative js-waves-off">
                                    <x-badge background="border border-light bg-warning-700"
                                        extra-classes="position-absolute pos-top pos-left" :label="__('99')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="success" icon="download" size="lg"
                                    btnicon circle style class="position-relative js-waves-off">
                                    <x-badge background="border border-success rounded-pill bg-primary-500"
                                        extra-classes="position-absolute pos-bottom pos-right" :label="__('100..')" />
                                </x-button>

                            </div>
                            <div class="demo demo-h-spacing mb-4">
                                <x-button href="javascript:void(0);" color="primary" icon="print" btnicon circle
                                    class="position-relative js-waves-off">
                                    <x-badge background="border border-light rounded-pill bg-danger-500"
                                        extra-classes="position-absolute pos-top pos-right" :label="__('16')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="secondary" icon="volume-mute fs-md" btnicon
                                    class="position-relative js-waves-off">
                                    <x-badge background="border border-light rounded-pill bg-success-700"
                                        extra-classes="position-absolute pos-bottom pos-right" :label="__('4')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="default" icon="envelope" btnicon circle
                                    class="position-relative js-waves-off">
                                    <x-badge background="border border-light bg-warning-700"
                                        extra-classes="position-absolute pos-top pos-left" :label="__('4')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="success" icon="download" btnicon circle style
                                    class="position-relative js-waves-off">
                                    <x-badge background="border border-success rounded-pill bg-primary-500"
                                        extra-classes="position-absolute pos-bottom pos-right" :label="__('99+')" />
                                </x-button>
                            </div>
                            <div class="demo demo-h-spacing mb-4">
                                <x-button href="javascript:void(0);" color="primary" icon="print" size="sm"
                                    btnicon circle class="position-relative js-waves-off">
                                    <x-badge background="border border-light rounded-pill bg-danger-500"
                                        extra-classes="position-absolute pos-top pos-right" :label="__('4')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="secondary" icon="volume-mute fs-md"
                                    size="sm" btnicon class="position-relative js-waves-off">
                                    <x-badge background="border border-light rounded-pill bg-success-700"
                                        extra-classes="position-absolute pos-bottom pos-right" :label="__('0')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="default" icon="envelope" size="sm"
                                    btnicon circle class="position-relative js-waves-off">
                                    <x-badge background="border border-light bg-warning-700"
                                        extra-classes="position-absolute pos-top pos-left" :label="__('7')" />
                                </x-button>

                                <x-button href="javascript:void(0);" color="success" icon="download" size="sm"
                                    btnicon circle style class="position-relative js-waves-off">
                                    <x-badge background="border border-success rounded-pill bg-primary-500"
                                        extra-classes="position-absolute pos-bottom pos-right" :label="__('4')" />
                                </x-button>

                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-4" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Status <span class="fw-300"><i>badges</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                These badges are unique and triggered by wrapping an element with <code>.status</code>
                                class. Comes with two badge sizes <code>.status-sm</code> and the default
                                <code>.status</code>. Comes in 3 colors, <code>.status-danger</code>,
                                <code>.status-warning</code>, and <code>.status-success</code>
                            </div>
                            <div class="demo">
                                <span class="status d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle"
                                        alt="...">
                                </span>
                                <span class="status status-danger d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle"
                                        alt="...">
                                </span>
                                <span class="status status-success d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle"
                                        alt="...">
                                </span>
                                <span class="status status-warning d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png" class="profile-image rounded-circle"
                                        alt="...">
                                </span>
                            </div>
                            <div class="demo">
                                <span class="status status-sm d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png"
                                        class="profile-image profile-image-md rounded-circle" alt="...">
                                </span>
                                <span class="status status-sm status-danger d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png"
                                        class="profile-image profile-image-md rounded-circle" alt="...">
                                </span>
                                <span class="status status-sm status-success d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png"
                                        class="profile-image profile-image-md rounded-circle" alt="...">
                                </span>
                                <span class="status status-sm status-warning d-inline-block">
                                    <img src="/assets/img/demo/avatars/avatar-c.png"
                                        class="profile-image profile-image-md rounded-circle" alt="...">
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div id="panel-5" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Contextual <span class="fw-300"><i>variations</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Add any of the below mentioned modifier classes to change the appearance of a badge.
                            </div>
                            <div class="frame-heading">
                                Default
                            </div>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-badge color="primary" :label="__('Primary')" />
                                    <x-badge color="secondary" :label="__('Secondary')" />
                                    <x-badge color="success" :label="__('Success')" />
                                    <x-badge color="danger" :label="__('Danger')" />
                                    <x-badge color="warning" :label="__('Warning')" />
                                    <x-badge color="info" :label="__('Info')" />
                                    <x-badge color="light" :label="__('Light')" />
                                    <x-badge color="dark" :label="__('Dark')" />
                                </div>
                            </div>
                            <div class="frame-heading">
                                Border utility
                            </div>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-badge color="primary" border="true" :label="__('Primary')" />
                                    <x-badge color="secondary" border="true" :label="__('Secondary')" />
                                    <x-badge color="success" border="true" :label="__('Success')" />
                                    <x-badge color="danger" border="true" :label="__('Danger')" />
                                    <x-badge color="warning" border="true" :label="__('Warning')" />
                                    <x-badge color="info" border="true" :label="__('Info')" />
                                    <x-badge color="light" border="true" :label="__('Light')" />
                                    <x-badge color="dark" border="true" :label="__('Dark')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-6" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Pill <span class="fw-300"><i>badges</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Use the <code>.badge-pill</code> modifier class to make badges more rounded (with a larger
                                border-radius and additional horizontal padding).
                            </div>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-badge color="primary" :label="__('Primary')" fill="true" />
                                    <x-badge color="secondary" :label="__('Secondary')" fill="true" />
                                    <x-badge color="success" :label="__('Success')" fill="true" />
                                    <x-badge color="danger" :label="__('Danger')" fill="true" />
                                    <x-badge color="warning" :label="__('Warning')" fill="true" />
                                    <x-badge color="info" :label="__('Info')" fill="true" />
                                    <x-badge color="light" :label="__('Light')" fill="true" />
                                    <x-badge color="dark" :label="__('Dark')" fill="true" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-7" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Links <span class="fw-300"><i>example</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Add <code>.badge-*</code> class on a hyperlink element to convert it to actionable badges
                                with hover and focus states
                            </div>
                            <div class="demo">
                                <x-badge href="#" color="primary" :label="__('Link Badge - Primary')" />
                                <x-badge href="#" color="secondary" :label="__('Link Badge - Secondary')" />
                                <x-badge href="#" color="success" :label="__('Link Badge - Success')" />
                                <x-badge href="#" color="danger" :label="__('Link Badge - Danger')" />
                                <x-badge href="#" color="warning" :label="__('Link Badge - Warning')" />
                                <x-badge href="#" color="info" :label="__('Link Badge - Info')" />
                                <x-badge href="#" color="light" :label="__('Link Badge - Light')" />
                                <x-badge href="#" color="dark" :label="__('Link Badge - Dark')" />
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-8" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Nested <span class="fw-300"><i>badge</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                Use the included <a href="utilities_color_pallet.html" target="_blank">color utilities</a>
                                to change background and text colors. Below are examples of nested badge with different
                                background colors
                            </div>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <span class="badge bg-primary-100">
                                        <span class="badge bg-primary-200">
                                            <span class="badge bg-primary-300">
                                                <span class="badge bg-primary-400">
                                                    <span class="badge bg-primary-500">
                                                        <span class="fs-xl fw-300">Nested Badge 1</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="badge bg-primary-400">
                                        <span class="badge bg-info-500">
                                            <span class="badge bg-success-500">
                                                <span class="badge bg-warning-500">
                                                    <span class="badge bg-danger-500">
                                                        <span class="fs-xl fw-300">Nested Badge 2</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                    <span class="badge bg-danger-400 badge-pill">
                                        <span class="badge bg-warning-500 badge-pill">
                                            <span class="badge bg-info-500 badge-pill">
                                                <span class="badge bg-success-500 badge-pill">
                                                    <span class="badge bg-primary-500 badge-pill">
                                                        <span class="fs-xl fw-300">99+</span>
                                                    </span>
                                                </span>
                                            </span>
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="panel-9" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Badge <span class="fw-300"><i>header</i></span>
                        </h2>
                        <div class="panel-toolbar">
                            <button class="btn btn-panel" data-action="panel-collapse" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Collapse"></button>
                            <button class="btn btn-panel" data-action="panel-fullscreen" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Fullscreen"></button>
                            <button class="btn btn-panel" data-action="panel-close" data-toggle="tooltip"
                                data-offset="0,10" data-original-title="Close"></button>
                        </div>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-tag">
                                We use <code>.badge-icon</code> with a combination of other utility classes to create a link
                                badge. This class will auto turncate overflow giving you a nice clean look without any
                                hassle
                            </div>
                            <div class="demo">
                                <a href="javascript:void(0);"
                                    class="height-2 d-inline-flex align-items-center justify-content-center position-relative m-0 text-primary h2">
                                    I am a large text
                                    <x-badge extra-classes="badge-icon position-relative ml-2" :label="__('9999')" />
                                </a>
                                <br>
                                <a href="javascript:void(0);"
                                    class="width-auto height-2 d-inline-flex align-items-center justify-content-center position-relative m-0 h4 text-primary">
                                    I am smaller text
                                    <x-badge extra-classes="badge-icon position-relative ml-2" :label="__('8888')" />
                                </a>
                                <br>
                                <a href="javascript:void(0);"
                                    class="width-auto height-2 d-inline-flex align-items-center justify-content-center position-relative m-0 text-primary">
                                    I am normal text
                                    <x-badge extra-classes="badge-icon position-relative ml-2" :label="__('9999')" />
                                </a>
                            </div>
                            <div class="demo">
                                <a href="javascript:void(0);"
                                    class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h1 text-primary">
                                    <i class="fal fa-bell"></i>
                                    <x-badge extra-classes="badge-icon pos-top pos-right" :label="__('17')" />
                                </a>
                                <a href="javascript:void(0);"
                                    class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h1 text-primary">
                                    <i class="fal fa-envelope"></i>
                                    <x-badge extra-classes="badge-icon pos-top pos-right" :label="__('17')" />
                                </a>
                                <a href="javascript:void(0);"
                                    class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h3 text-primary">
                                    <i class="fal fa-bell"></i>
                                    <x-badge extra-classes="badge-icon pos-top pos-right" :label="__('10')" />
                                </a>
                                <a href="javascript:void(0);"
                                    class="width-3 height-2 d-inline-flex align-items-center justify-content-center position-relative h3 text-primary">
                                    <i class="fal fa-envelope"></i>
                                    <x-badge extra-classes="badge-icon pos-top pos-right" :label="__('13')" />
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
