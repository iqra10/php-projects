<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php 

// Check if the session is set


if(!isset($_SESSION['score'])) {
    
    $_SESSION['score'] = 0;
    
} 

if(isset( $_POST['submit'] ) ) {
    
    $selected_choice = $_POST['choice'];
    $number          = $_POST['number'];
    $next            = $number+1;
  
/*
* Get Total Questions
*/    
    
$query = "SELECT * FROM questions";    

$result = mysqli_query( $connection, $query );

$total = mysqli_num_rows( $result );
    
    
/*
* Get right choice
*/
    
$query = "SELECT * FROM choices WHERE question_number = $number AND is_correct = 1";
    
$query = mysqli_query( $connection, $query );
    
$row = mysqli_fetch_assoc( $query );    
    
  $correct_choice = $row['id'];
    
// Comparing 
    
    if($correct_choice == $selected_choice) {
        
        $_SESSION['score']++;
        
    } 
 

  if($number == $total) {
      
      header('Location: final.php');
      
  } else {
      
      header("Location: question.php?n=".$next);
      
  }
    
}
    
?>