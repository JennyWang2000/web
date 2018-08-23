        <?php
        $pro_sql="SELECT * FROM products"; //sets up query
        $pro_query=mysqli_query($dbconnect,$pro_sql); // runs query
        $pro_rs=mysqli_fetch_assoc($pro_query);// organises results

        // Loop to create dynamic product link, Column heading from table is in square brackets (eg:'name')

        do {?>

            <a href="feeding_products.php?page=products&productsID=<?php echo $pro_rs['productsID']
            
            ?>"><?php echo $pro_rs['proName'];?></a>  | 

        <?php

        }

        while($pro_rs=mysqli_fetch_assoc($pro_query))



        ?>

        <hr>
        <?php
         if(isset($_REQUEST['page'])){
            // prevents users from navigating through file system
            $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);
            include ("../$page.php");

        }
          
            
?>


    </div><!-- end of Main Container -->

<p>&nbsp;</p><p>&nbsp;</p>
</div><!-- end of Main Container -->

