<?php

function calculatePercentage($m1, $m2, $m3, $m4, $m5) {
    $total = $m1 + $m2 + $m3 + $m4 + $m5;
    $percentage = $total / 5;
    return $percentage;
}

$result = calculatePercentage(80, 75, 90, 85, 88);
echo "Percentage: " . $result . "%";
?>