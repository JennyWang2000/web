<?php

    $stock_sql="SELECT * from stock ORDER BY 'name' ASC ";
    $stock_query=mysqli_query($dbconnect, $stock_sql);
    $stock_rs=mysqli_fetch_assoc($stock_query);

?>
<div>

<div class="animalsmain"> 

<h3>
    Edit / Delete an Item
</h3>

<table class="results">

<?php do { ?>
    <tr class="results">
        <td class="results"><a href="../feeding_products.php?page=items&stockID=<?php echo $stock_rs['stockID']; ?>"><?php echo $stock_rs['name']; ?></a></td>
        <td class="results"><b>$ <?php echo $stock_rs['price']; ?></b></td>
        <td class="results"><a href="admin.php?page=editstock&stockID=<?php echo $stock_rs['stockID']; ?>">Edit</a></td>
        <td class="results"><a href="admin.php?page=deleteitem_confirm&stockID=<?php echo $stock_rs['stockID']; ?>">Delete</a></td>
    </tr>

<?php
    }

    while ($stock_rs=mysqli_fetch_assoc($stock_query))

?>
</table>

<p>
    <a href="admin.php?page=adminpanel">Back to Admin Panel</a> |

    <a href="admin.php?page=logout">Logout</a> 

</p>


        </div>
        <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->

        <p>&nbsp;</p>
        <p>&nbsp;</p>

