<?php
/**
 * Plugin Name: Column Separator For Beaver Builder
 * Plugin URI: http://www.brainstormforce.com
 * Description: This is the plugin to create column separator in beaver builder.
 * Version: 1.0.2
 * Author: Pratik Chaskar
 * Author URI: https://pratikchaskar.com/
 * License: GNU General Public License v3.0
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Text Domain: bb-column-separator
 */
define('BB_COLUMN_SEPARATOR_DIR', plugin_dir_path(__FILE__));
define('BB_COLUMN_SEPARATOR_URL', plugins_url('/', __FILE__));

if (!class_exists('BSFBBColumnSeparatorCHK')) {
    class BSFBBColumnSeparatorCHK
    {
        function __construct()
        {
            add_action('init', array($this, 'load_column_separator'));
            add_action('init', array($this, 'load_cs_textdomain'));
        }

        function load_column_separator()
        {
            if (class_exists('FLBuilder')) {
                require_once 'column-separator-for-beaver-builder-module/column-separator-for-beaver-builder-module.php';
            } else {
                // Display admin notice for activating beaver builder
                add_action('admin_notices', array($this, 'admin_notices_function'));
                add_action('network_admin_notices', array($this, 'admin_notices_function'));
            }
        }

        function admin_notices_function()
        {
            // check for Beaver Builder Installed / Activated or not
            if (file_exists(plugin_dir_path('bb-plugin-agency/fl-builder.php'))
                || file_exists(plugin_dir_path('beaver-builder-lite-version/fl-builder.php'))
            ) {
                $url = network_admin_url() . 'plugins.php?s=Beaver+Builder+Plugin';
            } else {
                $url = network_admin_url() . 'plugin-install.php?s=billyyoung&tab=search&type=author';
            }
            echo '<div class="notice notice-error">';
            echo "<p>" . sprintf(__('The <strong>Column Separator For Beaver Builder</strong> plugin requires <strong><a href="%s">Beaver Builder</strong></a> plugin installed & activated.', 'bb-column-separator'), $url) . "</p>";
            echo '</div>';
        }

        // function to load text domain
        public function load_cs_textdomain()
        {
            load_plugin_textdomain('bb-column-separator');
        }
    }

    new BSFBBColumnSeparatorCHK();
}