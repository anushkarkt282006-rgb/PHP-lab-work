<?php
$conn = mysqli_connect("localhost", "root", "");

mysqli_query($conn, "CREATE DATABASE IF NOT EXISTS college");
mysqli_select_db($conn, "college");

$sql = "CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(50),
    email VARCHAR(100),
    password VARCHAR(50)
)";

if (mysqli_query($conn, $sql))
    echo "Table Created Successfully";
else
    echo "Error: " . mysqli_error($conn);
?>