<?php include 'database.php'; ?>
<?php session_start(); ?>
<?php
 
// Get Question Number 

if(isset($_GET['n'])) {
    
    $number = $_GET['n'];
    
}

// Get Question

$query = "SELECT * FROM questions WHERE question_number = '{$number}'";

$result = mysqli_query( $connection, $query );

$question = mysqli_fetch_assoc( $result );

/*
* Get Total Questions
*/    
    
$query = "SELECT * FROM questions";    

$result = mysqli_query( $connection, $query );

$total = mysqli_num_rows( $result );
    



// Get Choices 

$query = "SELECT * FROM choices WHERE question_number = '{$number}'";

$choices = mysqli_query( $connection, $query );


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
           <div class="current">Question <?php echo $question['question_number']; ?> of <?php echo $total; ?></div>
             <p class="question">
                 <?php echo $question['text']; ?>
              </p>
            <form method="post" action="process.php">
                <?php while( $row = mysqli_fetch_assoc($choices) ) : ?>
                  <li><input name="choice" type="radio" value="<?php echo $row['id']; ?>" /><?php 
                    echo $row['text'];  ?></li>                     
                <?php endwhile; ?>
                <input type="submit" name="submit" value="Submit" />
                <input type="hidden" name="number" value="<?php echo $number; ?>" />
           </form>
       </div><!-- container -->    
    </main>
    <footer>
       <div class="container">
        Copyright &copy; 2014, PHP Quizzer
       </div><!-- container -->
    </footer>
</body>
</html>