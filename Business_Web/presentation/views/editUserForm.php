<?php
require_once '../../header.php';
require_once '../../Autoloader.php';

$id = $_GET['id'];
//get a $user object for the $id number

$bs = new UserBusinessService();
$user = $bs->findByuserID($id);

?>
<div class="container">
<h1>Update an account</h1>

<form action="../handlers/processUpdateUser.php">
    <div class="form-group">
        <input id="userID" name="id" type="hidden" value="<?php echo $user->getId()?>"  class="form-control" />
    </div>

    <div class="form-group">
        <label for="firstname">First name</label>
        <input id="firstname" name="firstname" type="text" value="<?php echo $user->getFirst_name()?>" maxlength="100" class="form-control" placeholder="First name" />
    </div>

    <div class="form-group">
        <label for="lastname">Last name</label>
        <input id="lastname" name="lastname" type="text" value="<?php echo $user->getLast_name()?>" maxlength="40" class="form-control" placeholder="Last name" />
    </div>

    <div class="form-group">
        <label for="username">Username</label>
        <input id="username" name="username" type="text" value="<?php echo $user->getusername()?>" maxlength="40" class="form-control" placeholder="Username" />
    </div>

    <div class="form-group">
        <label for="password">Password</label>
        <input id="password" name="password" type="password"  value="<?php echo $user->getpassword()?>" maxlength="50" class="form-control" placeholder="Password" />
    </div>

        <input type="submit" name="login" value="Sign In" class="btn btn-primary btn-block" />

</form>
</div>