<?php

defined('BASEPATH') or exit('No direct script access allowed');

/*
Module Name: Ring Central
Description: Module for RingCentral integration
Version: 1.0.0
Requires at least: 2.3.*
*/

define('RINGCENTRAL_MODULE_NAME', 'ringcentral');

hooks()->add_action('after_cron_run', 'ringcentral_notification');
hooks()->add_action('admin_init', 'ringcentral_module_init_menu_items');
hooks()->add_action('staff_member_deleted', 'ringcentral_staff_member_deleted');
hooks()->add_action('admin_init', 'ringcentral_permissions');

hooks()->add_filter('migration_tables_to_replace_old_links', 'ringcentral_migration_tables_to_replace_old_links');
hooks()->add_filter('global_search_result_query', 'ringcentral_global_search_result_query', 10, 3);
hooks()->add_filter('global_search_result_output', 'ringcentral_global_search_result_output', 10, 2);
hooks()->add_filter('get_dashboard_widgets', 'ringcentral_add_dashboard_widget');

function ringcentral_add_dashboard_widget($widgets)
{
    $widgets[] = [
        'path'      => 'ringcentral/widget',
        'container' => 'right-4',
    ];

 

    return $widgets;
}

function ringcentral_staff_member_deleted($data)
{
    $CI = &get_instance();
    // Add logic to handle staff member deletion in RingCentral module
}

function ringcentral_global_search_result_output($output, $data)
{
    if ($data['type'] == 'ringcentral') {
        // Add logic to display RingCentral search result output
    }

    return $output;
}

function ringcentral_global_search_result_query($result, $q, $limit)
{
    $CI = &get_instance();
    if (has_permission('ringcentral', '', 'view')) {
        // Add logic to query RingCentral data for global search
    }

    return $result;
}

function ringcentral_migration_tables_to_replace_old_links($tables)
{
    $tables[] = [
        'table' => db_prefix() . 'ringcentral_data',
        'field' => 'description',
    ];

    return $tables;
}

function ringcentral_permissions()
{
    $capabilities = [];

    $capabilities['capabilities'] = [
        'view'   => _l('permission_view') . '(' . _l('permission_global') . ')',
        'create' => _l('permission_create'),
        'edit'   => _l('permission_edit'),
        'delete' => _l('permission_delete'),
    ];

    register_staff_capabilities('ringcentral', $capabilities, _l('ringcentral'));
}


/**
* Register activation module hook
*/
register_activation_hook(RINGCENTRAL_MODULE_NAME, 'ringcentral_module_activation_hook');

function ringcentral_module_activation_hook()
{
    $CI = &get_instance();
    require_once(__DIR__ . '/install.php');
}

/**
* Register language files, must be registered if the module is using languages
*/
register_language_files(RINGCENTRAL_MODULE_NAME, [RINGCENTRAL_MODULE_NAME]);

/**
* Init ringcentral module menu items in setup in admin_init hook
* @return null
*/
function ringcentral_module_init_menu_items()
{
    $CI = &get_instance();

    $CI->app->add_quick_actions_link([
        'name'       => _l('ringcentral'),
        'url'        => 'ringcentral/ringcentral',
        'permission' => 'ringcentral',
        'position'   => 56,
        'icon'       => 'fa-solid fa-phone',
    ]);

    if (has_permission('ringcentral', '', 'view')) {
        $CI->app_menu->add_sidebar_children_item('utilities', [
            'slug'     => 'ringcentral-tracking',
            'name'     => _l('ringcentral'),
            'href'     => admin_url('ringcentral'),
            'position' => 24,
        ]);
    }
}
