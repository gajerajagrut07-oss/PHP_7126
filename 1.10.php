<?php
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];

$result = array_merge($arr1, $arr2);

foreach ($result as $value) {
    echo $value . " ";
}
?>