<?php require_once '../topic.php'; ?>

<?php 

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

$topicClass = new Topic;

$topic = $topicClass->getTopic($id);

$title = $topic->title; 

$replies = $topicClass->getReplies($id);


?>


<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Talking Space Forum</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/navbar-fixed/">

    

    <!-- Bootstrap core CSS -->
      
<link href="templates/css/bootstrap.css" rel="stylesheet">
<link href="templates/css/custom.css" rel="stylesheet">


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="navbar-top-fixed.css" rel="stylesheet">
  </head>
  <body>
    
<nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php">Talking Space</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav  navbar-right me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">Create An Account</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="topic.php">Create Topics</a>
      </ul>
    </div>
  </div>
</nav>
<main class="container">
  
<div class="row">
<div class="col-md-8">
<div class="main-col">
<div class="block">
<h1 class="pull-left"><?php echo $topic->title; ?></h1>
<h4 class="pull-right">A simple PHP Forum engine.</h4>
<div class="clearfix">

<hr>
<ul id="topics">
<li id="main-topic" class="topic topic">
<div class="row">
<div class="col-md-2">
<div class="user-info">
  <img class="avatar pull-left" src="images/avatar/<?php echo $topic->avatar; ?>" />
    <ul>
      <li><strong><?php echo $topic->username; ?></strong></li>
      <li><?php echo userPostCount($topic->id); ?></li>
      <li><a href="topics.php?user=<?php echo $topic->user_id; ?>">View Topics</a></li>
   </ul>
</div>
</div>
<div class="col-md-10">
<div class="topic-content pull-right">
<p><?php echo $topic->body; ?></p>
</div>
</div>
</div>
</li>

<?php foreach($replies as $reply) : ?>
<li class="topic topic">
<div class="row">
<div class="col-md-2">
<div class="user-info">
  <img class="avatar pull-left" src="images/avatar/<?php echo $reply->avatar; ?>" />
    <ul>
      <li><?php echo $reply->username; ?></li>
      <li><?php echo userPostCount($reply->id); ?></li>
      <li><a href="topics.php?user=<?php echo $topic->user_id; ?>">View Topics</a></li>
   </ul>
</div>
</div>
<div class="col-md-10">
<div class="topic-content pull-right">
<p><?php echo $reply->body; ?></p>
</div>
</div>
</div>
</li>
<?php endforeach; ?>  
<!--

<li class="topic topic">
<div class="row">
<div class="col-md-2">
<div class="user-info">
  <img class="avatar pull-left" src="images/avatar/avatar.png" />
    <ul>
      <li>BradT81</li>
      <li>43 Posts</li>
      <li><a href="profile.php">Profile</a></li>
   </ul>
</div>
</div>
<div class="col-md-10">
<div class="topic-content pull-right">
<p>This is dummy text.</p>
</div>
</div>
</div>
</li>   
-->
</ul>
<h3>Reply to topic:</h3> 
<form role="form">
<div class="form-group">
    <textarea id="reply" rows="10" cols="80" class="form-control" name="reply"></textarea>
</div>
<button type="submit" name="submit" class="btn btn-primary input-group-btn">Submit</button> 
</form>    
</div>
</div>   
</div>
</div>
<div class="col-md-4">
  <div id="sidebar">
 <div class="block">
<h3>Login Form</h3>
<form role="form">
<div class="form-group">
  <label for='exampleInputEmail1'>Username</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email" />
</div>
    
    <div class="form-group">
  <label for='exampleInputEmail1'>Password</label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Enter Password" />
</div>
    
<button type="submit" name="submit" class="btn btn-primary input-group-btn">Login</button> <a href="register.html" class="btn btn-default">Create Account </a>
    
</form>
</div> 
    
<div class="block">
  <h3>Categories</h3>    
 <div class="list-group">
  <a href="topics.php" class="list-group-item <?php echo is_active(null); ?>">All Topics <span class="badge pull-right" style="float: right; background: white; color: #5c5b69;" >14</span></a> 
 <?php foreach(getCategories() as $category) : ?>     
 <a href="topics.php?category=<?php echo $category->id; ?>" class="list-group-item <?php echo is_active($category->id); ?> "><?php echo $category->name; ?><span class="badge" style="float: right; color: white; background-color: #5c5b69;" >4</span></a>
 <?php endforeach; ?>      
</div>     
</div>
</div>  
</div>
</div>
    
</main>
<script>CKEDITOR.replace('body'); </script> 
<script>CKEDITOR.replace('reply'); </script>   

<?php include 'includes/footer.php'; ?>