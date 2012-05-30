<?php
/*
 * Local development environment settings.
 * Adapted from https://github.com/markjaquith/WordPress-Skeleton
 */
define( 'DB_NAME', '' );
define( 'DB_USER', '' );
define( 'DB_PASSWORD', '' );
define( 'DB_HOST', 'localhost' );
define( 'WP_DEBUG', true );

// Disallow WP from contacting external sites. Whitelist hosts if necessary.
!defined( 'WP_HTTP_BLOCK_EXTERNAL' ) && define( 'WP_HTTP_BLOCK_EXTERNAL', true );
//!defined( 'WP_ACCESSIBLE_HOSTS' ) && define( 'WP_ACCESSIBLE_HOSTS', 'rpc.pingomatic.com' );
?>