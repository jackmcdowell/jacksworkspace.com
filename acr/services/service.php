<?php 

	require_once("../inc/config.php");
	require_once(ROOT_PATH . "inc/products.php");
	$products = get_products_all();

// if an ID is specified in the query string, use it
if (isset($_GET["id"])) {
	$product_id = $_GET["id"];

	// if there is a real product that corresponds to the ID
	// specified in the query string, use that for $product
	if (isset($products[$product_id])) {
		$product = $products[$product_id];
	}
}

// a $product will only be set if an ID is specified in the query
// string and it corresponds to a real product. If no product is
// set, then redirect to the services listing page; otherwise, continue
// on and display the services Details page for that $product
if (!isset($product)) {
	header("Location: " . BASE_URL . "services/");
	exit();
}

$section = "services";
$pageTitle = $product["name"];
include(ROOT_PATH . "inc/header.php"); ?>

		<div class="section page">

			<div class="wrapper">

				<div class="breadcrumb"><a href="<?php echo BASE_URL; ?>services/">Services</a> &gt; <?php echo $product["name"]; ?></div>
				<h1>
				<?php echo $product["name"]; ?>
				</h1>
				
				<div class="service-picture">
				
					<span>
						<img src="<?php echo BASE_URL . $product["img"]; ?>" alt="<?php echo $product["name"]; ?>">
						<div class="service-text">
						<p ><?php echo $product["caption"]; ?></p>
					
						<div >	
							<p align="left"><?php echo $product["text"]; ?></p>
							
					</span>		</div>
							</div>
							</div>
							</div></div>

				
			

<?php include(ROOT_PATH . "inc/footer.php"); ?>