<?php

// single dimension arrays
// index arrays
$array_one = array('one',"two");
$array_two = array(3,4);


// extracting data from arrays
// traversing the arrays

foreach($array_one as $key => $one) {
    echo "$key > $one" , "!";
    echo "<br>";
}

echo "<pre>";
print_r($array_one);
print_r($array_two);
echo "</pre>";

echo "<pre>";
print_r(array_push($array_one,"four")); #add element
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_pop($array_one,)); #remove last element
echo "</pre>";

echo "<pre>";
print_r($array_one);
echo "</pre>";

echo "<pre>";
print_r(array_merge($array_one,$array_two)); #merge array
echo "</pre>";

echo "<pre>";
print_r(array_flip($array_one)); #flip the array
echo "</pre>";

?>