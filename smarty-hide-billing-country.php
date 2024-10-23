<?php
/**
 * Plugin Name:  SM - Hide Billing Country for WooCommerce
 * Plugin URI:   https://github.com/mnestorov/smarty-hide-billing-country
 * Description:  A plugin to manage the visibility of the billing country field on the checkout page for each site in a multisite environment, with an option in WooCommerce settings.
 * Version:      1.0.0
 * Author:       Smarty Studio | Martin Nestorov
 * Author URI:   https://github.com/mnestorov
 * License:      GPL-2.0+
 * License URI:  http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:  smarty-hide-billing-country
 * WC requires at least: 3.5.0
 * WC tested up to: 9.0.2
 * Requires Plugins: woocommerce
 */

// If this file is called directly, abort.
if (!defined('WPINC')) {
	die;
}

if (!function_exists('smarty_add_billing_country_option')) {
    /**
     * Add a custom setting field to the WooCommerce General settings tab.
     */
    function smarty_add_billing_country_option($settings) {
        $new_settings = array(
            array(
                'title'    => __('Hide Billing Country Field', 'smarty-hide-billing-country'),
                'desc'     => __('Hide the billing country field on the checkout page for this site', 'smarty-hide-billing-country'),
                'id'       => 'smarty_hide_billing_country',
                'type'     => 'checkbox',
                'default'  => 'no',
                'desc_tip' => false,
            ),
        );

        // Find the index of the last setting in the General Options section
        $last_setting_key = array_search('woocommerce_default_customer_address', array_column($settings, 'id'));
        
        // If found, insert the new setting after the last General Options setting
        if ($last_setting_key !== false) {
            array_splice($settings, $last_setting_key + 1, 0, $new_settings);
        } else {
            // If not found, append to the end
            $settings = array_merge($settings, $new_settings);
        }

        return $settings;
    }
    add_filter('woocommerce_general_settings', 'smarty_add_billing_country_option');
}

if (!function_exists('smarty_hide_billing_country_field')) {
    /**
     * Hides the billing country field on the checkout page if the setting is enabled.
     */
    function smarty_hide_billing_country_field() {
        if ('yes' === get_option('smarty_hide_billing_country', 'no')) {
            echo '<style>
                p#billing_country_field {
                    display: none !important;
                }
            </style>';
        }
    }
    add_action('wp_head', 'smarty_hide_billing_country_field');
}
