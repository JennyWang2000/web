<?php
require_once '../../header.php';
require_once '../../Autoloader.php';

$bs = new UserBusinessService();

$persons = $bs->showAll();

echo "<h1>All users</h1>";

require_once "_displayAllUsers.php";

