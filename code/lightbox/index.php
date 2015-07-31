<!DOCTYPE html>

<?php
  require_once("../../inc/config.php");
?>

<?php 
$pageTitle = "Lightbox";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>
<div class="lightbox">
<html>
<head>

  <title>jQuery Lightbox</title>

</head>

<body>


    <div class="section page">  
    <div class= "wrapper">
  <h1>Image Gallery</h1>
  <ul id="imageGallery">
    <li><a href="images/sahalie.jpg"><img src="images/sahalie.jpg" width="150" alt="Sahalie Falls"></a></li>
    <li><a href="images/sahalie2.jpg"><img src="images/sahalie2.jpg" width="150" alt="Sahalie Falls"></a></li>
    <li><a href="images/sahalie3.jpg"><img src="images/sahalie3.jpg" width="150" alt="Sahalie Falls"></a></li>
    <li><a href="images/tulips.jpg"><img src="images/tulips.jpg" width="150" alt="Tulip Festival"></a></li>
    <li><a href="images/craterlake.jpg"><img src="images/craterlake.jpg" width="150" alt="Crater Lake"></a></li>
    <li><a href="images/craterlake2.jpg"><img src="images/craterlake2.jpg" width="150" alt="Crater Lake"></a></li>
    <li><a href="images/craterlake3.jpg"><img src="images/craterlake3.jpg" width="150" alt="Crater Lake"></a></li>
    <li><a href="images/orcoast.jpg"><img src="images/orcoast.jpg" width="150" alt="Oregon Coast"></a></li>
  </ul>
  <script src="http://code.jquery.com/jquery-1.11.0.min.js" type="text/javascript" charset="utf-8"></script>
  <script src="js/app.js" type="text/javascript" charset="utf-8"></script>
  
</body>
</div>
</div>
</div>
  <footer><?php include(ROOT_PATH . 'inc/footer.php') ?></footer>

</html>

