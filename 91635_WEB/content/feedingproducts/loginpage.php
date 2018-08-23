
    <h3>
        Homeless animal salvation Welcomes You

    </h3>

    <p>Please Login your Admin account<?php

                        if(!isset($_REQUEST['page'])){
                            $page="LOGINadmin";
                        }
                            else {    
                                $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);               
                            }                        
        
                            // offer logon if not logged in...
        
                            if($page=="LOGINadmin" or $page=="adminlogin" or $page=="logout")
                            include ("$page.php");
                            ?>              
                             to access the admin panel ~ </p>

    


