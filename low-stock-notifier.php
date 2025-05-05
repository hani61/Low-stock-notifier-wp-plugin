<?php
/**
 * Plugin Name: Low Stock Notifier for Admin
 * Description: Sends an email to the admin when a WooCommerce product’s stock falls below a set threshold.
 * Version: 1.0
 * Author: Hani Ahmed
 */
 if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}
function lsn_set_default_threshold(){
    return 5;
}
register_activation_hook(__FILE__, 'lsn_set_default_threshold');

// Admin menu for settings

function lsn_add_admin_menu() {
    add_options_page(
        'Low Stock Notifier Settings', 
        'Low Stock Notifier', 
        'manage_options', 
        'low-stock-notifier',
        'lsn_settings_page'
    );
}
add_action('admin_menu', 'lsn_add_admin_menu');

