<li class="nav-title">Develovers</li>
<li class="{{ Request::is('component_*') ? 'active open' : '' }}">
    <a href="#" title="Component" data-filter-tags="component">
        <i class="fal fa-code"></i>
        <span class="nav-link-text" data-i18n="nav.depelover">Component</span>
    </a>
    <ul>
        <li class="{{ Request::is('component_other') ? 'active' : '' }}">
            <a href="/component_other" title="Component" data-filter-tags="application component">
                <span class="nav-link-text" data-i18n="nav.application_component">Component</span>
            </a>
        </li>
        <li class="{{ Request::is('component_form') ? 'active' : '' }}">
            <a href="/component_form" title="Component" data-filter-tags="application component">
                <span class="nav-link-text" data-i18n="nav.application_component">Component Form</span>
            </a>
        </li>
        <li class="{{ Request::is('component_button') ? 'active' : '' }}">
            <a href="/component_button" title="Component" data-filter-tags="application component">
                <span class="nav-link-text" data-i18n="nav.application_component">Component Button</span>
            </a>
        </li>
        <li class="{{ Request::is('/dev_landing_page') ? 'active' : '' }}">
            <a href="/dev_landingpage" title="Landing Page" data-filter-tags="application landing page">
                <span class="nav-link-text" data-i18n="nav.application_landing_page">Landing Page</span>
            </a>
        </li>
    </ul>
</li>
