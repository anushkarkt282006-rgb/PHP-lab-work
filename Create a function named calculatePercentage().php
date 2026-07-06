<?php
function calculatePercentage($m1, $m2, $m3, $m4, $m5)
{
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = $total / 5;

    echo "<h3>Result</h3>";
    echo "Total Marks: $total <br>";

    return $percentage;
}

// Function Call
$per = calculatePercentage(85, 78, 90, 88, 79);

echo "Percentage: $per%";
?>