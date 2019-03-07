<?php

add_filter( 'xmlrpc_enabled', '__return_false' );


function disable_x_pingback( $headers ) {
	unset( $headers['X-Pingback'] );

	return $headers;
}
add_filter( 'wp_headers', 'disable_x_pingback' );