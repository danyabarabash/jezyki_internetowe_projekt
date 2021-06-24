<?php
include("config.php");
include("classes/userProvider.php");
include("header.php");

if (isset($_POST['submit'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $userProvider = new UserProvider($con);
        $account = $userProvider->getUser($_POST['username']);
        if ($account) {
            if (md5($_POST['password']) == $account['password']) {
                $_SESSION['user'] = $account['username'];
                header('Location: /test/login.php?result=true'); // User logged
            } else {
                header('Location: /test/login.php?result=false'); // Wrong password
            }
        } else {
            header('Location: /test/login.php?result=false'); // if user not found
        }
    }
}

?>
<?=template_header('Home')?>
<!--<form method="post">
    <?php
        if (!empty($_GET)) {
            if ($_GET['result'] == 'true') { ?>
                <div class="alert alert-success" role="alert">
                    You are successfuly logged in!
                </div>
            <?php }
            if ($_GET['result'] == 'false') { ?>
                <div class="alert alert-danger" role="alert">
                    Wrong password or account was not found!
                </div>
            <?php }
        }?>
    <div class="form-group">
        <input type="text" name="username" placeholder="Username" required>
    </div>
    <div class="form-group">
        <input type="password" name="password" placeholder="Password" required>
    </div>
    <div class="form-group">
        <input type="submit" value="Login" name="submit">
    </div>
</form> -->


<form method="post" class="container mt-5" style="width: 30vw">
    <?php
    if (!empty($_GET)) {
        if ($_GET['result'] == 'true') { ?>
            <div class="alert alert-success" role="alert">
                You are successfuly logged in!
            </div>
        <?php }
        if ($_GET['result'] == 'false') { ?>
            <div class="alert alert-danger" role="alert">
                Wrong password or account was not found!
            </div>
        <?php }
    }?>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Username</label>
        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
    </div>
    <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
    </div>
    <button type="submit" name="submit" class="btn btn-success">Sign in</button>
</form>


</body>
</html>
