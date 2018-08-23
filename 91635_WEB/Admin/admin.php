

<?php include ("../theme/adminhead.php");?>

<body>
<?php    
include ("../theme/nav.php");?>
<div class="tap">
        <h6><a href="../adopt.php">Adoption</a> | <a href="../adoptableDogs.php">Adoptable Dogs</a> | <a href="../adoptableCats.php">Adoptable Cats</a> | <a href="../adoptothers.php">Adoptable Others</a> | <a href="../animal_center.php">Adoption center</a> | <a href="../training.php">Animal Training</a> | <a href="../feeding_products.php"><b>Feeding Products</b></a></h6>
        <!-- Light box code adapted from http://bootsnipp.com/snippets/featured/bootstrap-lightbox-->
    </div>

    <div>
        <div class="admin">
        <div class="animalsmain"> 

                <?php 
                if(!isset($_REQUEST['page'])){
                    $page="adminlogin";

                }

                else {
                    $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);

                }

                if($page=="LOGINadmin" or $page=="adminlogin" or $page=="logout")
                    include ("$page.php");
                
                else{
                    if(!isset($_SESSION['admin']))
                    {
                        header('Location: admin.php?page=LOGINadmin');
                        die("You have not logged in");
                    }
                    else
                        include ("$page.php");
                }
                
                ?>

                
                
        </div>
        <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->

        <p>&nbsp;</p>
        <p>&nbsp;</p>


 <?php       
include ("../theme/footer.php");
include ("../contact_modal.php");?>

</body>


</html>