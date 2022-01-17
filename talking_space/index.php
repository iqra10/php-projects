<?php require('core/init.php'); ?>

<?php

// Get Templates 
$template = new Template('templates/frontpage.php');


// Create topic object
$topic = new Topic;

// Assign Vars

$template->topics = $topic->getAllTopics();


echo $template;


?>