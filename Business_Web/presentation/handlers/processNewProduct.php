<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../header.php';
require_once '../../Autoloader.php';

$id = 0;
$productname = $_GET['productname'];
$productcateid = $_GET['productcateid'];
$productdescription = $_GET['productdescription'];
$productprice = $_GET['productprice'];
$productphoto = $_GET['productphoto'];
$product = new Product($id, $productname, $productcate, $productdescription, $productprice, $productphoto);

// define variables and set to empty values... 
$valid=true;
$uploadOk = 1;

//print_r($product);

// send a new product object to the business service - > database service chain.

$bs = new ProductBusinessService();
$bs->makeNew($product);
echo "inserted item" . $productname . "<br>";

echo "<a href='../views/adminProducts.php'>Return to admin page</a>";