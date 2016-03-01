<html>

<body>

<?php

session_start();

$username = isset($_POST['username']) ? $_POST['username'] : null;
$password = isset($_POST['password']) ? $_POST['password'] : null;

if (!empty($username) && !empty($password)) {

    if ($username == 'root' && $password == 'root') { // They are logged in

        $_SESSION['loggedIn'] = true;

    } else { // They are not logged in

        $_SESSION['loggedIn'] = false;
    }
}

?>

<?php if ($_SESSION['loggedIn'] == false) { ?>

    <form name="loginForm" action="login.php" method="post">

        Username: <input type="text" name="username"/> &nbsp;
        Password: <input type="password" name="password"/> &nbsp;

        <input type="submit" value="Login"/>
    </form>

<?php } else { ?>

    Welcome root, you are logged in!

<?php } ?>

</body>

</html>