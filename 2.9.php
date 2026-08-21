<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
    HOUR('15:30:45') AS hr,
    MINUTE('15:30:45') AS min,
    SECOND('15:30:45') AS sec,
    DATE_FORMAT('2026-08-18', '%d-%m-%Y') AS formatted_date,
    DATE_SUB('2026-08-18', INTERVAL 5 DAY) AS sub_date";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "HOUR: " . $row['hr'] . "<br>";
echo "MINUTE: " . $row['min'] . "<br>";
echo "SECOND: " . $row['sec'] . "<br>";
echo "DATE_FORMAT: " . $row['formatted_date'] . "<br>";
echo "DATE_SUB: " . $row['sub_date'] . "<br>";

mysqli_close($conn);
?>