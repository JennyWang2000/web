<?php
class Person {
    private $id;
    private $first_name;
    private $last_name;
    private $username;
    private $password;

    function __construct($id, $first_name, $last_name, $username, $password){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->username = $username;
        $this->password = $password;
    }

    /**
     * @return mixed
      */
    public function getId()
    { 
        return $this->id;
    }

    /**
     * #return mixed
      */
    public function getFirst_name()
    { 
          return $this->first_name;
    }

    /**
     * #return mixed
      */
    public function getLast_name()
    { 
          return $this->last_name;
    }

    public function getusername()
    { 
        return $this->username;
    }

    public function getpassword()
    { 
        return $this->password;
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
    public function setFirst_name($first_name)
    { 
        $this->first_name = $first_name;
    }
 
     /**  * #param mixed $last_name
      */
    public function setLast_name($last_name)
    { 
        $this->last_name = $last_name;
      }

    public function setusername($username)
    { 
        $this->username = $username;
    }
      
    public function setpassword($password)
    { 
        $this->password = $password;
    }
}
