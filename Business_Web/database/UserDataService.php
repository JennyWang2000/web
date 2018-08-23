<?php

error_reporting(E_ALL);
ini_set('display_errors',1);

class UserDataService {

    function showAll() {
        // returns an array of persons. Everyone in the database
        $db = new Database();
        //testing
        //echo "testing the db data<br>";
        //print_r($db);
        //echo "<br>I am searching for " . $n . "<br>";
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("SELECT *FROM users");
        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }
  
        $stmt->execute();
        // going to get the result
        $result = $stmt->get_result();

        // CHECK that if the result value is valid
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
            $person_array = array();

            // expected to print out the result
            while ($person = $result->fetch_assoc()){
                // print_r($person);
                // echo"<br>";
                // echo "Person id = " . $person['userID']. "Name = " . $person['FIRSTNAME'] . " Last name = " . $person['LASTNAME'] . "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }

    function findByFirstname($n){
        // returns an array of persons
        $db = new Database();
        //testing
        //echo "testing the db data<br>";
        //print_r($db);
        //echo "<br>I am searching for " . $n . "<br>";
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("SELECT userID, FIRSTNAME, LASTNAME FROM users WHERE FIRSTNAME LIKE ?");
        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }
  
        $like_n = "%". $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        // going to get the result
        $result = $stmt->get_result();

        // CHECK that if the result value is valid
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
            $person_array = array();

            // expected to print out the result
            while ($person = $result->fetch_assoc()){
                // print_r($person);
                // echo"<br>";
                // echo "Person id = " . $person['userID']. "Name = " . $person['FIRSTNAME'] . " Last name = " . $person['LASTNAME'] . "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }

    function findByLastname($n){
        // returns an array of persons
        $db = new Database();
        //testing
        //echo "testing the db data<br>";
        //print_r($db);
        //echo "<br>I am searching for " . $n . "<br>";
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("SELECT userID, FIRSTNAME, LASTNAME FROM users WHERE LASTNAME LIKE ?");
        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }
  
        $like_n = "%". $n . "%";
        $stmt->bind_param("s", $like_n);
        $stmt->execute();
        // going to get the result
        $result = $stmt->get_result();

        // CHECK that if the result value is valid
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
            $person_array = array();

            // expected to print out the result
            while ($person = $result->fetch_assoc()){
                // print_r($person);
                // echo"<br>";
                // echo "Person id = " . $person['userID']. "Name = " . $person['FIRSTNAME'] . " Last name = " . $person['LASTNAME'] . "<br>";
                array_push($person_array, $person);
            }
            return $person_array;
        }
    }
  
    function findByuserID($id){
        //$ID IS THE NUMBER TO SEARCH FOR. RETURNS a person object
        $db = new Database();
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("SELECT * FROM users WHERE userID = ? LIMIT 1");

        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }
        /* bind parameters for markers */
        $stmt->bind_param("s", $id);

        /* execute query */
        $stmt->execute();
        // going to get the result
        $result = $stmt->get_result();

        // CHECK that if the result value is valid
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
            $person_array = array();
            while ($person = $result->fetch_assoc()){
                array_push($person_array, $person);
            }
            // takes the first element in the array and also gives his ID
            $p = new Person($person_array[0]['userID'],$person_array[0]['FIRSTNAME'],$person_array[0]['LASTNAME'],$person_array[0]['username'],$person_array[0]['password']);
            return $p;
        }
    }

    function deleteItem($id){
        //$ID IS THE NUMBER TO delete . RETURNS A true(success) or false (falure)
        $db = new Database();
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("DELETE FROM users WHERE userID = ? LIMIT 1");

        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }
        /* bind parameters for markers */
        $stmt->bind_param("s", $id);

        /* execute query */
        $stmt->execute();
        // check how many rows going to deleted
        if ($stmt->affected_rows > 0){
            return true;
        }
        else {
            return false;
        }
    }

    function updateOne($id, $person){
        //$ID IS THE NUMBER TO UPDATE . RETURNS A true(success) or false (falure). $PERSON IS THE ITEM TO CHANGE
        $db = new Database();
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("UPDATE users SET FIRSTNAME = ?, LASTNAME = ? WHERE userID = ? LIMIT 1");

        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }
        /* bind parameters for markers */
        $fn = $person->getFirst_name();
        $ln = $person->getLast_name();
        $stmt->bind_param("ssi", $fn, $ln, $id);

        /* execute query */
        $stmt->execute();
        // check how many rows going to deleted
        if ($stmt->affected_rows > 0){
            return true;
        }
        else {
            return false;
        }


    }

    function makeNew($person){
        // accepts a $PERSON object. Inserts a new record into the users table.
        $db = new Database();
        $connection = $db->getConnection();
        $stmt =  $connection->prepare("INSERT INTO users (FIRSTNAME, LASTNAME, username, password) VALUES (?,?,?,?)");

        if (!$stmt){
            echo "Something wrong in the binding process, sql error?";
            exit;
        }

        /* bind parameters for markers */
        $fn = $person->getFirst_name();
        $ln = $person->getLast_name();
        $un = $person->getusername();
        $pa = $person->getpassword();

        $stmt->bind_param("ssss", $fn, $ln, $un, $pa);

        /* execute query */
        $stmt->execute();
        // check how many rows going to deleted
        if ($stmt->affected_rows > 0){
            return true;
        }
        else {
            return false;
        }


    }
        
    function findByFirstnameWithAddress($n){
                // returns an array of persons
                $db = new Database();
                //testing
                //echo "testing the db data<br>";
                //print_r($db);
                //echo "<br>I am searching for " . $n . "<br>";
                $connection = $db->getConnection();
                // adapt thep revious method to include the new SQL join statement
                $stmt =  $connection->prepare("SELECT users.userID, ISDEFAULT, FIRSTNAME, LASTNAME, street, city, state, PostalCode
                FROM users
                JOIN Addresses
                ON users.userID = Addresses.userID
                WHERE FIRSTNAME LIKE ?");
                $like_n = "%". $n . "%";
                $stmt->bind_param("s", $like_n);
                $stmt->execute();
                // going to get the result
                $result = $stmt->get_result();
        
                // CHECK that if the result value is valid
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
                    $person_array = array();
        
                    // expected to print out the result
                    while ($person = $result->fetch_assoc()){
                        // print_r($person);
                        // echo"<br>";
                        // echo "Person id = " . $person['userID']. "Name = " . $person['FIRSTNAME'] . " Last name = " . $person['LASTNAME'] . "<br>";
                        array_push($person_array, $person);
                    }
                    return $person_array;
                }

    }

}


    