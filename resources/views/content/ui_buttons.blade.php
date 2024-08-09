@extends('layouts.main')
@section('title', 'Buttons')
@section('pages-content')
    <main id="js-page-content" role="main" class="page-content">
        @include('layouts._page_breadcrumb', ['category_1' => 'UI Components'])
        <div class="subheader">
            <h1 class="subheader-title">
                <i class='subheader-icon fal fa-window'></i> Buttons
                <small>
                    Use custom button styles for actions in forms, dialogs, and more. Includes support for a handful of
                    contextual variations, sizes, states, and more.
                </small>
            </h1>
        </div>
        <div class="row">
            <div class="col-md-12 col-xl-6">
                <!--Button colors-->
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Button <span class="fw-300"><i>Colors</i></span>
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
                                SmartAdmin WebApp includes nine predefined button styles, each serving its own semantic
                                purpose. <br>
                                <code>$color = primary, secondary, success, info, warning, danger, dark, light</code>
                            </div>
                            <h5 class="frame-heading">
                                Default
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button color="$color" :label="__('Primary')" /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button color="primary" :label="__('Primary')" />
                                    <x-button color="secondary" :label="__('Secondary')" />
                                    <x-button color="success" :label="__('Success')" />
                                    <x-button color="info" :label="__('Info')" />
                                    <x-button color="warning" :label="__('Warning')" />
                                    <x-button color="danger" :label="__('Danger')" />
                                    <x-button color="dark" :label="__('Dark')" />
                                    <x-button color="light" :label="__('Light')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Rounded
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button pills color="$color" :label="__('Primary')" /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button pills color="primary" :label="__('Primary')" />
                                    <x-button pills color="secondary" :label="__('Secondary')" />
                                    <x-button pills color="success" :label="__('Success')" />
                                    <x-button pills color="info" :label="__('Info')" />
                                    <x-button pills color="warning" :label="__('Warning')" />
                                    <x-button pills color="danger" :label="__('Danger')" />
                                    <x-button pills color="dark" :label="__('Dark')" />
                                    <x-button pills color="light" :label="__('Light')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Unique style
                            </h5>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-button color="default" :label="__('Default')" />
                                    <x-button pills color="default" :label="__('Default')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Block-->
                <div id="panel-2" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Block <span class="fw-300"><i>Buttons</i></span>
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
                                Create block level buttons—those that span the full width of a parent—by adding
                                <code>.btn-block</code> <code>$size= lg, sm, xs</code>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="frame-wrap text-center mb-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <code>&lt;x-button size="$size" block
                                                    :label="__('Block <span>large</span>')"
                                                    /&gt;</code>
                                                <hr>
                                                <div class="demo-v-spacing">
                                                    <x-button size="lg" block>Block <span>large</span></x-button>
                                                    <x-button block>Block <span>default</span></x-button>
                                                    <x-button size="sm" block>Block <span>small</span></x-button>
                                                    <x-button size="xs" block>Block <span>extra small</span></x-button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <code>&lt;x-button size="$size" color="success" block
                                                    :label="__('Block <span>large</span>')"
                                                    /&gt;</code>
                                                <hr>
                                                <div class="demo-v-spacing mt-3 mt-xl-0">
                                                    <x-button pills color="success" size="lg" block>Block
                                                        <span>large</span></x-button>
                                                    <x-button pills color="success" block>Block
                                                        <span>default</span></x-button>
                                                    <x-button pills color="success" size="sm" block>Block
                                                        <span>small</span></x-button>
                                                    <x-button pills color="success" size="xs" block>Block <span>extra
                                                            small</span></x-button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Sizes-->
                <div id="panel-3" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Option <span class="fw-300"><i>Sizes</i></span>
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
                                Alter button sizes by using the classes <code>.btn-lg</code>, <code>.btn-sm</code>,
                                <code>.btn-xs</code>
                            </div>
                            <h5 class="frame-heading">
                                Largest size
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button size="lg" color="$color" :label="__('Primary')" /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button size="lg" color="primary" :label="__('Primary')" />
                                    <x-button size="lg" color="secondary" :label="__('Secondary')" />
                                    <x-button size="lg" color="default" :label="__('Default')" />
                                    <x-button size="lg" color="success" :label="__('Success')" />
                                    <x-button size="lg" color="info" :label="__('Info')" />
                                    <x-button size="lg" color="warning" :label="__('Warning')" />
                                    <x-button size="lg" color="danger" :label="__('Danger')" />
                                    <x-button size="lg" color="dark" :label="__('Dark')" />
                                    <x-button size="lg" color="light" :label="__('Light')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Default size
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button color="$color" :label="__('Primary')" /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button color="primary" :label="__('Primary')" />
                                    <x-button color="secondary" :label="__('Secondary')" />
                                    <x-button color="default" :label="__('Default')" />
                                    <x-button color="success" :label="__('Success')" />
                                    <x-button color="info" :label="__('Info')" />
                                    <x-button color="warning" :label="__('Warning')" />
                                    <x-button color="danger" :label="__('Danger')" />
                                    <x-button color="dark" :label="__('Dark')" />
                                    <x-button color="light" :label="__('Light')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Small size
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button size="sm" color="$color" :label="__('Primary')" /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button size="sm" color="primary" :label="__('Primary')" />
                                    <x-button size="sm" color="secondary" :label="__('Secondary')" />
                                    <x-button size="sm" color="default" :label="__('Default')" />
                                    <x-button size="sm" color="success" :label="__('Success')" />
                                    <x-button size="sm" color="info" :label="__('Info')" />
                                    <x-button size="sm" color="warning" :label="__('Warning')" />
                                    <x-button size="sm" color="danger" :label="__('Danger')" />
                                    <x-button size="sm" color="dark" :label="__('Dark')" />
                                    <x-button size="sm" color="light" :label="__('Light')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Smallest size
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button size="xs" color="$color" :label="__('Primary')" /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button size="xs" color="primary" :label="__('Primary')" />
                                    <x-button size="xs" color="secondary" :label="__('Secondary')" />
                                    <x-button size="xs" color="default" :label="__('Default')" />
                                    <x-button size="xs" color="success" :label="__('Success')" />
                                    <x-button size="xs" color="info" :label="__('Info')" />
                                    <x-button size="xs" color="warning" :label="__('Warning')" />
                                    <x-button size="xs" color="danger" :label="__('Danger')" />
                                    <x-button size="xs" color="dark" :label="__('Dark')" />
                                    <x-button size="xs" color="light" :label="__('Light')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--With icons-->
                <div id="panel-4" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Button <span class="fw-300"><i>with Icons</i></span>
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
                                We use the icon tags to insert icons into buttons <br>
                                <code>&lt;x-button size="lg" icon="$icon mr-1" color="$color" :label="__('Primary')"
                                    /&gt;</code>
                            </div>
                            <div class="demo">
                                <x-button size="lg" icon="print mr-1" color="primary" :label="__('Print')" />
                                <x-button size="lg" icon="volume-mute mr-1" color="secondary" :label="__('Mute')" />
                                <x-button size="lg" icon="check mr-1" color="default" :label="__('Submit')" />
                                <x-button size="lg" icon="download mr-1" color="success" :label="__('Download')" />
                                <x-button size="lg" icon="exclamation-triangle mr-1" color="warning"
                                    :label="__('Scan Device')" />
                                <x-button size="lg" icon="bug mr-1" color="info" :label="__('Report Bug')" />
                                <x-button size="lg" icon="times mr-1" color="danger" :label="__('Delete')" />
                                <x-button size="lg" icon="eject mr-1" color="dark" :label="__('Eject')" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--Icon buttons-->
                <div id="panel-5" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Icons <span class="fw-300"><i>example</i></span>
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
                                Convert button to an icon button by adding the class <code>.btn-icon</code>
                            </div>
                            <h5 class="frame-heading">
                                Various sizes
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button href="#" size="$size" color="$color"
                                    icon="$icon" btnicon /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" size="lg" color="primary" icon="print"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="secondary"
                                        icon="volume-mute fs-md" btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="default" icon="check"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="success" icon="download"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="info" icon="bug"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="danger" icon="times"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="lg" color="dark" icon="eject"
                                        btnicon />
                                </div>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" color="primary" icon="print" btnicon />
                                    <x-button href="javascript:void(0);" color="secondary" icon="volume-mute fs-md"
                                        btnicon />
                                    <x-button href="javascript:void(0);" color="default" icon="check" btnicon />
                                    <x-button href="javascript:void(0);" color="success" icon="download" btnicon />
                                    <x-button href="javascript:void(0);" color="warning" icon="exclamation-triangle"
                                        btnicon />
                                    <x-button href="javascript:void(0);" color="info" icon="bug" btnicon />
                                    <x-button href="javascript:void(0);" color="danger" icon="times" btnicon />
                                    <x-button href="javascript:void(0);" color="dark" icon="eject" btnicon />
                                </div>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" size="sm" color="primary" icon="print"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="secondary"
                                        icon="volume-mute fs-md" btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="default" icon="check"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="success" icon="download"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="info" icon="bug"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="danger" icon="times"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="sm" color="dark" icon="eject"
                                        btnicon />
                                </div>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" size="xs" color="primary" icon="print"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="secondary"
                                        icon="volume-mute fs-md" btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="default" icon="check"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="success" icon="download"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="info" icon="bug"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="danger" icon="times"
                                        btnicon />
                                    <x-button href="javascript:void(0);" size="xs" color="dark" icon="eject"
                                        btnicon />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Rounded
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button href="#" size="$size" color="$color"
                                    icon="$icon" btnicon circle /&gt;</code>
                                <hr>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" size="lg" color="primary" icon="print"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="default" icon="check"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="success" icon="download"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="info" icon="bug"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="danger" icon="times"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="lg" color="dark" icon="eject"
                                        btnicon circle />
                                </div>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" color="primary" icon="print" btnicon circle />
                                    <x-button href="javascript:void(0);" color="secondary" icon="volume-mute fs-md"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" color="default" icon="check" btnicon circle />
                                    <x-button href="javascript:void(0);" color="success" icon="download" btnicon
                                        circle />
                                    <x-button href="javascript:void(0);" color="warning" icon="exclamation-triangle"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" color="info" icon="bug" btnicon circle />
                                    <x-button href="javascript:void(0);" color="danger" icon="times" btnicon circle />
                                    <x-button href="javascript:void(0);" color="dark" icon="eject" btnicon circle />
                                </div>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" size="sm" color="primary" icon="print"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="default" icon="check"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="success" icon="download"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="info" icon="bug"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="danger" icon="times"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="sm" color="dark" icon="eject"
                                        btnicon circle />
                                </div>
                                <div class="demo">
                                    <x-button href="javascript:void(0);" size="xs" color="primary" icon="print"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="default" icon="check"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="success" icon="download"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="info" icon="bug"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="danger" icon="times"
                                        btnicon circle />
                                    <x-button href="javascript:void(0);" size="xs" color="dark" icon="eject"
                                        btnicon circle />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Hover dot effect
                            </h5>
                            <div class="frame-wrap">
                                <code>&lt;x-button href="#" color="$color" size="$size" icon="$icon"
                                    btnicon circle effect /&gt;</code>
                                <hr>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" color="primary" size="lg" icon="users"
                                        btnicon circle effect />
                                    <x-button href="javascript:void(0);" color="secondary" size="lg" icon="home"
                                        btnicon circle effect />
                                    <x-button href="javascript:void(0);" color="success" size="lg" icon="save"
                                        btnicon circle effect />
                                    <x-button href="javascript:void(0);" color="danger" size="lg" icon="trash"
                                        btnicon circle effect />
                                    <x-button href="javascript:void(0);" color="warning" size="lg" icon="print"
                                        btnicon circle effect />
                                    <x-button href="javascript:void(0);" color="default" size="lg"
                                        icon="volume-mute fs-md" btnicon circle effect />
                                    <x-button href="javascript:void(0);" color="info" size="lg" icon="download"
                                        btnicon circle effect />
                                </p>
                                <code>&lt;x-button href="#" color="$color" size="$size" icon="$icon"
                                    btnicon effect /&gt;</code>
                                <hr>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" color="primary" size="lg" icon="users"
                                        btnicon effect />
                                    <x-button href="javascript:void(0);" color="secondary" size="lg" icon="home"
                                        btnicon effect />
                                    <x-button href="javascript:void(0);" color="success" size="lg" icon="save"
                                        btnicon effect />
                                    <x-button href="javascript:void(0);" color="danger" size="lg" icon="trash"
                                        btnicon effect />
                                    <x-button href="javascript:void(0);" color="warning" size="lg" icon="print"
                                        btnicon effect />
                                    <x-button href="javascript:void(0);" color="default" size="lg"
                                        icon="volume-mute fs-md" btnicon effect />
                                    <x-button href="javascript:void(0);" color="info" size="lg" icon="download"
                                        btnicon effect />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 col-xl-6">
                <!--Button colors (outline)-->
                <div id="panel-6" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Button <span class="fw-300"><i>Outlines</i></span>
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
                                Replace the default modifier classes with<code>.btn-outline-*</code>
                            </div>
                            <h5 class="frame-heading">
                                Outline
                            </h5>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-button style color="primary" :label="__('Primary')" />
                                    <x-button style color="secondary" :label="__('Secondary')" />
                                    <x-button style color="success" :label="__('Success')" />
                                    <x-button style color="info" :label="__('Info')" />
                                    <x-button style color="warning" :label="__('Warning')" />
                                    <x-button style color="danger" :label="__('Danger')" />
                                    <x-button style color="dark" :label="__('Dark')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Rounded outline
                            </h5>
                            <div class="frame-wrap">
                                <div class="demo">
                                    <x-button style pills color="primary" :label="__('Primary')" />
                                    <x-button style pills color="secondary" :label="__('Secondary')" />
                                    <x-button style pills color="success" :label="__('Success')" />
                                    <x-button style pills color="info" :label="__('Info')" />
                                    <x-button style pills color="warning" :label="__('Warning')" />
                                    <x-button style pills color="danger" :label="__('Danger')" />
                                    <x-button style pills color="dark" :label="__('Dark')" />
                                </div>
                            </div>
                            <h5 class="frame-heading">
                                Unique style
                            </h5>
                            <div class="frame-wrap mb-0">
                                <div class="demo">
                                    <x-button style color="default" :label="__('Default')" />
                                    <x-button style pills color="default" :label="__('Default')" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Block (outline)-->
                <div id="panel-7" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Block <span class="fw-300"><i>Outlines</i></span>
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
                                Block buttons inherits outline button properties <code>.btn-outline-*</code>
                            </div>
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="frame-wrap text-center mb-0">
                                        <div class="row">
                                            <div class="col-xl-6">
                                                <div class="demo-v-spacing">
                                                    <x-button style size="lg" block>Block
                                                        <span>large</span></x-button>
                                                    <x-button style block>Block <span>default</span></x-button>
                                                    <x-button style size="sm" block>Block
                                                        <span>small</span></x-button>
                                                    <x-button style size="xs" block>Block <span>extra
                                                            small</span></x-button>
                                                </div>
                                            </div>
                                            <div class="col-xl-6">
                                                <div class="demo-v-spacing mt-3 mt-xl-0">
                                                    <x-button style pills color="success" size="lg" block>Block
                                                        <span>large</span></x-button>
                                                    <x-button style pills color="success" block>Block
                                                        <span>default</span></x-button>
                                                    <x-button style pills color="success" size="sm" block>Block
                                                        <span>small</span></x-button>
                                                    <x-button style pills color="success" size="xs" block>Block
                                                        <span>extra
                                                            small</span></x-button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Sizes (outline)-->
                <div id="panel-8" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Option <span class="fw-300"><i>Sizes</i></span>
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
                                Alter button sizes by using the classes <code>.btn-lg</code>, <code>.btn-sm</code>,
                                <code>.btn-xs</code>
                            </div>
                            <h5 class="frame-heading">
                                Largest size
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button style size="lg" color="primary" :label="__('Primary')" />
                                    <x-button style size="lg" color="secondary" :label="__('Secondary')" />
                                    <x-button style size="lg" color="default" :label="__('Default')" />
                                    <x-button style size="lg" color="success" :label="__('Success')" />
                                    <x-button style size="lg" color="info" :label="__('Info')" />
                                    <x-button style size="lg" color="warning" :label="__('Warning')" />
                                    <x-button style size="lg" color="danger" :label="__('Danger')" />
                                    <x-button style size="lg" color="dark" :label="__('Dark')" />
                                    <x-button style size="lg" color="light" :label="__('Light')" />
                                </p>
                            </div>
                            <h5 class="frame-heading">
                                Default size
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button style color="primary" :label="__('Primary')" />
                                    <x-button style color="secondary" :label="__('Secondary')" />
                                    <x-button style color="default" :label="__('Default')" />
                                    <x-button style color="success" :label="__('Success')" />
                                    <x-button style color="info" :label="__('Info')" />
                                    <x-button style color="warning" :label="__('Warning')" />
                                    <x-button style color="danger" :label="__('Danger')" />
                                    <x-button style color="dark" :label="__('Dark')" />
                                    <x-button style color="light" :label="__('Light')" />
                                </p>
                            </div>
                            <h5 class="frame-heading">
                                Small size
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button style size="sm" color="primary" :label="__('Primary')" />
                                    <x-button style size="sm" color="secondary" :label="__('Secondary')" />
                                    <x-button style size="sm" color="default" :label="__('Default')" />
                                    <x-button style size="sm" color="success" :label="__('Success')" />
                                    <x-button style size="sm" color="info" :label="__('Info')" />
                                    <x-button style size="sm" color="warning" :label="__('Warning')" />
                                    <x-button style size="sm" color="danger" :label="__('Danger')" />
                                    <x-button style size="sm" color="dark" :label="__('Dark')" />
                                    <x-button style size="sm" color="light" :label="__('Light')" />
                                </p>
                            </div>
                            <h5 class="frame-heading">
                                Smallest size
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button style size="xs" color="primary" :label="__('Primary')" />
                                    <x-button style size="xs" color="secondary" :label="__('Secondary')" />
                                    <x-button style size="xs" color="default" :label="__('Default')" />
                                    <x-button style size="xs" color="success" :label="__('Success')" />
                                    <x-button style size="xs" color="info" :label="__('Info')" />
                                    <x-button style size="xs" color="warning" :label="__('Warning')" />
                                    <x-button style size="xs" color="danger" :label="__('Danger')" />
                                    <x-button style size="xs" color="dark" :label="__('Dark')" />
                                    <x-button style size="xs" color="light" :label="__('Light')" />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!--With icons (outline)-->
                <div id="panel-9" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Button <span class="fw-300"><i>with Icons</i></span>
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
                                We use the icon tags to insert icons into buttons
                            </div>
                            <div class="demo">
                                <x-button style size="lg" icon="print mr-1" color="primary" :label="__('Print')" />
                                <x-button style size="lg" icon="volume-mute mr-1" color="secondary"
                                    :label="__('Mute')" />
                                <x-button style size="lg" icon="check mr-1" color="default" :label="__('Submit')" />
                                <x-button style size="lg" icon="download mr-1" color="success"
                                    :label="__('Download')" />
                                <x-button style size="lg" icon="exclamation-triangle mr-1" color="warning"
                                    :label="__('Scan Device')" />
                                <x-button style size="lg" icon="bug mr-1" color="info" :label="__('Report Bug')" />
                                <x-button style size="lg" icon="times mr-1" color="danger" :label="__('Delete')" />
                                <x-button style size="lg" icon="eject mr-1" color="dark" :label="__('Eject')" />
                            </div>
                        </div>
                    </div>
                </div>
                <!--Icon buttons (outline)-->
                <div id="panel-10" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Icon <span class="fw-300"><i>Outlined</i></span>
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
                                Convert button to an icon button by adding the class <code>.btn-icon</code>
                            </div>
                            <h5 class="frame-heading">
                                Various sizes
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style size="lg" color="primary"
                                        icon="print" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="secondary"
                                        icon="volume-mute fs-md" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="default"
                                        icon="check" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="success"
                                        icon="download" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="info"
                                        icon="bug" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="danger"
                                        icon="times" btnicon />
                                    <x-button href="javascript:void(0);" style size="lg" color="dark"
                                        icon="eject" btnicon />
                                </p>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style color="primary" icon="print" btnicon />
                                    <x-button href="javascript:void(0);" style color="secondary" icon="volume-mute fs-md"
                                        btnicon />
                                    <x-button href="javascript:void(0);" style color="default" icon="check" btnicon />
                                    <x-button href="javascript:void(0);" style color="success" icon="download" btnicon />
                                    <x-button href="javascript:void(0);" style color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" style color="info" icon="bug" btnicon />
                                    <x-button href="javascript:void(0);" style color="danger" icon="times" btnicon />
                                    <x-button href="javascript:void(0);" style color="dark" icon="eject" btnicon />
                                </p>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style size="sm" color="primary"
                                        icon="print" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="secondary"
                                        icon="volume-mute fs-md" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="default"
                                        icon="check" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="success"
                                        icon="download" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="info"
                                        icon="bug" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="danger"
                                        icon="times" btnicon />
                                    <x-button href="javascript:void(0);" style size="sm" color="dark"
                                        icon="eject" btnicon />
                                </p>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style size="xs" color="primary"
                                        icon="print" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="secondary"
                                        icon="volume-mute fs-md" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="default"
                                        icon="check" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="success"
                                        icon="download" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="warning"
                                        icon="exclamation-triangle" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="info"
                                        icon="bug" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="danger"
                                        icon="times" btnicon />
                                    <x-button href="javascript:void(0);" style size="xs" color="dark"
                                        icon="eject" btnicon />
                                </p>
                            </div>
                            <h5 class="frame-heading">
                                Rounded outline
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style size="lg" color="primary"
                                        icon="print" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="default"
                                        icon="check" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="success"
                                        icon="download" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="info"
                                        icon="bug" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="danger"
                                        icon="times" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="lg" color="dark"
                                        icon="eject" btnicon circle />
                                </p>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style color="primary" icon="print" btnicon
                                        circle />
                                    <x-button href="javascript:void(0);" style color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" style color="default" icon="check" btnicon
                                        circle />
                                    <x-button href="javascript:void(0);" style color="success" icon="download" btnicon
                                        circle />
                                    <x-button href="javascript:void(0);" style color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" style color="info" icon="bug" btnicon
                                        circle />
                                    <x-button href="javascript:void(0);" style color="danger" icon="times" btnicon
                                        circle />
                                    <x-button href="javascript:void(0);" style color="dark" icon="eject" btnicon
                                        circle />
                                </p>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style size="sm" color="primary"
                                        icon="print" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="default"
                                        icon="check" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="success"
                                        icon="download" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="info"
                                        icon="bug" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="danger"
                                        icon="times" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="sm" color="dark"
                                        icon="eject" btnicon circle />
                                </p>
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style size="xs" color="primary"
                                        icon="print" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="secondary"
                                        icon="volume-mute fs-md" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="default"
                                        icon="check" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="success"
                                        icon="download" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="warning"
                                        icon="exclamation-triangle" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="info"
                                        icon="bug" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="danger"
                                        icon="times" btnicon circle />
                                    <x-button href="javascript:void(0);" style size="xs" color="dark"
                                        icon="eject" btnicon circle />
                                </p>
                            </div>
                            <h5 class="frame-heading">
                                Hover dot effect
                            </h5>
                            <div class="frame-wrap">
                                <p class="demo">
                                    <x-button href="javascript:void(0);" style color="primary" size="lg"
                                        icon="users" btnicon circle effect />
                                    <x-button href="javascript:void(0);" style color="secondary" size="lg"
                                        icon="home" btnicon circle effect />
                                    <x-button href="javascript:void(0);" style color="success" size="lg"
                                        icon="save" btnicon circle effect />
                                    <x-button href="javascript:void(0);" style color="danger" size="lg"
                                        icon="trash" btnicon circle effect />
                                    <x-button href="javascript:void(0);" style color="warning" size="lg"
                                        icon="print" btnicon circle effect />
                                    <x-button href="javascript:void(0);" style color="default" size="lg"
                                        icon="volume-mute fs-md" btnicon circle effect />
                                    <x-button href="javascript:void(0);" style color="info" size="lg"
                                        icon="download" btnicon circle effect />
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
@endsection
