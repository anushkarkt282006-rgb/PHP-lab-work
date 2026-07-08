<?php
echo "<h2>Using For Loop</h2>";

for($i = 5; $i <= 10; $i++)
{
    echo $i . "<br>";
}

echo "<h2>Using ForEach Loop</h2>";

$numbers = array(5, 6, 7, 8, 9, 10);

foreach($numbers as $num)
{
    echo $num . "<br>";
}
?>