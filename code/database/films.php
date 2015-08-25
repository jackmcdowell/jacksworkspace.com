<?php
require_once("../../inc/config.php");
require_once('database.php');
if(!empty($_GET['id'])){
	$film_id = intval($_GET['id']);
	 try { 
	   $results = $db->prepare('select * from film where film_id = ?');
	   $results->bindParam(1, $film_id);
	   $results->execute();
	} catch(Exception $e) {
    	echo $e->getMessage();
    	die();
 	}
	$film = $results->fetch(PDO::FETCH_ASSOC);
	if ($film == FALSE) {
		echo "Sorry, that film could not be found.";
		die;
	}
}
?>
<?php 
$pageTitle = "Database";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>

<!-- <body class="database"> -->
    <div class="section page">  
    <div class= "wrapper">
	<h1>Title: <?php
	if (isset($film)) {
		echo $film['title']; 
	}
	?>
	</h1>
	<div class="gallery">
	<ul>
	<h1></h1>
	
	<h2>
	Release Year: <?php

	if (isset($film)) {
		echo $film['release_year']; 
	}
	?>
	</h2>
  	<h2>
	Summary: <?php
	if (isset($film)) {
		echo $film['description']; 
	}
	?>
	</h2>
	</ul>
</div>
<form action="previous.html" onClick="history.back();return false;">
    <input type="submit" value="Back to list">
</form>
<!-- <select name="form" onchange="location = this.options[this.selectedIndex].value;"> 

<?php 
  foreach($films as $film){
      echo '<option value="films.php?id='.$film["film_id"].'">'.$film["title"].'</option>';
    

} 
?>
</select> -->
</div>
</div>

<?php include(ROOT_PATH . 'inc/footer.php') ?>

