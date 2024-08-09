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
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
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
                        <x-panel.tool-bar class="ml-2">
                            <x-button btnpanel action="panel-collapse" toggle="tooltip" offset="0,10"
                                original_title="Collapse" />
                            <x-button btnpanel action="panel-fullscreen" toggle="tooltip" offset="0,10"
                                original_title="Fullscreen" />
                            <x-button btnpanel action="panel-close" toggle="tooltip" offset="0,10"
                                original_title="Close" />
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
                    <h5 class="text-info">Component</h5>
                    <code>x-alert-messages</code>
                    <hr>
                    <h5 class="text-info">Example</h5>

                    <code>&lt;x-alert-messages color="danger" dismissible :title="__('Error!!')"&gt;</code>
                    <x-alert-messages color="danger" dismissible :title="__('Error!!')">
                        <strong>Well Done!</strong> You error read this important alert message.
                    </x-alert-messages>

                    <code>&lt;x-alert-messages color="warning" :title="__('Attention!!')"&gt;</code>
                    <x-alert-messages color="warning" :title="__('Attention!!')">
                        <strong>Well Done!</strong> You warning read this important alert message.
                    </x-alert-messages>

                    <code>&lt;x-alert-messages color="info" bground :title="__('Information!!')"&gt;</code>
                    <x-alert-messages color="info" bground dismissible :title="__('Information!!')">
                        <strong>Well Done!</strong> You information read this important alert message.
                    </x-alert-messages>

                    <code>&lt;x-alert-messages color="success" bground :title="__('Success!!')"&gt;</code>
                    <x-alert-messages color="success" bground dismissible :title="__('Success!!')">
                        <strong>Well Done!</strong> You successfully read this important alert message.
                    </x-alert-messages>

                    <code>&lt;x-alert-messages color="dark" bground&gt;</code>
                    <x-alert-messages color="dark" bground>
                        <span class="h6 m-0 fw-700">Task 55% Complete</span>
                        <div class="progress mt-1 progress-xs">
                            <div class="progress-bar progress-bar-striped progress-bar-animated bg-success-600"
                                role="progressbar" style="width: 55%" aria-valuenow="55" aria-valuemin="0"
                                aria-valuemax="100"></div>
                        </div>
                    </x-alert-messages>

                    <code>&lt;x-alert-messages color="primary" :title="__('Pro Tip!!!')"&gt;</code>
                    <x-alert-messages color="secondary" :title="__('Pro Tip!!!')">
                        <p>
                            Laravel has provided one of the interesting features in its templating blade, namely
                            Components.
                            Components allow us to chop up code so that it can be reused without having to rewrite all
                            the
                            parts completely. Similar to sections and layouts which are also part of the blade
                            tempalting
                            feature.
                        </p>
                        <p class="m-0">
                            Follow a slogal with a useful link or call to action <a href="#" target="_blank">Call to
                                action >></a>
                        </p>
                    </x-alert-messages>
                </x-panel.show>
            </x-slot>
            <x-slot name="slot1">
                {{-- COMPONENT DIV OR SPAN --}}
                <x-panel.show title="Component" subtitle="Div or Span">
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
                    <hr>
                    <x-badge color="success" :label="__('News')" />
                    <x-badge color="info" fill :label="__('Test')" />
                </x-panel.show>

                <x-panel.show title="Component" subtitle="Accordion">
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
                    <x-accordion id="accordion1">
                        <x-accordion-item id="item1" title="Email Marketing" :collapsed="false"
                            parentId="accordion1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            ...
                        </x-accordion-item>
                        <x-accordion-item id="item2" title="Online Campaign" :collapsed="true"
                            parentId="accordion1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            ...
                        </x-accordion-item>
                        <x-accordion-item id="item3" title="Electronic Data Management" :collapsed="true"
                            parentId="accordion1">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid.
                            ...
                        </x-accordion-item>
                    </x-accordion>

                </x-panel.show>
            </x-slot>
        </x-column-layout>
    </main>
@endsection
