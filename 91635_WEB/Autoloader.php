<?php

spl_autoload_register(function($class){

    //get the difference in folders between the location of autoloader and the file that called autoloder.
    $lastdirectories = substr(getcwd(), strlen(__DIR__));
    // getcwd is the long directory where the autoloader, DIR is the directory of the file. If used inside an include, the directory of the included file is returned.So it tells which file calls autoloader.
   // echo "getcwd = : " . getcwd() . "<br>";
   // echo "__DIR__ = : " . __DIR__ . "<br>"; // show me where the file is called from
   // echo "last directories = : " .$lastdirectories . "<br>";

    // COUNT THE NUMBER OF SLASHES (FOLDER DEPTH)
    $numberoflastdirectories = substr_count($lastdirectories, '/');
    //echo "number of directories different : " .$numberoflastdirectories . "<br>";


    // this is the list of possible location that classes are found in this app.
    $directories = ['Admin', 'content/feedingproducts', 'Login', 'theme', 'theme/css', 'theme/js'];

    // look inside each directory for the desired class.
    // looking for it includes the folders, using loop to checking on 0 to the number of the directory differance
    foreach($directories as $d) {
        $currentedirectory = $d;
        for ($x = 0; $x < $numberoflastdirectories; $x++) {
            // to do a up search or up movement of a folder
            $currentedirectory = "../" . $currentedirectory;
        }
        // calculate the right file and when I finally hint done I can include the class
        $classfile = $currentedirectory . '/' .$class . '.php';

        if (is_readable($classfile)){
            if (require $d . '/' . $class . ".php"){
                break;
            }
        }
    }
});