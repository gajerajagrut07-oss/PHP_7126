<?php

// Numeric Array: Monday to Saturday
$days = array("Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday");

echo "<h3>Numeric Array</h3>";
print_r($days);


// Associative Array: Months and total days
$months = array(
    "January" => 31,
    "February" => 28,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
);

echo "<h3>Associative Array</h3>";
foreach ($months as $month => $days_in_month) {
    echo "$month => $days_in_month<br>";
}


// Multidimensional Array: Laptop details
$laptops = array(
    "Dell" => array(
        "Model" => "Inspiron 15",
        "Price" => 55000
    ),
    "HP" => array(
        "Model" => "Pavilion 15",
        "Price" => 60000
    )
);

echo "<h3>Multidimensional Array</h3>";

foreach ($laptops as $company => $details) {
    echo "Company: $company<br>";
    echo "Model: " . $details["Model"] . "<br>";
    echo "Price: ₹" . $details["Price"] . "<br><br>";
}

?>