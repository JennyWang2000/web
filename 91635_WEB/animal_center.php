<?php include ("start.php"); ?>
<?php include ("theme/head.php"); ?>

<body>
    
    <!-- Main Contet -->
    <div class="tap">
        <h6><a href="adopt.php">Adoption</a> | <a href="adoptableDogs.php">Adoptable Dogs</a>  | <a href="adoptableCats.php">Adoptable Cats</a> | <a href="adoptothers.php">Adoptable Others</a> |  <b>Adoption center</b> | <a href="training.php">Animal Training</a> | <a href="feeding_products.php">Feeding Products</a></h6>
        <!-- Light box code adapted from http://bootsnipp.com/snippets/featured/bootstrap-lightbox-->
    </div>  
        <div class="center"> 
        <img  class="animalcenter" src="images/center.jpeg" width=110% height=480px >

        <h1> Animal centers</h1>
        <p>The Animal centers is a part of <a style='text-shadow: 0 0 2px #ffffff, 2px 2px 5px #ffffff;' href="animal_shelter.php">Animal shelters</a>. Available adoption via Auckland Puppy Rescue, ARAN Animal Rescue NZ, Orphaned Kitten Rescue Auckland and New Beginnings Rescue adoption center.</p>
        </div>  

        <img  src="images/center.jpeg" style='visibility: hidden;' height=480px>

        <div class="hosptal">
            <article class="infor">
                <a href="#" data-toggle="modal" data-target="#lightbox">
                    <div class="center-img">
                        <img src="images/About_03.jpg">
                        <div class="center-text">
                            <h3>Animal Emergency Center</h3>
                            <p>The Animal Emergency Centre has three roles. 
                            As well as accepting emergencies at any time during our opening hours, we are also responsible for the overnight observation and treatment of all patients under VSG® care and we also provide a similar service for local day time practices, thus allowing local veterinarians to send their critical and post-operative patients to be cared for overnight and during the weekend.&nbsp;<span class="meta-nav"> Contact with them&nbsp;→</span></p></a>
                        </div>   
                    </div>
            </article>    

            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                <div class="modal-dialog">
                    <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-content">
                        <div class="modal-body" >
                            <iframe width="100%" height="650px" src="http://www.animalemergency.co.nz/"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
        <div class="adoptioncenter">
            <article class="infor" onclick="myFunction()">
                <a href="#" data-toggle="modal" data-target="#adopt">
                <div class="center-img">
                <img src="images/OrphanedKitten.jpeg">
                <div class="center-text">
                <h3>Orphaned Kitten Rescue Auckland</h3>
                <p>Orphaned Kitten Rescue Auckland is dedicated to the rescue and rehoming of orphaned neonatal kittens within the Auckland region.&nbsp;<span class="meta-nav"> Contact with Justine Barnett&nbsp;→</span></p></a>
                </div>
                </div>
            </article>
<br>
            <div id="adopt" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
              
                <div class="modal-dialog">
                    <button id="visiable" type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-content">
                        <div class="modal-body" >
                            <h3>Orphaned Kitten Rescue Auckland</h3>
                            <p>
                            If you would like to make a donation you can deposit into the Orphaned Kitten Rescue Auckland account 12-3061-0380119-50 which will go towards the essentials like kitten milk formula, food, litter, medications, flea and worming treatments as well as desexing, vaccinations and microchipping.

                            Any small amount would make a huge difference as it is an entirely self-funded rescue.

                            Please help Justine Barnett give these little ones the chance they deserve. ♡♡♡

                            <br><br>

                            ⭐️ Adoption Information ⭐️

                            <br><br>NEW ZEALAND ONLY<br>

                            <br>All kittens available for adoption will be over the age of 10 weeks.<br>

                            <br>Each kitten will be desexed, vaccinated, microchipped (registered with NZCAR) and up to date with flea and worming treatments. <br>
                            <br>The adoption fee is $150 Kittens cannot be put on hold as the most suitable home will be chosen when they become available for adoption.<br>

                            <br>Anyone interested in adopting must be over the age of 18 and be willing to show photo ID.<br>

                            <br>Pending approval, an adoption contract must be completed at the time of adoption.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
                    <script>
                        function myFunction() {
                        document.getElementById("visiable").style.display = "inline-block";
                        }
                    </script>
                

        <div class="council">
            <article class="infor" >
                <a href="#" data-toggle="modal" data-target="#council">
                <div class="center-img">
                <img src="images/features_nzcac_over.png">
                <div class="center-text">
                <h3>The New Zealand Companion Animal Council</h3>
                <p>The NZCAC has created and/or coordinated a number of publications that have helped research the companion animal industry, or set standards that the industry should aim for. 
                These publications have involved thousands of hours by countless volunteers and we are very proud of the outcomes.&nbsp;<span class="meta-nav"> Contact with them&nbsp;→</span></p></a>
                </div>
                </div>
            </article>

            <div id="council" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog">
                    <button  type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-content">
                        <div class="modal-body" >
                        <iframe width="100%" height="650px" src="http://www.nzcac.org.nz/"></iframe>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    <p>&nbsp;</p> 
    <!-- Footer -->
    <?php
        include ("theme/footer.php");
        include "contact_modal.php";
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->

</body>


</html>