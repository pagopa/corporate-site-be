<?php
/**
 * Configuration overrides for WP_ENV === 'staging'
 */

use Roots\WPConfig\Config;

Config::define('SAVEQUERIES', true);
Config::define('WP_DEBUG', true);
Config::define("WP_DEBUG_LOG", true);
Config::define("GRAPHQL_DEBUG", true);
Config::define('WP_DEBUG_DISPLAY', false);
Config::define('WP_DISABLE_FATAL_ERROR_HANDLER', true);
Config::define('SCRIPT_DEBUG', false);
Config::define('ACF_JSON_AUTOLOAD', true);
Config::define('ACF_JSON_AUTOSAVE', true);

ini_set('display_errors', '0');

/** Force SSL Connection to Azure Database for MySQL server */
Config::define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL);
Config::define('MYSQL_SSL_CA', getenv('MYSQL_SSL_CA'));
Config::define('MYSQL_CLIENT_FLAGS', MYSQLI_CLIENT_SSL | MYSQLI_CLIENT_SSL_DONT_VERIFY_SERVER_CERT );

if (strpos($_SERVER['HTTP_X_FORWARDED_PROTO'], 'https') !== false)
   $_SERVER['HTTPS']='on';
else
   $_SERVER['HTTPS']='off';