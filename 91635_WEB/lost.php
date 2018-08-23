<?php include ("theme/head.php");
 
$owner_name="";
$owner_email="";
$fileToUpload="";
$humanproof="";

$NameErr = $EmailErr = $ImageErr = $HumanErr = "";

$HasErrors="no";

// Code below excutes when the form is submitted...
if ($_SERVER["REQUEST_METHOD"] == "POST")  {

    // Get values from form...
    $owner_name = $_POST["owner_name"];
    $owner_email= $_POST["owner_email"];
    $humanproof= $_POST["humanproof"];

    //Error  Checking goes below...

    // Check that name is letters / spaces only
    if (!preg_match("/^[A-Za-z\s]{1,50}$/", $owner_name))
    {
        $NameErr = "Name should only contain letters and spaces";
        $HasErrors = "yes";

    }

    //Check email is valid (works more reliably than only html5 email type)
    if (!filter_var($_REQUEST['owner_email'], FILTER_VALIDATE_EMAIL))
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
            move_uploaded_file($_FILES["fileToUpload"]["tmp_name"],"images/losts".'/'.$target_file);

            $to = "8581@apps.eggs.school.nz";
            $subject = "AHSW Feedback";
        
            $message = 'Name:'.$owner_name.'<br /><br />Email:'.$owner_email.'<br /><br />File Uploaded: '.$target_file;
        
            //Always set content-type when sending HTML email
            $headers = 'MIME-Version: 1.0' . "\r\n";
            $headers .= 'Content-type: text/html;
            charset=iso-8859-1' . "\r\n";
            $headers .= "From: $owner_email";

            mail($to,$subject,$message,$headers);// Due to XAMPP, the message won't arrive in my inbox 

            header('Location:lost_success.php');

        }
        

}

?>

<body>
    <?php
       include ("theme/nav.php");
?>
    
    <!-- Main Contet -->
    <div class="container">        
        <div class="main">

            <h1 style="font-weight: 800;font-family: Lato;text-transform: uppercase;">Lost Animals</h1>
            <p>If you lost your pet, you can add your details and your pet's informations to the lost animals page, in order to find it .Please make careful note of submission guidelines. Material which does not meet the guidelines will be removed.</p>
                        <?php 
        $dirname = "images/losts/";
        $images = glob($dirname."*.jpeg");

        foreach($images as $images) {



        ?>

        <a href="#" data-toggle="modal" data-target="#lightbox">
            <img style="margin-top: 2%;margin-bottom: 2%;" class="gallery" src="<?php echo $images; ?>" alt="" />
        </a>

        <?php 
            }    // end of 'for each loop
        ?>

        <div id="lightbox" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true"> 
            <div class="modal-dialog">
                <button type="button" class="close hidden" style="right: -45px;" data-dismiss="modal" aria-hidden="true">&times;</button>
                <div class="modal-content">
                    <div class="modal-body">
                        <img class="lightbox" src="#" alt=""/>
                    </div>
                </div>
            </div>
        </div>


            <h2>The Guidelines!!</h2>

            <ul>
                <li>By pushing the 'submit' button in the form below you confirm that you created the image and  want it to appear on the site. </li>
                <li>Please only submit images which were made for finding your pet. The lost pets gallary is for helping you to find your pet.</li>
                <li>We don't required high resolution images for the lost pets gallery, files should be less than 500kb in size.</li>
                <li>Please choose a clear image. Ideally your pet's name and your name so that other users can easy to help you. </li>
                <li>Images which are too wide will not display correctly in the gallary. To show your images as intended, plesase make sure that the width divided by the height is less than 1.5.</li>
            </ul>

            <h3>Submit a Lost Animal Image</h3>

            <div class="found">


            <p>Fields marked with an <sup class="required">*</sup>are required.</p>
            
                <form method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" enctype="multipart/form-data">

                <p>
                    <b>Name<sup class="required">*</sup></b>:
                    &nbsp;&nbsp;<span class="error"><?php echo $NameErr; ?></span><br />
                    <input type="text" name="owner_name" size="25" value="<?php echo $owner_name; ?>" required />
                </p>

                <p>
                    <b>Email<sup class="required">*</sup></b>:&nbsp;&nbsp;
                    <span class="error"><?php echo $EmailErr; ?></span><br />
                    <input type="email" name="owner_email" size="25" value="<?php echo $owner_email; ?>" required />
                </p>
                
                <p>
                    <b>Lost pet image<sup class="required">*</sup></b>:
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

            </div>

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