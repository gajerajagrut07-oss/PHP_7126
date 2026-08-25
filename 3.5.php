<?php
session_start();

$_SESSION['username'] = "Jagrut";
$_SESSION['course'] = "BCA";

echo "Session Created Successfully!<br>";
echo "Username: " . $_SESSION['username'] . "<br>";
echo "Course: " . $_SESSION['course'];
?>