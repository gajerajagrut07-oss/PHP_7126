<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
    DAYOFWEEK('2026-08-18') AS dayweek,
    WEEKDAY('2026-08-18') AS weekday,
    DAYOFMONTH('2026-08-18') AS daymonth,
    DAYOFYEAR('2026-08-18') AS dayyear,
    DAYNAME('2026-08-18') AS dayname";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "DAYOFWEEK: " . $row['dayweek'] . "<br>";
echo "WEEKDAY: " . $row['weekday'] . "<br>";
echo "DAYOFMONTH: " . $row['daymonth'] . "<br>";
echo "DAYOFYEAR: " . $row['dayyear'] . "<br>";
echo "DAYNAME: " . $row['dayname'] . "<br>";

mysqli_close($conn);
?>