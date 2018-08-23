<?php
class SecurityService {

    private $password ="";
    private $username ="";

    function __construct($username,$password){
        $this->password = $password;
        $this->username = $username;
    }

    public function authenticate(){
        if ($this->password == "" || $this->username==""){
            return false;
        }
        if ($this->password == "secretpw" && $this->username=="shad"){
            return true;
        }
        else{
            return false;
        }

    }
}