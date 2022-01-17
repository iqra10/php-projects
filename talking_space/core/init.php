<?php session_start(); ?>

<?php
require_once('../index.php');

require_once(ABSPATH.'config/config.php');


require_once(ABSPATH.'helpers/db_helper.php');
require_once(ABSPATH.'helpers/format_helper.php');
require_once(ABSPATH.'helpers/system_helper.php');


function __spl_autoload_register($class_name){
    
    require_once( ABSPATH.'libraries/'.$class_name.'.php');
}

__spl_autoload_register('Template');

__spl_autoload_register('Topic');

__spl_autoload_register('Database');


?>