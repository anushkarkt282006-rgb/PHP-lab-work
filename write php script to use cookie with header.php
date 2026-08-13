<?php

if (isset($_POST['submit'])) {

    $username = $_POST['username'];

    setcookie("username", $username, time() + 3600, "/");

    header("Location: 3_2_read_cookie.php");
    exit();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookie with Header</title>
</head>
<body>

<h2>Cookie with Header</h2>

<form method="post">

    Enter Username:
    <input type="text" name="username" required>

    <br><br>

    <input type="submit" name="submit" value="Submit">

</form>

</body>
</html>