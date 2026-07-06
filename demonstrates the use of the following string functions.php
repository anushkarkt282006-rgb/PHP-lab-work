<?php
// Define a sample string to test the functions
$string = "Hello World! Welcome to PHP programming.";

echo "Original String: \"" . $string . "\"<br><br>";

// 1) strlen() - Returns the length of a string
$length = strlen($string);
echo "1) Length of the string (strlen): " . $length . " characters<br>";

// 2) strpos() - Finds the position of the first occurrence of a substring
// Searching for the word "Welcome"
$position = strpos($string, "Welcome");
echo "2) Position of the word 'Welcome' (strpos): " . $position . "<br>";

// 3) str_word_count() - Counts the number of words in a string
$word_count = str_word_count($string);
echo "3) Number of words (str_word_count): " . $word_count . "<br>";

// 4) strrev() - Reverses a string
$reversed = strrev($string);
echo "4) Reversed string (strrev): " . $reversed . "<br>";

// 5) strtolower() - Converts a string to lowercase
$lowercase = strtolower($string);
echo "5) Lowercase string (strtolower): " . $lowercase . "<br>";

// 6) strtoupper() - Converts a string to uppercase
$uppercase = strtoupper($string);
echo "6) Uppercase string (strtoupper): " . $uppercase . "<br>";
?>