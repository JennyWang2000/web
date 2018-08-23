<?php
class Cart {
    private $userID; // the owner of the cart
    private $stocks = array(); // associative array of items in the cart(pro_id=>qty)
    private $subtotals = array(); // associative array (pro_id=>cost,pro_id=>cost,pro_id=>cost)
    private $total_price; // float. Total cost of all items in the cart.

    function __construct($userID) {
        $this->userID = $userID;
        $this->items = array();
        $this->subtotals = array();
        $this->total_price = 0;
    }

    function addStock($prod_id) {

        //assume that the car is empty.
        // add the items array to itself plus a new array which I have created is one pair of elements
        if (array_key_exists($prod_id, $this->items) ){
            //items is already in the cart. Add 1 
            $this->stocks[$prod_id] += 1;
        }
        else{
        //2.item not in cart yet. Set its qty to 1
        $this->stocks = $this->stocks + array($prod_id => 1);
        }
    }

    function updateNumpro($prod_id, $newnumpro) {
        if (array_key_exists($prod_id, $this->items) ){
            //items is already in the cart. Add 1 
            $this->stocks[$prod_id] += $newnumpro;
        }
        else{
        //2.item not in cart yet. Set its qty to newnumpro
        $this->stocks = $this->stocks + array($prod_id => $newnumpro);
        }
    }

    function calcTotal() {
        // calculate the subtotal for each product in the cart
        // calculate the total for the entire cart.
        $productBS = new ProductBusinessService();
        //create an array to hold the subtotals
        $subtotals_array = array();
        $this->total_price = 0;

        foreach($this->items as $item => $num){
            $product = $productBS->findByproductsID($item);
            $product_subtotal = $product->getPrice() * $num;
            $subtotals_array = $subtotals_array + array($item => $product_subtotal);
            $this->total_price = $this->total_price + $product_subtotal;
            ;

        }

        $this->subtotals = $subtotals_array;

    }

    public function getUserID()
    { 
        return $this->userID;
    }

    public function getStocks()
    { 
        return $this->stocks;
    }

    public function getSubtotals()
    { 
        return $this->subtotals;
    }

    public function getTotal_price()
    { 
        return $this->total_price;
    }

    public function setUserID()
    { 
      $this->userID = $userID;
    }
    public function setStocks()
    { 
      $this->stocks = $stocks;
    }
    public function setSubtotals()
    { 
      $this->subtotals = $subtotals;
    }
    public function setTotal_price()
    { 
      $this->total_price = $total_price;
    }

}