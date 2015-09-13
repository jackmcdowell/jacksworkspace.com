<?php

//get rid of this code before we put it in production
ini_set('display_errors', 'On');

try {
//    $db = new PDO('mysql:host=localhost;dbname=sakila-schema.sql', 'root');
    $db = new PDO('mysql:host=localhost;dbname=jackmc83_sakila', 'jackmc83_sakila', '41634163');
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  
} catch(Exception $e) {
  echo $e->getMessage();
  die();
}

?>