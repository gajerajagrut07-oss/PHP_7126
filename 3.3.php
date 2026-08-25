<?php
setcookie("username", "Jagrut", time() + 3600, "/");

header("Location: welcome.php");
exit();
?>