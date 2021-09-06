<?php

// Function which prints "Hello I am Zura"
function hello () {
    echo 'Hello I am Zura';
}
hello();

// Function with argument
function hi($name) {
    return "Hello I am $name";
}

echo hi('Zura').'<br>';
echo hi('Brad').'<br>';

// Create sum of two functions
function sum($a, $b) {
    return $a + $b;
}

echo sum(4, 5).'<br>';

// Create function to sum all numbers using ...$nums
function allSum(...$nums) {
    $total = 0;
    for($i = 0; $i < count($nums); $i++) {
        $total += $nums[$i];
    }
    return $total;
}

echo allSum(1,2,3,4,5,6);

// Arrow functions
function allSums(...$nums) {
    return array_reduce($nums, fn($carry, $n) => $carry + $n);
}

echo allSums(1,2,3,4,5,6);