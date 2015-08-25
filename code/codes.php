<?php
require_once("../inc/config.php");
$pageTitle = "My coding projects";
$section = "code";
include(ROOT_PATH . 'inc/header.php'); 
?>
    <div class="section page">
    <div class="wrapper">
        <h1>Coding Projects</h1>
        <div class="gallery">
        <ul>
		    <li>
            <a href="<?php echo BASE_URL; ?>code/websites">
            <img src="<?php echo BASE_URL; ?>img/badge_websites.png" alt="Websites" width="150">
            </a>
            <p>Websites</p>
          </li>
          <li>
            <a href="<?php echo BASE_URL; ?>code/lightbox">
            <img src="<?php echo BASE_URL; ?>img/badge_lbox.png" alt="Light Box" width="150">
            </a>
            <p>JQuery Lightbox</p>
          </li>
          <li>
            <a href="<?php echo BASE_URL; ?>code/drawing">
            <img src="<?php echo BASE_URL; ?>img/badge_draw.png" alt="Drawing App" width="150">
            </a>
            <p>JQuery DrawingBox</p>
          </li>
           <li>
            <a href="<?php echo BASE_URL; ?>code/database">
            <img src="<?php echo BASE_URL; ?>img/badge_mysql.png" alt="JQuery" width="150">
            </a>
            <p>MySQL and PDO example</p>
          </li>
         </ul>
         
</div>
</div>
</div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>





















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


