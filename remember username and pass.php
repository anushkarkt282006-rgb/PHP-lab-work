<?php
if (isset($_POST["login"])) {
    $user = $_POST["username"];
    $pass = $_POST["password"];

    if (isset($_POST["remember"])) {
        setcookie("username", $user, time() + 86400 * 30);
        setcookie("password", $pass, time() + 86400 * 30);
    }

    echo "Login Successful";
}
?>

<form method="post">
    Username:
    <input type="text" name="username"
           value="<?php echo $_COOKIE['username'] ?? ''; ?>"><br><br>

    Password:
    <input type="password" name="password"
           value="<?php echo $_COOKIE['password'] ?? ''; ?>"><br><br>

    <input type="checkbox" name="remember"> Remember Me<br><br>

    <input type="submit" name="login" value="Login">
</form>