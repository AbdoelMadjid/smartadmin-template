<li class="nav-title">Develovers</li>
<li class="{{ Request::is('dev_*') ? 'active open' : '' }}">
    <a href="#" title="Depelover" data-filter-tags="develpoer">
        <i class="fal fa-code"></i>
        <span class="nav-link-text" data-i18n="nav.depelover">Depelover</span>
    </a>
    <ul>
        <li class="{{ Request::is('dev_component') ? 'active' : '' }}">
            <a href="/dev_component" title="Component" data-filter-tags="application component">
                <span class="nav-link-text" data-i18n="nav.application_component">Component</span>
            </a>
        </li>
        <li class="{{ Request::is('dev_form') ? 'active' : '' }}">
            <a href="/dev_form" title="Component" data-filter-tags="application component">
                <span class="nav-link-text" data-i18n="nav.application_component">Component Form</span>
            </a>
        </li>
        <li class="{{ Request::is('/dev_landing_page') ? 'active' : '' }}">
            <a href="/dev_landingpage" title="Landing Page" data-filter-tags="application landing page">
                <span class="nav-link-text" data-i18n="nav.application_landing_page">Landing Page</span>
            </a>
        </li>
    </ul>
</li>
