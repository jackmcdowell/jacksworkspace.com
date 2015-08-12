<?php 

require_once("inc/config.php");
include(ROOT_PATH . "inc/products.php");
$recent = get_products_recent();

$pageTitle = "Jack's Portfolio";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>
        <div class="section banner">

            <div class="wrapper">

            </div>

        </div>

        <div class="section articles latest">

            <div class="wrapper">

                <h2>Latest articles</h2>

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