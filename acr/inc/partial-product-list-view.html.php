<?php

/* This file displays a single product in a list view. It needs to receive
 * the following product details (as elements of an array named $product): 
 *     - sku:  Product ID, used to create the link to the article Details page
 *     - img:  The web address of the main image for the product
 *     - name: The name of the 
 */

?><li>
        <a href="<?php echo BASE_URL; ?>services/<?php echo $product["sku"]; ?>/">
            <img src="<?php echo BASE_URL . $product["img"]; ?>" alt="">
            <p><?php echo $product["name"]; ?></p>
            <p>$<?php echo $product["price"]; ?></p>
        </a>
    </li>