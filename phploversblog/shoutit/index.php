<?php include 'database.php'; ?>

<?php

$query = "SELECT * FROM shouts";

$shouts = mysqli_query( $con, $query );

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>SHOUT IT!</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" />
    </head>
    <body>
    <div id="container">
        <header>
           <h1>SHOUT IT! Shoutbox</h1>
        </header>
        <div id="shouts">
          <ul>
              <?php while( $shout = mysqli_fetch_array($shouts)) :  ?>
              
              <li class="shout"><span><?php echo $shout['time']; ?> - </span><strong><?php echo $shout['user']; ?></strong> : <?php echo $shout['message']; ?></li>  
              
              <?php endwhile; ?>
             
         </ul>
         </div><!-- shouts -->
         <div id="input">
          <form method="post" action="process.php">
              
              <?php if(isset($_GET['error'])) : ?>
              <div class="error"><?php echo $_GET['error']; ?></div> 
              <?php endif; ?>
              
             <input type="text" name="user" placeholder="Enter Your Name" />
             <input type="text" name="message" placeholder="Enter A Message" />
          <br/>
             <input type="submit" class="shout-btn" name="submit" value="Shout It Out" />
         </form>
         </div><!-- input -->
        </div><!-- container -->
    </body>
</html>