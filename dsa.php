<?php

function findMinMax(array $numbers) : array {
    $min = $max = $numbers[0];
    for ($i = 1; $i < count($numbers); $i++) {
        if ($numbers[$i] < $min) {
            $min = $numbers[$i];
        }
        if ($numbers[$i] > $max) {
            $max = $numbers[$i];
        }
    }
    return [$min, $max];
}

$numbers = [];
for ($i = 0; $i < 100; $i++) {
    $numbers[] = rand(1, 1000);
}

print_r(findMinMax(numbers:$numbers));
