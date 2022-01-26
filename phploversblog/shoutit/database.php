<?php 

$con = mysqli_connect("localhost", "root", "root", "shoutit");

// Check Connection

if(mysqli_connect_errno()) {
    
    die("Failed to connect" . mysqli_connect_error($con));
    
} 
//    else {
//    
//    echo "We are connected";
//}

?>