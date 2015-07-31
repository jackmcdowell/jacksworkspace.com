<?php

//get rid of this code before we put it in production
ini_set('display_errors', 'On');

try {
//    $db = new PDO('mysql:host=localhost;dbname=sakila', 'root');
    $db = new PDO('mysql:host=localhost;dbname=jackxxxx_sakila', 'jackxxxx_sakila', 'xxxxxxxx');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(Exception $e) {
  echo $e->getMessage();
  die();
}

?>