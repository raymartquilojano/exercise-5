<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "<h2>Your Input:</h2>";
    echo "Name: " . $name . "<br>";
    echo "Address: " . $address . "<br>";
    echo "Group No: " . $groupNo . "<br>";
    echo "Age: " . $age . "<br>";
    
}
?>
