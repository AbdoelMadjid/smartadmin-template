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
                    @php
                        $markdownContent = file_get_contents(resource_path('/data/button.md'));
                    @endphp
                    <pre>
                    {!! htmlspecialchars($markdownContent) !!}
                    </pre>
                </x-panel.show>

                {{-- BUTTON SIZE --}}
                <x-panel.show title="Button" subtitle="size">
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
            </x-slot>

            {{-- BAGIAN KIRI --}}
            <x-slot name="slot1">
                {{-- BUTTON WITH COLOR --}}
                <x-panel.show title="Button" subtitle="with color">
                    <x-slot name="paneltoolbar">
                        <x-panel.tool-bar class="ml-2">
                            <x-button-ellipsis :menuItems="[
                                ['text' => 'Kembali', 'href' => '/dashboard'],
                                ['text' => 'Another action', 'href' => '#'],
                                ['divider' => true],
                                ['text' => 'Something else here', 'href' => '#'],
                            ]" />
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
                            <br>
                            <x-collapse-content target="collapseExample">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                sapiente ea proident.
                            </x-collapse-content>
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
                                <p class="demo">
                                    <x-button :label="__('Button with data-target')" toggle="collapse" target="#collapseExample"
                                        expanded="false" controls="collapseExample" />
                                </p>
                                <x-collapse-content target="collapseExample">
                                    Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad
                                    squid. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt
                                    sapiente ea proident.
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
