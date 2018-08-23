<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../Autoloader.php';

class UserBusinessService {

    function showAll(){
        // purpose to do the return statement 
        $persons = Array();

        $dbService = new UserDataService();
        $persons = $dbService->showAll();

        return $persons;

    }

    function findByFirstname($n){
        // purpose to do the return statement 
        $persons = Array();

        $dbService = new UserDataService();
        $persons = $dbService->findByFirstname($n);

        return $persons;

    }

    function findByLastname($n){
        $persons = Array();

        $dbService = new UserDataService();
        $persons = $dbService->findByLastname($n);

        return $persons;

    }

    function findByuserID($id){
        //$ID IS THE NUMBER TO SEARCH FOR. RETURNS A SINGLE PERSON ARRAY
        $dbService = new UserDataService();
        $persons = $dbService->findByuserID($id);

        return $persons;

    }

    function deleteItem($id){
        //$ID IS THE NUMBER TO delete . RETURNS A true(success) or false (falure)
        $dbService = new UserDataService();
        return $dbService->deleteItem($id);
    }

    function updateOne($id, $person){
        //$ID IS THE NUMBER TO UPDATE . RETURNS A true(success) or false (falure). $PERSON IS THE ITEM TO CHANGE
        $dbService = new UserDataService();
        return $dbService->updateOne($id, $person);
    }

    function makeNew($person) {
        $dbService = new UserDataService();
        return $dbService->makeNew($person);

    }

    function findByFirstnameWithAddress($n){
        //$n is the search string. Return an array of persons

        $persons = Array();

        $dbService = new UserDataService();
        $persons = $dbService->findByFirstnameWithAddress($n);

        return $persons;

    }


}