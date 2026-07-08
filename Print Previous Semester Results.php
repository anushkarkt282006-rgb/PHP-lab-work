<?php
// Variable
$name = "Anushka Verma";
$semester = "Semester 2";
$percentage = 82.5;

// Constant
define("COLLEGE", "ABC College");

echo "<h2>Previous Semester Result</h2>";
echo "College: " . COLLEGE . "<br>";
echo "Student Name: " . $name . "<br>";
echo "Semester: " . $semester . "<br>";
echo "Percentage: " . $percentage . "%<br>";

if($percentage >= 40)
{
    echo "Result: PASS";
}
else
{
    echo "Result: FAIL";
}
?>