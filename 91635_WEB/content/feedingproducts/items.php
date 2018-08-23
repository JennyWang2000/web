<?php

$stock_sql="SELECT stock.*, products.proName FROM stock JOIN products 
ON (stock.productsID=products.productsID) WHERE stock.stockID=".
$_REQUEST['stockID'];

$stock_query=mysqli_query($dbconnect, $stock_sql);
$stock_rs=mysqli_fetch_assoc($stock_query);

?>

<!-- item information displayed blow -->
<div class="itemsdescribtion">

<h3>
    <?php echo $stock_rs['name']; ?>
    ($ <?php echo $stock_rs['price'];?> )
</h3>

<div class="photo">
        <img src="images/products/<?php echo $stock_rs['photo'];?>"/>
</div>
<h4>Description: </h4>
<p><?php echo $stock_rs['description']; ?></p>

</div>
<p>&nbsp;</p>       
<hr></hr>
