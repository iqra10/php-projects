<?php

$db_host = 'localhost';

$db_user = 'root';

$db_password = 'root';

$db_name = 'quizzer';

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);

if(!$connection) {
    
    printf('Failed to connect %s/n, $connection');
}

?>