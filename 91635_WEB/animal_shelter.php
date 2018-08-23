<!DOCTYPE HTML>
<?php include ("theme/head.php"); ?>

<body>
    
<?php include ("theme/nav.php"); ?>

    <!-- Main Contet -->
    <div class="container"> 
        <div class="field-content">
                    <img class="i1" border="0" alt="animal issues" title="Animal issues" src="images/shelter.jpeg">
                    <div style="text-shadow: 0 0 2px rgb(25,25,25), 2px 2px 5px rgb(25,25,25);"  class="a_subtitle">Make a Difference Today
                    </div>                   
                    <div class="a_indextitle">Animal Shelter
                    </div>
                    <div style="text-shadow: 0 0 2px rgb(25,25,25), 2px 2px 5px rgb(25,25,25);" class="a_paragraph">There are thousands of animals around Auckland who find themselves in harm's way each year. 
                        These animals need someone to intervene on their behalf, to rescue and care for them, to ensure they can live the life they deserve and to prosecute animal offenders so they don’t hurt animals again.
                    </div>
        </div>

        <div class="a_main">
            <div class="menu">                                        
                <div class="grid-container">
                    <div class="item1">                            
                        <img alt="responsive" class="img-responsive" style="object-fit: cover;" src="images/volunteerSPCA.jpg" >
                    </div>
                    <div class="item2">                        
                        <img alt="responsive" class="img-responsive" style="object-fit: cover;"src="images/ADOPTDOGGY.jpg" >
                    </div>
                    <div class="item3">                     
                        <img alt="responsive" class="img-responsive" src="images/cavycare.jpg" >
                    </div>  
                    <div class="item4">
                        <img alt="responsive" class="img-responsive" style="object-fit: cover;" src="images/Dumped Puppies.jpg" >
                    </div>
                    <div class="item5">
                        <img alt="responsive" class="img-responsive" style="object-fit: cover;"src="images/catcare.jpeg" >
                    </div>
                    <div class="item6">
                        <img alt="responsive" class="img-responsive"  src="images/ketten.png" >
                    </div>
                </div>                                                
            </div>

            <div class="main2">
                <h2>NZ shelter</h2>
                <div class="m-subtitle">SPCA Auckland</div>
                <p>Last year SPCA Auckland Inspectors attended over 700 emergencies and responded to over 7,000 call-outs to rescue animals across the Auckland region.
                        The SPCA is the only charity with legal powers to help animals in need. 
                        Their Inspectors are on call 7 days a week, 365 days a year ensuring the protection of Auckland’s animals.
                        You can find them in the whole Auckland region from Port Waikato to Wells-ford.</p>
                <a herf="#" data-toggle="modal" data-target="#lightbox1">Get in Touch</a>
                <div id="lightbox1" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                    <div class="modal-dialog">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <div class="modal-content">
                            <div class="modal-body" >
                                <iframe width="100%" height="650px" src="https://www.spcaauckland.org.nz/what-we-do/shelter-and-rehome/"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

            </div><!-- end of Main2 div -->
        <p>&nbsp;</p>           <p>&nbsp;</p>

         </div><!-- end of a_main div -->

    </div><!-- end of Main Container -->
    <p>&nbsp;</p>    <p>&nbsp;</p>


        <!-- Footer -->
    <?php
        include ("theme/footer.php");
        include "contact_modal.php";
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->

</body>


</html>