<?php
function calculator($num1, $num2, $operation) {
    switch ($operation) {
        case '+':
            return $num1 + $num2;
        case '-':
            return $num1 - $num2;
        case '*':
            return $num1 * $num2;
        case '/':
            if ($num2 != 0) {
                return $num1 / $num2;
            } else {
                return "Division by zero is not allowed.";
            }
        default:
            return "Invalid operation.";
    }
}

// Test the calculator
echo calculator(10, 5, '+');  // Output: 15
?>
