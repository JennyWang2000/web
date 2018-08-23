<?php 
//a session variable set in here because use session variables I can store information and pass it from one page to another
// modify into a little refactoring 
require_once '../theme/head.php';
require_once '../Autoloader.php';

    $attemptedLoginName = $_POST['username'];
    $attemptedPassword = $_POST['password'];

    echo "You tried to login with " . $attemptedLoginName . " and " .
    $attemptedPassword;
    
    $service = new SecurityService($attemptedLoginName, $attemptedPassword);

    $loggedIn = $service->authenticate();

    if ($loggedIn){
        // a function as a object principal properties is a boolean = true
        $_SESSION['principal'] = true;
        include "loginsuccess.php";
    }
    else {
        $_SESSION['principal'] = false;
        include "loginFailed.php";
    }