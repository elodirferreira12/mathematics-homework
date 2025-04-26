<?php
function sum_numbers($numbers) {
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

// Example usage
$numbers = [1, 2, 3, 4, 5];
echo "The sum of the numbers is: " . sum_numbers($numbers);
?>
