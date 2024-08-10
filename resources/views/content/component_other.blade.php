@extends('layouts.main')
@section('title', 'Component Other')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb')
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'dice-d6',
                'heading1' => 'Component',
                'heading2' => 'Other',
                'pagedescription' => 'Components are supporting blade templates on this website',
            ])
            @endcomponent
        </div>

        <x-tips icon="ni ni-blog-read" title="Pro Tip!"
            text="Laravel has provided one of the interesting features in its templating blade, namely Components. Components allow us to chop up code so that it can be reused without having to rewrite all the parts completely. Similar to sections and layouts which are also part of the blade templating feature."
            link="#" linkText="Call to action >>" />

        <x-column-layout :sizes="[6, 6]" :useCards="[false, false]">
            <x-slot name="slot0">
                <x-panel.show title="Panel" subtitle="Example">
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
                        <x-panel.tool-bar class="ml-1">
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                        <x-panel.tool-bar class="ml-1">
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
                    <p>
                        @php
                            $markdownContent = file_get_contents(resource_path('/data/panel.md'));
                        @endphp
                        <pre>
                            {!! htmlspecialchars($markdownContent) !!}
                        </pre>
                    </p>

                    <x-slot name="panelcontentfoot">
                        <div class="custom-control d-flex custom-switch mr-2">
                            <input id="eventlog-switch" type="checkbox" class="custom-control-input" checked="checked">
                            <label class="custom-control-label fw-500" for="eventlog-switch">Switch</label>
                        </div>
                        <div class="custom-control custom-checkbox">
                            <input type="checkbox" class="custom-control-input" id="demoCheck">
                            <label class="custom-control-label" for="demoCheck">Checkbox</label>
                        </div>
                        <x-button type="submit" size="sm" :label="__('Small')" class="ml-auto" />
                    </x-slot>
                </x-panel.show>

                {{-- COMPONENT ALERT MESSAGES --}}
                <x-panel.show title="Alert" subtitle="Messages">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                    </x-slot>
                    <x-tips icon="ni ni-blog-read" title="Pro Tip!"
                        text="Laravel has provided one of the interesting features in its templating blade, namely Components. Components allow us to chop up code so that it can be reused without having to rewrite all the parts completely. Similar to sections and layouts which are also part of the blade templating feature."
                        link="/ui_alerts" linkText="Ui Alert Other >>" />
                    <h5 class="text-info">Component</h5>
                    <code>x-alert-messages</code>
                    <hr>
                    <h5 class="text-info">Example</h5>

                    <div class="demo-v-spacing">
                        <x-alert-messages color="info">
                            <strong>Info!</strong> Alert for passing information to user.
                        </x-alert-messages>
                        <x-alert-messages color="secondary">
                            <strong>Hello World!</strong> This is default alert message box.
                        </x-alert-messages>
                        <x-alert-messages dismissible color="primary">
                            <strong>Heads up!</strong> This alert needs your attention, but it's not super
                            important.
                        </x-alert-messages>
                        <x-alert-messages dismissible closeIcon="times" color="success">
                            <strong>Well Done!</strong> You successfully read this important alert message.
                        </x-alert-messages>
                        <x-alert-messages dismissible closeIcon="trash-alt" color="danger">
                            <strong>Oh snap!</strong> Change a few things up and try submitting again.
                        </x-alert-messages>
                        <x-alert-messages dismissible closeIcon="times-square" color="warning">
                            <strong>Holy guacamole!</strong> You should check in on some of those fields below.
                        </x-alert-messages>

                        <x-alert-messages class="bg-fusion-400 border-0" bground icon="shield-check text-warning"
                            title="Download complete" deskripsi="Install the latest version of SmartAdmin WebApp">
                            <a href="#" class="btn btn-warning btn-w-m fw-500 btn-sm" data-dismiss="alert"
                                aria-label="Close">Install</a>
                        </x-alert-messages>

                    </div>

                </x-panel.show>
            </x-slot>
            <x-slot name="slot1">
                {{-- COMPONENT DIV OR SPAN --}}
                <x-panel.show title="Component" subtitle="Div or Span">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                    </x-slot>
                    <x-title :l="5" :title="__('Example Span')" info class="mb-2" />
                    Script : <code>
                        &lt;x-div :text="__('Pro Tip!')" class="h5" /&gt;
                    </code>
                    <br>
                    HTML : <code>&lt;span class="h5"&gt;Pro Tip!&lt;/span&gt;</code> <br>Output : <x-div
                        :text="__('Pro Tip!')" class="h5" />
                    <hr>
                    <x-title :l="5" :title="__('Example Div')" info class="mb-2" />
                    Script <code>
                        &lt;x-div div :text="__('Pro Tip!')" class="h5" /&gt;
                    </code>
                    <br>
                    HTML : <code>&lt;div class="h5"&gt;Pro Tip!&lt;/div&gt;</code> <br>Output : <x-div div
                        :text="__('Pro Tip!')" class="h5" />
                    <hr>
                </x-panel.show>

                {{-- COMPONENT ICON --}}
                <x-panel.show title="Component" subtitle="Icon">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                    </x-slot>
                    <x-title :l="5" :title="__('Component')" info class="mb-2" />
                    <code>x-icon</code>
                    <hr>
                    <x-title :l="5" :title="__('Variabel')" info class="mb-2" sm />
                    <code>fal = false</code>,
                    <code>far = false</code>,
                    <code>fas = false</code>,
                    <code>fad = false</code>,
                    <code>fab = false</code>,
                    <code>size = "2x - 9x"</code>,
                    <code>color = success, warning, danger, info, primary, secondary</code>,
                    <code>spin = false</code>,
                    <code>pulse = false</code>,
                    <code>beat = false</code>,
                    <code>flip = false</code>,
                    <code>shake = false</code>,
                    <code>rotate_90 = false</code>,
                    <code>rotate_180 = false</code>,
                    <code>rotate_270 = false</code>,
                    <hr>
                    <x-title :l="5" info class="mb-2" sm>Example</x-title>
                    <code>
                        &lt;x-icon fal name="coffee" size="2x"
                        color="danger"
                        /&gt;
                    </code>
                    <x-icon fal name="coffee" size="2x" color="danger" /><br>
                    <code>
                        &lt;x-icon fas name="cog" size="2x"
                        color="primary" spin /&gt;
                    </code>
                    <x-icon fas name="cog" size="2x" color="primary" spin /><br>
                    <code>
                        &lt;x-icon fad name="car-bump" size="2x"
                        color="success" /&gt;
                    </code>
                    <x-icon fad name="car-bump" size="2x" color="success" /><br>
                    <x-slot name="panelcontentfoot">
                        <a href="/icons_fontawesome_light" target="_blank">Reference</a>
                    </x-slot>
                </x-panel.show>

                {{-- COMPONENT NUMBER STYLE --}}
                <x-panel.show title="Component" subtitle="Number Style">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                    </x-slot>
                    {{-- Number Style --}}
                    <h5 class="text-info">Component</h5>
                    <code>x-number-style</code>
                    <hr>
                    <h5 class="text-info">variabel</h5>
                    <code>color = success, warning, danger, info, primary, secondary</code>
                    <hr>
                    <h5 class="text-info">Example</h5>
                    <code>
                        &lt;x-number-style color="danger" :label="__('1')" /&gt;
                    </code>
                    <hr>
                    <x-number-style color="success" :label="__('11')" />
                    <x-number-style color="info" :label="__('25')" />
                    <x-number-style color="danger" :label="__('1')" />
                </x-panel.show>

                {{-- COMPONENT BADGE --}}
                <x-panel.show title="Component" subtitle="Badge">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                    </x-slot>
                    <h5 class="text-info">Component</h5>
                    <code>x-badge</code>
                    <hr>
                    <h5 class="text-info">variabel</h5>
                    <code>color = success, warning, danger, info, primary, secondary</code>
                    <hr>
                    <h5 class="text-info">Example</h5>
                    <code>
                        &lt;x-badge color="success" :label="__('News')" /&gt;
                    </code>
                    <div class="frame-wrap">
                        <div class="demo">
                            <x-badge color="success" :label="__('News')" />
                            <x-badge color="danger" fill="true">
                                {{ __('Warning') }}
                            </x-badge>
                            <x-badge :label="__('Default Color Badge')" />
                        </div>
                    </div>
                    <div class="frame-wrap">
                        <div class="demo">
                            <x-badge heading="h1" color="primary" :label="__('New')"> Example heading </x-badge>
                            <x-badge heading="h2" color="success" :label="__('New')"> Example heading </x-badge>
                            <x-badge heading="h3" color="info" :label="__('New')"> Example heading </x-badge>
                            <x-badge heading="h4" color="danger" :label="__('New')"> Example heading </x-badge>
                            <x-badge heading="h5" color="warning" :label="__('New')"> Example heading </x-badge>
                            <x-badge heading="h6" color="secondary" :label="__('New')"> Example heading </x-badge>
                        </div>
                    </div>
                    <div class="frame-wrap">
                        <div class="demo">
                            <x-button size="lg">
                                Messages
                                <x-badge background="primary-300 ml-2" fill="true">
                                    {{ __('12') }}
                                </x-badge>
                            </x-button>
                            <x-button size="lg" color="secondary">
                                Messages
                                <x-badge background="fusion-500 ml-2" fill="true">
                                    {{ __('12') }}
                                </x-badge>
                            </x-button>
                        </div>
                    </div>
                </x-panel.show>

                {{-- COMPONENT ACCORDION --}}
                <x-panel.show title="Component" subtitle="Accordion">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar>
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
                        </x-panel.tool-bar>
                    </x-slot>
                    <h5 class="text-info">Component</h5>
                    <code>x-accordion</code> and <code>x-accordion-item</code>
                    <hr>
                    <h5 class="text-info">Coding</h5>
                    <div class="fs-lg fw-300 p-1 border-faded rounded mb-g">
                        @php
                            $Accordion = file_get_contents(resource_path('/data/accordion.md'));
                        @endphp
                        <pre>
                        {!! htmlspecialchars($Accordion) !!}
                        </pre>
                    </div>
                    <hr>
                    <h5 class="text-info">Example</h5>
                    <hr>
                    <div class="accordion" id="js_demo_accordion-12">
                        <x-accordion id="js_demo_accordion-12">
                            <x-accordion-item id="js_demo_accordion-12a" title="Medical Records" :collapsed="false"
                                parentId="js_demo_accordion-12" showCollapseIconsRightOther="true">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </x-accordion-item>
                            <x-accordion-item id="js_demo_accordion-12b" title="Online Campaign" :collapsed="true"
                                parentId="js_demo_accordion-12" showCollapseIconsRightOther="true">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </x-accordion-item>
                            <x-accordion-item id="js_demo_accordion-12c" title="Electronic Data Management"
                                :collapsed="true" parentId="js_demo_accordion-12" showCollapseIconsRightOther="true">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry
                                richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food
                                truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a
                                bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh
                                helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                                excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                                aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable
                                VHS.
                            </x-accordion-item>
                        </x-accordion>
                    </div>

                </x-panel.show>
            </x-slot>
        </x-column-layout>
    </main>
@endsection
