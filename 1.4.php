<?php
$month = date("m");

if ($month == 8) {
    echo "Current Month is August<br>";
} else {
    echo "Month is not August<br>";
}

switch ($month) {
    case 8:
        echo "August";
        break;
    case 1:
        echo "January";
        break;
    default:
        echo "Other Month";
}
?>