<?php

$i = 10;
$i += $i++ + $i + ++$i;
echo($i); // output 45 

// Step 1: $i = 10
// Step 2: $i++ return 10, then $i=11
// Step 3 ++$i return 12  $i=12 
// Step 4: $i += 10+11+12
// Step 5 12 += 33
// Step 6 $i=45