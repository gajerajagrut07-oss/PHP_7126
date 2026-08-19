<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
    LENGTH('Hello World') AS len,
    CONCAT('Hello', ' ', 'World') AS con,
    CONCAT_WS('-', '2026', '08', '18') AS con_ws,
    TRIM('  Hello  ') AS trm,
    RTRIM('Hello  ') AS rtrm,
    LTRIM('  Hello') AS ltrm,
    LPAD('123', 5, '0') AS lpad,
    RPAD('123', 5, '0') AS rpad,
    LOCATE('World', 'Hello World') AS loc";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "LENGTH: " . $row['len'] . "<br>";
echo "CONCAT: " . $row['con'] . "<br>";
echo "CONCAT_WS: " . $row['con_ws'] . "<br>";
echo "TRIM: " . $row['trm'] . "<br>";
echo "RTRIM: " . $row['rtrm'] . "<br>";
echo "LTRIM: " . $row['ltrm'] . "<br>";
echo "LPAD: " . $row['lpad'] . "<br>";
echo "RPAD: " . $row['rpad'] . "<br>";
echo "LOCATE: " . $row['loc'] . "<br>";

mysqli_close($conn);
?>