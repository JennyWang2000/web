<!DOCTYPE HTML>

<?php include ("theme/head.php");
$founder_name="";
$founder_email="";
$fileToUpload="";
$humanproof="";

$NameErr = $EmailErr = $ImageErr = $HumanErr = "";

$HasErrors="no";

// Code below excutes when the form is submitted...
if ($_SERVER["REQUEST_METHOD"] == "POST")  {

    // Get values from form...
    $founder_name = $_POST["founder_name"];
    $founder_email= $_POST["founder_email"];
    $humanproof= $_POST["humanproof"];

    //Error  Checking goes below...

    // Check that name is letters / spaces only
    if (!preg_match("/^[A-Za-z\s]{1,50}$/", $founder_name))
    {
        $NameErr = "Name should only contain letters and spaces";
        $HasErrors = "yes";

    }

    //Check email is valid (works more reliably than only html5 email type)
    if (!filter_var($_REQUEST['founder_email'], FILTER_VALIDATE_EMAIL))
    {
        $EmailErr = "Please enter a valid email address";
        $HasErrors = "yes";
    }

    if($humanproof!=8)
    {
    $HumanErr = "Please prove you are human. Hint 2 x 4 = ? ";
    $HasErrors = "yes";
    }

    //if the image is not blank
    if ($_FILES['fileToUpload']['name']!=""){
    $target_file = uniqid()."-". basename($_FILES["fileToUpload"]["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"&& $imageFileType != "gif" ) {
    $ImageErr = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $HasErrors = "yes";
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
    $ImageErr = "Sorry, your file is too large.";
    $HasErrors = "yes";
    }

    }
    else {
    $ImageErr = "Please choose an image.";
    $HasErrors = "yes";
    }

        
        if ($HasErrors == "no") {
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"images/report".'/'.$target_file);

            $to = "8581@apps.eggs.school.nz";
            $subject = "AHSW Feedback";
        
            $message = 'Name:'.$founder_name.'<br /><br />Email:'.$founder_email.'<br /><br />File Uploaded: '.$target_file;
        
            //Always set content-type when sending HTML email
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html;
            charset=iso-8859-1' . "\r\n";
            $headers .= "From: $founder_email";

            mail($to,$subject,$message,$headers);// Due to XAMPP, the message won't arrive in my inbox 

            header('Location:found_success.php');

        }
        

}

?>

<body>
<?php include ("theme/nav.php"); ?>

    <!-- Main Contet -->
    <div class="container">
        <div class="main">

            <h1>Found an Animal</h1>
            <p>If you find a sick or injured animal please contact any shelter immediately so that they can advise you of the best steps to take If the animal you have found is not sick or injured please read the advice below for further information.</p>
            <p><strong>VISIT THE VETS:</p></strong>
            <p>Take the animal to your local vets and ask them to scan it for a microchip. If the animal is microchipped then they will be able to quickly reunite it with its owner.</p>
            <p><strong>PETS ON THE NET:</p></strong>
            <p>Check the 'lost' listings and create a 'found' listing at <a href="http://www.lostpet.co.nz/lost-found/report-a-found-pet">Here</a> or <b>CLICK </b>the following button. This is a national database and the key website we recommend everyone uses</p>
            <p><strong>CREATE A FLYER:</p></strong>
            <p>Make a flyer with a clear picture, description and your contact details. Distribute it locally via notice boards, mailboxes, neighbours, community centres etc.</p>
            <p><strong>ASK THE NEIGHBOURS:</p></strong>
            <p>Knocking on the door and asking neighbours if they own the animal or if they know who does can speed up the process of reuniting the animal with its owner.</p>
            <p><strong>USE SOCIAL MEDIA:</p></strong>
            <p>Embrace the power of social media to spread the word and try to find the owners. There are plenty of lost and found pages on Facebook that can be used.</p>
            <p><strong>CHECK LOST PETS:</p></strong>
            <p>Look on the Lost Pets to see if anyone is looking for their lost pet. You can also input details of your found animal on here for free.</p>
            <p><strong>STRAY ANIMALS:</p></strong>
            <p>If you have found a stray animal please contact Animal Control. 
                If the animal is registered then they'll be able to quickly reunite it with its owner. 
                You may also want to visit your local council animal shelter and check their lost board.</p>
            <?php 
            $dirname = "images/report/";
            $images = glob($dirname."*.jpeg");
            foreach($images as $image) {
            ?>


            <a href="#" data-toggle="modal" data-target="#lightbox">
                <img style="margin-top: 2%;margin-bottom: 2%;" class="gallery" src="<?php echo $image; ?>" alt="" />
            </a>

            <?php 
                }    // end of 'for each loop
            ?>

            <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
                <div class="modal-dialog">
                    <button type="button" class="close hidden" style="right: -45px;" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <div class="modal-content">
                        <div class="modal-body">
                            <h1><strong>HELP HIM FIND HIS FAMILY</strong></h1>
                            <img id="img" class="lightbox" src="#" alt=""/>
                            <p>This is the face of a miracle..an almost unbelievable survival story. 
                                On Tuesday 5th a gentleman drove his Chevy Camaro from Orewa Auckland to New Plymouth, he didn’t make any stops on the way.
                                What he didn’t know was that this beautiful cat was hiding in the grill space on the very front of the car and hanging on so hard he lost claws..... 
                                Puss wasn’t discovered until the car was parked outside a New Plymouth hotel. 
                                Passers by saw him and alerted staff who contacted SPCA's North Taranaki Centre and managed to safely extract him, the SPCA Inspectors then rushed him to Vets4Pets New Plymouth. 
                                He was in severe shock and hypothermic - it was touch and go initially but just look at yesterday’s video he is moving, eating, drinking , totally unconcerned about being at the vets....yahoo he made it!!!! 
                                So now we need to find his family. There were no stops during the car drive so he is from Auckland possibly Orewa. 
                                If you recognise him please <a href="#contact" data-toggle="modal">contact</a> us by PM or <strong>06 7582053 </strong>and please SHARE this post ...let’s get this incredible kitty back home !!!!
                                You can also visit this page <strong>http://www.rnzspca.org.nz/helpanimalsheal</strong> .</p>

                        </div>
                    </div>
                </div>
            </div>


            <h2>The Guidelines!!</h2>

            <ul>
                <li>By pushing the 'submit' button in the form below you confirm that you created the image and  want it to appear on the site. </li>
                <li>Please only submit images which were made for finding your pet. The lost pets gallary is for helping you to find your pet.</li>
                <li>We don't required high resolution images for the found animal gallery, files should be less than 500kb in size.</li>
                <li>Please choose a clear image. Ideally your pet's name and your name so that other users can easy to help you. </li>
                <li>Images which are too wide will not display correctly in the gallary. To show your images as intended, plesase make sure that the width divided by the height is less than 1.5.</li>
            </ul>

            
            <h3>Submit a found Animal Image</h3>
            <div class="found">

                <p>Fields marked with an <sup class="required">*</sup>are required.</p>

                <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

                    <p>
                        <b>Name<sup class="required">*</sup></b>:
                        &nbsp;&nbsp;<span class="error"><?php echo $NameErr; ?></span><br />
                        <input type="text" name="founder_name" size="25" value="<?php echo $founder_name; ?>" required />
                    </p>

                    <p>
                        <b>Email<sup class="required">*</sup></b>:&nbsp;&nbsp;
                        <span class="error"><?php echo $EmailErr; ?></span><br />
                        <input type="email" name="founder_email" size="25" value="<?php echo $founder_email; ?>" required />
                    </p>
                    
                    <p>
                        <b>Found animal image<sup class="required">*</sup></b>:
                        <input type="file" name="fileToUpload" id="fileToUpload" required> &nbsp;&nbsp;<span class="error"><?php echo $ImageErr;?></span>
                    </p>

                    <p>
                        <b>Prove you are Human<sup class="required">*</sup></b>: What is two time four? &nbsp;&nbsp;
                        <span class="error"><?php echo $HumanErr; ?></span><br />
                        <input type="text" name="humanproof" size="25" value="<?php echo $humanproof; ?>" required />

                    </p>
                    
                    <p>
                        <input class="btn btn-success" type="submit" value="Submit" />
                    </p>     
                    
                </form>

            </div><!-- end of Main Container -->
        </div><!-- end of Main div -->
        <p>&nbsp;</p> <p>&nbsp;</p>           
    </div>
        <p>&nbsp;</p>          
        <!-- Footer -->
        <?php
            include ("theme/footer.php");
            include "contact_modal.php";
        ?><!-- end footer navbar--><!-- Content Modal --><!-- end of modal div -->
    
</body>


</html>