<!DOCTYPE HTML>
<?php include ("theme/head.php");
    include ("theme/nav.php");
    ?>

<body>   
    <!--div img title-->
    <div class="title">
    <img src="images/Animal News.png" alt="animalnews">
    </div>
    <!-- Main Contet -->

    <section>
        <div class="index-intro">
            <div class="wrapper">
                <h2>The following news motivate you to love and care animals.</h2>
                <p> They are going to show you some examples that how other people rescue animals. </p>
            </div>
        </div>

        <div class="index-news">
            <div class="wrapper">

                <article>
                    <a href="#" data-toggle="modal" data-target="#lightbox"><div class="news-img">
                        <img src="images/love.jpg">
                     </div>
                    <h3>5 Ways Animal Lovers Can Help Change the World</h3>
                    <p>Every day we make dozens of choices that have a ripple effect on the world around us and the animals who we share it with. Our impact on the planet can be overwhelming. But it also means we have endless opportunities to create a more sustainable, humane, and compassionate world. <span class="meta-nav">Continue reading →</span></p></a>
                   
                </article>
                <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                    <div class="modal-dialog">
                        <button type="button" class="close hidden" data-dismiss="modal" aria-hidden="true">x</button>
                        <div class="modal-content">
                            <div class="modal-body" >
                                <iframe width="100%" height="650px" src="http://www.onegreenplanet.org/animalsandnature/ways-animal-lovers-can-help-change-world/"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <article onclick="myFunction1()">
                    <a href="#" data-toggle="modal" data-target="#lightboxl">
                    <div class="news-img">  
                        <img src="images/shelterdoggy.jpeg" >
                    </div>
                    <h3>Before and after: Once neglected and abused, these BC SPCA rescue dogs are loving life againg</h3>
                    <p>“You can tell he never had attention. He didn’t know the word ‘walk’ or ‘out’ and now he knows those words and he’s living a life that a dog should be living.”<span class="meta-nav"> Continue reading →</span></p>                   

                    </a>
                </article>
                <div id="lightboxl" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                    <div class="modal-dialog">
                       <button id="healthy life" type="button" class="close " data-dismiss="modal" aria-hidden="true">x</button>
                      <div class="modal-content">
                            <div class="modal-body" >
                                <iframe width="100%" height="650px" src="https://globalnews.ca/news/4254361/bc-spca-cruelty-cases-update-adoption/"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

                <article onclick="myFunction1()">
                    <a href="#" data-toggle="modal" data-target="#lightbox2"><div class="news-img">  <img class="cover" src="images/ARANDOGGY.jpg"></div>
                    <h3>Manitoba animal rescue pleads for help with 700 dogs running out of food after being abandoned in wildfires</h3>
                    <p>Many younger dogs have already died and the ones left need to be removed. There is also a concern that the dogs are forming larger, more aggressive packs.<span class="meta-nav"> Continue reading →</span></p></a>

                </article>
                <div id="lightbox2" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                    <div class="modal-dialog">
                        <button id="healthy life"type="button" class="close " data-dismiss="modal" aria-hidden="true">x</button>
                        <div class="modal-content">
                            <div class="modal-body" >
                                <iframe width="100%" height="650px" src="http://nationalpost.com/news/canada/manitoba-animal-rescue-seeks-help-after-dogs-left-behind-in-wildfire-evacuations"></iframe>
                            </div>
                        </div>
                    </div>
                </div>

               <button class="More" id="news" onclick="myFunction()">Load More</button>
               <div id="more_news"> 
                    <article onclick="myFunction1()">
                        <a href="#" data-toggle="modal" data-target="#lightbox4"><div class="news-img">
                            <img style="height:100%;object-fit:fill;float: right;" src="images/lightbox4.jpeg" >
                        </div>
                        <h3>Pukekohe woman turns home into feline sanctuary, despite husband's cat allergies</h3>
                        <p>"I worked before (we had) the cats so we could go on holidays but now all my money goes on cats, vet bills, and things like that."
                        Marshall is self-employed and works in human resources, project management and payroll. Sometimes she takes kittens into work to ensure they are fed on time, or takes time out to nip to the vets.<span class="meta-nav"> Continue reading →</span></p></a>
                    
                    </article>
                    <div id="lightbox4" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                        <div class="modal-dialog">
                            <button id="healthy life" type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <div class="modal-content">
                                <div class="modal-body" >
                                    <iframe width="100%" height="650px" src="https://www.stuff.co.nz/life-style/104520156/pukekohe-woman-turns-home-into-feline-sanctuary-despite-husbands-cat-allergies"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <article onclick="myFunction1()">
                    <a href="#" data-toggle="modal" data-target="#lightbox5"><div class="news-img">
                        <img src="images/lightbox5.jpeg">
                     </div>
                    <h3>Love Meow</h3>
                    <p>Love Meow is where you find inspiring and beautiful stories about cats, rescues and fosters from all over the world.<span class="meta-nav">Find more stories →</span></p></a>
                   
                    </article>
                    <div id="lightbox5" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                        <div class="modal-dialog">
                            <button id="healthy life" type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <div class="modal-content">
                                <div class="modal-body" >
                                    <a class="twitter-timeline" href="https://twitter.com/LoveMeowdotcom?ref_src=twsrc%5Etfw">Tweets by LoveMeowdotcom</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                </div>
                            </div>
                        </div>
                    </div>

                    <article onclick="myFunction1()">
                        <a href="#" data-toggle="modal" data-target="#lightbox6"><div class="news-img">
                            <img src="images/lightbox6.jpeg">
                        </div>
                        <h3>Kitten pair leading healthy life despite odds</h3>
                        <p>Kittens Skip and Socks are like most cats. They love chasing toys, climbing tables, and investigating new objects.<span class="meta-nav"> Continue reading →</span></p></a>
                    
                    </article>
                    <div id="lightbox6" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                        <div class="modal-dialog">
                            <button id="healthy life" type="button" class="close" data-dismiss="modal" aria-hidden="true">x</button>
                            <div class="modal-content">
                                <div class="modal-body" >
                                    <iframe width="100%" height="650px" src="https://www.stuff.co.nz/life-style/104411045/kitten-pair-leading-healthy-life-despite-odds"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script>
                    function myFunction() {
                        document.getElementById("more_news").style.display = "block";
                        document.getElementById("news").style.display = "none";
                    }
                    function myFunction1() {
                        document.getElementById("healthy life").style.display = "inline-block";

                    }

                    </script>


                </div>
            </div>
            
        </div>

        <p>&nbsp;</p><p>&nbsp;</p>

    </section>

    <!-- Footer -->
    <?php
        include ("theme/footer.php");
        include "contact_modal.php";
    ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->
</body>