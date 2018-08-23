<?php include ("start.php"); ?>
<?php include ("theme/head.php"); ?>

<body>
    
<?php include ("theme/nav.php"); ?>

    <!-- Main Contet -->
    <div class="tap">
        <h6><b>Adoption</b> | <a href="adoptableDogs.php">Adoptable Dogs</a>  | <a href="adopt.php">Adoptable Cats</a> | <a href="adoptothers.php">Adoptable Others</a>  | <a href="animal_center.php">Adoption center</a> | <a href="training.php">Animal Training</a> | <a href="feeding_products.php">Feeding Products</a></h6>
        <!-- Light box code adapted from http://bootsnipp.com/snippets/featured/bootstrap-lightbox-->
    </div>

    <div class="container">
         <div class="main">
            <div class="h1">Adopt a Pet</div>

            <div style="text-align:center;margin: -20px -20px;"> 
                <video id="video1" width="450">
                    <source src="video/blackcat.MOV" type="video/ogg">
                </video><br>
                <button onclick="playPause()">Play/Pause</button> 
                <button onclick="makeBig()">Big</button>
                <button onclick="makeSmall()">Small</button>
                <button onclick="makeNormal()">Normal</button>
            </div>       

            <script> 
                    var myVideo = document.getElementById("video1"); 

                    function playPause() { 
                        if (myVideo.paused) 
                            myVideo.play(); 
                        else 
                            myVideo.pause(); 
                    } 

                    function makeBig() { 
                        myVideo.width = 1140; 
                    } 

                    function makeSmall() { 
                        myVideo.width = 400; 
                    } 

                    function makeNormal() { 
                        myVideo.width = 750; 
                    } 
            </script> 
            <div class="adoptparagraph">       
            <h3>Why and how to adopt the animals?</h3>
            There are likely hundreds of adoptable cats and dogs in NZ right now who would love to join your family.
            <h5><strong>1. Rescue an animal in need</strong></h5>
            <p>Animal are human's BEST friend. Now some of them are injured and are unwanted, so it is the time for us to rescue them and give them a warm home.</p>
            <h5><strong>2. Find your expected pet</strong></h5>
            <p>Find out your favorate one, which you will promise to take care with them well. </p>
            <h5><strong>3. Having training lessions</strong></h5>
            <p>To develop skills will help you to rear your pets well and easy.</p>
            <h5><strong>4. Adoption fee</strong></h5>
            <p>The adoption fees you need to pay for are:
                <ul>
                <li>Vet checked and healthy</li>
                <li>Temperament checked</li>
                <li>De-sexed</li>
                <li>Vaccinated</li>
                <li>Wormed</li>
                <li>Treated for fleas</li>
                <li>Micro chipped</li>
                </ul>
                Your adoption fee can helps us to rescue other animals in need.
            </p>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <a href="adoptableDogs.php" title="avaliable dogs" alt="dogs adoption">					
                            
                            <img class="img-rounded" border="0" alt="dog adoption" title="dog adopt" src="images/cutedoggy.jpg" weight=50%> 
                        
                        </a>
                        <h3>Dogs available for adoption</h3>
                        <a href="adoptableDogs.php"><button class="touch">Get in Touch</button></a>
                </div><!-- end of Welcome column -->
    
                <div class="col-md-4">
                    <a href="adoptableCats.php" title="avaliable cats" alt="cats adoption">					
                            
                            <img class="img-rounded" border="0" alt="avaliable cats" title="Avaliable cats" src="images/ketten2.jpeg">
                        
                        </a>
                    <h3>Cats available for adoption</h3>
                    <a href="adoptableCats.php"><button class="touch">Get in Touch</button></a>

                </div><!-- end of twitter column -->

                <div class="col-md-4">
                    <a href="adoptothers.php" title="avaliable others" alt="Animals avaliable">					
                        
                        <img class="img-rounded" border="0" alt="adoptothers" title="Animal adopt" src="images/r2.jpg">
                    
                    </a>
                    <h3>Others available for adoption</h3>
                    <a href="adoptothers.php"><button class="touch">Get in Touch</button></a>

                </div><!-- end of twitter column -->

                <div class="col-md-4">
                    <a href="animal_center.php" title="animal center" alt="Animal centers">					
                        
                        <img class="img-rounded" border="0" alt="animal center" title="Animal center" src="images/careanimal.jpg">
                    
                    </a>
                    <h3>Adoption center</h3>
                    <a href="animal_center.php"><button class="touch">Get in Touch</button></a>

                </div><!-- end of twitter column -->

                <div class="col-md-4">
                    <a href="training.php" title="animaltraning" alt="animaltraning">					
                        
                        <img class="img-rounded" border="0" alt="animal news" title="Animal news" src="images/title.jpeg">
                    
                    </a>
                    <h3>Animal Training</h3>
                    <a href="training.php"><button class="touch">Get in Touch</button></a>

                </div><!-- end of twitter column -->

                <div class="col-md-4">
                    <a href="feeding_products.php" title="feeding products" alt="feeding products">					
                        
                        <img class="img-rounded" border="0" alt="feeding products" title="feeding products" src="images/products.jpg">
                    
                    </a>
                    <h3>Feeding Products</h3>
                    <a href="feeding_products.php"><button class="touch">Get in Touch</button></a>

                </div><!-- end of twitter column -->


            </div><!-- end of Main row -->
        </div><!-- end of Main div -->



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