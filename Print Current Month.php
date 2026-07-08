<?php
$month = date("F");

echo "Current Month: " . $month . "<br><br>";

echo "<b>Using if...else</b><br>";

if($month == "January")
    echo "It is January";
else if($month == "February")
    echo "It is February";
else if($month == "March")
    echo "It is March";
else
    echo "Current month is " . $month;

echo "<br><br>";

echo "<b>Using switch</b><br>";

switch($month)
{
    case "January":
        echo "It is January";
        break;

    case "February":
        echo "It is February";
        break;

    case "March":
        echo "It is March";
        break;

    default:
        echo "Current month is " . $month;
}
?>