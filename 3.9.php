<?php

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    if (isset($_POST['remember'])) {

        setcookie("username", $username, time() + (86400 * 30), "/");
        setcookie("password", $password, time() + (86400 * 30), "/");
    }

    echo "Login Successful!";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Login Form</h2>

<form method="post">

    Username:
    <input type="text" name="username"
    value="<?php echo $_COOKIE['username'] ?? ''; ?>"
    required><br><br>

    Password:
    <input type="password" name="password"
    value="<?php echo $_COOKIE['password'] ?? ''; ?>"
    required><br><br>

    <input type="checkbox" name="remember">
    Remember Me<br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>