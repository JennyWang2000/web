<hr></hr>
<div>
    <h3>Categories</h3>

    <form action="admin.php?page=addcategory" method="post">
        <b>Add: </b><input name="proName" value=""/>
        <input type="submit" value="Add Category"/>
    </form>   

    <br />

    <form action="admin.php?page=editcategoryproduct" method="post">
        <select name="oldprocat">

            <option value="">
                Choose...
            </option>

            <?php
                $pro_sql="SELECT * FROM products";
                $pro_query=mysqli_query($dbconnect,$pro_sql);
                $pro_rs=mysqli_fetch_assoc($pro_query);

                do{
                    //value sent to query that edits the category products
                    echo "<option value='";
                    echo $pro_rs['proName'];
                    echo "'>";

                    //what the user sees in the drop down menu
                    echo $pro_rs['proName'];
                    echo "</option>";

                }

                while($pro_rs=mysqli_fetch_assoc($pro_query))

            ?>
        </select>
        &nbsp; &nbsp; Change to... <input name="newpro" value=""/>
        <input type="submit" value="Update Category"/>

    </form>

    <br />

    <form action="admin.php?page=deletecategory" method="post">
        <b>Delete: </b><select name="delpro">

            <option value="">
                Choose...
            </option>

            <?php
                $delpro_sql="SELECT * FROM products";
                $delpro_query=mysqli_query($dbconnect,$delpro_sql);
                $delpro_rs=mysqli_fetch_assoc($delpro_query);

                do{
                    //value sent to query that edits the category products
                    echo "<option value='";
                    echo $delpro_rs['productsID'];
                    echo "'>";

                    //what the user sees in the drop down menu
                    echo $delpro_rs['proName'];
                    echo "</option>";

                }

                while($delpro_rs=mysqli_fetch_assoc($delpro_query))

            ?>
    </select>
    <input type="submit" value="Delete Category"/>
    </form>

</div>

<hr></hr>
<div>

        <h3>Items</h3>
       
        <p>
            <a href="admin.php?page=addstock">Add an Item</a><br />
            <a href="admin.php?page=showall">Edit / Delete an Item</a><br />

        </p>

</div>

<hr></hr>

<div>

    <p>
        <h3><a href="admin.php?page=logout">Logout</a></h3>
    </p>

</div>

