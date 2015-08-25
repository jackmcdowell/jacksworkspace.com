<?php

/*
 * Returns the four most recent products, using the order of the elements in the array
 * @return   array           a list of the last four products in the array;
                             the most recent product is the last one in the array
 */
function get_products_recent() {
    $recent = array();
    $all = get_products_all();

    $total_products = count($all);
    $position = 0;
    
    foreach($all as $product) {
        $position = $position + 1;
        if ($total_products - $position < 4) {
            $recent[] = $product;
        }
    }
    return $recent;
}

/*
 * Loops through all the products, looking for a search term in the product names
 * @param    string    $s    the search term
 * @return   array           a list of the products that contain the search term in their name
 */
function get_products_search($s) {
    $results = array();
    $all = get_products_all();

    foreach($all as $product) {
        if (stripos($product["name"],$s) !== false) {
            $results[] = $product;
        }
    }
    return $results;
}

/*
 * Counts the total number of products
 * @return   int             the total number of products
 */
function get_products_count() {
    return count(get_products_all());
}

/*
 * Returns a specified subset of products, based on the values received,
 * using the order of the elements in the array .
 * @param    int             the position of the first product in the requested subset 
 * @param    int             the position of the last product in the requested subset 
 * @return   array           the list of products that correspond to the start and end positions
 */
function get_products_subset($positionStart, $positionEnd) {
    $subset = array();
    $all = get_products_all();

    $position = 0;
    foreach($all as $product) {
        $position += 1;
        if ($position >= $positionStart && $position <= $positionEnd) {
            $subset[] = $product;
        }
    }
    return $subset;
}

/*
 * Returns the full list of products. This function contains the full list of products,
 * and the other model functions first call this function.
 * @return   array           the full list of products
 */
function get_products_all() {
    $products = array();
    $products[101] = array(
        "name" => "Oil Change",
        "img" => "img/images/oilchange.jpg",
        "caption" => "Oil Change",
        "text" => "We offer a great oil change service",
        "price" => 199
     );
    $products[102] = array(
        "name" => "Oil Change",
        "img" => "img/images/oilchange.jpg",
        "caption" => "Oil Change",
        "text" => "We offer a great oil change service",
        "price" => 199
     );
    $products[103] = array(
        "name" => "Oil Change",
        "img" => "img/images/oilchange.jpg",
        "caption" => "Oil Change",
        "text" => "We offer a great oil change service",
        "price" => 199
     );
    $products[104] = array(
        "name" => "Oil Change",
        "img" => "img/images/oilchange.jpg",
        "caption" => "Oil Change",
        "text" => "We offer a great oil change service",
        "price" => 199
     );


    // automated duplication to copy the product_id/sku from the array key
    // and duplicate it into the product details inside the array
    foreach ($products as $product_id => $product) {
        $products[$product_id]["sku"] = $product_id;
    }

    return $products;
}

?>