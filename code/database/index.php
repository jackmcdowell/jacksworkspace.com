<?php
require_once("../../inc/config.php");
require_once('database.php');
 try { 
   $results = $db->query('SELECT * from film');
 } catch(Exception $e) {
echo $e->getMessage();
die();
 }
$films = $results->fetchAll(PDO::FETCH_ASSOC);
?>
<?php 
$pageTitle = "Database";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>
    <div class="section page">  
    <div class= "wrapper">
    <h1>MySQL and PDO database</h1>
    <h2>Film menu:
    <select name="forma" onchange="location = this.options[this.selectedIndex].value;"> 
<?php 
  foreach($films as $film){
      echo '<option value="films.php?id='.$film["film_id"].'">'.$film["title"].'</option>';
} 
?>
</select></h2>
<p></p>
<h3>Films by Title:</h3>
  <ol>
    <?php
  foreach($films as $film){
      echo '<li class="databaselist"><i class="lens"></i><a href="films.php?id='.$film["film_id"].'">'.$film["title"].'</li>';
    }
?>
  </ol>
</div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>