<?php
require_once '../../header.php';
require_once '../../Autoloader.php';

$photo="noimage.png";

$bs = new ProductBusinessService();
$productd = $bs->getAllProducts();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $productsID = preg_replace('/[^0-9.]/','',$_POST["productsID"]);
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

    if ($uploadOk==1) {
        move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],PRODUCTSIMAGE_DIRECTIORY.'/'.$target_file);

    }

}
?>

<head>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ahsw.css">

    <!-- Social Media icon font from font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="../js/lightbox.js"></script>

</head>
<div class="centerHalf">
<h1>Create a new product:</h1>

<form enctype="multipart/form-data" method="post" class="inputForm" action="../handlers/processNewProduct.php">

    <div class="form-group">
        <label for="productname">Product name</label>
        <input name="productname" type="text" maxlength="100" class="form-control" />
    </div>

    <div class="form-group">
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
    </div>



    <div class="form-group">
        <label for="productdescription">Description</label>
        <textarea name="productdescription" rows="4" cols="45" class="form-control"></textarea>
    </div>

    <div class="form-group">
        <label for="productprice">Price</label>
        <input name="productprice" type="text" class="form-control" placeholder="productprice" />
    </div>

    <div class="form-group">
        <label for="password">Photo: </label>
        <?php
        // shows image in database
        echo "<img src=".PRODUCTSIMAGE_DIRECTIORY."/".$editstock_rs['photo'].
        ">";
        ?>
        <input type="file" name="fileToUpload" id="fileToUpload" value="" />    
    </div>

        <input type="submit" name="login" value="Submit Changes" class="btn btn-primary btn-block" />

</form>
</div>