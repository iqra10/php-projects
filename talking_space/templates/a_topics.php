<?php

require_once '../topics.php';

$topicClass = new Topic();

$topics = $topicClass->getAllTopics();

$totalTopics = $topicClass->getTotalTopics();
    
$totalCategories = $topicClass->getTotalCategories();

$category = isset($_GET['category']) ? $_GET['category'] : null;

$user = isset($_GET['user']) ? $_GET['user'] : null;


if(isset($_GET['category'])) {
    
    $topics = $topicClass->getByCategory($category);
    foreach($topics as $topic) {
    $title = 'Posts In "'.$topic->name.'"';
    }
}



// User 

if(isset($_GET['user'])) {
    
    $topics = $topicClass->getByUser($user);
    foreach($topics as $topic) {
    $title = 'Posts In "'.$topic->name.'"';
        
    }
}


if(!isset($_GET['category']) && !isset($_GET['user'])) {

$topics = $topicClass->getAllTopics();

}


?>

<?php include 'includes/header.php'; ?>

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
<h3><a href="topic.php?id=<?php echo $topic->id; ?>"><?php echo $topic->title; ?></a></h3>
<div class="topic-info">
<a href="category.php"><?php echo $topic->name; ?></a> >> <a href="topics.php?user=<?php echo $topic->id; ?>"><?php echo urlFormat($topic->username); ?></a> >> <?php echo formatDate($topic->create_date); ?>    
<span class="badge pull-right" style="float: right; background: #5c5b69; color: white;" ><?php echo replyCount($topic->id); ?></span>
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
<!--
 <a href="" class="list-group-item">Development <span class="badge" style="float: right; color: white; background-color: #5c5b69;">9</span></a>    
 <a href="" class="list-group-item">Business & Marketing <span class="badge pull-right" style="float: right; color: white; background-color: #5c5b69;">12</span></a> 
<a href="" class="list-group-item">Search Engines<span class="badge pull-right" style="float: right; color: white; background-color: #5c5b69;">7</span></a> 
<a href="" class="list-group-item">Cloud & Hosting <span class="badge pull-right" style="float: right; color: white; background-color: #5c5b69;" >3</span></a>          
-->
</div>     
</div>
</div>  
</div>
</div>
    
</main>

<?php include 'includes/footer.php'; ?>