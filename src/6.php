<?php

$number = $_GET['number'];
$factorial = 1;
for ($i = 2; $i <= $number; $i++) {
    $factorial *= $i;
}
echo $factorial;
?>