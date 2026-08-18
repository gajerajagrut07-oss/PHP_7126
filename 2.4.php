<?php

$str = "PHP is a powerful programming language.";

echo "String: $str<br><br>";


// 1. strlen()
echo "1. Length of String: ";
echo strlen($str);


// 2. strpos()
echo "<br><br>2. Position of 'powerful': ";
echo strpos($str, "powerful");


// 3. str_word_count()
echo "<br><br>3. Number of Words: ";
echo str_word_count($str);


// 4. strrev()
echo "<br><br>4. Reverse String: ";
echo strrev($str);


// 5. strtolower()
echo "<br><br>5. Lowercase: ";
echo strtolower($str);


// 6. strtoupper()
echo "<br><br>6. Uppercase: ";
echo strtoupper($str);

?>