<?php

include_once '../theme/head.php';
// not been set || does exist || not right 
if (isset($_SESSION['principal']) == false || $_SESSION['principal'] == null || $_SESSION['principal'] == false) {
    // redirect the person
    header("Location: login.html");
}