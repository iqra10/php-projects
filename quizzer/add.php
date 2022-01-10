<?php include 'database.php'; ?>
<?php session_start(); ?>
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
           <h2>Add A Question</h2>
<?php 
           
if(isset($_POST['submit'])) {
    
    $question_number = $_POST['question_number'];
    $question_text = $_POST['question_text'];
    $correct_choice = $_POST['correct_choice'];
    // Choices array
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        $choices[5] = $_POST['choice5'];
    
  foreach($choices as $choice => $value) {
        
        if($value != '') {
            
            if($correct_choice == $choice) {
                
                $is_correct = 1;
            } else {
                
                $is_correct = 0;
            }
               
       
// Question Query
    
$query = "INSERT INTO questions(question_number, text)" ;
    
$query .= "VALUES('{$question_number}', '{$question_text}')";

$result = mysqli_query( $connection, $query );
      
// Choices Query
    
$query = "INSERT INTO choices(question_number, is_correct, text)" ;
    
$query .= "VALUES('{$question_number}', '{$is_correct}', '{$value}')";

$result = mysqli_query( $connection, $query );
            
    }           
  }
  echo "<p style='background: #f4f4f4; padding: 15px; color: black; font-weight: 600; font-size: 16px;'>Question Added</p>";   
       
}
          
           
?>          
           
           <form method="post" action="add.php">
           <p>
           <label>Question Number</label>
           <input type="number" name="question_number" />
           </p>
           <p>
           <label>Question Text:</label> 
           <input type="text" name="question_text" />
           </p>
           <p>
           <label>Choice #1: </label> 
                <input type="text" name="choice1" />   
           </p> 
           <p>
           <label>Choice #2: </label> 
                <input type="text" name="choice2" />   
           </p> 
           <p>
           <label>Choice #3: </label> 
                <input type="text" name="choice3" />   
           </p> 
           <p>
           <label>Choice #4: </label> 
                <input type="text" name="choice4" />   
           </p> 
            <p>
           <label>Choice #5: </label> 
                <input type="text" name="choice5" />   
           </p> 
           <p>
           <label>Correct Choice Number </label> 
               <input type="number" name="correct_choice" />   
           </p> 
           <p>
               <button style="background: #f4f4f4; color: black; padding: 10px 30px; border: 1px solid #cccccc; font-size: 14px;" type="submit" name="submit">Submit</button>
               
<!--               <input class="btn btn-primary" type="submit" name="submit" value="submit" />   -->
           </p>                
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