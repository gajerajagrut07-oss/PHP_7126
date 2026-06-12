<?php
$month = date("F");

echo "Current Month: " . $month . "<br><br>";

if ($month == "January") {
    echo "Month is January<br>";
} else {
    echo "Month is not January<br>";
}

switch ($month) {
    case "January":
        echo "Switch: January";
        break;

    case "February":
        echo "Switch: February";
        break;

    case "March":
        echo "Switch: March";
        break;

    default:
        echo "Switch: Other Month";
}
?>