<li class="nav-title">Layouts & Apps</li>
<li class="{{ Request::is('page_*') ? 'active open' : '' }}">
    <a href="#" title="Pages" data-filter-tags="pages">
        <i class="fal fa-plus-circle"></i>
        <span class="nav-link-text" data-i18n="nav.pages">Page Views</span>
    </a>
    <ul>
        <li class="{{ Request::is('page_chat') ? 'active' : '' }}">
            <a href="/page_chat" title="Chat" data-filter-tags="pages chat">
                <span class="nav-link-text" data-i18n="nav.pages_chat">Chat</span>
            </a>
        </li>
        <li class="{{ Request::is('page_contacts') ? 'active' : '' }}">
            <a href="/page_contacts" title="Contacts" data-filter-tags="pages contacts">
                <span class="nav-link-text" data-i18n="nav.pages_contacts">Contacts</span>
            </a>
        </li>
        <li class="{{ Request::is('page_forum*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Forum" data-filter-tags="pages forum">
                <span class="nav-link-text" data-i18n="nav.pages_forum">Forum</span>
            </a>
            <ul>
                <li class="{{ Request::is('page_forum_list') ? 'active' : '' }}">
                    <a href="/page_forum_list" title="List" data-filter-tags="pages forum list">
                        <span class="nav-link-text" data-i18n="nav.pages_forum_list">List</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_forum_threads') ? 'active' : '' }}">
                    <a href="/page_forum_threads" title="Threads" data-filter-tags="pages forum threads">
                        <span class="nav-link-text" data-i18n="nav.pages_forum_threads">Threads</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_forum_discussion') ? 'active' : '' }}">
                    <a href="/page_forum_discussion" title="Discussion" data-filter-tags="pages forum discussion">
                        <span class="nav-link-text" data-i18n="nav.pages_forum_discussion">Discussion</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('page_inbox*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Inbox" data-filter-tags="pages inbox">
                <span class="nav-link-text" data-i18n="nav.pages_inbox">Inbox</span>
            </a>
            <ul>
                <li class="{{ Request::is('page_inbox_general') ? 'active' : '' }}">
                    <a href="/page_inbox_general" title="General" data-filter-tags="pages inbox general">
                        <span class="nav-link-text" data-i18n="nav.pages_inbox_general">General</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_inbox_read') ? 'active' : '' }}">
                    <a href="/page_inbox_read" title="Read" data-filter-tags="pages inbox read">
                        <span class="nav-link-text" data-i18n="nav.pages_inbox_read">Read</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_inbox_write') ? 'active' : '' }}">
                    <a href="/page_inbox_write" title="Write" data-filter-tags="pages inbox write">
                        <span class="nav-link-text" data-i18n="nav.pages_inbox_write">Write</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('page_invoice') ? 'active' : '' }}">
            <a href="/page_invoice" title="Invoice (printable)" data-filter-tags="pages invoice (printable)">
                <span class="nav-link-text" data-i18n="nav.pages_invoice_(printable)">Invoice
                    (printable)</span>
            </a>
        </li>
        <li class="{{ Request::is('pages_auth*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Authentication" data-filter-tags="pages authentication">
                <span class="nav-link-text" data-i18n="nav.pages_authentication">Authentication</span>
            </a>
            <ul>
                <li class="{{ Request::is('page_auth_forget') ? 'active' : '' }}">
                    <a href="/page_auth_forget" title="Forget Password"
                        data-filter-tags="pages authentication forget password">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_forget_password">Forget
                            Password</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_auth_locked') ? 'active' : '' }}">
                    <a href="/page_auth_locked" title="Locked Screen"
                        data-filter-tags="pages authentication locked screen">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_locked_screen">Locked
                            Screen</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_auth_login') ? 'active' : '' }}">
                    <a href="/page_auth_login" title="Login" data-filter-tags="pages authentication login">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_login">Login</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_auth_login_alt') ? 'active' : '' }}">
                    <a href="/page_auth_login_alt" title="Login Alt"
                        data-filter-tags="pages authentication login alt">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_login_alt">Login
                            Alt</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_auth_register') ? 'active' : '' }}">
                    <a href="/page_auth_register" title="Register" data-filter-tags="pages authentication register">
                        <span class="nav-link-text" data-i18n="nav.pages_authentication_register">Register</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_auth_confirmation') ? 'active' : '' }}">
                    <a href="/page_auth_confirmation" title="Confirmation"
                        data-filter-tags="pages authentication confirmation">
                        <span class="nav-link-text"
                            data-i18n="nav.pages_authentication_confirmation">Confirmation</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('page_error*') ? 'active open' : '' }}">
            <a href="javascript:void(0);" title="Error Pages" data-filter-tags="pages error pages">
                <span class="nav-link-text" data-i18n="nav.pages_error_pages">Error Pages</span>
            </a>
            <ul>
                <li class="{{ Request::is('page_error_general') ? 'active' : '' }}">
                    <a href="/page_error_general" title="General Error"
                        data-filter-tags="pages error pages general error">
                        <span class="nav-link-text" data-i18n="nav.pages_error_pages_general_error">General
                            Error</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_error_404') ? 'active' : '' }}">
                    <a href="/page_error_404" title="Server Error" data-filter-tags="pages error pages server error">
                        <span class="nav-link-text" data-i18n="nav.pages_error_pages_server_error">Server
                            Error</span>
                    </a>
                </li>
                <li class="{{ Request::is('page_error_announced') ? 'active' : '' }}">
                    <a href="/page_error_announced" title="Announced Error"
                        data-filter-tags="pages error pages announced error">
                        <span class="nav-link-text" data-i18n="nav.pages_error_pages_announced_error">Announced
                            Error</span>
                    </a>
                </li>
            </ul>
        </li>
        <li class="{{ Request::is('page_profile') ? 'active' : '' }}">
            <a href="/page_profile" title="Profile" data-filter-tags="pages profile">
                <span class="nav-link-text" data-i18n="nav.pages_profile">Profile</span>
            </a>
        </li>
        <li class="{{ Request::is('page_projects') ? 'active' : '' }}">
            <a href="/page_projects" title="Projects" data-filter-tags="pages projects">
                <span class="nav-link-text" data-i18n="nav.pages_projects">Projects</span>
            </a>
        </li>
        <li class="{{ Request::is('page_search') ? 'active' : '' }}">
            <a href="/page_search" title="Search Results" data-filter-tags="pages search results">
                <span class="nav-link-text" data-i18n="nav.pages_search_results">Search Results</span>
            </a>
        </li>
    </ul>
</li>
