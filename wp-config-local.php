<?php
/*
 * Local development environment settings.
 * Adapted from: https://github.com/markjaquith/WordPress-Skeleton
 * For additional tips and tricks see: http://scotty-t.com/2012/01/18/wordpress-in-dev-qa-and-prod/
 */
define( 'DB_NAME', 'db_name' );
define( 'DB_USER', 'db_user' );
define( 'DB_PASSWORD', 'db_password' );
define( 'DB_HOST', 'localhost' );
define( 'WP_DEBUG', true );

// Disallow WP from contacting external sites. Provide a comma separated whitelist of hosts if necessary.
!defined( 'WP_HTTP_BLOCK_EXTERNAL' ) && define( 'WP_HTTP_BLOCK_EXTERNAL', true );
!defined( 'WP_ACCESSIBLE_HOSTS' ) && define( 'WP_ACCESSIBLE_HOSTS', 'rpc.pingomatic.com, wordpress.org, downloads.wordpress.org' );
?>