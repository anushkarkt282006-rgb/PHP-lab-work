<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") 
    
    // Fetching simple text data from an HTML input named 'username'
    if (isset($_POST['username'])) {
        $name = htmlspecialchars($_POST['username']);
        echo "Fetched Name: " . $name . "<br><br>";
    }