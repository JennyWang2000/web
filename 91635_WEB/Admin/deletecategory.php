<?php

    $delproID = preg_replace('/[^0-9]/', '', $_POST["delpro"]);

    $delpro_sql="SELECT * FROM products WHERE productsID=".$delproID;
    $delpro_query=mysqli_query($dbconnect,$delpro_sql);
    $delpro_rs=mysqli_fetch_assoc($delpro_query);

    // check if category has items in it
    $check_sql="SELECT * FROM stock WHERE productsID=$delproID";
    $check_query=mysqli_query($dbconnect,$check_sql);
    $count=mysqli_num_rows($check_query);

    if ($count>0) {?>

    <div class="warning"><p>Warning there are <?php echo $count; ?>
    items in the <?php echo $delpro_rs['proName'];?> category. If you delete this category, those items will be removed from the database.</div>
    <?php

    }
?>
<p> 
    <a href="admin.php?page=deletecategoryconfirm&productsID=<?php echo $delpro_rs['productsID']?>">Yes, delete it!</a> \ 
    <a href="admin.php?page=adminpanel">No, go back.</a>

 Do you really want to delete category #<?php echo $delproID ?> ? ie: the <?php echo $delpro_rs['proName'];?></p>