<!-- Content Modal -->

<?php 
    $name = "";
    $email = "";
    $comment = "";

    $HasErrors="no";

    $NameErr = $EmailErr = "";

?>

<!-- clears form if cancel button pushed -->
<script>

    $(document).ready(function(){
        $("#reset").click(function(){
            location.href = "";
        });
    })

</script>
<?php

        if(isset($_POST['submit'])) {

        function test_input($data) {
        $data  = trim($data);
        $data  = stripslashes($data);
        $data  = htmlspecialchars($data);
        return $data;
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
        //get input from form and sanitise it
        $name = test_input($_POST["name"]);
        $email = test_input($_POST["email"]);
        $comment = test_input($_POST["comment"]);

        // Check that name has letters / spaces only
        if (!preg_match("/^[A-Za-z\s]{1,50}$/", $name))
        {
            $NameErr = "Name should only contain letters and spaces";
            $HasErrors = "yes";
        }

        // Check email is valid (works more reliably than only html5 email type)

        if (!filter_var($_REQUEST['email'],
        FILTER_VALIDATE_EMAIL))
        {
            $EmailErr = "Please enter a valid email address";
            $HasErrors = "yes";
        }

        if ($HasErrors == "yes")
        {
        
        // reopen form and show errors
        ?>
        <script>
            $(function() {
                $('#contact').modal('show');
            });
        </script>

        <?php

        }

        else{

        // Send Email Message

        $to = "8581@apps.eggs.school.nz";
        $subject = "AHSW Feedback";

        $message = 'Name:'.$name.'<br /><br />Email:'.$email.'<br /><br />Comment: '.$comment;

        //Always set content-type when sending HTML email
        $headers = 'MIME-Version: 1.0' . "";
        $headers .= 'Content-type: text/html;
        charset=iso-8859-1' . "";
        $headers .= "From: $email";

        mail($to,$subject,$message,$headers);// Due to XAMPP, the message won't arrive in my inbox
        
        // reset fields so they are blank the next time the modal is opened.
        $name = "";
        $email = "";
        $comment = "";

        }
        }
        
        }

?>


    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labbelledby="contact" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <form method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><!-- close cross -->
                </div><!-- end of modal header -->

                <div class="modal-body">

                    <h1>Contact</h1>

                    <p><span class="error">* required field.</span></p>

                    <p>Either <a href="mailto:8581@apps.eggs.school.nz">email me</a> directly or fill in the form below...</p>

                    <p>
                        <b>Name<sup class="error">*</sup>:</b>&nbsp;&nbsp;<span class="error"><?php echo $NameErr; ?></span><br/>
                        <input type="text" name="name" size="25" value="<?php echo $name; ?>" required />
                    </p>

                    <p>
                        <b>Email<sup class="error">*</sup>:</b>&nbsp;&nbsp;<span class="error"><?php echo $EmailErr; ?></span><br/>
                        <input type="email" name="email" size="25" value="<?php echo $email; ?>" required />
                    </p>

                    <p>
                        <b>Comment<span class="error">*</span>:</b><br/>
                        <textarea type="comment" name="comment" required><?php echo $comment; ?></textarea>
                    </p>



                </div><!-- end of modal body -->

                <div class="modal-footer">

                    <button class="btn btn-success" type="submit" name="submit">Send</button>

                    <a class="btn btn-warning" id="reset" data-dismiss="modal">Cancel</a>

                </div><!-- end of modal footer -->

                </form>
                
            </div><!-- end of modal content -->

        </div><!-- end of modal dialog -->
    </div>  <!-- end of modal div -->
