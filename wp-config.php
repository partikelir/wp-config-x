<?php // ==== WP-CONFIG-X ==== //
// Adapted from a wide variety of sources including:
// - http://codex.wordpress.org/Editing_wp-config.php
// - https://github.com/markjaquith/WordPress-Skeleton
// - http://www.askapache.com/wordpress/advanced-wp-config-php-tweaks.html
// - http://digwp.com/2009/06/wordpress-configuration-tricks/



// == DATABASE == //

// Conditionally load local configuration; be sure to set the database parameters for your production environment here
if ( file_exists( dirname( __FILE__ ) . '/wp-config-local.php' ) ) {
	define( 'WP_LOCAL_DEV', true );
	include( dirname( __FILE__ ) . '/wp-config-local.php' );
} else {
	define( 'WP_LOCAL_DEV', false );
	define( 'DB_NAME', 'db_name' );
	define( 'DB_USER', 'db_user' );
	define( 'DB_PASSWORD', 'db_password' );
	define( 'DB_HOST', 'localhost' );
}

// Additional database parameters; probably no need to change these
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );

// Alter this value to enhance security or when installing multiple copies of WP on the same database.
$table_prefix  = 'wp_';



// == KEYS == //

// Authentication keys and salts; generate your own at https://api.wordpress.org/secret-key/1.1/salt/
define('AUTH_KEY',         'put your unique phrase here');
define('SECURE_AUTH_KEY',  'put your unique phrase here');
define('LOGGED_IN_KEY',    'put your unique phrase here');
define('NONCE_KEY',        'put your unique phrase here');
define('AUTH_SALT',        'put your unique phrase here');
define('SECURE_AUTH_SALT', 'put your unique phrase here');
define('LOGGED_IN_SALT',   'put your unique phrase here');
define('NONCE_SALT',       'put your unique phrase here');



// == TWEAKS == //

// Seconds before autosaving drafts. Default: 60.
defined( 'AUTOSAVE_INTERVAL' )                || define( 'AUTOSAVE_INTERVAL', 300 );

// Custom user and usermeta tables.
//defined( 'CUSTOM_USER_TABLE' )                || define( 'CUSTOM_USER_TABLE', $table_prefix . 'my_users' );
//defined( 'CUSTOM_USER_META_TABLE' )           || define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'my_usermeta' );

// Days before emptying trash. Default: 30.
defined( 'EMPTY_TRASH_DAYS' )                 || define( 'EMPTY_TRASH_DAYS', 15 );

// Main switch for trash functionality
defined( 'MEDIA_TRASH' )                      || define( 'MEDIA_TRASH', true );

// Automatic database optimization; use "only when the feature is required".
//defined( 'WP_ALLOW_REPAIR' )                  || define( 'WP_ALLOW_REPAIR', true );

// Updates
//defined( 'WP_AUTO_UPDATE_CORE' )              || define( 'WP_AUTO_UPDATE_CORE', false );

// Default theme
defined( 'WP_DEFAULT_THEME' )                 || define( 'WP_DEFAULT_THEME', 'twentytwelve' );

// Seconds before checking mail. Default: ?.
//defined( 'WP_MAIL_INTERVAL' )                 || define( 'WP_MAIL_INTERVAL', 3600 );

// Set PHP memory limit for WP; no need to adjust unless you run into problems; default 30M
//defined( 'WP_MEMORY_LIMIT' )                  || define( 'WP_MEMORY_LIMIT', '128M' );

// Max memory limit; default 128M
//defined( 'WP_MEMORY_MAX_LIMIT' )              || define( 'WP_MEMORY_MAX_LIMIT', '512M' );

// Number of post revisions to save or 'false' to disable this feature. Default: ?.
defined( 'WP_POST_REVISIONS' ) || define( 'WP_POST_REVISIONS', 3 );



// == PATHS == //

// No need to edit these settings unless you switch your paths around (e.g. to change defaults or place files outside of your document root).

// Define WP_SITEURL and WP_HOME; already set in options table. Small performance boost alleged but it's probably nothing much. No trailing slash.

 // Add ". '/subdir'" if your blog is not in the root.
//defined( 'WP_SITEURL' )                       || define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] );
//defined( 'WP_HOME' )                          || define( 'WP_HOME', WP_SITEURL );

// Define content, plugin, and theme directories.
//defined( 'WP_CONTENT_DIR' )                   || define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
//defined( 'WP_CONTENT_URL' )                   || define( 'WP_CONTENT_URL', WP_SITEURL . '/wp-content');
//defined( 'WP_PLUGIN_DIR' )                    || define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
//defined( 'WP_PLUGIN_URL' )                    || define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
//defined( 'TEMPLATEPATH' )                     || define( 'TEMPLATEPATH', WP_CONTENT_DIR . '/themes/active-theme' );
//defined( 'STYLESHEETPATH' )                   || define( 'STYLESHEETPATH', WP_CONTENT_DIR . '/themes/active-theme' );

// Define uploads directory. This used to be set in the WordPress admin area.
//defined( 'UPLOADS' )                          || define( 'UPLOADS', 'wp-content/media' ); // Default: wp-content/uploads

// Define languages directory.
//defined( 'WP_LANG_DIR' )                      || define( 'WP_LANG_DIR', ABSPATH . 'wp-content/languages' ); // Defaults: wp-content/languages, wp-includes/languages.

// Define cache directory.
//defined( 'CACHE_PATH' )                       || define( 'CACHE_PATH', '/home/user/wp-cache/' ); // Directory must be writable.



// == SECURITY == //

// Mainly taken from http://www.askapache.com/wordpress/advanced-wp-config-php-tweaks.html

 // Disable back-end plugin/theme editor
//defined( 'DISALLOW_FILE_EDIT' )               || define( 'DISALLOW_FILE_EDIT', true );

// Disable back-end plugin/theme updating and installation; only set one of these two settings
//defined( 'DISALLOW_FILE_MODS' )               || define( 'DISALLOW_FILE_MODS', true );
//defined( 'FORCE_SSL_ADMIN' )                  || define( 'FORCE_SSL_ADMIN', true );
//defined( 'FORCE_SSL_LOGIN' )                  || define( 'FORCE_SSL_LOGIN', true );



// == I18N == //

// WordPress localized language. Default: English (US).
defined( 'WPLANG' )                           || define( 'WPLANG', '' );


// == MULTISITE == //

// I've never used it before so I have no idea what this stuff does. Most items from: http://scotty-t.com/2012/01/18/wordpress-in-dev-qa-and-prod/

//defined( 'WP_ALLOW_MULTISITE' )               || define( 'WP_ALLOW_MULTISITE', true ); // Enable multisite.
//defined( 'MULTISITE' )                        || define( 'MULTISITE', true );
//defined( 'SUBDOMAIN_INSTALL' )                || define( 'SUBDOMAIN_INSTALL', false );
//defined( 'DOMAIN_CURRENT_SITE' )              || define( 'DOMAIN_CURRENT_SITE', 'www.emusic.com' );
//defined( 'PATH_CURRENT_SITE' )                || define( 'PATH_CURRENT_SITE', '/' );
//defined( 'SITE_ID_CURRENT_SITE' )             || define( 'SITE_ID_CURRENT_SITE', 1 );
//defined( 'BLOG_ID_CURRENT_SITE' )             || define( 'BLOG_ID_CURRENT_SITE', 1 );
//$base = '/';



// == FILE SYSTEM & COOKIES == //

// I didn't bother including any of this stuff; please refer to http://www.askapache.com/wordpress/advanced-wp-config-php-tweaks.html#File_System_Permissions



// == CACHING == //

// Some tweaks via: http://comments.gmane.org/gmane.comp.web.wordpress.testers/72 & http://codex.wordpress.org/Class_Reference/WP_Object_Cache

// For use with persistent cache plugin; has no effect on its own in newer versions of WP.
defined( 'WP_CACHE' )                         || define( 'WP_CACHE', true );

// Deprecated? I can't find anything that confirms this is still in use.
//defined( 'ENABLE_CACHE' )                     || define( 'ENABLE_CACHE', true );

// Time (in seconds) before cache expires. Default: 1 day.
//defined( 'CACHE_EXPIRATION_TIME' )            || define( 'CACHE_EXPIRATION_TIME', 86400 );

// Explicitly disable WP caching.
//defined( 'DISABLE_CACHE' )                    || define( 'DISABLE_CACHE', true );



// == COMPRESSION == //

// Totally untested; should be false for WordPress themes with a build script
// defined( 'COMPRESS_CSS' )                    || define( 'COMPRESS_CSS', true );
// defined( 'COMPRESS_SCRIPTS' )                || define( 'COMPRESS_SCRIPTS', true );

// Stops some jQuery errors on the backend when false is explicitly declared.
defined( 'CONCATENATE_SCRIPTS' )             || define( 'CONCATENATE_SCRIPTS', false );
// defined( 'ENFORCE_GZIP' )                    || define( 'ENFORCE_GZIP', true );



// == CRON == //

//define( 'ALTERNATE_WP_CRON', 'true' );
//define( 'DISABLE_WP_CRON', 'true' );
//define( 'WP_CRON_LOCK_TIMEOUT', 134 );



// == DEBUG == //

// Debug mode is off by default in production; local settings will override this
defined( 'WP_DEBUG' )                         || define( 'WP_DEBUG', false );

// If debug mode is on let's make it serious...
if ( WP_DEBUG ) {

  // For use with e.g. print_r($wpdb->queries); will incur a performance hit
  defined( 'SAVEQUERIES' )                    || define( 'SAVEQUERIES', true );

  // Not really sure what this is about...
  //defined( 'ACTION_DEBUG' )                   || define( 'ACTION_DEBUG', true);

  // "JavaScript or CSS errors"; allows edits of scriptname.dev.js in the wp-includes/js and wp-admin/js dirs
  //defined( 'SCRIPT_DEBUG' )                   || define( 'SCRIPT_DEBUG', true);

  // Set to false to default back to globally configured 'display_errors' setting; didn't seem to work for me
  //defined( 'WP_DEBUG_DISPLAY' )               || define( 'WP_DEBUG_DISPLAY', false );

  // Log PHP errors to WP_CONTENT_DIR/debug.log
  defined( 'WP_DEBUG_LOG' )                   || define( 'WP_DEBUG_LOG', true );

  // Jetpack development mode; allows for local development without needing to connect to wordpress.com
  defined( 'JETPACK_DEV_DEBUG' )              || define( 'JETPACK_DEV_DEBUG', true );

  // PHP error logging
  //@ini_set( 'display_errors', 'Off' );
  //@ini_set( 'error_log', '/home/example.com/logs/php_error.log' );
  @ini_set( 'log_errors', 'On' );
}



// == WORDPRESS == //

// Do not edit below :)

defined('ABSPATH') || define( 'ABSPATH', dirname(__FILE__) . '/' );
require_once( ABSPATH . 'wp-settings.php' );
