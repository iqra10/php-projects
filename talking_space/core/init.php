<?php session_start(); ?>

<?php 

require_once('./config/config.php');


require_once('helpers/db_helper.php');
require_once('helpers/format_helper.php');
require_once('helpers/system_helper.php');


function __spl_autoload_register($class_name){
    
    require_once('libraries/'.$class_name.'.php');
}

?>