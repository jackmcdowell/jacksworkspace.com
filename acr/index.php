<?php 

require_once("inc/config.php");
include(ROOT_PATH . "inc/products.php");
$recent = get_products_recent();

$pageTitle = "ACR Auto repair";
$section = "home";
include(ROOT_PATH . 'inc/header.php'); ?>

                <h1>ACR Automotive</h1>

        <div class="section banner">

        </div>

        <div class="section services latest">

            <div class="wrapper">
<p>At ACR Automotive we offer a wide variety of services and repairs. With our experience, we are prepared to diagnose and fix your problem.
<br>
We encourage you to stop by regularly so that we can prevent problems before they happen. By being proactive with your maintenance, instead of reactive with repairs, when something goes wrong, we can save you money and stress.
</p>
<ul>
<li>Full Service Transmission Repair</li>
<li>Electronic Diagnosis & Tuneup</li>
<li>Complete Brake Service</li>
<li>Fuel Injection</li>
<li>Air Conditioning</li>
<li>18 Month / Unlimited Mileage Warranty</li>
</ul>
                <h2>Services</h2>

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