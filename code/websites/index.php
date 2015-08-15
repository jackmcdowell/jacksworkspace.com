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
                  <li>
                     <a href="http://usahispanicmarket.com/deportes/">
                     <img src="<?php echo BASE_URL; ?>img/siempredeporte_capture.png" alt="Versalingua Website" width="250">
                     </a>
                     <p>Sports Website</p>
                  </li>
                  <li>
                     <a href="http://usahispanicmarket.com/eshop/">
                     <img src="<?php echo BASE_URL; ?>img/market_capture.png" alt="Travel Website" width="250">
                     </a>
                     <p>E-shop Website</p>
                  </li>
                  <li>
                     <a href="http://usahispanicmarket.com/politicohispano/">
                     <img src="<?php echo BASE_URL; ?>img/diplomat_capture.png" alt="Drawing App" width="250">
                     </a>
                     <p>Political Website</p>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </body>
   <footer><?php include(ROOT_PATH . 'inc/footer.php') ?></footer>
</html>