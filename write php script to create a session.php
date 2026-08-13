<?php

session_start();

$_SESSION['username'] = "Anushka";
$_SESSION['course'] = "BCA";

echo "Session has been created successfully.";
echo "<br>";
echo "Username: " . $_SESSION['username'];
echo "<br>";
echo "Course: " . $_SESSION['course'];

?>