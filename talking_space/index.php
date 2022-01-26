<?php
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}


require_once( ABSPATH . 'core/init.php'); ?>


<?php

// Get Templates 
$template = new Template('templates/frontpage.php');

echo $template; 


?>