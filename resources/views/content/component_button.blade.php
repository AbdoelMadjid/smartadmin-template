@extends('layouts.main')
@section('title', 'Component Button')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb')
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'dice-d6',
                'heading1' => 'Component',
                'heading2' => 'Button',
                'sup' => 'ADDON',
                'pagedescription' => 'Components are supporting blade templates on this website',
            ])
            @endcomponent
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
                        <x-div div :text="__('Pro Tip!')" class="h5" />
                        <p>
                            Laravel has provided one of the interesting features in its templating blade, namely Components.
                            Components allow us to chop up code so that it can be reused without having to rewrite all the
                            parts completely. Similar to sections and layouts which are also part of the blade tempalting
                            feature.
                        </p>
                        <p class="m-0">
                            Follow a slogal with a useful link or call to action <a href="#" target="_blank">Call to
                                action >></a>
                        </p>
                    </div>
                </div>
            </div>
        </div>



        <x-column-layout :sizes="[6, 6]" :useCards="[true, false]">
            <x-slot name="slot0">
                <h2>
                    Support
                </h2>
                <p class="mb-g">
                    SmartAdmin is designed and documented to be easy to develop with and to use. Inevitably, as with
                    any
                    complex Theme library, you might have a question about how to perform a certain action, or wish
                    to
                    support the project to ensure that any issues in the Theme are found and dealt with quickly.
                </p>
                <!-- Trigger Modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                    Open Modal
                </button>

                <!-- Modal -->
                <x-modal id="exampleModal" title="Edit Profile" subtitle="Make changes to your profile details"
                    size="modal-lg">

                    <form>
                        <div class="form-group">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" value="john_doe">
                        </div>
                        <div class="form-group">
                            <label for="email" class="form-label">Email address</label>
                            <input type="email" class="form-control" id="email" name="email"
                                value="john@example.com">
                        </div>
                    </form>

                </x-modal>



                <h3>
                    Maintenance and support
                </h3>
                <p>
                    When integrating SmartAdmin in a large project, core to your project or company, you want to be
                    assured
                    that SmartAdmin and its extensions will be actively maintained with enhanced features being
                    added to the
                    core library, new plugins/extensions developed and any issues that are found being resolved
                    quickly and
                    efficiently.
                </p>
                <p>
                    Maintenance and support contracts have a duration of <strong>6 months</strong>, at which point
                    it can be
                    renewed to maintain the support level you require.
                </p>
                <p class="mb-g">
                    <strong>For more information on premium support and purchasing support credits, please find our
                        <a href="/intel_introduction">contact details here</a>.</strong>
                </p>
                <h3>
                    Free community support
                </h3>
                <p>
                    Free support is available for SmartAdmin through the <a href="https://support.gotbootstrap.com/"
                        target="_blank">SmartAdmin's Community forums</a>. Answers are provided freely by the
                    community
                    whenever possible. The forums are a busy place and it is not always possible to ensure that
                    every
                    question will receive an answer from the community. To increase the likelihood of receiving a
                    reply,
                    when posting a question please ensure that you provide a link to a test case, screenshot or
                    formatted
                    codes, showing the problem so it can be debugged.
                </p>
            </x-slot>
            <x-slot name="slot1">
                <form id="form_action" action="#" method="post">
                    <x-panel.show title="Default" subtitle="Example">
                        <x-slot name="paneltoolbar">
                            <x-panel.tool-bar>
                                <select class="custom-select custom-select-sm">
                                    <option selected="">Select</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </x-panel.tool-bar>
                            <x-panel.tool-bar class="ml-2">
                                <div class="d-flex position-relative ml-auto" style="max-width: 8rem;">
                                    <i class="fal fa-search position-absolute pos-left fs-lg px-2 py-1 mt-1 fs-xs"></i>
                                    <input type="text" class="form-control form-control-sm pl-5" placeholder="Search">
                                </div>
                            </x-panel.tool-bar>
                            <x-panel.tool-bar class="ml-2">
                                <x-button-ellipsis :menuItems="[
                                    ['text' => 'Kembali', 'href' => '/dashboard'],
                                    ['text' => 'Another action', 'href' => '#'],
                                    ['divider' => true],
                                    ['text' => 'Something else here', 'href' => '#'],
                                ]" />
                            </x-panel.tool-bar>
                        </x-slot>
                        <x-slot name="tagpanel">
                            All panels needs to have an unique ID in order to use the panel funtions.
                            <code>.panel</code> is a container with no padding, <code>.panel-hdr</code> has a
                            <code>min-height</code> value and default <code>flexbox</code> properties. The
                            <code>.panel-toolbar</code> is inserted into <code>.panel-hdr</code> for extra elements. The
                            <code>.panel-container</code> wraps <code>.panel-content</code> which has a predefined
                            padding.
                        </x-slot>


                        <x-form.input name="name" value="name" label="Name" inline="true" />
                        <x-form.input name="url" value="url" label="Url" inline="true" />
                        <x-form.input name="category" value="category" label="Category" inline="true" />
                        <x-form.input name="icon" value="icon" label="Icon" inline="true" />
                        <x-form.input name="orders" value="orders" label="Orders" inline="true" />

                        <x-form.input name="password" label="Password" type="password" inline="true" />

                        <button type="submit" class="btn btn-primary btn-sm ml-auto">Submit</button>

                        <x-slot name="panelcontentfoot">
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="demoCheck">
                                <label class="custom-control-label" for="demoCheck">Checkbox</label>
                            </div>
                            <x-button type="submit" size="sm" :label="__('Save')" class="ml-auto" />
                        </x-slot>
                    </x-panel.show>
                </form>
            </x-slot>
        </x-column-layout>


    </main>
@endsection
