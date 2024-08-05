<li class="nav-title">Develovers</li>
<li class="{{ Request::is('component_*') ? 'active open' : '' }}">
    <a href="#" title="Component" data-filter-tags="component">
        <i class="fal fa-code"></i>
        <span class="nav-link-text" data-i18n="nav.depelover">Component</span>
    </a>
    <ul>
        <li class="{{ Request::is('component_other') ? 'active' : '' }}">
            <a href="/component_other" title="Component Other" data-filter-tags="component other">
                <span class="nav-link-text" data-i18n="nav.component_other">Other</span>
            </a>
        </li>
        <li class="{{ Request::is('component_form') ? 'active' : '' }}">
            <a href="/component_form" title="Component Form" data-filter-tags="component form">
                <span class="nav-link-text" data-i18n="nav.component_form">Form</span>
            </a>
        </li>
        <li class="{{ Request::is('component_button') ? 'active' : '' }}">
            <a href="/component_button" title="Component Button" data-filter-tags="component button">
                <span class="nav-link-text" data-i18n="nav.component_button">Button</span>
            </a>
        </li>
    </ul>
</li>
