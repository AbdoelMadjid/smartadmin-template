<li class="nav-title">Tools & Components</li>
<li class="{{ Request::is('ui*') ? 'active open' : '' }}">
    <a href="#" title="UI Components" data-filter-tags="ui components">
        <i class="fal fa-window"></i>
        <span class="nav-link-text" data-i18n="nav.ui_components">UI Components</span>
    </a>
    <ul>
        <li class="{{ Request::is('ui_alerts*') ? 'active' : '' }}">
            <a href="/ui_alerts" title="Alerts" data-filter-tags="ui components alerts">
                <span class="nav-link-text" data-i18n="nav.ui_components_alerts">Alerts</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_accordion*') ? 'active' : '' }}">
            <a href="/ui_accordion" title="Accordions" data-filter-tags="ui components accordions">
                <span class="nav-link-text" data-i18n="nav.ui_components_accordions">Accordions</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_badges*') ? 'active' : '' }}">
            <a href="/ui_badges" title="Badges" data-filter-tags="ui components badges">
                <span class="nav-link-text" data-i18n="nav.ui_components_badges">Badges</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_breadcrumbs*') ? 'active' : '' }}">
            <a href="/ui_breadcrumbs" title="Breadcrumbs" data-filter-tags="ui components breadcrumbs">
                <span class="nav-link-text" data-i18n="nav.ui_components_breadcrumbs">Breadcrumbs</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_buttons*') ? 'active' : '' }}">
            <a href="/ui_buttons" title="Buttons" data-filter-tags="ui components buttons">
                <span class="nav-link-text" data-i18n="nav.ui_components_buttons">Buttons</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_button_group*') ? 'active' : '' }}">
            <a href="/ui_button_group" title="Button Group" data-filter-tags="ui components button group">
                <span class="nav-link-text" data-i18n="nav.ui_components_button_group">Button Group</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_cards*') ? 'active' : '' }}">
            <a href="/ui_cards" title="Cards" data-filter-tags="ui components cards">
                <span class="nav-link-text" data-i18n="nav.ui_components_cards">Cards</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_carousel*') ? 'active' : '' }}">
            <a href="/ui_carousel" title="Carousel" data-filter-tags="ui components carousel">
                <span class="nav-link-text" data-i18n="nav.ui_components_carousel">Carousel</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_collapse*') ? 'active' : '' }}">
            <a href="/ui_collapse" title="Collapse" data-filter-tags="ui components collapse">
                <span class="nav-link-text" data-i18n="nav.ui_components_collapse">Collapse</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_dropdowns*') ? 'active' : '' }}">
            <a href="/ui_dropdowns" title="Dropdowns" data-filter-tags="ui components dropdowns">
                <span class="nav-link-text" data-i18n="nav.ui_components_dropdowns">Dropdowns</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_list_filter*') ? 'active' : '' }}">
            <a href="/ui_list_filter" title="List Filter" data-filter-tags="ui components list filter">
                <span class="nav-link-text" data-i18n="nav.ui_components_list_filter">List Filter</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_modal*') ? 'active' : '' }}">
            <a href="/ui_modal" title="Modal" data-filter-tags="ui components modal">
                <span class="nav-link-text" data-i18n="nav.ui_components_modal">Modal</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_navbars*') ? 'active' : '' }}">
            <a href="/ui_navbars" title="Navbars" data-filter-tags="ui components navbars">
                <span class="nav-link-text" data-i18n="nav.ui_components_navbars">Navbars</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_panels*') ? 'active' : '' }}">
            <a href="/ui_panels" title="Panels" data-filter-tags="ui components panels">
                <span class="nav-link-text" data-i18n="nav.ui_components_panels">Panels</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_pagination*') ? 'active' : '' }}">
            <a href="/ui_pagination" title="Pagination" data-filter-tags="ui components pagination">
                <span class="nav-link-text" data-i18n="nav.ui_components_pagination">Pagination</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_popovers*') ? 'active' : '' }}">
            <a href="/ui_popovers" title="Popovers" data-filter-tags="ui components popovers">
                <span class="nav-link-text" data-i18n="nav.ui_components_popovers">Popovers</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_progress_bars*') ? 'active' : '' }}">
            <a href="/ui_progress_bars" title="Progress Bars" data-filter-tags="ui components progress bars">
                <span class="nav-link-text" data-i18n="nav.ui_components_progress_bars">Progress
                    Bars</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_scrollspy*') ? 'active' : '' }}">
            <a href="/ui_scrollspy" title="ScrollSpy" data-filter-tags="ui components scrollspy">
                <span class="nav-link-text" data-i18n="nav.ui_components_scrollspy">ScrollSpy</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_side_panel*') ? 'active' : '' }}">
            <a href="/ui_side_panel" title="Side Panel" data-filter-tags="ui components side panel">
                <span class="nav-link-text" data-i18n="nav.ui_components_side_panel">Side Panel</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_spinners*') ? 'active' : '' }}">
            <a href="/ui_spinners" title="Spinners" data-filter-tags="ui components spinners">
                <span class="nav-link-text" data-i18n="nav.ui_components_spinners">Spinners</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_tabs_pills*') ? 'active' : '' }}">
            <a href="/ui_tabs_pills" title="Tabs & Pills" data-filter-tags="ui components tabs & pills">
                <span class="nav-link-text" data-i18n="nav.ui_components_tabs_&_pills">Tabs & Pills</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_toasts*') ? 'active' : '' }}">
            <a href="/ui_toasts" title="Toasts" data-filter-tags="ui components toasts">
                <span class="nav-link-text" data-i18n="nav.ui_components_toasts">Toasts</span>
            </a>
        </li>
        <li class="{{ Request::is('ui_tooltips*') ? 'active' : '' }}">
            <a href="/ui_tooltips" title="Tooltips" data-filter-tags="ui components tooltips">
                <span class="nav-link-text" data-i18n="nav.ui_components_tooltips">Tooltips</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('utilities*') ? 'active open' : '' }}">
    <a href="#" title="Utilities" data-filter-tags="utilities">
        <i class="fal fa-bolt"></i>
        <span class="nav-link-text" data-i18n="nav.utilities">Utilities</span>
    </a>
    <ul>
        <li class="{{ Request::is('utilities_borders*') ? 'active' : '' }}">
            <a href="/utilities_borders" title="Borders" data-filter-tags="utilities borders">
                <span class="nav-link-text" data-i18n="nav.utilities_borders">Borders</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_clearfix*') ? 'active' : '' }}">
            <a href="/utilities_clearfix" title="Clearfix" data-filter-tags="utilities clearfix">
                <span class="nav-link-text" data-i18n="nav.utilities_clearfix">Clearfix</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_color_pallet*') ? 'active' : '' }}">
            <a href="/utilities_color_pallet" title="Color Pallet" data-filter-tags="utilities color pallet">
                <span class="nav-link-text" data-i18n="nav.utilities_color_pallet">Color Pallet</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_display_property*') ? 'active' : '' }}">
            <a href="/utilities_display_property" title="Display Property"
                data-filter-tags="utilities display property">
                <span class="nav-link-text" data-i18n="nav.utilities_display_property">Display
                    Property</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_fonts*') ? 'active' : '' }}">
            <a href="/utilities_fonts" title="Fonts" data-filter-tags="utilities fonts">
                <span class="nav-link-text" data-i18n="nav.utilities_fonts">Fonts</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_flexbox*') ? 'active' : '' }}">
            <a href="/utilities_flexbox" title="Flexbox" data-filter-tags="utilities flexbox">
                <span class="nav-link-text" data-i18n="nav.utilities_flexbox">Flexbox</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_helpers*') ? 'active' : '' }}">
            <a href="/utilities_helpers" title="Helpers" data-filter-tags="utilities helpers">
                <span class="nav-link-text" data-i18n="nav.utilities_helpers">Helpers</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_position*') ? 'active' : '' }}">
            <a href="/utilities_position" title="Position" data-filter-tags="utilities position">
                <span class="nav-link-text" data-i18n="nav.utilities_position">Position</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_responsive_grid*') ? 'active' : '' }}">
            <a href="/utilities_responsive_grid" title="Responsive Grid"
                data-filter-tags="utilities responsive grid">
                <span class="nav-link-text" data-i18n="nav.utilities_responsive_grid">Responsive
                    Grid</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_sizing*') ? 'active' : '' }}">
            <a href="/utilities_sizing" title="Sizing" data-filter-tags="utilities sizing">
                <span class="nav-link-text" data-i18n="nav.utilities_sizing">Sizing</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_spacing*') ? 'active' : '' }}">
            <a href="/utilities_spacing" title="Spacing" data-filter-tags="utilities spacing">
                <span class="nav-link-text" data-i18n="nav.utilities_spacing">Spacing</span>
            </a>
        </li>
        <li class="{{ Request::is('utilities_typography*') ? 'active' : '' }}">
            <a href="/utilities_typography" title="Typography"
                data-filter-tags="utilities typography fonts headings bold lead colors sizes link text states list styles truncate alignment">
                <span class="nav-link-text" data-i18n="nav.utilities_typography">Typography</span>
            </a>
        </li>
        <li class="{{ Request::is('') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Menu child" data-filter-tags="utilities menu child">
                <span class="nav-link-text" data-i18n="nav.utilities_menu_child">Menu child</span>
            </a>
            <ul>
                <li class="{{ Request::is('') ? 'active' : '' }}">
                    <a href="javascript:void(0);" title="Sublevel Item"
                        data-filter-tags="utilities menu child sublevel item">
                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child_sublevel_item">Sublevel
                            Item</span>
                    </a>
                </li>
                <li class="{{ Request::is('') ? 'active' : '' }}">
                    <a href="javascript:void(0);" title="Another Item"
                        data-filter-tags="utilities menu child another item">
                        <span class="nav-link-text" data-i18n="nav.utilities_menu_child_another_item">Another
                            Item</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="disabled">
            <a href="javascript:void(0);" title="Disabled item" data-filter-tags="utilities disabled item">
                <span class="nav-link-text" data-i18n="nav.utilities_disabled_item">Disabled item</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('icons*') ? 'active open' : '' }}">
    <a href="#" title="Font Icons" data-filter-tags="font icons">
        <i class="fal fa-map-marker-alt"></i>
        <span class="nav-link-text" data-i18n="nav.font_icons">Font Icons</span>
        <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">7,500+</span>
    </a>
    <ul>
        <li class="{{ Request::is('icons_fontawesome*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="FontAwesome" data-filter-tags="font icons fontawesome">
                <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome">FontAwesome Pro</span>
            </a>
            <ul>
                <li class="{{ Request::is('icons_fontawesome_light*') ? 'active' : '' }}">
                    <a href="/icons_fontawesome_light" title="Light"
                        data-filter-tags="font icons fontawesome light">
                        <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_light">Light</span>
                    </a>
                </li>
                <li class="{{ Request::is('icons_fontawesome_regular*') ? 'active' : '' }}">
                    <a href="/icons_fontawesome_regular" title="Regular"
                        data-filter-tags="font icons fontawesome regular">
                        <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_regular">Regular</span>
                    </a>
                </li>
                <li class="{{ Request::is('icons_fontawesome_solid') ? 'active' : '' }}">
                    <a href="/icons_fontawesome_solid" title="Solid"
                        data-filter-tags="font icons fontawesome solid">
                        <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_solid">Solid</span>
                    </a>
                </li>
                <li class="{{ Request::is('icons_fontawesome_duotone') ? 'active' : '' }}">
                    <a href="/icons_fontawesome_duotone" title="Duotone"
                        data-filter-tags="font icons fontawesome duotone">
                        <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_duotone">Duotone</span>
                    </a>
                </li>
                <li class="{{ Request::is('icons_fontawesome_brand') ? 'active' : '' }}">
                    <a href="/icons_fontawesome_brand" title="Brand"
                        data-filter-tags="font icons fontawesome brand">
                        <span class="nav-link-text" data-i18n="nav.font_icons_fontawesome_brand">Brand</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('icons_nextgen*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="NextGen Icons" data-filter-tags="font icons nextgen icons">
                <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons">NextGen Icons</span>
            </a>
            <ul>
                <li class="{{ Request::is('icons_nextgen_general') ? 'active' : '' }}">
                    <a href="/icons_nextgen_general" title="General"
                        data-filter-tags="font icons nextgen icons general">
                        <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_general">General</span>
                    </a>
                </li>
                <li class="{{ Request::is('icons_nextgen_base') ? 'active' : '' }}">
                    <a href="/icons_nextgen_base" title="Base" data-filter-tags="font icons nextgen icons base">
                        <span class="nav-link-text" data-i18n="nav.font_icons_nextgen_icons_base">Base</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('icons_stack*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Stack Icons" data-filter-tags="font icons stack icons">
                <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons">Stack Icons</span>
            </a>
            <ul>
                <li class="{{ Request::is('icons_stack_showcase') ? 'active' : '' }}">
                    <a href="/icons_stack_showcase" title="Showcase"
                        data-filter-tags="font icons stack icons showcase">
                        <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_showcase">Showcase</span>
                    </a>
                </li>
                <li class="{{ Request::is('icons_stack_generate') ? 'active' : '' }}">
                    <a href="/icons_stack_generate?layers=3" title="Generate Stack"
                        data-filter-tags="font icons stack icons generate stack">
                        <span class="nav-link-text" data-i18n="nav.font_icons_stack_icons_generate_stack">Generate
                            Stack</span>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</li>
<li class="{{ Request::is('tables*') ? 'active open' : '' }}">
    <a href="#" title="Tables" data-filter-tags="tables">
        <i class="fal fa-th-list"></i>
        <span class="nav-link-text" data-i18n="nav.tables">Tables</span>
    </a>
    <ul>
        <li class="{{ Request::is('tables_basic') ? 'active' : '' }}">
            <a href="/tables_basic" title="Basic Tables" data-filter-tags="tables basic tables">
                <span class="nav-link-text" data-i18n="nav.tables_basic_tables">Basic Tables</span>
            </a>
        </li>
        <li class="{{ Request::is('tables_generate_style') ? 'active' : '' }}">
            <a href="/tables_generate_style" title="Generate Table Style"
                data-filter-tags="tables generate table style">
                <span class="nav-link-text" data-i18n="nav.tables_generate_table_style">Generate Table
                    Style</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('form_stuff*') ? 'active open' : '' }}">
    <a href="#" title="Form Stuff" data-filter-tags="form stuff">
        <i class="fal fa-edit"></i>
        <span class="nav-link-text" data-i18n="nav.form_stuff">Form Stuff</span>
    </a>
    <ul>
        <li class="{{ Request::is('form_stuff_basic_inputs') ? 'active' : '' }}">
            <a href="/form_stuff_basic_inputs" title="Basic Inputs" data-filter-tags="form stuff basic inputs">
                <span class="nav-link-text" data-i18n="nav.form_stuff_basic_inputs">Basic Inputs</span>
            </a>
        </li>
        <li class="{{ Request::is('form_stuff_checkbox_radio') ? 'active' : '' }}">
            <a href="/form_stuff_checkbox_radio" title="Checkbox & Radio"
                data-filter-tags="form stuff checkbox & radio">
                <span class="nav-link-text" data-i18n="nav.form_stuff_checkbox_&_radio">Checkbox &
                    Radio</span>
            </a>
        </li>
        <li class="{{ Request::is('form_stuff_input_groups') ? 'active' : '' }}">
            <a href="/form_stuff_input_groups" title="Input Groups" data-filter-tags="form stuff input groups">
                <span class="nav-link-text" data-i18n="nav.form_stuff_input_groups">Input Groups</span>
            </a>
        </li>
        <li class="{{ Request::is('form_stuff_validation') ? 'active' : '' }}">
            <a href="/form_stuff_validation" title="Validation" data-filter-tags="form stuff validation">
                <span class="nav-link-text" data-i18n="nav.form_stuff_validation">Validation</span>
            </a>
        </li>
    </ul>
</li>
