<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TemplateController extends Controller
{
    // intel
    public function index()
    {
        return view('dashboard');
    }
    public function about()
    {
        return view('about');
    }
    public function dev_component()
    {
        return view('content.developer_component');
    }
    public function dev_form()
    {
        return view('content.developer_form');
    }
    public function intel_analytics_dashboard()
    {
        return view('content.intel_analytics_dashboard');
    }
    public function intel_marketing_dashboard()
    {
        return view('content.intel_marketing_dashboard');
    }
    public function intel_introduction()
    {
        return view('content.intel_introduction');
    }
    public function intel_privacy()
    {
        return view('content.intel_privacy');
    }
    // *
    // Theme Setting
    //*
    public function settings_how_it_works()
    {
        return view('content.settings_how_it_works');
    }
    public function settings_layout_options()
    {
        return view('content.settings_layout_options');
    }
    public function settings_theme_modes()
    {
        return view('content.settings_theme_modes');
    }
    public function settings_skin_options()
    {
        return view('content.settings_skin_options');
    }
    public function settings_saving_db()
    {
        return view('content.settings_saving_db');
    }
    // *
    // Doc
    //*
    public function docs_general()
    {
        return view('content.docs_general');
    }
    public function docs_project_structure()
    {
        return view('content.docs_project_structure');
    }
    public function docs_flavors_editions()
    {
        return view('content.docs_flavors_editions');
    }
    public function docs_community_support()
    {
        return view('content.docs_community_support');
    }
    public function docs_premium_support()
    {
        return view('content.docs_premium_support');
    }
    public function docs_licensing()
    {
        return view('content.docs_licensing');
    }
    public function docs_buildnotes()
    {
        return view('content.docs_buildnotes');
    }

    // *
    // UI
    //*
    public function ui_alerts()
    {
        return view('content.ui_alerts');
    }
    public function ui_accordion()
    {
        return view('content.ui_accordion');
    }
    public function ui_badges()
    {
        return view('content.ui_badges');
    }
    public function ui_breadcrumbs()
    {
        return view('content.ui_breadcrumbs');
    }
    public function ui_buttons()
    {
        return view('content.ui_buttons');
    }
    public function ui_button_group()
    {
        return view('content.ui_button_group');
    }
    public function ui_cards()
    {
        return view('content.ui_cards');
    }
    public function ui_carousel()
    {
        return view('content.ui_carousel');
    }
    public function ui_collapse()
    {
        return view('content.ui_collapse');
    }
    public function ui_dropdowns()
    {
        return view('content.ui_dropdowns');
    }
    public function ui_list_filter()
    {
        return view('content.ui_list_filter');
    }
    public function ui_modal()
    {
        return view('content.ui_modal');
    }
    public function ui_navbars()
    {
        return view('content.ui_navbars');
    }
    public function ui_panels()
    {
        return view('content.ui_panels');
    }
    public function ui_pagination()
    {
        return view('content.ui_pagination');
    }
    public function ui_popovers()
    {
        return view('content.ui_popovers');
    }
    public function ui_progress_bars()
    {
        return view('content.ui_progress_bars');
    }
    public function ui_scrollspy()
    {
        return view('content.ui_scrollspy');
    }
    public function ui_side_panel()
    {
        return view('content.ui_side_panel');
    }
    public function ui_spinners()
    {
        return view('content.ui_spinners');
    }
    public function ui_tabs_pills()
    {
        return view('content.ui_tabs_pills');
    }
    public function ui_toasts()
    {
        return view('content.ui_toasts');
    }
    public function ui_tooltips()
    {
        return view('content.ui_tooltips');
    }
    //
    // utilitas
    //
    public function utilities_borders()
    {
        return view('content.utilities_borders');
    }
    public function utilities_clearfix()
    {
        return view('content.utilities_clearfix');
    }
    public function utilities_color_pallet()
    {
        return view('content.utilities_color_pallet');
    }
    public function utilities_display_property()
    {
        return view('content.utilities_display_property');
    }
    public function utilities_fonts()
    {
        return view('content.utilities_fonts');
    }
    public function utilities_flexbox()
    {
        return view('content.utilities_flexbox');
    }
    public function utilities_helpers()
    {
        return view('content.utilities_helpers');
    }
    public function utilities_position()
    {
        return view('content.utilities_position');
    }
    public function utilities_responsive_grid()
    {
        return view('content.utilities_responsive_grid');
    }
    public function utilities_sizing()
    {
        return view('content.utilities_sizing');
    }
    public function utilities_spacing()
    {
        return view('content.utilities_spacing');
    }
    public function utilities_typography()
    {
        return view('content.utilities_typography');
    }

    //
    // font
    //
    public function icons_fontawesome_light()
    {
        return view('content.icons_fontawesome_light');
    }
    public function icons_fontawesome_regular()
    {
        return view('content.icons_fontawesome_regular');
    }
    public function icons_fontawesome_solid()
    {
        return view('content.icons_fontawesome_solid');
    }
    public function icons_fontawesome_duotone()
    {
        return view('content.icons_fontawesome_duotone');
    }
    public function icons_fontawesome_brand()
    {
        return view('content.icons_fontawesome_brand');
    }

    public function icons_nextgen_general()
    {
        return view('content.icons_nextgen_general');
    }
    public function icons_nextgen_base()
    {
        return view('content.icons_nextgen_base');
    }
    public function icons_stack_showcase()
    {
        return view('content.icons_stack_showcase');
    }
    public function icons_stack_generate()
    {
        return view('content.icons_stack_generate');
    }

    //
    // tabel
    //
    public function tables_basic()
    {
        return view('content.tables_basic');
    }
    public function tables_generate_style()
    {
        return view('content.tables_generate_style');
    }
    //
    // form
    //
    public function form_stuff_basic_inputs()
    {
        return view('content.form_stuff_basic_inputs');
    }
    public function form_stuff_checkbox_radio()
    {
        return view('content.form_stuff_checkbox_radio');
    }
    public function form_stuff_input_groups()
    {
        return view('content.form_stuff_input_groups');
    }
    public function form_stuff_validation()
    {
        return view('content.form_stuff_validation');
    }

    //
    // plugin
    //
    public function plugins_faq()
    {
        return view('content.plugins_faq');
    }
    public function plugins_waves()
    {
        return view('content.plugins_waves');
    }
    public function plugins_pacejs()
    {
        return view('content.plugins_pacejs');
    }
    public function plugins_smartpanels()
    {
        return view('content.plugins_smartpanels');
    }
    public function plugins_bootbox()
    {
        return view('content.plugins_bootbox');
    }
    public function plugins_slimscroll()
    {
        return view('content.plugins_slimscroll');
    }
    public function plugins_throttle()
    {
        return view('content.plugins_throttle');
    }
    public function plugins_navigation()
    {
        return view('content.plugins_navigation');
    }
    public function plugins_i18next()
    {
        return view('content.plugins_i18next');
    }
    public function plugins_appcore()
    {
        return view('content.plugins_appcore');
    }
    //
    // datatables
    //
    public function datatables_basic()
    {
        return view('content.datatables_basic');
    }
    public function datatables_autofill()
    {
        return view('content.datatables_autofill');
    }
    public function datatables_buttons()
    {
        return view('content.datatables_buttons');
    }
    public function datatables_export()
    {
        return view('content.datatables_export');
    }
    public function datatables_colreorder()
    {
        return view('content.datatables_colreorder');
    }
    public function datatables_columnfilter()
    {
        return view('content.datatables_columnfilter');
    }
    public function datatables_fixedcolumns()
    {
        return view('content.datatables_fixedcolumns');
    }
    public function datatables_fixedheader()
    {
        return view('content.datatables_fixedheader');
    }
    public function datatables_keytable()
    {
        return view('content.datatables_keytable');
    }
    public function datatables_responsive()
    {
        return view('content.datatables_responsive');
    }
    public function datatables_responsive_alt()
    {
        return view('content.datatables_responsive_alt');
    }
    public function datatables_rowgroup()
    {
        return view('content.datatables_rowgroup');
    }
    public function datatables_rowreorder()
    {
        return view('content.datatables_rowreorder');
    }
    public function datatables_scroller()
    {
        return view('content.datatables_scroller');
    }
    public function datatables_select()
    {
        return view('content.datatables_select');
    }
    public function datatables_alteditor()
    {
        return view('content.datatables_alteditor');
    }
    //
    // statistik
    //
    public function statistics_flot()
    {
        return view('content.statistics_flot');
    }
    public function statistics_chartjs()
    {
        return view('content.statistics_chartjs');
    }
    public function statistics_chartist()
    {
        return view('content.statistics_chartist');
    }
    public function statistics_c3()
    {
        return view('content.statistics_c3');
    }
    public function statistics_peity()
    {
        return view('content.statistics_peity');
    }
    public function statistics_sparkline()
    {
        return view('content.statistics_sparkline');
    }
    public function statistics_easypiechart()
    {
        return view('content.statistics_easypiechart');
    }
    public function statistics_dygraph()
    {
        return view('content.statistics_dygraph');
    }
    //
    // notifikasi
    //
    public function notifications_sweetalert2()
    {
        return view('content.notifications_sweetalert2');
    }
    public function notifications_toastr()
    {
        return view('content.notifications_toastr');
    }
    //
    //form plugins
    //
    public function form_plugins_colorpicker()
    {
        return view('content.form_plugins_colorpicker');
    }
    public function form_plugins_datepicker()
    {
        return view('content.form_plugins_datepicker');
    }
    public function form_plugins_daterange_picker()
    {
        return view('content.form_plugins_daterange_picker');
    }
    public function form_plugins_dropzone()
    {
        return view('content.form_plugins_dropzone');
    }
    public function form_plugins_ionrangeslider()
    {
        return view('content.form_plugins_ionrangeslider');
    }
    public function form_plugins_inputmask()
    {
        return view('content.form_plugins_inputmask');
    }
    public function form_plugins_imagecropper()
    {
        return view('content.form_plugins_imagecropper');
    }
    public function form_plugins_select2()
    {
        return view('content.form_plugins_select2');
    }
    public function form_plugins_summernote()
    {
        return view('content.form_plugins_summernote');
    }
    //
    // Miscellaneous
    //
    public function miscellaneous_fullcalendar()
    {
        return view('content.miscellaneous_fullcalendar');
    }
    public function miscellaneous_lightgallery()
    {
        return view('content.miscellaneous_lightgallery');
    }
    public function miscellaneous_treeview()
    {
        return view('content.miscellaneous_treeview');
    }
    //
    // pages
    //
    public function page_chat()
    {
        return view('content.page_chat');
    }
    public function page_contacts()
    {
        return view('content.page_contacts');
    }
    public function page_invoice()
    {
        return view('content.page_invoice');
    }
    public function page_profile()
    {
        return view('content.page_profile');
    }
    public function page_projects()
    {
        return view('content.page_projects');
    }
    public function page_search()
    {
        return view('content.page_search');
    }
    public function page_blank()
    {
        return view('content.page_blank');
    }

    // page forum
    public function page_forum_list()
    {
        return view('content.page_forum_list');
    }
    public function page_forum_threads()
    {
        return view('content.page_forum_threads');
    }
    public function page_forum_discussion()
    {
        return view('content.page_forum_discussion');
    }

    // page inbox
    public function page_inbox_general()
    {
        return view('content.page_inbox_general');
    }
    public function page_inbox_read()
    {
        return view('content.page_inbox_read');
    }
    public function page_inbox_write()
    {
        return view('content.page_inbox_write');
    }

    // page error
    public function page_error_general()
    {
        return view('content.page_error_general');
    }
    public function page_error_404()
    {
        return view('content.page_error_404');
    }
    public function page_error_announced()
    {
        return view('content.page_error_announced');
    }

    // page auth
    public function page_auth_forget()
    {
        return view('content.page_auth_forget');
    }
    public function page_auth_locked()
    {
        return view('content.page_auth_locked');
    }
    public function page_auth_login()
    {
        return view('content.page_auth_login');
    }
    public function page_auth_login_alt()
    {
        return view('content.page_auth_login_alt');
    }
    public function page_auth_register()
    {
        return view('content.page_auth_register');
    }
    public function page_auth_confirmation()
    {
        return view('content.page_auth_confirmation');
    }
}
