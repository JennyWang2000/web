<?php

    $newpro = preg_replace('/[^a-zA-Z0-9]/', '', ($_POST["proName"]));

    //Put new product category into database
    $newpro_sql="INSERT INTO products (proName) VALUES ('$newpro')";
    $newpro_query=mysqli_query($dbconnect,$newpro_sql);

    header('Location: admin.php?page=addcatsuccess');

?>