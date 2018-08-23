<!DOCTYPE HTML>
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
    <div class="container">
        <div class="main">

            <div id='carousel-custom' class='carousel slide' data-ride='carousel' data-interval="3000">

            <div class='carousel-outer'>

            <!-- Wrapper for slides -->
            <div class='carousel-inner'>

                <!-- first slide -->
                <div class="item active">
                <img src="images/doggy.jpg" alt="Doggy homebanner1">
                </div>
                
                <div class="item">
                <img src="images/bcat.jpeg" alt="ketten homebanner">
                </div>

                <div class="item">
                <img src="images/issues2.jpg" alt="issues2">
                </div>

            </div><!-- end carousel inner -->
            <!-- Control -->
                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                    <img class='glyphicon glyphicon-chevron-left'src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ5LjY1NiA0OS42NTYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5LjY1NiA0OS42NTY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiMwMEFEOTc7IiBwb2ludHM9IjM1LjEyMSwxLjQxNCAzNy45NDksNC4yNDIgMTcuMzY0LDI0LjgyOCAzNy45NDksNDUuNDE0IDM1LjEyMSw0OC4yNDIgMTEuNzA3LDI0LjgyOCAgIi8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDBBRDk3OyIgZD0iTTM1LjEyMiw0OS42NTZMMTAuMjkyLDI0LjgyOEwzNS4xMjEsMGw0LjI0Miw0LjI0MkwxOC43NzgsMjQuODI4bDIwLjU4NiwyMC41ODZMMzUuMTIyLDQ5LjY1NnogICAgTTEzLjEyMSwyNC44MjhsMjIuMDAxLDIybDEuNDE0LTEuNDE0TDE1Ljk1LDI0LjgyOEwzNi41MzUsNC4yNDJsLTEuNDE0LTEuNDE0TDEzLjEyMSwyNC44Mjh6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                </a>

                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>   
                    <img class='glyphicon glyphicon-chevron-right' src="data:image/svg+xml;utf8;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pgo8IS0tIEdlbmVyYXRvcjogQWRvYmUgSWxsdXN0cmF0b3IgMTguMC4wLCBTVkcgRXhwb3J0IFBsdWctSW4gLiBTVkcgVmVyc2lvbjogNi4wMCBCdWlsZCAwKSAgLS0+CjwhRE9DVFlQRSBzdmcgUFVCTElDICItLy9XM0MvL0RURCBTVkcgMS4xLy9FTiIgImh0dHA6Ly93d3cudzMub3JnL0dyYXBoaWNzL1NWRy8xLjEvRFREL3N2ZzExLmR0ZCI+CjxzdmcgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayIgdmVyc2lvbj0iMS4xIiBpZD0iQ2FwYV8xIiB4PSIwcHgiIHk9IjBweCIgdmlld0JveD0iMCAwIDQ5LjY1NiA0OS42NTYiIHN0eWxlPSJlbmFibGUtYmFja2dyb3VuZDpuZXcgMCAwIDQ5LjY1NiA0OS42NTY7IiB4bWw6c3BhY2U9InByZXNlcnZlIiB3aWR0aD0iNTEycHgiIGhlaWdodD0iNTEycHgiPgo8Zz4KCTxwb2x5Z29uIHN0eWxlPSJmaWxsOiMwMEFEOTc7IiBwb2ludHM9IjE0LjUzNSw0OC4yNDIgMTEuNzA3LDQ1LjQxNCAzMi4yOTIsMjQuODI4IDExLjcwNyw0LjI0MiAxNC41MzUsMS40MTQgMzcuOTQ5LDI0LjgyOCAgIi8+Cgk8cGF0aCBzdHlsZT0iZmlsbDojMDBBRDk3OyIgZD0iTTE0LjUzNSw0OS42NTZsLTQuMjQyLTQuMjQybDIwLjU4NS0yMC41ODZMMTAuMjkzLDQuMjQyTDE0LjUzNSwwbDI0LjgyOSwyNC44MjhMMTQuNTM1LDQ5LjY1NnogICAgTTEzLjEyMSw0NS40MTRsMS40MTQsMS40MTRsMjItMjJsLTIyLTIybC0xLjQxNCwxLjQxNGwyMC41ODUsMjAuNTg2TDEzLjEyMSw0NS40MTR6Ii8+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPGc+CjwvZz4KPC9zdmc+Cg==" />
                </a>

            </div>  <!-- emd carousel-outer -->

            <div class="indicators">
            <!-- Indicators -->
            <ol class="carousel-indicators" style="position:absolute;text-align: center;">
                <img data-target="#carousel-custom" class="img-circle" src="images/doggyicon.jpg" style="display:inline-block;" data-slide-to="0"  width=5% height=auto alt="small iron">
                <img data-target="#carousel-custom" class="img-circle" src="images/cattyicon.jpg" width=5% height=auto data-slide-to="1" alt="small iron">
                <img data-target="#carousel-custom" class="img-circle" src="images/icon.jpg" width=5% height=auto data-slide-to="2" alt="small iron">
            </ol>

            </div><!-- end indicators div-->
 
            </div><!-- end carousel custom div -->
            
            <div class="Issues">
                <h2>Issues</h2>
                <h4><i><strong>Homelessness </strong>and <strong>cruelty Issues</strong> are some of the main issues surrounding animal.</i></h4>
                <p>
                Each year, approximately 7.6 million animals enter animal shelters nationwide—and nearly 3 million don't make it out. 
                And in every 60 seconds, another animal is abused... Here at Animal salvation and adaption, you can find out more information about animal.
                We are going to show you more things about animal.
                In order to make positive change for animal lives, which increase their safety and help you to find your lost pet.
                </p>
            </div>

            
        </div><!-- end of Main div -->

        <!-- -->
        <div class="row2">
            <dic class="row">
                <div class="col-md-4">
                    <a class="News" href="animal_news.php" title="News" alt="Animal news">					
                        
                        <img class="img-rounded" border="0" alt="animal news" title="Animal news" src="images/issues.jpeg">
                    
                    </a>
                    <h3>Animal News</h3>
                    <a href="animal_news.php"><button class="button">More</button></a>

                </div><!-- end of issue column -->

                <div class="col-md-4">
                    <a class="health" href="training.php" title="animalhealth" alt="Animal training ">					
                        
                        <img class="img-rounded" border="0" alt="animal health" title="Animal health" src="images/shelter.jpeg">
                    
                    </a>
                    <h3>Animal Trainning</h3>  
                    <a  href="training.php"><button class="button">More</button></a>
                </div><!-- end of salvation column -->
                
                <div class="col-md-4">
                    <a class="lost" href="lost.php" title="Lost Pets" alt="lost pets">					
                        
                        <img class="img-rounded" border="0" alt="lost pets" title="lost pets" src="images/lost.jpeg">
                    
                    </a>
                    <h3>Lost Pets</h3>  
                    <a  href="lost.php"><button class="button">More</button></a>
                </div><!-- end of adoption column -->
        </div><!-- end of row2 -->


        </div>
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
