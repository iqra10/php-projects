<?php
require_once '../index.php';

$topicClass = new Topic();
$topics = $topicClass->getAllTopics();
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
    <a class="navbar-brand" href="index.html">Talking Space</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav  navbar-right me-auto mb-2 mb-md-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.html">Create An Account</a>
        </li>
           <li class="nav-item">
          <a class="nav-link" href="topic.html">Create Topics</a>
      </ul>
    </div>
  </div>
</nav>

<main class="container">
  
<div class="row">
<div class="col-md-8">
<div class="main-col">
<div class="block">
<h1 class="pull-left">Welcome to Talking Space.</h1>
<h4 class="pull-right">A simple PHP Forum engine.</h4>
<div class="clearfix">
<hr>
<ul id="topics">
<?php if($topics) : ?>
<?php foreach($topics as $topic) : ?>    
<li class="topic">
<div class="row">
<div class="col-md-2">
  <img class="avatar pull-left" src="images/avatar/<?php echo $topic->avatar ?>" />
</div>
<div class="col-md-10">
<div class="topic-content pull-right">
<h3><a href="topic.html"><?php echo $topic->title; ?></a></h3>
<div class="topic-info">
<a href="category.html">Development</a> >> <a href="profile.html">BradT@1</a>    
<span class="badge pull-right">3</span>
</div>
</div>
</div>
</div>
</li>
<?php endforeach ; ?>
<?php else : ?>    
<h3>Nothing to display.</h3>
<?php endif; ?>
<!--
<li class="topic">
<div class="row">
<div class="col-md-2">
  <img class="avatar pull-left" src="images/avatar/avatar.png" />
</div>
<div class="col-md-10 align-right">
<div class="topic-content pull-right">
<h3><a href="topic.html">How did you learn CSS and HTML?</a></h3>
<div class="topic-info">
<a href="category.html">Development</a> >> <a href="profile.html">BradT@1</a>    
<span class="badge pull-right">3</span>
</div>
</div>
</div>
</div> 
<li class="topic">
<div class="row">
<div class="col-md-2">
  <img class="avatar pull-left" src="images/avatar/avatar.png" />
</div>
<div class="col-md-10">
<div class="topic-content pull-right">
<h3><a href="topic.html">How did you learn CSS and HTML?</a></h3>
<div class="topic-info">
<a href="category.html">Development</a> >> <a href="profile.html">BradT@1</a>    
<span class="badge pull-right">3</span>
</div>
</div>
</div>
</div>
</li>    
-->
</ul>
<h3>Forum Statistics</h3>
<ul>
<li>Total Number of Users: <strong>52</strong></li>
<li>Total Number of Topics: <strong>10</strong></li>
<li>Total Number of Categories: <strong>5</strong></li>  </ul>   
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
 <a href="" class="list-group-item active">All Topics <span class="badge pull-right" style="float: right; background: white; color: #5c5b69;" >14</span></a>    
 <a href="" class="list-group-item">Design<span class="badge" style="float: right; color: white; background-color: #5c5b69;" >4</span></a>    
 <a href="" class="list-group-item">Development <span class="badge" style="float: right; color: white; background-color: #5c5b69;">9</span></a>    
 <a href="" class="list-group-item">Business & Marketing <span class="badge pull-right" style="float: right; color: white; background-color: #5c5b69;">12</span></a> 
<a href="" class="list-group-item">Search Engines<span class="badge pull-right" style="float: right; color: white; background-color: #5c5b69;">7</span></a> 
<a href="" class="list-group-item">Cloud & Hosting <span class="badge pull-right" style="float: right; color: white; background-color: #5c5b69;" >3</span></a>          
</div>     
</div>
</div>  
</div>
</div>
    
</main>

<?php include 'includes/footer.php'; ?>