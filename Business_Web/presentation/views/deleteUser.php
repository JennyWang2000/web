<?php
require_once '../../Autoloader.php';
require_once '../../header.php';

$id = $_GET['id'];

$bs = new UserBusinessService();
$success = $bs->deleteItem($id);

if ($success) {
    echo "Item was deleted<br>";
}
else {
    echo "Nothing deleted<br>";
}