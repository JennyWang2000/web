<?php include ("start.php"); ?>
<?php include ("theme/head.php"); ?>

<body>
    
<?php 
        if(!isset($_REQUEST['page'])){
            include ("theme/nav.php"); 
        }
        
        else{
            include ("theme/adminnav.php"); 
        }
        
        ?>
    <!-- Main Contet -->
    <div class="tap">
        <h6><a href="adopt.php">Adoption</a> | <a href="adoptableDogs.php">Adoptable Dogs</a>  | <b>Adoptable Cats</b> | <a href="adoptothers.php">Adoptable Others</a>  | <a href="animal_center.php">Adoption center</a> | <a href="training.php">Animal Training</a> | <a href="feeding_products.php">Feeding Products</a></h6>
        <!-- Light box code adapted from http://bootsnipp.com/snippets/featured/bootstrap-lightbox-->
    </div>

    <div>
        <div class="animalsmain">
            <h1> Adoptable Cats</h1>
                <p>These cats are available for adoption via SPCA Auckland, Lonely Miaow Association Incorporated, and New Beginnings Rescue adoption center.
                </p>
                <p>You can choose any of these following adorable cats from the above places.</p>
                <?php 
            $dirname = "images/adoptcats/";
            $images = glob($dirname."*.jpeg");
            
            foreach($images as $image) {

            ?>

            <a href="#" data-toggle="modal" data-target="#lightbox">
                <img class="gallery" src="<?php echo $image; ?>" alt="" />
            </a>

            <?php 
                }    // end of 'for each loop
            ?>

            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                <div class="modal-dialog">
                    <button type="button" class="close hidden" style="right: -45px;" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-content">
                        <div class="modal-body">
                        <div data-target="#kittenNameHeader" id="detailsText">
                                <img id="img" style="object-fit: scale-down;" class="lightbox" src="#" alt=""/>
                            </div>
                        </div>


                    </div>
                </div>
                <script>
                var myElement = document.getElementById("img");
                            document.getElementById("detailsText").innerHTML =  myElement.innerHTML;
                        }
                    </script>

            
                
            </div><!--end of carousel custom -->     
        </div><!-- end of Main Container -->
        <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->
            <p>&nbsp;</p><p>&nbsp;</p>

    <!-- Footer -->
    <?php
        include ("theme/footer.php");
        include "contact_modal.php";
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->

</body>


</html>