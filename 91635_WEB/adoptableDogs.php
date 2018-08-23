<?php include ("start.php"); ?>
<?php include ("theme/head.php"); ?>

<body>
    
<?php include ("theme/nav.php"); ?>
    <!-- Main Contet -->
    <div class="tap">
        <h6><a href="adopt.php">Adoption</a> | <b>Adoptable Dogs</b> | <a href="adoptableCats.php">Adoptable Cats</a> | <a href="adoptothers.php">Adoptable Others</a> | <a href="animal_center.php">Adoption center</a> | <a href="training.php">Animal Training</a> | <a href="feeding_products.php">Feeding Products</a></h6>
        <!-- Light box code adapted from http://bootsnipp.com/snippets/featured/bootstrap-lightbox-->
    </div>

    <div>
    <div class="animalsmain"> 
        <h1> Adoptable Dogs</h1>
        <p>These dogs are available for adoption via Auckland Puppy Rescue, ARAN Animal Rescue NZ, and New Beginnings Rescue adoption center.</p>
        <p>You can adopt the following cute dogs from those places.</p>

            <?php 
        $dirname = "images/adoptdogs/";
        $images = glob($dirname."*.jpg");

        foreach($images as $images) {



        ?>

        <a href="#" data-toggle="modal" data-target="#lightbox">
            <img class="gallery" src="<?php echo $images; ?>" alt="" />
        </a>

        <?php 
            }    // end of 'for each loop
        ?>

        <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
            <div class="modal-dialog">
                <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true" style="right: -45px;">&times;</button>
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="lightbox" style="object-fit: scale-down;" src="#" alt=""/>
                    </div>
                </div>
            </div>

            
        </div><!--end of carousel custom -->     
        <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->
    <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->

    <p>&nbsp;</p>
    <!-- Footer -->
    <?php
        include ("theme/footer.php");
        include "contact_modal.php";
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->

</body>


</html>