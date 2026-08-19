<!DOCTYPE html>
<html>
<body>

<h2>Sort an Array</h2>

<form method="post">
    Enter numbers separated by comma:
    <input type="text" name="numbers" required>
    <input type="submit" name="sort" value="Sort">
</form>

<?php
if (isset($_POST['sort'])) {

    $input = $_POST['numbers'];

    // Convert input into array
    $arr = explode(",", $input);

    // Remove spaces
    $arr = array_map('trim', $arr);

    // Sort array in ascending order
    sort($arr);

    echo "<h3>Sorted Array:</h3>";

    foreach ($arr as $value) {
        echo $value . " ";
    }
}
?>

</body>
</html>