<?php

    $delimage_sql="SELECT * FROM stock WHERE productsID=".$_REQUEST['productsID'];
    $delimage_query=mysqli_query($dbconnect,$delimage_sql);
    $delimage_rs=mysqli_fetch_assoc($delimage_query);
    $count=mysqli_num_rows($delimage_query);

    //remove unwanted images 
    if ($count>0) 
        {
            do{
                if ($delimage_rs['photo']!='noimage.png' and $delimage_rs['photo']!='')
                /* deletes image */
                unlink(PRODUCTSIMAGE_DIRECTIORY."/".$delimage_rs['photo']);
            }

            while ($delimage_rs=mysqli_fetch_assoc($delimage_query));
        

            // delete unwanted items
            $delpro_sql="DELETE FROM stock WHERE productsID=".$_REQUEST['productsID'];
            $delpro_query=mysqli_query($dbconnect,$delpro_sql);

        }
   
        
    // delete unwanted category products
    $delpro_sql="DELETE FROM products WHERE productsID=".$_REQUEST['productsID'];
    $delpro_query=mysqli_query($dbconnect,$delpro_sql);

    header('Location: admin.php?page=deletecatsuccess');

?>
<p> 
    <a href="admin.php?page=deletecategoryconfirm&productsID=<?php echo $delpro_rs['productsID']?>">Yes, delete it!</a> \ 
    <a href="admin.php?page=adminpanel">No, go back.</a>

 Do you really want to delete category #<?php echo $delproID ?> ? ie: the <?php echo $delpro_rs['proName'];?></p>