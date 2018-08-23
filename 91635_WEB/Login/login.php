<?php 
    require_once "../theme/head.php";

?>
<head>
</head>
<body>
            <div class="modal fade" id="login" tabindex="-1" role="dialog" aria-labbelledby="login" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-body">
                                <form action="loginHandler.php" method="POST">

                                    <legend> Log In
                                    </legend>

                                    <div style="width: 70%">
                                            <div>
                                                <div class="form-group">
                                                    User Name:
                                                    <input name="username" type="text" maxlength="40" class="form-control" placeholder="Username" />
                                                </div>
                                                <div class="form-group">
                                                    Password:
                                                    <input name="password" type="password" maxlength="50" class="form-control" placeholder="Password" />
                                                </div>
                                               <div class="form-group">
                                                    <input type="submit" name="login" value="Log In" class="btn btn-primary btn-block" />
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
</body>
</html>
