<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// autoloager is needed because I am calling a new item from a class in may model folder, now it is in my business service folder
require_once '../../Autoloader.php';

// get the search term from the input form
$searchPhrase = $_GET['name'];

// create an instance of the product businessService
$bs = new UserBusinessService();

// the find method returns an array of person
// as I have the results, I am putting a array together of persons and then display them 
$persons = $bs->findByFirstnameWithAddress($searchPhrase);
//print_r($products);

?>
<h2>Search Results</h2>
<p>Here is what we found</p>

<?php
if ($persons) {
    //Got some results
    include ('../views/_displayPeopleResults.php');
}
else {
    echo "Nobody found here like that<br>";
}

?>