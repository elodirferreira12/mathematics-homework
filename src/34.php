<?php
// Define a function to calculate the factorial of a number
function factorial($number) {
    if ($number == 0 || $number == 1) {
        return 1;
    } else {
        return $number * factorial($number - 1);
    }
}

// Get user input for the number of terms in the series
$terms = readline("Enter the number of terms in the series: ");

// Check if the input is a valid integer
if (is_numeric($terms) && intval($terms) >= 0) {
    // Calculate and display the sum of the first $terms natural numbers
    echo "The sum of the first {$terms} natural numbers is: " . factorial($terms) . PHP_EOL;
}
else {
    echo "Please enter a valid positive integer for the number of terms." . PHP_EOL;
}
?>
