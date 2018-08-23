<?php
class Address {

    private $id;
    private $addresstype;
    private $isdefault;
    private $userID;
    private $street;
    private $city;
    private $state;
    private $postalcode;

    function __construct($a, $b, $c, $d, $e, $f, $g, $h){
        $this->id = $a;
        $this->addresstype = $b;
        $this->isdefault = $c;
        $this->userID = $d;
        $this->street = $e;
        $this->city = $f;
        $this->state = $g;
        $this->postalcode = $h;
        
    }

    /**
     * @return mixed
      */
    public function getId()
    { 
        return $this->id;
    }

    /**
     * @return mixed
      */
    public function getFAddresstype()
    { 
        return $this->addresstype;
    }

    /**
     * @return mixed
      */
    public function getIsdefault()
    { 
        return $this->isdefault;
    }

    /**
     * @return mixed
      */
    public function getUserID()
    { 
        return $this->userID;
    }

    /**
     * @return mixed
      */
    public function getstreet()
    { 
        return $this->street;
    }

    /**
     * @return mixed
      */
    public function getcity()
    { 
        return $this->city;
    }

    /**
     * @return mixed
      */
    public function getstate()
    { 
        return $this->state;
    }
    
    /**
     * @return mixed
      */
    public function getpostalcode()
    { 
        return $this->postalcode;
    }

  
      
}
