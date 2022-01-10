<?php include 'database.php'; ?>

<?php

if(isset($_POST['submit'])) {
    
    $user = $_POST['user'];
    
    $message = $_POST['message'];
    
 $user = mysqli_real_escape_string( $con, $user );
    
 $message = mysqli_real_escape_string( $con, $message );
    
// Set TimeZone    

date_default_timezone_set("Asia/Karachi");
    
$time = date('h:i:s a', time());
    
if( empty( $user ) && empty( $message ) ) {
    
    $error = "Please Fill in your name and message";
    
    header("Location: index.php?error=".urlencode( $error ));
    
} else {
    
$query = "INSERT INTO shouts(user, message, time) ";
    
$query .= "VALUES('{$user}', '{$message}', '{$time}') ";
    
$add_query = mysqli_query($con, $query);

header('Location: index.php');    
    
  }
    
}

?>