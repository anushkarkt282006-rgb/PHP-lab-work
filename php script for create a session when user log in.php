<?php

session_start();

if (isset($_SESSION['username'])) {
    header("Location: home.php");
    exit();
}

if (isset($_POST['login'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    // Sample username and password
    if ($username == "admin" && $password == "12345") {

        $_SESSION['username'] = $username;

        header("Location: home.php");
        exit();

    } else {

        $error = "Invalid username or password.";

    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login Form</h2>

<?php
if (isset($error)) {
    echo "<p>$error</p>";
}
?>

<form method="post">

    Username:
    <input type="text" name="username" required>

    <br><br>

    Password:
    <input type="password" name="password" required>

    <br><br>

    <input type="submit" name="login" value="Login">

</form>

</body>
</html>