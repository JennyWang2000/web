<?php

$name="";
$price=0;
$productsID=1;
$description="";
$photo="noimage.png";

$NameErr = $PriceErr = $PhotoErr = $DesErr = "";

// define variables and set to empty values... 
$valid=true;
$uploadOk = 1;

// Code below excutes when the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST"){

    // samitise all variables
    $name = test_input(mysqli_real_escape_string($dbconnect,$_POST["name"]));
    $price = test_input($_POST["price"]);
    $productsID = preg_replace('/[^0-9.]/','',$_POST["productsID"]);
    $description = test_input(mysqli_real_escape_string($dbconnect,$_POST["description"]));
    

    // Error checking... 
    if (empty ($name)) {
        $NameErr = "Item name is required";
        $valid=false;
    }

    $price=preg_replace('/[^0-9.]-/','',$_POST['price']);
    if ($price<=0) {
        $PriceErr = "Enter a number greater than 0";
        $valid=false;
    }

    if (empty ($description)) {
        $DesErr = "Please provide a description";
        $valid=false;
    }
    
    // Check Image..
    if ($_FILES['fileToUpload']['name']!="" ) {

    // Shifts images from temporary directory to target directory

    // use unique-id so each uploaded files is unique
    $target_file = uniqid()."-". basename($_FILES["fileToUpload"]['name']); 
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //Allow .jpg, .png or gif only
    if($imageFileType != "jpg" && $imageFileTypr != "png" && $imageFileType != "gif") {
        $PhotoErr= "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $uploadOk = 0;
        $valid=false;

    }

    //Check file size
    if($_FILES["fileToUpload"]["size"] > 500000) {
        $PhotoErr= "Sorry, your file is too large.";
        $uploadOk = 0;
        $valid=false;
        
    }
    }

    //If everything is OK  - show ' success message and update database
    if($valid) {
        header('Location: admin.php?page=addstock_success');
    }
    
    //Put entry into database
    if ($_FILES['fileToUpload']['name']!="")

        $addstock_sql="INSERT INTO stock (name, productsID, price, photo, description) VALUES (
            '$name',
            '$productsID',
            '$price',
            '".$target_file."',
            '$description'
            )";

    else
        $addstock_sql="INSERT INTO stock (name,  productsID, price, photo, description) VALUES (
            '$name',
            '$productsID',
            '$price',
            '$photo',
            '$description'
            )";

    // Code below runs query and inputs data into database
    $addstock_query=mysqli_query($dbconnect,$addstock_sql);

    if ($uploadOk==1) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],PRODUCTSIMAGE_DIRECTIORY.'/'.$target_file);

    }

}
?>

<div>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]."?page=addstock");?>" enctype="multipart/form-data">
    <h1>Add Item</h1>
    <p>
        <b>Item Name:</b>
        <input type="text" name="name" value="<?php echo $name;?>" size="100"/>
        &nbsp;&nbsp; <span class="error"><?php echo $NameErr;?></span>
    </p>

    <p>
        <b>Price:$</b>
        <input type="text" name="price" value="<?php echo $price;?>" size="5" />
        &nbsp;&nbsp; <span class="error"><?php echo $PriceErr;?></span>

    </p>

    <p>
        <b>Products</b>
        <select name="productsID">

        <?php

            $pro_sql="SELECT * FROM products"; //sets up query
            $pro_query=mysqli_query($dbconnect,$pro_sql); // runs query
            $pro_rs=mysqli_fetch_assoc($pro_query);// organises results

            do {
                echo '<option value="'.$pro_rs['productsID'].'"';
                echo ">".$pro_rs['proName']."</option>";
            }

            while ($pro_rs=mysqli_fetch_assoc($pro_query))

        ?>
        </select>
    </p>

    <p>
        <b>Photo</b><input type="file" name="fileToUpload" id="fileToUpload" value="" />
        &nbsp;&nbsp; <span class="error"><?php echo $PhotoErr;?></span>
    </p>

    <p>
        <b>Description</b>&nbsp;&nbsp; <span class="error"><?php echo $DesErr;?></span>

    </p>
    <p>
        <textarea type="text" name="description" cols="60" rows="7" ><?php echo $description;?></textarea>
    </p>

    <input type="submit" name="submit" value="Add Item" />
</form>

<br />
<p>
    <a href="admin.php?page=adminpanel">Back to Admin Panel</a> |

<a href="admin.php?page=logout">Logout</a> 

</p>

    </div><!-- end of Main Container -->


