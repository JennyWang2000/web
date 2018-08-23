<?php

    //Edit Categoryproduct
    $oldpro = preg_replace('/[^a-zA-Z0-9 ]/', '', $_POST["oldprocat"]);
    $newpro = preg_replace('/[^a-zA-Z0-9 ]/', '', $_POST["newpro"]);
    header('Location:admin.php?page=editcatsuccess');

    $editpro_sql="UPDATE products SET `proName`='$newpro' WHERE `proName`='$oldpro'";
    $editpro_query=mysqli_query($dbconnect,$editpro_sql);

?>
    