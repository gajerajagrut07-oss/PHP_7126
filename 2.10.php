<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection Failed: " . mysqli_connect_error());
}

$sql = "SELECT
    CURDATE() AS current_date,
    CURRENT_DATE() AS current_date2,
    CURTIME() AS current_time,
    CURRENT_TIME() AS current_time2,
    UNIX_TIMESTAMP() AS unix_time,
    FROM_UNIXTIME(UNIX_TIMESTAMP()) AS normal_time";

$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

echo "CURDATE: " . $row['current_date'] . "<br>";
echo "CURRENT_DATE: " . $row['current_date2'] . "<br>";
echo "CURTIME: " . $row['current_time'] . "<br>";
echo "CURRENT_TIME: " . $row['current_time2'] . "<br>";
echo "UNIX_TIMESTAMP: " . $row['unix_time'] . "<br>";
echo "FROM_UNIXTIME: " . $row['normal_time'] . "<br>";

mysqli_close($conn);
?>