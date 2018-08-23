<?php 
include 'core/init.php'; 
include ("theme/head.php"); 
?>

<body>
    
    <?php include ("theme/nav.php"); ?>
    <!-- Main Contet -->
    <div class="container">
        <div class="field-content">
                <img class="i1" border="0" alt="animal issues" title="Animal issues" src="images/BLACKCAT.jpeg">
                <div class="indextitle">
                Homeless animal salvation Welcomes You
                </div>
                <div class="subtitle">Make a Difference Today
                </div>
                <div class="paragraph">At Homeless animal salvation, wellbeing is at the forefront of what we’re working together towards.
                    Helping vulnerable animals and keeping pets in safe and loving homes requires a commitment from all of us—advocates, pet owners, shelters, leaders, and entire communities.
                    To know more news about animal, please look at <a style="text-shadow: 0 0 2px white, 3px 1px 3px white;" href="animal_news.php">Issues</a>.
                    Homeless animal salvation are designed to rescue animal and care animal. 
                    You can adopt animal, and find you lost pet in <a  style="text-shadow: 0 0 2px white, 3px 1px 4px white;" href="lost.php">Here</a>. 
                    You can click the following photos to other page.
                </div>
        </div>

 
        <div class="main">
            <div style="padding-top:5%;" class="row">
                <div class="col-md-4">
                    <a class="issues" href="Issues.php" title="Issues" alt="Animal issues">					
                        
                        <img class="img-circle" border="0"  alt="animal issues" title="Animal issues" src="images/issues.jpeg">
                    
                    </a>
                    <h3>Issues</h3>
                </div><!-- end of issue column -->

                <div style="margin-left:2%;" class="col-md-4">
                    <a class="salvation" href="animal_shelter.php" title="salvation" alt="Animal salvation">					
                        
                        <img class="img-circle" border="0" alt="animal salvation" title="Animal shelter" src="images/shelter.jpeg">
                    
                    </a>
                    <h3>Shelter</h3>   
                </div><!-- end of salvation column -->
                
                <div style="margin-right:-2%;" class="col-md-4">
                    <a class="adoption" href="adopt.php" title="adoption" alt="Animal adoption">					
                        
                        <img class="img-circle" border="0" alt="animal adopt" title="Animal adoption" src="images/adoption.jpg">
                    </a>
                    <h3>Adoption</h3>                       
                </div><!-- end of adoption column -->
            </div><!-- end of Main row -->
        </div><!-- end of Main div -->

        <!-- Animal quote div -->
        <div class="quote">
            <img src="images/welcome.jpg" alt="puppy">
            <div class="q">  
                <q>Happiness is a warm puppy. <br><br>&nbsp;&nbsp;&nbsp;&nbsp;<small>- Charles M.Schulz</small></q> 
            </div>
        </div>

        <p>&nbsp;</p><p>&nbsp;</p>
    </div><!-- end of Main Container -->
    <p>&nbsp;</p>
    <!-- Footer -->
    <?php
        include ("../../footer.php");
        include ("contact_modal.php");
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->

</body>


</html>
