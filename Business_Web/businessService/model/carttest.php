<?php
require_once '../../Autoloader.php';

$c = new Cart(1);
$productBS = new ProductBusinessService();

$prod1 = $productBS->findById(1);
$prod2 = $productBS->findById(15);
$prod3 = $productBS->findById(5);

echo "<pre>";
print_r($prod1);
echo "</pre>";

echo "<pre>";
print_r($prod2);
echo "</pre>";

echo "<pre>";
print_r($prod3);
echo "</pre>";

echo "<pre>";
print_r($c);
echo "</pre>";

$c -> updatenum(11,13);
echo "<pre>";
print_r($c);
echo "</pre>";