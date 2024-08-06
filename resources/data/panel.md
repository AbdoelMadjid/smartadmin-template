.

# COMPONENT PANEL DISPLAY

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
        <p>
        ini content panel
        </p>
        <x-slot name="panelcontentfoot">
            <div class="custom-control custom-checkbox">
                <input type="checkbox" class="custom-control-input" id="demoCheck">
                <label class="custom-control-label" for="demoCheck">Checkbox</label>
            </div>
            <x-button type="submit" size="sm" :label="__('Small')" class="ml-auto" />
        </x-slot>
    </x-panel.show>
