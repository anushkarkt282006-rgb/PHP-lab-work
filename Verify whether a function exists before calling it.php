<?php
function welcomeStudent()
{
    echo "Welcome to PHP Programming!";
}

// Check if function exists
if (function_exists("welcomeStudent"))
{
    welcomeStudent();
}
else
{
    echo "Error: Function does not exist.";
}
?>