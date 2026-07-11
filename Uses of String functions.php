<?php
// Original String
$str = "Welcome to PHP Programming";

// 1. strlen() - Find the length of the string
echo "<h3>1. strlen()</h3>";
echo "Original String: " . $str . "<br>";
echo "Length of String: " . strlen($str);

echo "<hr>";

// 2. strpos() - Find the position of a specific word
echo "<h3>2. strpos()</h3>";
$word = "PHP";
$position = strpos($str, $word);

echo "Original String: " . $str . "<br>";
echo "Position of '$word': " . $position;

echo "<hr>";

// 3. str_word_count() - Count the number of words
echo "<h3>3. str_word_count()</h3>";
echo "Original String: " . $str . "<br>";
echo "Total Words: " . str_word_count($str);

echo "<hr>";

// 4. strrev() - Reverse the string
echo "<h3>4. strrev()</h3>";
echo "Original String: " . $str . "<br>";
echo "Reversed String: " . strrev($str);

echo "<hr>";

// 5. strtolower() - Convert string to lowercase
echo "<h3>5. strtolower()</h3>";
echo "Original String: " . $str . "<br>";
echo "Lowercase String: " . strtolower($str);

echo "<hr>";

// 6. strtoupper() - Convert string to uppercase
echo "<h3>6. strtoupper()</h3>";
echo "Original String: " . $str . "<br>";
echo "Uppercase String: " . strtoupper($str);
?>