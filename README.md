<p align="center"><a href="https://smartystudio.net" target="_blank"><img src="https://smartystudio.net/wp-content/uploads/2023/06/smarty-green-logo-small.png" width="100" alt="SmartyStudio Logo"></a></p>

# Smarty Studio - Hide Billing Country for WooCommerce

[![Licence](https://img.shields.io/badge/LICENSE-GPL2.0+-blue)](./LICENSE)

- Developed by: [Smarty Studio](https://smartystudio.net) | [Martin Nestorov](https://github.com/mnestorov)
- Plugin URI: https://github.com/mnestorov/smarty-hide-billing-country

## Overview

**Smarty Studio - Hide Billing Country for WooCommerce** is a plugin to manage the visibility of the billing country field on the checkout page for each site in a multisite environment, with an option in WooCommerce settings.

## Features

- **Multisite Compatibility**: Easily manage the visibility of the billing country field for each site in a multisite network.
- **WooCommerce Integration**: Seamlessly integrates with WooCommerce settings under the "General" tab.
- **Simple Configuration**: Enable or disable the billing country field directly from the WooCommerce settings panel without any coding.
- **Lightweight and Efficient**: The plugin adds minimal overhead to your WooCommerce installation.

## Installation

1. Upload the plugin files to the `/wp-content/plugins/smarty-hide-billing-country` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' menu in WordPress.
3. Navigate to **WooCommerce > Settings > General** to configure the visibility of the billing country field.

## Usage

Once activated, the plugin adds a checkbox option in the **WooCommerce > Settings > General** tab. Use this checkbox to hide the billing country field on the checkout page for the current site.

### Functions

- **mn_add_billing_country_option**: Adds the "Hide Billing Country Field" option to the WooCommerce General settings tab.
- **mn_hide_billing_country_field**: Conditionally hides the billing country field on the checkout page based on the setting.

## Requirements

- WordPress 5.0 or higher
- WooCommerce 3.0 or higher
- PHP 7.0 or higher

## Changelog

For a detailed list of changes and updates made to this project, please refer to our [Changelog](./CHANGELOG.md).

## Contributing

Contributions are welcome. Please follow the WordPress coding standards and submit pull requests for any enhancements.

---

## License

This project is released under the [GPL-2.0+ License](http://www.gnu.org/licenses/gpl-2.0.txt).
