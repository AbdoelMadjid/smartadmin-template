<li class="nav-title">Plugins & Addons</li>
<li class="{{ Request::is('plugins*') ? 'active open' : '' }}">
    <a href="#" title="Plugins" data-filter-tags="plugins">
        <i class="fal fa-shield-alt"></i>
        <span class="nav-link-text" data-i18n="nav.plugins">Core Plugins</span>
    </a>
    <ul>
        <li class="{{ Request::is('plugins_faq') ? 'active' : '' }}">
            <a href="/plugins_faq" title="Plugins FAQ" data-filter-tags="plugins plugins faq">
                <span class="nav-link-text" data-i18n="nav.plugins_plugins_faq">Plugins FAQ</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_waves') ? 'active' : '' }}">
            <a href="/plugins_waves" title="Waves" data-filter-tags="plugins waves">
                <span class="nav-link-text" data-i18n="nav.plugins_waves">Waves</span>
                <span class="dl-ref label bg-primary-400 ml-2">9 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_pacejs') ? 'active' : '' }}">
            <a href="/plugins_pacejs" title="PaceJS" data-filter-tags="plugins pacejs">
                <span class="nav-link-text" data-i18n="nav.plugins_pacejs">PaceJS</span>
                <span class="dl-ref label bg-primary-500 ml-2">13 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_smartpanels') ? 'active' : '' }}">
            <a href="/plugins_smartpanels" title="SmartPanels" data-filter-tags="plugins smartpanels">
                <span class="nav-link-text" data-i18n="nav.plugins_smartpanels">SmartPanels</span>
                <span class="dl-ref label bg-primary-600 ml-2">9 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_bootbox') ? 'active' : '' }}">
            <a href="/plugins_bootbox" title="BootBox" data-filter-tags="plugins bootbox alert sound">
                <span class="nav-link-text" data-i18n="nav.plugins_bootbox">BootBox</span>
                <span class="dl-ref label bg-primary-600 ml-2">15 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_slimscroll') ? 'active' : '' }}">
            <a href="/plugins_slimscroll" title="Slimscroll" data-filter-tags="plugins slimscroll">
                <span class="nav-link-text" data-i18n="nav.plugins_slimscroll">Slimscroll</span>
                <span class="dl-ref label bg-primary-700 ml-2">5 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_throttle') ? 'active' : '' }}">
            <a href="/plugins_throttle" title="Throttle" data-filter-tags="plugins throttle">
                <span class="nav-link-text" data-i18n="nav.plugins_throttle">Throttle</span>
                <span class="dl-ref label bg-primary-700 ml-2">1 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_navigation') ? 'active' : '' }}">
            <a href="/plugins_navigation" title="Navigation" data-filter-tags="plugins navigation">
                <span class="nav-link-text" data-i18n="nav.plugins_navigation">Navigation</span>
                <span class="dl-ref label bg-primary-700 ml-2">2 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_i18next') ? 'active' : '' }}">
            <a href="/plugins_i18next" title="i18next" data-filter-tags="plugins i18next">
                <span class="nav-link-text" data-i18n="nav.plugins_i18next">i18next</span>
                <span class="dl-ref label bg-primary-700 ml-2">10 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('plugins_appcore') ? 'active' : '' }}">
            <a href="/plugins_appcore" title="App.Core" data-filter-tags="plugins app.core">
                <span class="nav-link-text" data-i18n="nav.plugins_app.core">App.Core</span>
                <span class="dl-ref label bg-success-700 ml-2">14 KB</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('datatables*') ? 'active open' : '' }}">
    <a href="#" title="Datatables" data-filter-tags="datatables datagrid">
        <i class="fal fa-table"></i>
        <span class="nav-link-text" data-i18n="nav.datatables">Datatables</span>
        <span class="dl-ref bg-primary-500 hidden-nav-function-minify hidden-nav-function-top">235
            KB</span>
    </a>
    <ul>
        <li class="{{ Request::is('datatables_basic') ? 'active' : '' }}">
            <a href="/datatables_basic" title="Basic" data-filter-tags="datatables datagrid basic">
                <span class="nav-link-text" data-i18n="nav.datatables_basic">Basic</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_autofill') ? 'active' : '' }}">
            <a href="/datatables_autofill" title="Autofill" data-filter-tags="datatables datagrid autofill">
                <span class="nav-link-text" data-i18n="nav.datatables_autofill">Autofill</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_buttons') ? 'active' : '' }}">
            <a href="/datatables_buttons" title="Buttons" data-filter-tags="datatables datagrid buttons">
                <span class="nav-link-text" data-i18n="nav.datatables_buttons">Buttons</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_export') ? 'active' : '' }}">
            <a href="/datatables_export" title="Export"
                data-filter-tags="datatables datagrid export tables pdf excel print csv">
                <span class="nav-link-text" data-i18n="nav.datatables_export">Export</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_colreorder') ? 'active' : '' }}">
            <a href="/datatables_colreorder" title="ColReorder" data-filter-tags="datatables datagrid colreorder">
                <span class="nav-link-text" data-i18n="nav.datatables_colreorder">ColReorder</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_columnfilter') ? 'active' : '' }}">
            <a href="/datatables_columnfilter" title="ColumnFilter"
                data-filter-tags="datatables datagrid columnfilter">
                <span class="nav-link-text" data-i18n="nav.datatables_columnfilter">ColumnFilter</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_fixedcolumns') ? 'active' : '' }}">
            <a href="/datatables_fixedcolumns" title="FixedColumns"
                data-filter-tags="datatables datagrid fixedcolumns">
                <span class="nav-link-text" data-i18n="nav.datatables_fixedcolumns">FixedColumns</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_fixedheader') ? 'active' : '' }}">
            <a href="/datatables_fixedheader" title="FixedHeader" data-filter-tags="datatables datagrid fixedheader">
                <span class="nav-link-text" data-i18n="nav.datatables_fixedheader">FixedHeader</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_keytable') ? 'active' : '' }}">
            <a href="/datatables_keytable" title="KeyTable" data-filter-tags="datatables datagrid keytable">
                <span class="nav-link-text" data-i18n="nav.datatables_keytable">KeyTable</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_responsive') ? 'active' : '' }}">
            <a href="/datatables_responsive" title="Responsive" data-filter-tags="datatables datagrid responsive">
                <span class="nav-link-text" data-i18n="nav.datatables_responsive">Responsive</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_responsive_alt') ? 'active' : '' }}">
            <a href="/datatables_responsive_alt" title="Responsive Alt"
                data-filter-tags="datatables datagrid responsive alt">
                <span class="nav-link-text" data-i18n="nav.datatables_responsive_alt">Responsive
                    Alt</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_rowgroup') ? 'active' : '' }}">
            <a href="/datatables_rowgroup" title="RowGroup" data-filter-tags="datatables datagrid rowgroup">
                <span class="nav-link-text" data-i18n="nav.datatables_rowgroup">RowGroup</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_rowreorder') ? 'active' : '' }}">
            <a href="/datatables_rowreorder" title="RowReorder" data-filter-tags="datatables datagrid rowreorder">
                <span class="nav-link-text" data-i18n="nav.datatables_rowreorder">RowReorder</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_scroller') ? 'active' : '' }}">
            <a href="/datatables_scroller" title="Scroller" data-filter-tags="datatables datagrid scroller">
                <span class="nav-link-text" data-i18n="nav.datatables_scroller">Scroller</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_select') ? 'active' : '' }}">
            <a href="/datatables_select" title="Select" data-filter-tags="datatables datagrid select">
                <span class="nav-link-text" data-i18n="nav.datatables_select">Select</span>
            </a>
        </li>
        <li class="{{ Request::is('datatables_alteditor') ? 'active' : '' }}">
            <a href="/datatables_alteditor" title="AltEditor" data-filter-tags="datatables datagrid alteditor">
                <span class="nav-link-text" data-i18n="nav.datatables_alteditor">AltEditor</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('statistics*') ? 'active open' : '' }}">
    <a href="#" title="Statistics" data-filter-tags="statistics chart graphs">
        <i class="fal fa-chart-pie"></i>
        <span class="nav-link-text" data-i18n="nav.statistics">Statistics</span>
    </a>
    <ul>
        <li class="{{ Request::is('statistics_flot') ? 'active' : '' }}">
            <a href="/statistics_flot" title="Flot" data-filter-tags="statistics chart graphs flot bar pie">
                <span class="nav-link-text" data-i18n="nav.statistics_flot">Flot</span>
                <span class="dl-ref label bg-primary-500 ml-2">36 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_chartjs') ? 'active' : '' }}">
            <a href="/statistics_chartjs" title="Chart.js"
                data-filter-tags="statistics chart graphs chart.js bar pie">
                <span class="nav-link-text" data-i18n="nav.statistics_chart.js">Chart.js</span>
                <span class="dl-ref label bg-primary-500 ml-2">205 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_chartist') ? 'active' : '' }}">
            <a href="/statistics_chartist" title="Chartist.js"
                data-filter-tags="statistics chart graphs chartist.js">
                <span class="nav-link-text" data-i18n="nav.statistics_chartist.js">Chartist.js</span>
                <span class="dl-ref label bg-primary-600 ml-2">39 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_c3') ? 'active' : '' }}">
            <a href="/statistics_c3" title="C3 Charts" data-filter-tags="statistics chart graphs c3 charts">
                <span class="nav-link-text" data-i18n="nav.statistics_c3_charts">C3 Charts</span>
                <span class="dl-ref label bg-primary-600 ml-2">197 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_peity') ? 'active' : '' }}">
            <a href="/statistics_peity" title="Peity" data-filter-tags="statistics chart graphs peity small">
                <span class="nav-link-text" data-i18n="nav.statistics_peity">Peity</span>
                <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_sparkline') ? 'active' : '' }}">
            <a href="/statistics_sparkline" title="Sparkline"
                data-filter-tags="statistics chart graphs sparkline small tiny">
                <span class="nav-link-text" data-i18n="nav.statistics_sparkline">Sparkline</span>
                <span class="dl-ref label bg-primary-700 ml-2">42 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_easypiechart') ? 'active' : '' }}">
            <a href="/statistics_easypiechart" title="Easy Pie Chart"
                data-filter-tags="statistics chart graphs easy pie chart">
                <span class="nav-link-text" data-i18n="nav.statistics_easy_pie_chart">Easy Pie
                    Chart</span>
                <span class="dl-ref label bg-primary-700 ml-2">4 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('statistics_dygraph') ? 'active' : '' }}">
            <a href="/statistics_dygraph" title="Dygraph" data-filter-tags="statistics chart graphs dygraph complex">
                <span class="nav-link-text" data-i18n="nav.statistics_dygraph">Dygraph</span>
                <span class="dl-ref label bg-primary-700 ml-2">120 KB</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('notifications*') ? 'active open' : '' }}">
    <a href="#" title="Notifications" data-filter-tags="notifications">
        <i class="fal fa-exclamation-circle"></i>
        <span class="nav-link-text" data-i18n="nav.notifications">Notifications</span>
    </a>
    <ul>
        <li class="{{ Request::is('notifications_sweetalert2') ? 'active' : '' }}">
            <a href="/notifications_sweetalert2" title="SweetAlert2" data-filter-tags="notifications sweetalert2">
                <span class="nav-link-text" data-i18n="nav.notifications_sweetalert2">SweetAlert2</span>
                <span class="dl-ref label bg-primary-500 ml-2">40 KB</span>
            </a>
        </li>
        <li class="{{ Request::is('notifications_toastr') ? 'active' : '' }}">
            <a href="/notifications_toastr" title="Toastr" data-filter-tags="notifications toastr">
                <span class="nav-link-text" data-i18n="nav.notifications_toastr">Toastr</span>
                <span class="dl-ref label bg-primary-600 ml-2">5 KB</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('form_plugins*') ? 'active open' : '' }}">
    <a href="#" title="Form Plugins" data-filter-tags="form plugins">
        <i class="fal fa-credit-card-front"></i>
        <span class="nav-link-text" data-i18n="nav.form_plugins">Form Plugins</span>
    </a>
    <ul>
        <li class="{{ Request::is('form_plugins_colorpicker') ? 'active' : '' }}">
            <a href="/form_plugins_colorpicker" title="Color Picker" data-filter-tags="form plugins color picker">
                <span class="nav-link-text" data-i18n="nav.form_plugins_color_picker">Color Picker</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_datepicker') ? 'active' : '' }}">
            <a href="/form_plugins_datepicker" title="Date Picker" data-filter-tags="form plugins date picker">
                <span class="nav-link-text" data-i18n="nav.form_plugins_date_picker">Date Picker</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_daterange_picker') ? 'active' : '' }}">
            <a href="/form_plugins_daterange_picker" title="Date Range Picker"
                data-filter-tags="form plugins date range picker">
                <span class="nav-link-text" data-i18n="nav.form_plugins_date_range_picker">Date Range
                    Picker</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_dropzone') ? 'active' : '' }}">
            <a href="/form_plugins_dropzone" title="Dropzone" data-filter-tags="form plugins dropzone">
                <span class="nav-link-text" data-i18n="nav.form_plugins_dropzone">Dropzone</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_ionrangeslider') ? 'active' : '' }}">
            <a href="/form_plugins_ionrangeslider" title="Ion.RangeSlider"
                data-filter-tags="form plugins ion.rangeslider">
                <span class="nav-link-text" data-i18n="nav.form_plugins_ion.rangeslider">Ion.RangeSlider</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_inputmask') ? 'active' : '' }}">
            <a href="/form_plugins_inputmask" title="Inputmask" data-filter-tags="form plugins inputmask">
                <span class="nav-link-text" data-i18n="nav.form_plugins_inputmask">Inputmask</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_imagecropper') ? 'active' : '' }}">
            <a href="/form_plugins_imagecropper" title="Image Cropper" data-filter-tags="form plugins image cropper">
                <span class="nav-link-text" data-i18n="nav.form_plugins_image_cropper">Image
                    Cropper</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_select2') ? 'active' : '' }}">
            <a href="/form_plugins_select2" title="Select2" data-filter-tags="form plugins select2">
                <span class="nav-link-text" data-i18n="nav.form_plugins_select2">Select2</span>
            </a>
        </li>
        <li class="{{ Request::is('form_plugins_summernote') ? 'active' : '' }}">
            <a href="/form_plugins_summernote" title="Summernote"
                data-filter-tags="form plugins summernote texteditor editor">
                <span class="nav-link-text" data-i18n="nav.form_plugins_summernote">Summernote</span>
            </a>
        </li>
    </ul>
</li>
<li class="{{ Request::is('miscellaneous*') ? 'active open' : '' }}">
    <a href="#" title="Miscellaneous" data-filter-tags="miscellaneous">
        <i class="fal fa-globe"></i>
        <span class="nav-link-text" data-i18n="nav.miscellaneous">Miscellaneous</span>
    </a>
    <ul>
        <li class="{{ Request::is('miscellaneous_fullcalendar') ? 'active' : '' }}">
            <a href="/miscellaneous_fullcalendar" title="FullCalendar" data-filter-tags="miscellaneous fullcalendar">
                <span class="nav-link-text" data-i18n="nav.miscellaneous_fullcalendar">FullCalendar</span>
            </a>
        </li>
        <li class="{{ Request::is('miscellaneous_lightgallery') ? 'active' : '' }}">
            <a href="/miscellaneous_lightgallery" title="Light Gallery"
                data-filter-tags="miscellaneous light gallery">
                <span class="nav-link-text" data-i18n="nav.miscellaneous_light_gallery">Light
                    Gallery</span>
                <span class="dl-ref label bg-primary-500 ml-2">61 KB</span>
            </a>
        </li>
        {{--
        <li class="{{ Request::is('miscellaneous_treeview') ? 'active' : '' }}">
            <a href="/miscellaneous_treeview" title="Tree View" data-filter-tags="miscellaneous tree view">
                <span class="nav-link-text" data-i18n="nav.miscellaneous_tree_view">Tree View</span>
            </a>
        </li>
        --}}
    </ul>
</li>
