<?php
include "../../header.php";

?>
<div class="container">
<h1>Create a new user account </h1>

<form action="../handlers/processNewUser.php">
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

        <input type="submit" name="login" value="Sign In" class="btn btn-primary btn-block" />

</form>
</div>