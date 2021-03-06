<?php

define( 'WP_ENV',   'development' );
define( 'WP_STAGE', 'development-<USERNAME>' );

if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname(__FILE__) . '/' );

require_once( ABSPATH . '/wp-config/wp-config-database.php' );
require_once( ABSPATH . '/wp-config/wp-config-common.php' );
require_once( ABSPATH . '/wp-config/wp-config-' . WP_ENV . '.php' );

require_once( ABSPATH . 'wp-settings.php' );
