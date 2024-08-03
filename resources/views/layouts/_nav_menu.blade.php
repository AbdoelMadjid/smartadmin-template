<ul id="js-nav-menu" class="nav-menu">
    <li class="{{ Request::is('dashboard') ? 'active' : '' }}">
        <a href="/dashboard" title="Dashboard" data-filter-tags="application dashboard">
            <i class="fal fa-home"></i>
            <span class="nav-link-text" data-i18n="nav.application_dashboard">Dashboard</span>
        </a>
    </li>
    <li class="{{ Request::is('about') ? 'active' : '' }}">
        <a href="/about" title="About" data-filter-tags="application about">
            <i class="fal fa-info-circle"></i>
            <span class="nav-link-text" data-i18n="nav.application_about">About</span>
        </a>
    </li>
    @include('layouts.mainmenu._menu_depelover')
    @include('layouts.mainmenu._menu_intel_app')
    @include('layouts.mainmenu._menu_tools_component_app')
    @include('layouts.mainmenu._menu_plugin_addon_app')
    @include('layouts.mainmenu._menu_layouts_app')
</ul>
