<?php
require_once '../../header.php';
require_once '../../Autoloader.php';

if (isset($_GET)){
$firstname = $_GET['firstname'];
$lastname = $_GET['lastname'];
$username = $_GET['username'];
$password = $_GET['password'];

}
else{
    echo "Nothing submitted by the form. Go back and try another page<br>";
}

// send a new user object to the business service - > database service chain.

$bs = new UserBusinessService();
$user = new Person(0, $firstname, $lastname, $username, $password);

if($bs->makeNew($user)){
    echo "Item inserted.<br>";
}
else {
    echo "Nothing inserted.<br>";
}

echo "<a href='/'>Return to main page</a>";