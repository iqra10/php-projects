<?php

// Select Categories
$db = new Database();

$categories = $db->select('categories');

?>

<div class="col-md-4">
      <div class="position-sticky" style="top: 2rem;">
        <div class="p-4 mb-3 bg-light rounded">
          <h4 class="fst-italic">About</h4>
          <p class="mb-0">Customize this section to tell your visitors a little bit about your publication, writers, content, or something else entirely. Totally up to you.</p>
        </div>

        <div class="p-4">
                <?php if($categories) : ?>        
          <h4 class="fst-italic">Categories</h4>
             <?php while( $row = mysqli_fetch_assoc($categories)) : ?>
          <ol class="list-unstyled mb-0">
            <li><a href="posts.php?category=<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></a></li>
        <?php endwhile; ?>  
    <?php else: ?>
        <p>No categories</p>
    <?php endif; ?>
          </ol>
        </div>
      </div>
    </div>