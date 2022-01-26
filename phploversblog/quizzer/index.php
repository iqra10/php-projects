<?php include 'database.php'; ?>
<?php session_start(); ?>

<?php 

// Get Total Questions Number

$query = "SELECT * FROM questions";

$result = mysqli_query( $connection, $query );

$total = mysqli_num_rows( $result );

?>

<!DOCTYPE html>
<html>
    <head>
    <meta charset="utf-8" />
    <title>PHP Quizzer</title>     
    <link rel="stylesheet" href="css/style.css" type="text/css" />
</head>
<body>
    <header>
       <div class="container">
       <h1>PHP Quizzer</h1>    
       </div><!-- container -->    
    </header>
    <main>
       <div class="container">
       <h2>Test your PHP knowledge.</h2> 
        <p>This is a multiple choice quiz to test your knowledge of PHP.</p>
        <ul>
        <li><strong>Number of questions:</strong> <?php echo $total; ?> </li>   
        <li><strong>Type:</strong> Multiple Choices</li>   
        <li><strong>Estimated Time:</strong> <?php echo $total * .5; ?> Minutes </li>              
        </ul>   
           <a href="question.php?n=1" class="start">Start Quiz</a>
       </div><!-- container -->    
    </main>
    <footer>
       <div class="container">
        Copyright &copy; 2014, PHP Quizzer
       </div><!-- container -->
    </footer>
</body>
</html>