<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

class ProductDataService {

    function findByProductName($n){
        // $n is the search string. returns an array of products
        $db = new Database();
        //testing
        //echo "testing the db data<br>";
        //print_r($db);
        //echo "<br>I am searching for " . $n . "<br>";
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("SELECT stockID, name, productsID, price, description, photo FROM stock WHERE name LIKE ?");

        // CHECK that if the result value is valid
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit;
        }

        $like_n = "%". $n . "%";
        $stmt->bind_param("s", $like_n);

        /* execute query */
        $stmt->execute();

        // going to get the result
        $result = $stmt->get_result();

        if (!$result) {
            echo "assume the SQL statement has an error";
            return null;
            exit;
        }

        // if result , it should have some num_rows, = 0 that means nothing came back, no results found so return null nothing
        if ($result->num_rows == 0){
            return null;
        }
        else {
           // echo "I found " . $result->num_rows . " results!<br>";
            // create a new array in order to bulid a list of things
            $product_array = array();

            // expected to print out the result
            while ($product = $result->fetch_assoc()){
                // print_r($person);
                // echo"<br>";
                // echo "Person id = " . $person['userID']. "Name = " . $person['FIRSTNAME'] . " Last name = " . $person['LASTNAME'] . "<br>";
                array_push($product_array, $product);
            }
            return $product_array;
        }
    }

    function deleteItem($id){
        // id is the number to delete returns atrue (success) or false (failure).
        $db = new Database();
        //testing
        //echo "testing the db data<br>";
        //print_r($db);
        //echo "<br>I am searching for " . $n . "<br>";
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("DELETE FROM stock WHERE stockID = ? LIMIT 1");

        // CHECK that if the result value is valid
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit;
        }

        //$like_n = "%". $n . "%";
        $stmt->bind_param("s", $id);

        /* execute query */
        $stmt->execute();

        // get results
        if ($stmt->affected_rows > 0){
            return true;
        }
        else {
            return false;
        }

    }

    function findById($id){
        // $id is the number to search for. Returns a single person array
        $db = new Database();
        //testing
        //echo "testing the db data<br>";
        //print_r($db);
        //echo "<br>I am searching for " . $n . "<br>";
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("SELECT * FROM stock WHERE stockID = ? LIMIT 1");

        // CHECK that if the result value is valid
        if (!$stmt) {
            echo "Something wrong in the binding process. sql error?";
            exit;
        }

        //$like_n = "%". $n . "%";
        $stmt->bind_param("s", $id);

        /* execute query */
        $stmt->execute();

        // going to get the result
        $result = $stmt->get_result();        

        if (!$result) {
            echo "assume the SQL statement has an error";
            return null;
            exit;
        }

        // if result , it should have some num_rows, = 0 that means nothing came back, no results found so return null nothing
        if ($result->num_rows == 0){
            return null;
        }
        else {
            // create a new array in order to bulid a list of things
            $products_array = array();

            // expected to print out the result
            // when the database is being queried, I run a while loop
            while ($p = $result->fetch_assoc()){
                //to see if I can get all of the stocks there should only be one stock if I am searching for just a single stockID number
                array_push($products_array, $p);
                // when it returns the products array it's returning me an array of 1 stock 
            }
            //return $product_array; I do not whant this So I put it in comment
            // defind an object called product, and it is going to pull out each item
            // 0 is the first stock in the array
            $p = new Product($products_array[0]['stockID'], $products_array[0]['name'], $products_array[0]['productsID'], $products_array[0]['description'], $products_array[0]['price'], $products_array[0]['photo']);
        
            return $p;
        }
    }
}