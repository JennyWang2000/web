<?php
//expects an arrray of $person. Display the results in a table
// $person array
// item = 0, counter has to be less than the num of item in the user's array
?>
<head>
    <link rel="stylesheet"  href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/ahsw.css">

    <!-- Social Media icon font from font awesome -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha256-3edrmyuQ0w65f8gfBsqowzjJe2iM6n0nKciPUp8y+7E=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/lightbox.js"></script>


</head>
<body>

</body>
<div class="card_group">

    <?php
    for ($x = 0; $x < count($products);$x++) {
?>
   
 <div class="col-12 col-sm-6 col-md-4 col-lg-3">

    <div class="card border-dark">

        <img class="card-img-top" src="../images/products/<?php echo $products[$x]['photo']?>" alt="Card image cap">
        <div class="caed-body">
            <h5 class="cart-title"><?php echo $products[$x]['name']?></h5>
            <p class="card-text"><?php $products[$x]['description']?></p>
            <?php setlocale(LC_MONETARY, 'en_US.UTF-8') ?>
                <p class="card-text"><?php echo maney_format('%.2n', $products[$x]['price'])?></p>

            <form action="../handlers/addToCart.php">
                <input type="hidden" name = "id" value = "<?php echo $products[$x]['stockID']?>">
                <input class="btn btn-primary" type="submit" value="Add to cart">
            </form>
        </div>
    </div>
</div>
<?php
 }
    ?>

