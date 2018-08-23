<?php
class Product {

    private $id;
    private $name;
    private $cateid;
    private $description;
    private $price;
    private $photo;


    public function __construct($id, $name, $cateid, $description, $price, $photo){
        $this->id = $id;
        $this->name = $name;
        $this->cateid = $cateid;
        $this->description = $description;
        $this->price = $price;
        $this->photo = $photo;

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
    public function getName()
    { 
          return $this->name;
    }

    /**
     * @return mixed
      */
    public function getcateId()
    { 
        return $this->cateid;
    }
  
    /**
     * @return mixed
      */
    public function getDescription()
    { 
          return $this->description;
    }

    public function getPrice()
    { 
          return $this->price;
    }

    public function getphoto()
    { 
          return $this->photo;
    }


    /**
     * #param mixed $id
      */
    public function setId($id)
    { 
        $this->id = $id;
    }

          /**
     * #param mixed $first_name
      */
    public function setName($name)
    { 
        $this->name = $name;
    }

    /**
     * #param mixed $id
      */
    public function setcateId($cateid)
    { 
        $this->cateid = $cateid;
    }  
 
     /**  * #param mixed $last_name
      */
    public function setDescription($description)
    { 
        $this->description = $description;
    }

    public function setPrice($price)
    { 
        $this->price = $price;
    }

    public function setPhoto($photo)
    { 
        $this->photo = $photo;
    }

  
      
}
