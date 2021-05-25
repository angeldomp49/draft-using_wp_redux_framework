<?php
 
if (!class_exists('ReduxFramework') && file_exists(plugin_dir_path(__FILE__) . '/optionpanel/framework.php')){
    require_once ('optionpanel/framework.php');
}
 
if (!isset($redux_demo) && file_exists(plugin_dir_path(__FILE__) . '/optionpanel/config.php')){
    require_once ('optionpanel/config.php');
}

if (!class_exists('Redux')){
    return;
}

$opt_name = 'Pixel_Theme';

$theme = wp_get_theme();

$args = [
    'opt_name' => $opt_name,
    'display_name' => $theme->get('Name'),
    'display_version' => $theme->get('Version'),
    'menu_type' => 'submenu',
    'allow_sub_menu' => true,
    'menu_title' => 'Theme Settings',
    'google_api_key' => '',
    'google_update_weekly' => false,
    'async_typography' => true,
    'admin_bar' => true,
    'admin_bar_icon' => '',
    'admin_bar_priority' => 50,
    'global_variable' => $opt_name,
    'dev_mode' => false,
    'update_notice' => false,
    'customizer' => true,
    'page_priority' => null,
    'page_parent' => 'themes.php',
    'page_permissions' => 'manage_options',
    'menu_icon' => '',
    'last_tab' => '',
    'page_icon' => 'icon-themes',
    'page_slug' => 'themeoptions',
    'save_defaults' => true,
    'default_show' => false,
    'default_mark' => '',
    'show_import_export' => true
];

Redux::setSection($opt_name, [
    'title' => 'Header options',
    'id' => 'pixel_theme_options_header_option',
    'icon' => 'el el-adjust',
    'fields' => [
            [
                'id' => 'pixel_theme_opt_checkbox',
            'type' => 'checkbox',
            'title' => 'Enable Header',
            'subtitle' => 'Show or not show the header' ,
            'desc' => 'Check if you want to enable the header theme' ,
            'default' => '1'
            ]
    ]
]);

