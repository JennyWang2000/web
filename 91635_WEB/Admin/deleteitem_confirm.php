<div>

<div class="animalsmain"> 
<h1>Delete an Item - confirm</h1>

<?php
    /* needed to show item name in confirmation messzge */
    $delstock_sql="SELECT * FROM stock WHERE 'stockID'=".$_REQUEST['stockID'];
    $delstock_query=mysqli_query($dbconnect, $delstock_sql);
    $delstock_rs=mysqli_fetch_assoc($delstock_query);

?>

<p>Do you really want to delete <?php  echo $delstock_rs['stockID']; ?> from the database?</p>

<p>
    <a href="admin.php?page=deletestock&stockID=<?php echo $_REQUEST['stockID']?>">Yes, Delete it!</a> |
    <a href="admin.php?page=adminpanel">No, Take me back.</a>
</p>

        </div>
        <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->

        <p>&nbsp;</p>
        <p>&nbsp;</p>
