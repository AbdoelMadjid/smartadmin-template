<?php

use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/* Route::get('/', function () {
    return view('welcome');
});
 */


/* Route::fallback([TemplateController::class, 'error_pages']); */

// DEVELOPER
Route::get('/dev_component', [TemplateController::class, 'dev_component'])->name('developer_component');


// INTEL
Route::get('/intel_analytics_dashboard', [TemplateController::class, 'intel_analytics_dashboard'])->name('intel_analytics_dashboard');
Route::get('/intel_marketing_dashboard', [TemplateController::class, 'intel_marketing_dashboard'])->name('intel_marketing_dashboard');
Route::get('/intel_introduction', [TemplateController::class, 'intel_introduction'])->name('intel_introduction');
Route::get('/intel_privacy', [TemplateController::class, 'intel_privacy'])->name('intel_privacy');

// SETTING

Route::get('/settings_how_it_works', [TemplateController::class, 'settings_how_it_works'])->name('settings_how_it_works');
Route::get('/settings_layout_options', [TemplateController::class, 'settings_layout_options'])->name('settings_layout_options');
Route::get('/settings_theme_modes', [TemplateController::class, 'settings_theme_modes'])->name('settings_theme_modes');
Route::get('/settings_skin_options', [TemplateController::class, 'settings_skin_options'])->name('settings_skin_options');
Route::get('/settings_saving_db', [TemplateController::class, 'settings_saving_db'])->name('settings_saving_db');

// DOC
Route::get('/docs_general', [TemplateController::class, 'docs_general'])->name('docs_general');
Route::get('/docs_project_structure', [TemplateController::class, 'docs_project_structure'])->name('docs_project_structure');
Route::get('/docs_flavors_editions', [TemplateController::class, 'docs_flavors_editions'])->name('docs_flavors_editions');
Route::get('/docs_community_support', [TemplateController::class, 'docs_community_support'])->name('docs_community_support');
Route::get('/docs_premium_support', [TemplateController::class, 'docs_premium_support'])->name('docs_premium_support');
Route::get('/docs_licensing', [TemplateController::class, 'docs_licensing'])->name('docs_licensing');
Route::get('/docs_buildnotes', [TemplateController::class, 'docs_buildnotes'])->name('docs_buildnotes');

// UI
Route::get('/ui_alerts', [TemplateController::class, 'ui_alerts'])->name('ui_alerts');
Route::get('/ui_accordion', [TemplateController::class, 'ui_accordion'])->name('ui_accordion');
Route::get('/ui_badges', [TemplateController::class, 'ui_badges'])->name('ui_badges');
Route::get('/ui_breadcrumbs', [TemplateController::class, 'ui_breadcrumbs'])->name('ui_breadcrumbs');
Route::get('/ui_buttons', [TemplateController::class, 'ui_buttons'])->name('ui_buttons');
Route::get('/ui_button_group', [TemplateController::class, 'ui_button_group'])->name('ui_button_group');
Route::get('/ui_cards', [TemplateController::class, 'ui_cards'])->name('ui_cards');
Route::get('/ui_carousel', [TemplateController::class, 'ui_carousel'])->name('ui_carousel');
Route::get('/ui_collapse', [TemplateController::class, 'ui_collapse'])->name('ui_collapse');
Route::get('/ui_dropdowns', [TemplateController::class, 'ui_dropdowns'])->name('ui_dropdowns');
Route::get('/ui_list_filter', [TemplateController::class, 'ui_list_filter'])->name('ui_list_filter');
Route::get('/ui_modal', [TemplateController::class, 'ui_modal'])->name('ui_modal');
Route::get('/ui_navbars', [TemplateController::class, 'ui_navbars'])->name('ui_navbars');
Route::get('/ui_panels', [TemplateController::class, 'ui_panels'])->name('ui_panels');
Route::get('/ui_pagination', [TemplateController::class, 'ui_pagination'])->name('ui_pagination');
Route::get('/ui_popovers', [TemplateController::class, 'ui_popovers'])->name('ui_popovers');
Route::get('/ui_progress_bars', [TemplateController::class, 'ui_progress_bars'])->name('ui_progress_bars');
Route::get('/ui_scrollspy', [TemplateController::class, 'ui_scrollspy'])->name('ui_scrollspy');
Route::get('/ui_side_panel', [TemplateController::class, 'ui_side_panel'])->name('ui_side_panel');
Route::get('/ui_spinners', [TemplateController::class, 'ui_spinners'])->name('ui_spinners');
Route::get('/ui_tabs_pills', [TemplateController::class, 'ui_tabs_pills'])->name('ui_tabs_pills');
Route::get('/ui_toasts', [TemplateController::class, 'ui_toasts'])->name('ui_toasts');
Route::get('/ui_tooltips', [TemplateController::class, 'ui_tooltips'])->name('ui_tooltips');

// utilities
Route::get('/utilities_borders', [TemplateController::class, 'utilities_borders'])->name('utilities_borders');
Route::get('/utilities_clearfix', [TemplateController::class, 'utilities_clearfix'])->name('utilities_clearfix');
Route::get('/utilities_color_pallet', [TemplateController::class, 'utilities_color_pallet'])->name('utilities_color_pallet');
Route::get('/utilities_display_property', [TemplateController::class, 'utilities_display_property'])->name('utilities_display_property');
Route::get('/utilities_fonts', [TemplateController::class, 'utilities_fonts'])->name('utilities_fonts');
Route::get('/utilities_flexbox', [TemplateController::class, 'utilities_flexbox'])->name('utilities_flexbox');
Route::get('/utilities_helpers', [TemplateController::class, 'utilities_helpers'])->name('utilities_helpers');
Route::get('/utilities_position', [TemplateController::class, 'utilities_position'])->name('utilities_position');
Route::get('/utilities_responsive_grid', [TemplateController::class, 'utilities_responsive_grid'])->name('utilities_responsive_grid');
Route::get('/utilities_sizing', [TemplateController::class, 'utilities_sizing'])->name('utilities_sizing');
Route::get('/utilities_spacing', [TemplateController::class, 'utilities_spacing'])->name('utilities_spacing');
Route::get('/utilities_typography', [TemplateController::class, 'utilities_typography'])->name('utilities_typography');

// font icon
Route::get('/icons_fontawesome_light', [TemplateController::class, 'icons_fontawesome_light'])->name('icons_fontawesome_light');
Route::get('/icons_fontawesome_regular', [TemplateController::class, 'icons_fontawesome_regular'])->name('icons_fontawesome_regular');
Route::get('/icons_fontawesome_solid', [TemplateController::class, 'icons_fontawesome_solid'])->name('icons_fontawesome_solid');
Route::get('/icons_fontawesome_duotone', [TemplateController::class, 'icons_fontawesome_duotone'])->name('icons_fontawesome_duotone');
Route::get('/icons_fontawesome_brand', [TemplateController::class, 'icons_fontawesome_brand'])->name('icons_fontawesome_brand');
Route::get('/icons_nextgen_general', [TemplateController::class, 'icons_nextgen_general'])->name('icons_nextgen_general');
Route::get('/icons_nextgen_base', [TemplateController::class, 'icons_nextgen_base'])->name('icons_nextgen_base');
Route::get('/icons_stack_showcase', [TemplateController::class, 'icons_stack_showcase'])->name('icons_stack_showcase');
Route::get('/icons_stack_generate', [TemplateController::class, 'icons_stack_generate'])->name('icons_stack_generate');

//tabel
Route::get('/tables_basic', [TemplateController::class, 'tables_basic'])->name('tables_basic');
Route::get('/tables_generate_style', [TemplateController::class, 'tables_generate_style'])->name('tables_generate_style');

//Form Stuff
Route::get('/form_stuff_basic_inputs', [TemplateController::class, 'form_stuff_basic_inputs'])->name('form_stuff_basic_inputs');
Route::get('/form_stuff_checkbox_radio', [TemplateController::class, 'form_stuff_checkbox_radio'])->name('form_stuff_checkbox_radio');
Route::get('/form_stuff_input_groups', [TemplateController::class, 'form_stuff_input_groups'])->name('form_stuff_input_groups');
Route::get('/form_stuff_validation', [TemplateController::class, 'form_stuff_validation'])->name('form_stuff_validation');

//Plugins
Route::get('/plugins_faq', [TemplateController::class, 'plugins_faq'])->name('plugins_faq');
Route::get('/plugins_waves', [TemplateController::class, 'plugins_waves'])->name('plugins_waves');
Route::get('/plugins_pacejs', [TemplateController::class, 'plugins_pacejs'])->name('plugins_pacejs');
Route::get('/plugins_smartpanels', [TemplateController::class, 'plugins_smartpanels'])->name('plugins_smartpanels');
Route::get('/plugins_bootbox', [TemplateController::class, 'plugins_bootbox'])->name('plugins_bootbox');
Route::get('/plugins_slimscroll', [TemplateController::class, 'plugins_slimscroll'])->name('plugins_slimscroll');
Route::get('/plugins_throttle', [TemplateController::class, 'plugins_throttle'])->name('plugins_throttle');
Route::get('/plugins_navigation', [TemplateController::class, 'plugins_navigation'])->name('plugins_navigation');
Route::get('/plugins_i18next', [TemplateController::class, 'plugins_i18next'])->name('plugins_i18next');
Route::get('/plugins_appcore', [TemplateController::class, 'plugins_appcore'])->name('plugins_appcore');

//datatables
Route::get('/datatables_basic', [TemplateController::class, 'datatables_basic'])->name('datatables_basic');
Route::get('/datatables_autofill', [TemplateController::class, 'datatables_autofill'])->name('datatables_autofill');
Route::get('/datatables_buttons', [TemplateController::class, 'datatables_buttons'])->name('datatables_buttons');
Route::get('/datatables_export', [TemplateController::class, 'datatables_export'])->name('datatables_export');
Route::get('/datatables_colreorder', [TemplateController::class, 'datatables_colreorder'])->name('datatables_colreorder');
Route::get('/datatables_columnfilter', [TemplateController::class, 'datatables_columnfilter'])->name('datatables_columnfilter');
Route::get('/datatables_fixedcolumns', [TemplateController::class, 'datatables_fixedcolumns'])->name('datatables_fixedcolumns');
Route::get('/datatables_fixedheader', [TemplateController::class, 'datatables_fixedheader'])->name('datatables_fixedheader');
Route::get('/datatables_keytable', [TemplateController::class, 'datatables_keytable'])->name('datatables_keytable');
Route::get('/datatables_responsive', [TemplateController::class, 'datatables_responsive'])->name('datatables_responsive');
Route::get('/datatables_responsive_alt', [TemplateController::class, 'datatables_responsive_alt'])->name('datatables_responsive_alt');
Route::get('/datatables_rowgroup', [TemplateController::class, 'datatables_rowgroup'])->name('datatables_rowgroup');
Route::get('/datatables_rowreorder', [TemplateController::class, 'datatables_rowreorder'])->name('datatables_rowreorder');
Route::get('/datatables_scroller', [TemplateController::class, 'datatables_scroller'])->name('datatables_scroller');
Route::get('/datatables_select', [TemplateController::class, 'datatables_select'])->name('datatables_select');
Route::get('/datatables_alteditor', [TemplateController::class, 'datatables_alteditor'])->name('datatables_alteditor');

// statistics
Route::get('/statistics_flot', [TemplateController::class, 'statistics_flot'])->name('statistics_flot');
Route::get('/statistics_chartjs', [TemplateController::class, 'statistics_chartjs'])->name('statistics_chartjs');
Route::get('/statistics_chartist', [TemplateController::class, 'statistics_chartist'])->name('statistics_chartist');
Route::get('/statistics_c3', [TemplateController::class, 'statistics_c3'])->name('statistics_c3');
Route::get('/statistics_peity', [TemplateController::class, 'statistics_peity'])->name('statistics_peity');
Route::get('/statistics_sparkline', [TemplateController::class, 'statistics_sparkline'])->name('statistics_sparkline');
Route::get('/statistics_easypiechart', [TemplateController::class, 'statistics_easypiechart'])->name('statistics_easypiechart');
Route::get('/statistics_dygraph', [TemplateController::class, 'statistics_dygraph'])->name('statistics_dygraph');

//notifikasi
Route::get('/notifications_sweetalert2', [TemplateController::class, 'notifications_sweetalert2'])->name('notifications_sweetalert2');
Route::get('/notifications_toastr', [TemplateController::class, 'notifications_toastr'])->name('notifications_toastr');


//form plugins
Route::get('/form_plugins_colorpicker', [TemplateController::class, 'form_plugins_colorpicker'])->name('form_plugins_colorpicker');
Route::get('/form_plugins_datepicker', [TemplateController::class, 'form_plugins_datepicker'])->name('form_plugins_datepicker');
Route::get('/form_plugins_daterange_picker', [TemplateController::class, 'form_plugins_daterange_picker'])->name('form_plugins_daterange_picker');
Route::get('/form_plugins_dropzone', [TemplateController::class, 'form_plugins_dropzone'])->name('form_plugins_dropzone');
Route::get('/form_plugins_ionrangeslider', [TemplateController::class, 'form_plugins_ionrangeslider'])->name('form_plugins_ionrangeslider');
Route::get('/form_plugins_inputmask', [TemplateController::class, 'form_plugins_inputmask'])->name('form_plugins_inputmask');
Route::get('/form_plugins_imagecropper', [TemplateController::class, 'form_plugins_imagecropper'])->name('form_plugins_imagecropper');
Route::get('/form_plugins_select2', [TemplateController::class, 'form_plugins_select2'])->name('form_plugins_select2');
Route::get('/form_plugins_summernote', [TemplateController::class, 'form_plugins_summernote'])->name('form_plugins_summernote');

//Miscellaneous
Route::get('/miscellaneous_fullcalendar', [TemplateController::class, 'miscellaneous_fullcalendar'])->name('miscellaneous_fullcalendar');
Route::get('/miscellaneous_lightgallery', [TemplateController::class, 'miscellaneous_lightgallery'])->name('miscellaneous_lightgallery');
Route::get('/miscellaneous_treeview', [TemplateController::class, 'miscellaneous_treeview'])->name('miscellaneous_treeview');

//Page Views
Route::get('/page_chat', [TemplateController::class, 'page_chat'])->name('page_chat');
Route::get('/page_contacts', [TemplateController::class, 'page_contacts'])->name('page_contacts');

// Forum
Route::get('/page_forum_list', [TemplateController::class, 'page_forum_list'])->name('page_forum_list');
Route::get('/page_forum_threads', [TemplateController::class, 'page_forum_threads'])->name('page_forum_threads');
Route::get('/page_forum_discussion', [TemplateController::class, 'page_forum_discussion'])->name('page_forum_discussion');

//pages inbox
Route::get('/page_inbox_general', [TemplateController::class, 'page_inbox_general'])->name('page_inbox_general');
Route::get('/page_inbox_read', [TemplateController::class, 'page_inbox_read'])->name('page_inbox_read');
Route::get('/page_inbox_write', [TemplateController::class, 'page_inbox_write'])->name('page_inbox_write');

//Invoice (printable)
Route::get('/page_invoice', [TemplateController::class, 'page_invoice'])->name('page_invoice');

//Authentication
Route::get('/page_auth_forget', [TemplateController::class, 'page_auth_forget'])->name('page_auth_forget');
Route::get('/page_auth_locked', [TemplateController::class, 'page_auth_locked'])->name('page_auth_locked');
Route::get('/page_auth_login', [TemplateController::class, 'page_auth_login'])->name('page_auth_login');
Route::get('/page_auth_login_alt', [TemplateController::class, 'page_auth_login_alt'])->name('page_auth_login_alt');
Route::get('/page_auth_register', [TemplateController::class, 'page_auth_register'])->name('page_auth_register');
Route::get('/page_auth_confirmation', [TemplateController::class, 'page_auth_confirmation'])->name('page_auth_confirmation');

//Error Pages
Route::get('/page_error_general', [TemplateController::class, 'page_error_general'])->name('page_error_general');
Route::get('/page_error_404', [TemplateController::class, 'page_error_404'])->name('page_error_404');
Route::get('/page_error_announced', [TemplateController::class, 'page_error_announced'])->name('page_error_announced');

//Profile
Route::get('/page_profile', [TemplateController::class, 'page_profile'])->name('page_profile');

//projects
Route::get('/page_projects', [TemplateController::class, 'page_projects'])->name('page_projects');

//search
Route::get('/page_search', [TemplateController::class, 'page_search'])->name('page_search');

//blank
Route::get('/page_blank', [TemplateController::class, 'page_blank'])->name('page_blank');
