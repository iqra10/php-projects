<?php include 'includes/header.php'; ?>
<main class="container">
  
<div class="row">
<div class="col-md-8">
<div class="main-col">
<div class="block">
<h1 class="pull-left">Create a Topic.</h1>
<h4 class="pull-right">A simple PHP Forum engine.</h4>
<div class="clearfix">
<hr>
<form role="form" enctype="multipart/form-data" method="post" action=".php">
 <div class="form-group">
  <label for='exampleInputName1'>Topic Title</label>
    <input type="text" name="title" class="form-control" id="exampleInputName1" placeholder="Enter Post Title" />
</div>
    
<div class="form-group">
  <label for='exampleInputName1'>Category</label>
<select name="category" class="form-control">
<option>Design</option>    
<option>Development</option>    
<option>Business & Marketing</option>    
<option>Search Engines</option>    
<option>Cloud & Hosting</option>    
</select>
</div>
    
<div class="form-group">
  <label for='exampleInputName1'>Topic Body</label>
    <textarea id="body" rows="10" cols="80" class="form-control" name="body"></textarea>
</div>
<button type="submit" name="create" class="btn btn-primary input-group-btn">Submit</button> 
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
<script>CKEDITOR.replace('body'); </script>   
<?php include 'includes/footer.php'; ?>