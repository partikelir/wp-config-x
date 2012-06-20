<?php
/*
 * Synaptic WP Config 0.1 
 * Adapted from a wide variety of sources including:
 * - http://codex.wordpress.org/Editing_wp-config.php
 * - https://github.com/markjaquith/WordPress-Skeleton
 * - http://www.askapache.com/wordpress/advanced-wp-config-php-tweaks.html
 * - http://digwp.com/2009/06/wordpress-configuration-tricks/
 */
 
 
 
 /*
  * Conditionally load local configuration; be sure to set the database parameters for your production environment here.
  */
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



/*
 * Additional database parameters.
 */
define( 'DB_CHARSET', 'utf8' );
define( 'DB_COLLATE', '' );
$table_prefix  = 'wp_'; // Alter this value to enhance security or when installing multiple copies of WP on the same database.



/*
 * Authentication keys and salts; generate your own at https://api.wordpress.org/secret-key/1.1/salt/
 */



/*
 * Admin tweaks.
 */
//!defined( 'WPLANG' ) && define( 'WPLANG', '' ); // WordPress localized language. Default: English (US).

!defined( 'AUTOSAVE_INTERVAL' ) && define( 'AUTOSAVE_INTERVAL', 300 ); // Seconds before autosaving drafts. Default: 60.
!defined( 'EMPTY_TRASH_DAYS' ) && define( 'EMPTY_TRASH_DAYS', 14 ); // Days before emptying trash. Default: 30.
!defined( 'WP_POST_REVISIONS' ) && define( 'WP_POST_REVISIONS', false ); // Number of post revisions to save or 'false' to disable this feature. Default: ?.
//!defined( 'WP_MAIL_INTERVAL' ) && define( 'WP_MAIL_INTERVAL', 3600 ); // Seconds before checking mail. Default: ?.
//!defined( 'WP_MEMORY_LIMIT' ) && define( 'WP_MEMORY_LIMIT', '64M' ); // Set PHP memory limit for WP; no need to adjust unless you run into problems.
//!defined( 'CUSTOM_USER_TABLE' ) && define( 'CUSTOM_USER_TABLE', $table_prefix . 'my_users' ); // Custom user and usermeta tables.
//!defined( 'CUSTOM_USER_META_TABLE' ) && define( 'CUSTOM_USER_META_TABLE', $table_prefix . 'my_usermeta' );
//!defined( 'WP_ALLOW_REPAIR' ) && define( 'WP_ALLOW_REPAIR', true ); // Automatic database optimization; use "only when the feature is required".



 /*
  * Path settings; no need to edit these settings unless you switch your paths around (e.g. to change defaults or place files outside of your document root).
  */

// Define ABSPATH; be sure to modify this if you place your wp-config.php somewhere else.
!defined( 'ABSPATH' ) && define( 'ABSPATH', dirname(__FILE__) . '/' );

// Define WP_SITEURL and WP_HOME; already set in options table. Small performance boost alleged but it's probably nothing much. No trailing slash.
//!defined( 'WP_SITEURL' ) && define( 'WP_SITEURL', 'http://' . $_SERVER['HTTP_HOST'] ); // Add ". '/subdir'" if your blog is not in the root.
//!defined( 'WP_HOME' ) && define( 'WP_HOME', WP_SITEURL );

// Define content, plugin, and theme directories.
//!defined( 'WP_CONTENT_DIR' ) && define( 'WP_CONTENT_DIR', ABSPATH . 'wp-content' );
//!defined( 'WP_CONTENT_URL' ) && define( 'WP_CONTENT_URL', WP_SITEURL . '/wp-content');
//!defined( 'WP_PLUGIN_DIR' ) && define( 'WP_PLUGIN_DIR', WP_CONTENT_DIR . '/plugins' );
//!defined( 'WP_PLUGIN_URL' ) && define( 'WP_PLUGIN_URL', WP_CONTENT_URL . '/plugins' );
//!defined( 'TEMPLATEPATH' ) && define( 'TEMPLATEPATH', WP_CONTENT_DIR . '/themes/active-theme' );
//!defined( 'STYLESHEETPATH' ) && define( 'STYLESHEETPATH', WP_CONTENT_DIR . '/themes/active-theme' );

// Define languages directory.
//!defined( 'WP_LANG_DIR' ) && define( 'WP_LANG_DIR', ABSPATH . 'wp-content/languages' ); // Defaults: wp-content/languages, wp-includes/languages.

// Define cache directory.
//!defined( 'CACHE_PATH' ) && define( 'CACHE_PATH', '/home/user/wp-cache/' ); // Directory must be writable.



/*
 * Internationalization.
 */
!defined( 'WPLANG' ) && define( 'WPLANG', '' ); // WordPress localized language. Default: English (US).



/*
 * Multisite. I've never used it before so I have no idea what this stuff does. Most items from: http://scotty-t.com/2012/01/18/wordpress-in-dev-qa-and-prod/
 */
//!defined( 'WP_ALLOW_MULTISITE' ) && define( 'WP_ALLOW_MULTISITE', true ); // Enable multisite.
//!defined( 'MULTISITE' ) && define( 'MULTISITE', true );
//!defined( 'SUBDOMAIN_INSTALL' ) && define( 'SUBDOMAIN_INSTALL', false );
//!defined( 'DOMAIN_CURRENT_SITE' ) && define( 'DOMAIN_CURRENT_SITE', 'www.emusic.com' );
//!defined( 'PATH_CURRENT_SITE' ) && define( 'PATH_CURRENT_SITE', '/' );
//!defined( 'SITE_ID_CURRENT_SITE' ) && define( 'SITE_ID_CURRENT_SITE', 1 );
//!defined( 'BLOG_ID_CURRENT_SITE' ) && define( 'BLOG_ID_CURRENT_SITE', 1 );
//$base = '/';



/*
 * File system and cookies. I didn't bother including any of this stuff; please refer to http://www.askapache.com/wordpress/advanced-wp-config-php-tweaks.html#File_System_Permissions
 */



/*
 * Security. Mainly taken from http://www.askapache.com/wordpress/advanced-wp-config-php-tweaks.html
 */
//!defined( 'DISALLOW_FILE_EDIT' ) && define( 'DISALLOW_FILE_EDIT', true ); // Disable back-end plugin/theme editor.
//!defined( 'DISALLOW_FILE_MODS' ) && define( 'DISALLOW_FILE_MODS', true ); // Disable back-end plugin/theme updating and installation. (Only set one of these.)
//!defined( 'FORCE_SSL_ADMIN' ) && define( 'FORCE_SSL_ADMIN', true );
//!defined( 'FORCE_SSL_LOGIN' ) && define( 'FORCE_SSL_LOGIN', true );



 /*
  * Caching. Some tweaks via: http://comments.gmane.org/gmane.comp.web.wordpress.testers/72 & http://codex.wordpress.org/Class_Reference/WP_Object_Cache
  */
//!defined( 'WP_CACHE' ) && define( 'WP_CACHE', true ); // For use with persistent cache plugin; has no effect on its own in newer versions of WP.
//!defined( 'ENABLE_CACHE' ) && define( 'ENABLE_CACHE', true ); // Deprecated? I can't find anything that confirms this is still in use.
//!defined( 'CACHE_EXPIRATION_TIME' ) && define( 'CACHE_EXPIRATION_TIME', 86400 ); // Time (in seconds) before cache expires. Default: 1 day.
//!defined( 'DISABLE_CACHE' ) && define( 'DISABLE_CACHE', true ); // Explicitly disable WP caching.



/*
 * Debugging.
 */
 
// Debug mode is off by default in production; local settings will override this.
!defined( 'WP_DEBUG' ) && define( 'WP_DEBUG', false );

// If debug mode is on let's make it serious...
if ( WP_DEBUG ) {
  !defined( 'SAVEQUERIES' ) && define( 'SAVEQUERIES', true ); // For use with e.g. print_r($wpdb->queries); will incur a performance hit.
  //!defined( 'ACTION_DEBUG' ) && define( 'ACTION_DEBUG', true); // Not really sure what this is about...
  //!defined( 'SCRIPT_DEBUG' ) && define( 'SCRIPT_DEBUG', true); // Allows edits of scriptname.dev.js in the wp-includes/js and wp-admin/js dirs.
  !defined( 'WP_DEBUG_LOG' ) && define( 'WP_DEBUG_LOG', true ); // Log PHP errors to WP_CONTENT_DIR/debug.log
  //!defined( 'WP_DEBUG_DISPLAY' ) && define( 'WP_DEBUG_DISPLAY', false ); // Set to false to default back to globally configured 'display_errors' setting; didn't seem to work for me.
  //@ini_set( 'display_errors', 'Off' );
  @ini_set( 'log_errors', 'On' );
}



/*
 * Loading WordPress...
 */
require_once( ABSPATH . 'wp-settings.php' );
