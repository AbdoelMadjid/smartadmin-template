@extends('layouts.main')
@section('title', 'Component Button')
@section('pages-css')
    <link rel="stylesheet" media="screen, print" href="/assets/css/theme-demo.css">
    <link rel="stylesheet" media="screen, print" href="/assets/css/notifications/toastr/toastr.css">
@endsection
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb')
        <div class="subheader">
            @component('layouts._page_heading', [
                'icon' => 'dice-d6',
                'heading1' => 'Component',
                'heading2' => 'Button',
                'pagedescription' => 'Components are supporting blade templates on this website',
            ])
            @endcomponent
        </div>

        <x-column-layout :sizes="[6, 6]" :useCards="[false, false]">
            <x-slot name="slot0">
                {{-- COMPONENT BUTTON --}}
                <x-panel.show title="Button" subtitle="Component">
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
                    @php
                        $markdownContent = file_get_contents(resource_path('/data/button.md'));
                    @endphp
                    <pre>
                    {!! htmlspecialchars($markdownContent) !!}
                    </pre>
                </x-panel.show>

                {{-- BUTTON SIZE --}}
                <x-panel.show title="Button" subtitle="size">
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
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size lg (large)</h5>
                            <code>&lt;x-button size="lg" :label="__('Large')" /&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button size="lg" :label="__('Large')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size (default)</h5>
                            <code>&lt;x-button :label="__('Default')" /&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button :label="__('Default')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size sm (small)</h5>
                            <code>&lt;x-button size="sm" :label="__('Small')" /&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button size="sm" :label="__('Small')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size xs (smallest)</h5>
                            <code>&lt;x-button size="xs" :label="__('Smallest')" /&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button size="xs" :label="__('Smallest')" />
                        </x-slot>
                    </x-column-layout>
                </x-panel.show>

                {{-- BUTTON BLOCK --}}
                <x-panel.show title="Button" subtitle="Block">
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
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size lg (large) + pills </h5>
                            <code>&lt;x-button size="lg" block pills&gt;Large&lt;/x-button&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button size="lg" block pills :label="__('Large')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size (default) + style</h5>
                            <code>&lt;x-button block style&gt;Default&lt;/x-button&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button block style :label="__('Default')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size sm (small)</h5>
                            <code>&lt;x-button color="danger" size="sm" block :label="__('Small')"
                                /&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button color="danger" size="sm" block :label="__('Small')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name="slot0">
                            <h5 class="text-info">size xs (smallest) + href="#"</h5>
                            <code>&lt;x-button href="#" size="xs" block :label="__('Smallest')"
                                /&gt;</code>
                        </x-slot>
                        <x-slot name="slot1">
                            <x-button href="#" size="xs" block :label="__('Smallest')" />
                        </x-slot>
                    </x-column-layout>
                </x-panel.show>

                {{-- Component Bootbox --}}
                <x-panel.show title="Button" subtitle="Bootbox">
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
                    <h5 class="text-info">Konfirmasi Ya atau Tidak</h5>
                    <code>
                        &lt;x-button href="#" icon="sign-out-alt" id="ya-atau-tidak"
                        data-title="Konfirmasi"
                        data-message="Apakah Anda yakin ingin logout?" data-redirect-url="/"
                        title="Logout"
                        :label="__('Logout')" /&gt;
                    </code>
                    <hr>
                    HTML :
                    <pre>
&lt;a href="#" id="ya-atau-tidak" data-title="Konfirmasi"
data-message="Apakah Anda yakin ingin logout?" data-redirect-url="/" title="Logout"
class="btn btn-info waves-effect waves-themed"&gt;
&lt;i class="fal  fa-sign-out-alt mr-2"&gt;&lt;/i&gt;
Logout
&lt;/a&gt;
                    </pre>
                    <x-button href="#" icon="sign-out-alt mr-1" id="ya-atau-tidak" data-title="Konfirmasi"
                        data-message="Apakah Anda yakin ingin logout?" data-redirect-url="/" title="Logout"
                        :label="__('Logout')" />

                    <hr>
                    <h5 class="text-info">Pemberitahuan</h5>
                    <code>
                        &lt;x-button href="#" icon="save" color="info" id="eksekusi"
                        data-title="Informasi !!" data-message="Data sukses di simpan"
                        data-redirect-url="/dashboard" title="Simpan" :label="__('Simpan')" /&gt;
                    </code>
                    <hr>
                    HTML :
                    <pre>
&lt;a href="#" id="eksekusi" data-title="Informasi !!"
data-message="Data sukses di simpan" data-redirect-url="/dashboard" title="Simpan"
class="btn btn-info waves-effect waves-themed"&gt;
&lt;i class="fal  fa-save mr-2"&gt;&lt;/i&gt;
Simpan
&lt;/a&gt;
                        </pre>
                    <x-button href="#" icon="save mr-1" color="info" id="eksekusi" data-title="Informasi !!"
                        data-message="Data sukses di simpan" data-redirect-url="/dashboard" title="Simpan"
                        :label="__('Simpan')" />
                </x-panel.show>

                {{-- BUTTON GROUPS --}}
                <x-panel.show title="Button" subtitle="Group">
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
                    <h5 class="frame-heading">
                        Size Button Example
                    </h5>
                    <div class="frame-wrap">
                        <div class="demo demo-v-spacing-lg">
                            <x-button-group size="lg" :buttons="[
                                ['label' => 'Left', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => 'Middle', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => 'Right', 'color' => 'secondary', 'url' => '#two'],
                            ]" />
                            <br>
                            <x-button-group :buttons="[
                                ['label' => 'Left', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => 'Middle', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => 'Right', 'color' => 'secondary', 'url' => '#two'],
                            ]" />
                            <br>
                            <x-button-group size="sm" :buttons="[
                                ['label' => 'Left', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => 'Middle', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => 'Right', 'color' => 'secondary', 'url' => '#two'],
                            ]" />
                            <br>
                            <x-button-group size="xs" :buttons="[
                                ['label' => 'Left', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => 'Middle', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => 'Right', 'color' => 'secondary', 'url' => '#two'],
                            ]" />
                        </div>
                    </div>
                    <h5 class="frame-heading">
                        Toolbar Button
                    </h5>
                    <div class="frame-wrap">
                        <div class="d-flex justify-content-start flex-wrap demo">
                            <x-button-group class="mr-2" :buttons="[
                                ['label' => '1', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => '2', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => '3', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => '4', 'color' => 'secondary', 'url' => '#two'],
                            ]" aria-label="Group A" />
                            <x-button-group class="mr-2" :buttons="[
                                ['label' => '5', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => '6', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => '7', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => '8', 'color' => 'secondary', 'url' => '#two'],
                            ]" aria-label="Group B" />
                            <x-button-group class="mr-2" :buttons="[
                                ['label' => '9', 'color' => 'secondary', 'url' => '#one'],
                                ['label' => '10', 'color' => 'secondary', 'url' => '#two'],
                                ['label' => '11', 'color' => 'danger', 'url' => '#two'],
                                ['label' => '12', 'color' => 'secondary', 'url' => '#two'],
                            ]" aria-label="Group C" />
                        </div>
                    </div>
                    <h5 class="frame-heading">
                        Vertical Button
                    </h5>
                    <div class="frame-wrap">
                        <x-button-group vertical="true" :buttons="[
                            ['label' => 'Primary Button', 'color' => 'primary', 'url' => '#'],
                            ['label' => 'Danger Button', 'color' => 'danger', 'url' => '#another'],
                            [
                                'dropdown' => true,
                                'label' => 'Dropdown',
                                'color' => 'warning',
                                'items' => [
                                    ['label' => 'Dropdown link', 'url' => '#link1'],
                                    ['label' => 'Another link', 'url' => '#link2'],
                                ],
                            ],
                            ['label' => 'Success Button', 'color' => 'success'],
                            ['label' => 'Info Button', 'color' => 'info', 'url' => '#url'],
                        ]" />


                    </div>
                    <h5 class="frame-heading">
                        Nesting example
                    </h5>
                    <div class="frame-wrap">
                        <x-button-group size="lg" :buttons="[
                            ['label' => 'Info Button', 'color' => 'info', 'url' => '#one'],
                            ['label' => 'Success Button', 'color' => 'success', 'url' => '#two'],
                            [
                                'dropdown' => true,
                                'label' => 'Dropdown',
                                'color' => 'dark',
                                'items' => [
                                    ['label' => 'Dropdown link', 'url' => '#link3'],
                                    ['label' => 'Another link', 'url' => '#link4'],
                                ],
                            ],
                        ]" />
                    </div>
                    <h5 class="frame-heading">
                        Checkbox
                    </h5>
                    <div class="frame-wrap">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-primary active">
                                <input type="checkbox" name="options" id="check1" checked="checked"> Checked
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox" name="options" id="check2"> Unchecked
                            </label>
                            <label class="btn btn-primary">
                                <input type="checkbox" name="options" id="check3"> Unchecked
                            </label>
                        </div>
                    </div>
                    <h5 class="frame-heading">
                        Radio
                    </h5>
                    <div class="frame-wrap mb-0">
                        <div class="btn-group btn-group-toggle" data-toggle="buttons">
                            <label class="btn btn-info active">
                                <input type="radio" name="options" id="option1" checked="checked"> Active
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="options" id="option2"> Radio
                            </label>
                            <label class="btn btn-info">
                                <input type="radio" name="options" id="option3"> Radio
                            </label>
                        </div>
                    </div>
                </x-panel.show>
            </x-slot>

            {{-- BAGIAN KIRI --}}
            <x-slot name="slot1">
                {{-- BUTTON WITH COLOR --}}
                <x-panel.show title="Button" subtitle="with color">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button color="$color" :label="__('Primary')" /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button color="primary" :label="__('Primary')" />
                        <x-button color="secondary" :label="__('Secondary')" />
                        <x-button color="default" :label="__('Default')" />
                        <x-button color="success" :label="__('Success')" />
                        <x-button color="warning" :label="__('Warning')" />
                        <x-button color="info" :label="__('Info')" />
                        <x-button color="danger" :label="__('Danger')" />
                        <x-button color="dark" :label="__('Dark')" />
                        <x-button color="light" :label="__('Light')" />
                    </p>
                </x-panel.show>

                {{-- BUTTON STYLE OUTLINE --}}
                <x-panel.show title="Button" subtitle="style outline">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button style color="$color" :label="__('Primary')" /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button style color="primary" :label="__('Primary')" />
                        <x-button style color="secondary" :label="__('Secondary')" />
                        <x-button style color="default" :label="__('Default')" />
                        <x-button style color="success" :label="__('Success')" />
                        <x-button style color="warning" :label="__('Warning')" />
                        <x-button style color="info" :label="__('Info')" />
                        <x-button style color="danger" :label="__('Danger')" />
                        <x-button style color="dark" :label="__('Dark')" />
                        <x-button style color="light" :label="__('Light')" />
                    </p>
                    <div class="panel-tag mt-2 mb-2">for outline buttons also applies to btn-icon,
                        size, rounded-circle, btn-pills</div>
                </x-panel.show>

                {{-- BUTTON PILLS --}}
                <x-panel.show title="Button" subtitle="Pills">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button color="$color" pills :label="__('Primary')" /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button color="primary" pills :label="__('Primary')" />
                        <x-button color="secondary" pills :label="__('Secondari')" />
                        <x-button color="default" pills :label="__('Default')" />
                        <x-button color="success" pills :label="__('Success')" />
                        <x-button color="warning" pills :label="__('Warning')" />
                        <x-button color="info" pills :label="__('Info')" />
                        <x-button color="danger" pills :label="__('Danger')" />
                        <x-button color="dark" pills :label="__('Dark')" />
                        <x-button color="light" pills :label="__('Light')" />
                    </p>
                </x-panel.show>

                {{-- BUTTON WITH ICON --}}
                <x-panel.show title="Button" subtitle="with ICON">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button color="$color" icon="$icon" :label="__('Primary')" /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button color="primary" icon="print" :label="__('Print')" />
                        <x-button color="secondary" icon="volume-mute" :label="__('Mute')" />
                        <x-button color="default" icon="check" :label="__('Submit')" />
                        <x-button color="success" icon="download" :label="__('Download')" />
                        <x-button color="warning" icon="exclamation-triangle" :label="__('Scan Device')" />
                        <x-button color="info" icon="bug" :label="__('Report Bug')" />
                        <x-button color="danger" icon="times" :label="__('Delete')" />
                        <x-button color="dark" icon="eject" :label="__('Eject')" />
                    </p>
                </x-panel.show>

                {{-- BUTTON WITH BTN-ICON --}}
                <x-panel.show title="Button" subtitle="with btn-icon">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button color="$color" icon="$icon" btnicon /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button color="primary" icon="print" btnicon />
                        <x-button color="secondary" icon="volume-mute" btnicon />
                        <x-button color="default" icon="check" btnicon />
                        <x-button color="success" icon="download" btnicon />
                        <x-button color="warning" icon="exclamation-triangle" btnicon />
                        <x-button color="info" icon="bug" btnicon />
                        <x-button color="danger" icon="times" btnicon />
                        <x-button color="dark" icon="eject" btnicon />
                    </p>
                </x-panel.show>

                {{-- BUTTON WITH BTN-ICON AND ROUNDED-CIRCLE --}}
                <x-panel.show title="Button" subtitle="with btn-icon and rounded-circle">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button href="#" color="$color" icon="$icon" btnicon circle /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button href="#" color="primary" icon="print" btnicon circle />
                        <x-button href="#" color="secondary" icon="volume-mute" btnicon circle />
                        <x-button href="#" color="default" icon="check" btnicon circle />
                        <x-button href="#" color="success" icon="download" btnicon circle />
                        <x-button href="#" color="warning" icon="exclamation-triangle" btnicon circle />
                        <x-button href="#" color="info" icon="bug" btnicon circle />
                        <x-button href="#" color="danger" icon="times" btnicon circle />
                        <x-button href="#" color="dark" icon="eject" btnicon circle />
                    </p>
                </x-panel.show>

                {{-- Hover dot effect --}}
                <x-panel.show title="Button" subtitle="Hover dot effect">
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
                    <div class="panel-tag mt-2 mb-2">
                        <code>&lt;x-button href="javascript:void(0);" color="$color" size="$size" icon="$icon"
                            btnicon circle effect /&gt;</code>
                    </div>
                    <hr>
                    <p class="demo">
                        <x-button href="javascript:void(0);" color="primary" size="lg" icon="users" btnicon
                            circle effect />
                        <x-button href="javascript:void(0);" color="success" size="lg" icon="save" btnicon
                            circle effect />
                        <x-button href="javascript:void(0);" color="secondary" size="lg" icon="home" btnicon
                            circle effect />
                        <x-button href="javascript:void(0);" color="danger" size="lg" icon="trash" btnicon circle
                            effect />
                    </p>
                </x-panel.show>

                {{-- Dropdown --}}
                <x-panel.show title="Button" subtitle="Dropdown">
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
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            Dropdown Default Show<br>
                            <code>&lt;div class="btn-group"/&gt;</code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <div class="btn-group">
                                <x-button color="primary" icon="print" :label="__('Print')" dropdowntoggle
                                    toggle="dropdown" haspopup="true" expanded="false" :items="[
                                        ['label' => 'Action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Another action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Something else here', 'href' => 'javascript:void(0);'],
                                        'divider',
                                        ['label' => 'Separated link', 'href' => 'javascript:void(0);'],
                                    ]" />
                            </div>
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            Dropdown Left Show<br>
                            <code>&lt;div class="btn-group dropleft"/&gt;</code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <div class="btn-group dropleft">
                                <x-button color="danger" :label="__('Dropleft')" dropdowntoggle toggle="dropdown"
                                    haspopup="true" expanded="false" :items="[
                                        ['label' => 'Action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Another action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Something else here', 'href' => 'javascript:void(0);'],
                                        'divider',
                                        ['label' => 'Separated link', 'href' => 'javascript:void(0);'],
                                    ]" />
                            </div>
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            Dropdown Right Show<br>
                            <code>&lt;div class="btn-group dropright"/&gt;</code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <div class="btn-group dropright">
                                <x-button color="warning" :label="__('Dropright')" dropdowntoggle toggle="dropdown"
                                    haspopup="true" expanded="false" :items="[
                                        ['label' => 'Action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Another action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Something else here', 'href' => 'javascript:void(0);'],
                                        'divider',
                                        ['label' => 'Separated link', 'href' => 'javascript:void(0);'],
                                    ]" />
                            </div>
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            Dropdown Static Show<br>
                            insert : <code>display="static"</code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <div class="btn-group">
                                <x-button color="secondary" :label="__('Static')" dropdowntoggle toggle="dropdown"
                                    haspopup="true" expanded="false" dpsize="lg" display="static"
                                    :items="[
                                        ['label' => 'Action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Another action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Something else here', 'href' => 'javascript:void(0);'],
                                        'divider',
                                        ['label' => 'Separated link', 'href' => 'javascript:void(0);'],
                                    ]" />
                            </div>
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            Split Dropdown Buttons<br>
                            insert : <code>toogledropdown</code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <div class="btn-group">
                                <x-button :label="__('Split Dropdown')" />
                                <x-button dropdowntoggle toogledropdown toggle="dropdown" haspopup="true"
                                    expanded="false" display="static" dpsize="lg" :items="[
                                        ['label' => 'Action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Another action', 'href' => 'javascript:void(0);'],
                                        ['label' => 'Something else here', 'href' => 'javascript:void(0);'],
                                        'divider',
                                        ['label' => 'Separated link', 'href' => 'javascript:void(0);'],
                                    ]" />
                            </div>
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            <div class="btn-group">
                                <x-button color="primary" icon="shield-virus mr-2" :label="__('Multilevel default')" dropdowntoggle
                                    toggle="dropdown" haspopup="true" expanded="false" :items="[
                                        ['label' => 'Action', 'href' => 'javascript:void(0);'],
                                        [
                                            'label' => 'Multilevel',
                                            'children' => [
                                                ['label' => 'First level', 'href' => 'javascript:void(0);'],
                                                [
                                                    'label' => 'Second Level',
                                                    'children' => [
                                                        ['label' => 'Level two', 'href' => 'javascript:void(0);'],
                                                        [
                                                            'label' => 'Disabled menu',
                                                            'href' => 'javascript:void(0);',
                                                            'disabled' => true,
                                                        ],
                                                        [
                                                            'label' => 'Third Level (left)',
                                                            'children' => [
                                                                [
                                                                    'label' => 'Menu Item',
                                                                    'href' => 'javascript:void(0);',
                                                                ],
                                                                [
                                                                    'label' => 'Disabled',
                                                                    'href' => 'javascript:void(0);',
                                                                    'disabled' => true,
                                                                ],
                                                            ],
                                                        ],
                                                    ],
                                                ],
                                            ],
                                        ],
                                    ]" />
                            </div>
                        </x-slot>
                        <x-slot name='slot1'>
                            Multilevel Dropdown
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[6, 6]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            Collapse<br>
                            insert : <code>toggle="collapse" target="#collapseExample"
                            expanded="false" controls="collapseExample" </code>
                            <br><br>
                            <p class="demo">
                                <x-button :label="__('Button with data-target')" color="danger" toggle="collapse" target="#collapseExample1"
                                    expanded="false" controls="collapseExample1" />
                            </p>
                            <p class="demo">
                                <x-button :label="__('Button with data-target')" toggle="collapse" target="#collapseExample" expanded="false"
                                    controls="collapseExample" />
                            </p>
                        </x-slot>
                        <x-slot name='slot1'>
                            <div class="frame-wrap mt-3 mb-0 w-100">
                                {{-- <p class="demo">
                                    <button class="btn btn-primary" type="button" data-toggle="collapse"
                                        data-target="#collapseExample" aria-expanded="false"
                                        aria-controls="collapseExample">
                                        Button with data-target
                                    </button>
                                </p> --}}
                                <x-collapse-content class="m-2" target="collapseExample1">
                                    Some time ago we asked for your input, whether you were a seasoned SmartAdmin user or
                                    just
                                    peeking around the corner, and WOW, did you deliver! After reading each and everyone of
                                    your
                                    replies on the survey, we have taken each piece of praise and criticism to heart to
                                    scope
                                    out our plans for SmartAdmin. All feedback will be used to make your favorite theme that
                                    much better, but these were some of the highlights.
                                </x-collapse-content>

                                <x-collapse-content target="collapseExample">
                                    A whopping 72% of you said you were ready for a fresh new design, while SmartAdmin is
                                    and a revolutionary view on what a good bootstrap based template should be, having
                                    something new to look at can make anyone feel invigorated. And let's be honest, who
                                    doesn't like a modern update of your favorite theme! While most you are still happy with
                                    the current variations, around 50% of you have asked for vue.js support. With this
                                    framework rapidly gaining popularity it is surely one to include in the family of
                                    frameworks! And, last, but certainly not least, a very large majority of a staggering
                                    90% wanted more plugins and regular updates.
                                </x-collapse-content>
                            </div>
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <div class="fs-lg fw-300 p-1 border-faded rounded mb-g">
                        @php
                            $DropdownDef = file_get_contents(resource_path('/data/DropdownDefault.md'));
                        @endphp
                        <pre>
                        {!! htmlspecialchars($DropdownDef) !!}
                        </pre>
                    </div>
                </x-panel.show>

                {{-- Component Toastr --}}
                <x-panel.show title="Button" subtitle="Toastr">
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
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            <code>
                                &lt;x-button color="success" size="sm" :label="__('Success')"
                                onclick="showToast('Success','Data sukses di simpan', 'success')" /&gt;
                            </code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <x-button color="success" size="sm" :label="__('Success')"
                                onclick="showToast('Success','Data sukses di simpan', 'success')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            <code>
                                &lt;x-button color="info" size="sm" :label="__('Info')"
                                onclick="showToast('Info','Data telah di hapus', 'info')" /&gt;
                            </code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <x-button color="info" size="sm" :label="__('Info')"
                                onclick="showToast('Info','Data telah di hapus', 'info')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            <code>
                                &lt;x-button color="danger" size="sm" :label="__('Error')"
                                onclick="showToast('Error','Ada Masalah', 'error')" /&gt;
                            </code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <x-button color="danger" size="sm" :label="__('Error')"
                                onclick="showToast('Error','Ada Masalah', 'error')" />
                        </x-slot>
                    </x-column-layout>
                    <hr>
                    <x-column-layout :sizes="[8, 4]" :useCard="[false, false]">
                        <x-slot name='slot0'>
                            <code>
                                &lt;x-button color="warning" size="sm" :label="__('Warning')"
                                onclick="showToast('Warning','Mohon di perhatikan', 'warning')" /&gt;
                            </code>
                        </x-slot>
                        <x-slot name='slot1'>
                            <x-button color="warning" size="sm" :label="__('Warning')"
                                onclick="showToast('Warning','Mohon di perhatikan', 'warning')" />
                        </x-slot>
                    </x-column-layout>
                </x-panel.show>
            </x-slot>
        </x-column-layout>


    </main>
@endsection
@section('pages-script')
    <script src="/assets/js/notifications/toastr/toastr.js"></script>
    <script>
        $(document).ready(function() {
            toastr.options = {
                "closeButton": true,
                "debug": false,
                "newestOnTop": true,
                "progressBar": true,
                "positionClass": "toast-top-right",
                "preventDuplicates": false,
                "onclick": null,
                "showDuration": 300,
                "hideDuration": 100,
                "timeOut": 5000,
                "extendedTimeOut": 1000,
                "showEasing": "swing",
                "hideEasing": "linear",
                "showMethod": "fadeIn",
                "hideMethod": "fadeOut",
                "infoSound": '',
                "successSound": '',
                "warningSound": '',
                "errorSound": '',
                "pusherSound": '',
            }

            // Fungsi untuk menampilkan pemberitahuan Toastr
            window.showToast = function(title, message, type) {
                toastr[type](message, title);
            }

            //showToast("Sukses!", "Ini pesan sukses", "success");
            //showToast("Informasi", "Ini pesan informasi", "info");
            //showToast("Error", "Ini pesan error", "error");
            //showToast("Peringatan", "Ini pesan peringatan", "warning");
        });
    </script>
@endsection
