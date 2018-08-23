<?php
    include ("start.php");  
    include ("theme/head.php");
    ?>

<body>
    
    <?php 
    include ("theme/nav.php");
         ?>
    <!-- Main Contet -->
    <div class="tap">
        <h6><a href="adopt.php">Adoption</a> | <a href="adoptableDogs.php">Adoptable Dogs</a> | <a href="adoptableCats.php">Adoptable Cats</a> | <a href="adoptothers.php">Adoptable Others</a> | <a href="animal_center.php">Adoption center</a> | <a href="training.php">Animal Training</a> | <b>Feeding Products</b></h6>
        <!-- Light box code adapted from http://bootsnipp.com/snippets/featured/bootstrap-lightbox-->
    </div>

    <div >
<?php 
    include ("categoryProNav.html");

        if(!isset($_REQUEST['page'])){
            include ("content/feedingproducts/adminloginpage.php");
        }

        else {
            // prevents users from navigating through file system
            $page=preg_replace('/[^0-9a-zA-Z]-/','',$_REQUEST['page']);
            include ("content/feedingproducts/$page.php");
            if(!isset($_SESSION['admin'])){
                echo ("<hr></hr>");
                echo ("You have not logged in! Do you want to log in ? Click <b> <a href='Admin/admin.php' data-toggle='modal' data-target='#login'>Admin</a></b> .");                
            }
       } 
        ?>

    </div><!-- end of Main Container -->

            <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->

    <p>&nbsp;</p>       

    <!-- Footer -->
    <?php
        include ("theme/footer.php");
        include ("contact_modal.php");
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->

</body>


</html>