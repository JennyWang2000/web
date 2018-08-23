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
            <legend> Log In <button class="close" data-dismiss="modal" aria-label="Close">
                            <span>&times;</span>
                            </button><!-- close cross -->
            </legend>
                <legend>Create a new user account<button class="close" data-dismiss="modal" aria-label="Close">
                    <span>&times;</span>
                    </button><!-- close cross -->
                </legend>
                <div style="width: 70%">

                                                <div>
                                                    <div class="form-group">
                                                        <input name="username" type="text" maxlength="40" class="form-control" placeholder="Username" />
                                                    </div>
                                                    <div class="form-group">
                                                        <input name="password" type="password" maxlength="50" class="form-control" placeholder="Password" />
                                                    </div>
                                                     <?php
                                                    
                                                    if(isset($_GET['error'])) {
                                                        echo "<span class=\"error\">Incorrect username / password. Please make sure that you have registered.</span>";
                                                    }
                                                    
                                                    if(isset($_GET['emptyerror'])) {
                                                        echo "<span class=\"error\">You need to enter a username and password. </span>";
                                                    }
                                                    
                                                    ?>
                                                   <div class="form-group">
                                                        <input type="submit" name="login" value="Sign In" class="btn btn-primary btn-block" />
                                                    </div>
                                                    <div class="form-group">
                                                        <a href="register.php">Register</a>
                                                    </div>


                                                </div>
                                            </div>

                                    </form>
                                    </div>
                            </div>
                        </div>

                </div>

                               
