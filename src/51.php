<?php
// Example PHP code to solve a mathematical problem

function calculateTriangleArea($side1, $side2, $side3) {
    // Using Heron's formula to calculate the area of a triangle given its side lengths
    $semiPerimeter = ($side1 + $side2 + $side3) / 2;
    $area = sqrt($semiPerimeter * ($semiPerimeter - $side1) * ($semiPerimeter - $side2) * ($semiPerimeter - $side3));
    return $area;
}

// Example usage:
$sideA = 5;
$sideB = 7;
$sideC = 8;

$triangleArea = calculateTriangleArea($sideA, $sideB, $sideC);
echo "The area of the triangle with sides $sideA, $sideB, and $sideC is: $triangleArea";
?>
