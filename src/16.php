<?php
$counter = 0;
for ($i = 1; $i <= 5; $i++) {
    if (rand() > 0.4) { // This is a pseudo-random number generator between 0 and 1
        $counter++;
    }
}
echo "The value of counter is: " . $counter;
?>
