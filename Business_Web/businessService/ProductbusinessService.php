<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once '../../Autoloader.php';

class ProductBusinessService {

    function getAllProducts(){
        // purpose to do the return statement 
        $products = Array();

        $dbService = new ProductDataService();
        $products = $dbService->getAllProducts();

        return $products;

    }

    function findByProductName($n){
        // purpose to do the return statement 
        $products = Array();

        $dbService = new ProductDataService();
        $products = $dbService->findByProductName($n);

        return $products;

    }

    function findById($id){
        //$ID IS THE NUMBER TO SEARCH FOR. RETURNS A SINGLE PERSON ARRAY
        $dbService = new ProductDataService();
        $products = $dbService->findById($id);
        return $products;

    }



    function makeNew($product) {
        $dbService = new ProductDataService();
        return $dbService->makeNew($product);

    }

}