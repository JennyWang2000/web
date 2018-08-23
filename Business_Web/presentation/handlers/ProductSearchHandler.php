<?php
require_once '../../header.php';
require_once '../../Autoloader.php';

// get the search term from the input form
$searchPhrase = $_GET['name'];

// create an instance of the product businessService
$bs = new ProductBusinessService();

// the find method returns an array of person
$products = $bs->findByProductName($searchPhrase);
print_r($products);

?>
<h2>Search Results</h2>
<p>Here is what we found</p>

<?php
if ($products) {
    //Got some results
    include ('../views/_displayProductsResultsCard.php');
}
else {
    echo "Can not found it in here like that<br>";
}

?>
