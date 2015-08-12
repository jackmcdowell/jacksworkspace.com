<!DOCTYPE html>
<?php

  require_once("../../inc/config.php");
?>

<?php 
$pageTitle = "My coding projects";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>

<html>
<head>

  <title>Websites</title>


</head>
<body>
    <div class="section page">
    <div class="wrapper">

       <h1>Website Portfolio</h1>
    <div class="gallery websites">
        <ul>
		  <li>
            <a href="http://versalingua.com">
            <img src="<?php echo BASE_URL; ?>img/versalingua_capture.png" alt="Versalingua Website" width="250">
            </a>
            <p>Versalingua Website</p>
          </li>
          <li>
            <a href="http://methexis.org">
            <img src="<?php echo BASE_URL; ?>img/travel_capture.png" alt="Travel Website" width="250">
            </a>
            <p>Travel Website</p>
          </li>
          <li>
            <a href="http://usahispanicpress.com">
            <img src="<?php echo BASE_URL; ?>img/usahispanicpress_capture.png" alt="Drawing App" width="250">
            </a>
            <p>USAHispanicPress</p>
          </li>
         </ul>
         
</div>
</div>
</div>


  </body>
  <footer><?php include(ROOT_PATH . 'inc/footer.php') ?></footer>
</html>





















<!--        <section>
             
      <ul id="gallery" class="gallery">
        <li>
          <a href="<?php echo BASE_URL; ?>code/php.php">
            <img src="<?php echo BASE_URL; ?>img/badge_php.png" alt="number one">
            <p>PHP</p>
          </a>
        </li>
        <li>
          <a href="<?php echo BASE_URL; ?>code/mysql.php">
            <img src="<?php echo BASE_URL; ?>img/badge_mysql.png" alt="number one">
            <p>MySQL</p>
          </a>
        </li>        
        <li>
          <a href="<?php echo BASE_URL; ?>code/ruby.php">
            <img src="<?php echo BASE_URL; ?>img/badge_ruby.png" alt="number one">
            <p>Ruby</p>
          </a>
        </li>         
        <li>
          <a href="<?php echo BASE_URL; ?>code/html.php">
            <img src="<?php echo BASE_URL; ?>img/badge_html.png" alt="number one">
            <p>HTML</p>
          </a>
        </li>
        <li>
          <a href="<?php echo BASE_URL; ?>code/css.php">
            <img src="<?php echo BASE_URL; ?>img/badge_css.png" alt="number one">
            <p>CSS</p>
          </a>
        </li>
        <li>
          <a href="<?php echo BASE_URL; ?>code/js.php">
            <img src="<?php echo BASE_URL; ?>img/badge_js.png" alt="number one">
            <p>JavaScript</p>
          </a>
        </li>
        
        </ul>
      </section> -->


