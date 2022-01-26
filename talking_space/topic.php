<?php
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}


require_once( ABSPATH . 'core/init.php'); ?>
<?php

// Get Templates & Assign Vars
$template = new Template('templates/s_topic.php');

// Assign Vars
echo $template;


?>