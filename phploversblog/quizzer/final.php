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
          <h2>You're Done!</h2>
            <p>Congrats! You have completed the test.</p>
            <p>Final score: <?php echo $_SESSION['score'];
             $_SESSION['score'] = 0; ?></p>
            <p><a href="question.php?n=1" class="start">Take Again</a></p>
       </div><!-- container -->    
    </main>
    <footer>
       <div class="container">
        Copyright &copy; 2014, PHP Quizzer
       </div><!-- container -->
    </footer>
</body>
</html>