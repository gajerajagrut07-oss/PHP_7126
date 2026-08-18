<?php

// Type casting
$num = "100";

echo "Original Value: $num<br>";
echo "Original Type: " . gettype($num) . "<br><br>";


// Convert string to integer
settype($num, "integer");

echo "After settype(): $num<br>";
echo "New Type: " . gettype($num) . "<br><br>";


// Convert integer to float
settype($num, "float");

echo "After converting to float: $num<br>";
echo "New Type: " . gettype($num) . "<br>";

?>