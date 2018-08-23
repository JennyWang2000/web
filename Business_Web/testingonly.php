<?php

require_once 'database/UserDataService.php';

$u = new UserDataService();

echo "<pre>" . print_r( $u->findByFirstname("K"), TRUE) . "</pre>";
//echo json_encode($u->findByFirstname("a"));

echo "<pre>" . print_r( $u->findByFirstnameWithAddress("a"), TRUE) . "</pre>";

echo "<pre>" . print_r( $u->findByLastname("a"), TRUE) . "</pre>";

echo "<pre>" . print_r( $u->findByuserID("1"), TRUE) . "</pre>";


if ($u->deleteItem(5)){
    echo "Item 5 deleted <br>";
}else{
    echo "Failed to delete item 5";
}
echo "<hr>";

$newguy = new Person(3,"Karry", "Harry");
echo "<pre>" . print_r( $u->findByuserID(1), TRUE) . "</pre>";

$u->updateOne(1, $newguy);
echo "<pre>" . print_r( $u->findByuserID(1), TRUE) . "</pre>";
