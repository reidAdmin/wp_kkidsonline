<?php

define( 'GD_VIP', '50.62.174.132' );
define( 'GD_RESELLER', 1 );
define( 'GD_ASAP_KEY', 'e5c3492fc4ae6a476cd9603a3d933646' );
define( 'GD_STAGING_SITE', false );
define( 'GD_EASY_MODE', false );
define( 'GD_SITE_CREATED', 1537293989 );

// Newrelic tracking
if ( function_exists( 'newrelic_set_appname' ) ) {
	newrelic_set_appname( 'ef2155c1-dac2-42a9-b891-73806a8758b9;' . ini_get( 'newrelic.appname' ) );
}

/**
 * Is this is a mobile client?  Can be used by batcache.
 * @return array
 */
function is_mobile_user_agent() {
	return array(
	       "mobile_browser"             => !in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'bot', 'pc' ) ),
	       "mobile_browser_tablet"      => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'tablet-' ),
	       "mobile_browser_smartphones" => in_array( $_SERVER['HTTP_X_UA_DEVICE'], array( 'mobile-iphone', 'mobile-smartphone', 'mobile-firefoxos', 'mobile-generic' ) ),
	       "mobile_browser_android"     => false !== strpos( $_SERVER['HTTP_X_UA_DEVICE'], 'android' )
	);
}