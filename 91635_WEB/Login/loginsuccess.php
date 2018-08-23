<?php
    include_once '../theme/head.php';
    include_once '../theme/nav.php';
    require_once '../Autoloader.php';
    // in a new require page, to check to see if I been logged in correctly or not
    require_once 'securePage.php';
   
    echo "You are logged in.";
    echo "This is a secure page.";

    require_once '../theme/footer.php';
