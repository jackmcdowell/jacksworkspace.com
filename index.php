<?php 
require_once("inc/config.php");
include(ROOT_PATH . "inc/products.php");
include(ROOT_PATH . "inc/websites.php");
$recent = get_products_recent();
$recentWebsites = get_websites_recent();
$pageTitle = "Jack's Portfolio";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>
        <div class="section banner">
        </div>
        <div class="section articles latest">
        <h1>Welcome to Jack McDowell's Portfolio</h1>
        <p>I am an experienced full stack LAMP developer with experience managing and deploying CMS platforms</p>
        <p>Some of my projects are on <a href="http://github.com/jackmcdowell/" target="_blank">Github</a> or you can see them in my <a href=<?php echo BASE_URL?>code/codes.php>Portfolio</a></p>
        <p>Feel free to take a look at my <a href="http://jacksworkspace.com/contact/McDowell.Resume.pdf" target="_blank">Resume</a> or find me on <a href="https://www.linkedin.com/in/mcdowelljack" target="_blank">Linkedin</a></p>
            <div class="wrapper">
                <h2>Latest Projects</h2>
                <ul class="products projects">
                    <?php
                        foreach(array_reverse($recentWebsites) as $website) {
                            include(ROOT_PATH . "inc/partial-website-list-view.html.php");
                        }
                    ?>
                </ul>
                <h2>Latest Articles</h2>
                <ul class="products">
                    <?php
                        foreach(array_reverse($recent) as $product) {
                            include(ROOT_PATH . "inc/partial-product-list-view.html.php");
                        }
                    ?>
                </ul>
            </div>
        </div>
<?php include(ROOT_PATH . 'inc/footer.php') ?>