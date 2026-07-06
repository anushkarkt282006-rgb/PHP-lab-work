<?php
function studentDetails($name, $enrollment, $semester)
{
    echo "<h3>Student Details</h3>";
    echo "Student Name: $name <br>";
    echo "Enrollment Number: $enrollment <br>";
    echo "Semester: $semester";
}

// Function Call
studentDetails("Somu Maity", "BCA2025001", "Semester 4");
?>