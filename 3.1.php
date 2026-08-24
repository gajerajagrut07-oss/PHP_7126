<?php
if (isset($_POST['submit'])) {
    $name = $_POST['name'];

    setcookie("username", $name, time() + 3600, "/");

    echo "Cookie Created Successfully!";
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Create Cookie</h2>

<form method="post">
    Enter Name:
    <input type="text" name="name" required>
    <input type="submit" name="submit" value="Create Cookie">
</form>

</body>
</html>