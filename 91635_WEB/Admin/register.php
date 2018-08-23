                    <a href="#" data-toggle="modal" data-target="#login/register"> Register </a>

                    <div id="register" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    </div>
                            </div>
                        </div>

                </div>


$email = test_input($_POST["email"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}

    <div class="modal fade" id="contact" tabindex="-1" role="dialog" aria-labbelledby="login/register" aria-hidden="true">

        <div class="modal-dialog">

            <div class="modal-content">

                <form method="post">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button><!-- close cross -->
                </div><!-- end of modal header -->

                <div class="modal-body">

                    <form action="../Admin/processNewUser.php" method="post">

                        <legend>Create a new user account<button class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                            </button><!-- close cross -->
                        </legend>

                        <div style="width: 70%">

                                <div>
                                <div class="form-group">
                                        <label for="firstname">First name</label>
                                        <input id="firstname" name="firstname" type="text" maxlength="40" class="form-control" placeholder="First name" />
                                    </div>

                                    <div class="form-group">
                                        <label for="lastname">Last name</label>
                                        <input id="lastname" name="lastname" type="text" maxlength="40" class="form-control" placeholder="Last name" />
                                    </div>

                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input id="username" name="username" type="text" maxlength="40" class="form-control" placeholder="Username" />
                                    </div>

                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input id="password" name="password" type="password" maxlength="50" class="form-control" placeholder="Password" />
                                    </div>

                                    <div class="form-group">
                                        <input name="email" type="email" maxlength="50" class="form-control" placeholder="Email" />
                                    </div>

                                <div class="form-group">

                                        <input type="submit" name="register" value="Create account" class="btn btn-primary btn-block" />
                                    </div>

                                </div>
                            </div>

                    </form>

                    <p>
                        <b>Email<sup class="error">*</sup>:</b>&nbsp;&nbsp;<span class="error"><?php echo $EmailErr; ?></span><br/>
                        <input type="email" name="email" size="25" value="<?php echo $email; ?>" required />
                    </p>

                    <p>
                    <p>
                        <b>Email<sup class="error">*</sup>:</b>&nbsp;&nbsp;<span class="error"><?php echo $EmailErr; ?></span><br/>
                        <input type="email" name="email" size="25" value="<?php echo $email; ?>" required />
                    </p>



