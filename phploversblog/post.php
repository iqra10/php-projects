<?php include 'includes/header.php'; ?>

<?php include 'includes/nav.php'; ?>

<?php 

// Get id

if(isset($_GET['id'])) {
    
    $id = $_GET['id'];
}

// Create DB object

$db = new Database();

// Select post by id

$posts_by_id = $db->select_by_id('posts', $id);

?>

<main class="container">
  <div class="row g-5">
    <div class="col-md-8">
      <article class="blog-post">
         <?php if($posts_by_id) : ?> 
         <?php while($posts = mysqli_fetch_assoc($posts_by_id)) : ?>
        <h2 class="blog-post-title"><?php echo $posts['title']; ?></h2>
        <p class="blog-post-meta"><?php echo format_date($posts['date']); ?> by <a href="#"><?php echo $posts['author']; ?></a></p>
        <p> <?php echo $posts['body']; ?> </p>
           <?php endwhile; ?> 
    <?php else : ?>
        <p>There are no post yet of this category.</p>
    <?php endif; ?>
        </article>

    </div>
<?php include 'includes/sidebar.php'; ?>      
  </div>

</main>

<?php include 'includes/footer.php'; ?>

    
  
