<?php
/**
 * Configuration overrides for WP_ENV === 'production'
 */

use Roots\WPConfig\Config;

/**
 * You should try to keep staging as close to production as possible. However,
 * should you need to, you can always override production configuration values
 * with `Config::define`.
 *
 * Example: `Config::define('WP_DEBUG', true);`
 * Example: `Config::define('DISALLOW_FILE_MODS', false);`
 */

Config::define('DISABLED_PLUGINS', [
    'wp-cli-login-server/wp-cli-login-server.php',
    'wordpress-importer/wordpress-importer.php',
    'wp-acf-extended-config/wp-acf-extended-config.php',
]);
