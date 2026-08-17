<?php

// Original array
$var = array("APPLE", "BANANA", "APPLE", "ORANGE");

echo "<h3>Original Array</h3>";
print_r($var);


// 1. array_change_key_case()
$student = array("NAME" => "Jagrut", "AGE" => 20);

echo "<br><br>1. Lower Case Keys:<br>";
print_r(array_change_key_case($student, CASE_LOWER));

echo "<br>Upper Case Keys:<br>";
print_r(array_change_key_case($student, CASE_UPPER));


// 2. array_chunk()
$months = array(
    "January", "February", "March",
    "April", "May", "June"
);

echo "<br><br>2. array_chunk():<br>";
print_r(array_chunk($months, 2));


// 3. array_count_values()
echo "<br><br>3. array_count_values():<br>";
print_r(array_count_values($var));


// 4. array_pop()
$colors = array("Red", "Green", "Blue");

echo "<br><br>4. array_pop():<br>";
array_pop($colors);
print_r($colors);


// 5. array_push()
array_push($colors, "Yellow");

echo "<br><br>5. array_push():<br>";
print_r($colors);


// 6. array_unshift()
array_unshift($colors, "Black");

echo "<br><br>6. array_unshift():<br>";
print_r($colors);


// 7. array_shift()
array_shift($colors);

echo "<br><br>7. array_shift():<br>";
print_r($colors);

?>