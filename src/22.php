<?php
// This PHP code is a basic example of how to display and manipulate data. It demonstrates how to output different types of values such as strings, numbers, arrays, objects, etc.
// To use this code in your project, you can copy the PHP code into your file, save it with a .php extension (e.g., math_homework.php), and then include or call the script from your project.

// Example 1: Outputing a string
echo "Hello, World!";
// Output:
"Hello, World!"

// Example 2: Outputting an integer value
echo 42;
// Output:
42

// Example 3: Outputting an array of integers
$numbers = [1, 2, 3, 4];
echo $numbers[0] . " and " . $numbers[1] . " are both integers.";
// Output:
1 and 2 are both integers.

// Example 4: Outputting an object with properties 'name' and 'age'
$person = [
    'name' => 'Alice',
    'age' => 30
];
echo "Name: " . $person['name'] . ", Age: " . $person['age'];
// Output:
Name: Alice, Age: 30

// Example 5: Error handling and outputting a message
if ($condition) {
    echo "Condition is true";
} else {
    echo "Condition is false";
}

?>
