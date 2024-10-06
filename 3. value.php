<?php
function checkNumber($num) {
    if (!is_numeric($num)) {
        echo "Invalid input. Please enter a numeric value.";
    } elseif ($num > 0) {
        echo "The number is positive.";
    } elseif ($num < 0) {
        echo "The number is negative.";
    } else {
        echo "The number is zero.";
    }
}

// Test the function
checkNumber(-5);
?>
