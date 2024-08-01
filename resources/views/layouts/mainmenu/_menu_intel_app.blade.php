<li class="nav-title">Intel Application</li>
<li class="{{ Request::is('intel*') ? 'active open' : '' }}">
    <a href="#" title="Application Intel" data-filter-tags="application intel">
        <i class="fal fa-info-circle"></i>
        <span class="nav-link-text" data-i18n="nav.application_intel">Application Intel</span>
    </a>
    <ul>
        <li class="{{ Request::is('intel_analytics_dashboard*') ? 'active' : '' }}">
            <a href="/intel_analytics_dashboard" title="Analytics Dashboard"
                data-filter-tags="application intel analytics dashboard">
                <span class="nav-link-text" data-i18n="nav.application_intel_analytics_dashboard">Analytics
                    Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('intel_marketing_dashboard*') ? 'active' : '' }}">
            <a href="/intel_marketing_dashboard" title="Marketing Dashboard"
                data-filter-tags="application intel marketing dashboard">
                <span class="nav-link-text" data-i18n="nav.application_intel_marketing_dashboard">Marketing
                    Dashboard</span>
            </a>
        </li>
        <li class="{{ Request::is('intel_introduction*') ? 'active' : '' }}">
            <a href="/intel_introduction" title="Introduction" data-filter-tags="application intel introduction">
                <span class="nav-link-text" data-i18n="nav.application_intel_introduction">Introduction</span>
            </a>
        </li>
        <li class="{{ Request::is('intel_privacy*') ? 'active' : '' }}">
            <a href="/intel_privacy" title="Privacy" data-filter-tags="application intel privacy">
                <span class="nav-link-text" data-i18n="nav.application_intel_privacy">Privacy</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('settings*') ? 'active open' : '' }}">
    <a href="#" title="Theme Settings" data-filter-tags="theme settings">
        <i class="fal fa-cog"></i>
        <span class="nav-link-text" data-i18n="nav.theme_settings">Theme Settings</span>
    </a>
    <ul>
        <li class="{{ Request::is('settings_how_it_works*') ? 'active' : '' }}">
            <a href="/settings_how_it_works" title="How it works" data-filter-tags="theme settings how it works">
                <span class="nav-link-text" data-i18n="nav.theme_settings_how_it_works">How it
                    works</span>
            </a>
        </li>
        <li class="{{ Request::is('settings_layout_options*') ? 'active' : '' }}">
            <a href="/settings_layout_options" title="Layout Options" data-filter-tags="theme settings layout options">
                <span class="nav-link-text" data-i18n="nav.theme_settings_layout_options">Layout
                    Options</span>
            </a>
        </li>
        <li class="{{ Request::is('settings_theme_modes*') ? 'active' : '' }}">
            <a href="/settings_theme_modes" title="Theme Modes (beta)"
                data-filter-tags="theme settings theme modes (beta)">
                <span class="nav-link-text" data-i18n="nav.theme_settings_theme_modes_(beta)">Theme Modes
                    (beta)</span>
            </a>
        </li>
        <li class="{{ Request::is('settings_skin_options*') ? 'active' : '' }}">
            <a href="/settings_skin_options" title="Skin Options" data-filter-tags="theme settings skin options">
                <span class="nav-link-text" data-i18n="nav.theme_settings_skin_options">Skin
                    Options</span>
            </a>
        </li>
        <li class="{{ Request::is('settings_saving_db*') ? 'active' : '' }}">
            <a href="/settings_saving_db" title="Saving to Database"
                data-filter-tags="theme settings saving to database">
                <span class="nav-link-text" data-i18n="nav.theme_settings_saving_to_database">Saving to
                    Database</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('docs*') ? 'active open' : '' }}">
    <a href="#" title="Documentation" data-filter-tags="documentation">
        <i class="fal fa-book"></i>
        <span class="nav-link-text" data-i18n="nav.documentation">Documentation</span>
    </a>
    <ul>
        <li class="{{ Request::is('docs_general*') ? 'active' : '' }}">
            <a href="/docs_general" title="General Docs" data-filter-tags="documentation general docs">
                <span class="nav-link-text" data-i18n="nav.documentation_general_docs">General Docs</span>
            </a>
        </li>
        <li class="{{ Request::is('docs_project_structure*') ? 'active' : '' }}">
            <a href="/docs_project_structure" title="Project Structure"
                data-filter-tags="documentation project structure">
                <span class="nav-link-text" data-i18n="nav.documentation_project_structure">Project
                    Structure</span>
            </a>
        </li>
        <li class="{{ Request::is('docs_flavors_editions*') ? 'active' : '' }}">
            <a href="/docs_flavors_editions" title="Flavors & Editions"
                data-filter-tags="documentation flavors & editions">
                <span class="nav-link-text" data-i18n="nav.documentation_flavors_&_editions">Flavors &
                    Editions</span>
            </a>
        </li>
        <li class="{{ Request::is('docs_community_support*') ? 'active' : '' }}">
            <a href="/docs_community_support" title="Community Support"
                data-filter-tags="documentation community support">
                <span class="nav-link-text" data-i18n="nav.documentation_community_support">Community
                    Support</span>
            </a>
        </li>
        <li class="{{ Request::is('docs_premium_support*') ? 'active' : '' }}">
            <a href="/docs_premium_support" title="Premium Support" data-filter-tags="documentation premium support">
                <span class="nav-link-text" data-i18n="nav.documentation_premium_support">Premium
                    Support</span>
            </a>
        </li>
        <li class="{{ Request::is('docs_licensing*') ? 'active' : '' }}">
            <a href="/docs_licensing" title="Licensing" data-filter-tags="documentation licensing">
                <span class="nav-link-text" data-i18n="nav.documentation_licensing">Licensing</span>
            </a>
        </li>
        <li class="{{ Request::is('docs_buildnotes*') ? 'active' : '' }}">
            <a href="/docs_buildnotes" title="Build Notes" data-filter-tags="documentation build notes">
                <span class="nav-link-text" data-i18n="nav.documentation_build_notes">Build Notes</span>
                <span class="">v 4.5.1 </span>
            </a>
        </li>
    </ul>
</li>
