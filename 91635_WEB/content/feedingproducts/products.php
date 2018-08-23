<?php

    if(!isset($_REQUEST['productsID']))
    {
        header('Location:feeding_products.php');
    }

    $stock_sql="SELECT stock.stockID, stock.name, stock.price, products.proName FROM stock JOIN products ON (stock.productsID=products.productsID) WHERE stock.productsID=".$_REQUEST['productsID']." ORDER BY stock.name ASC";
    $stock_query=mysqli_query($dbconnect,$stock_sql);
    $stock_rs=mysqli_fetch_assoc($stock_query);


?>

                    <h3>
                        <?php 
                            echo $stock_rs['proName'];
                        ?>
                    </h3>

                    <table class="results">

                    <?php

                    do{
                         ?>
                        
                        <tr class="results">

                            <td class="results">
                                <a href="feeding_products.php?page=items&stockID=<?php echo $stock_rs['stockID'];?>">
                                    <?php echo $stock_rs['name'];?>
                                </a>
                            </td>

                            <td class="results">
                                <b>$<?php echo $stock_rs ['price'];?></b>
                            </td>

                        </tr>
                         <?php
                    }

                    while ($stock_rs=mysqli_fetch_assoc($stock_query))

                    ?>

                    </table>
                    <p>&nbsp;</p>       

