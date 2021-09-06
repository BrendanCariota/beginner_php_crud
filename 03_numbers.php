<?php

// Declaring numbers
$a = 5;
$b = 4;
$c = 1.2;

// Arithmetic operations
echo $a + $b + $c.'<br>';

// Assignment with math operators
$a += $b; echo $a.'<br>';

// Increment operator
echo $a++.'<br>';
echo ++$a.'<br>';

// Decrement operator
echo $a--.'<br>';
echo --$a.'<br>';

// Number checking functions
is_float(1.25); // true
is_double(1.25); // true
is_int(5); // true
is_numeric('3.45'); // true
is_numeric('3g.45'); // false

// Conversion
$strNumber = '12.34';
$number = (float)$strNumber;
var_dump($number).'<br>';

// Number functions
echo floor(2.6).'<br>';

// Formatting numbers
'<br>';
$number = 123456789.12345; // 123 456 789,12
echo number_format($number, 2, '.', ',');

// https://www.php.net/manual/en/ref.math.php
