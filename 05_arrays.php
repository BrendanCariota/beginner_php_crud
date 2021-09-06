<?php

// Create array
$fruits = ["Banana", "Apple", "Orange"];

// Print the whole array
echo '<pre>';
var_dump($fruits);
echo '/<pre>';

// Get element by index
echo $fruits[1].'<br>';

// Set element by index
$fruits[0] = 'Peach';
echo '<pre>';
var_dump($fruits);
echo '/<pre>';

// Check if array has element at index 2
isset($fruits[2]); // true

// Append element
$fruits[] = 'Banana';

// Print the length of the array
echo count($fruits).'<br>';

// Add element at the end of the array
array_push($fruits, 'foo');

// Remove element from the end of the array
array_pop($fruits);

// Add element at the beginning of the array
array_unshift($fruits, 'bar');

// Remove element from the beginning of the array
array_shift($fruits);

// Split the string into an array
$string= "Banana,Apple,Peach";
explode(",", $string);

// Combine array elements into string
echo implode("&", $fruits).'<br>';

// Check if element exist in the array
in_array('Apple', $fruits); // true

// Search element index in the array
array_search('Mango', $fruits);

// Merge two arrays
$vegetables = ['Potato', 'cucumber'];
$mergedArray = array_merge($fruits, $vegetables);

var_dump([...$fruits, ...$vegetables]);

// Sorting of array (Reverse order also)
sort($fruits);



// https://www.php.net/manual/en/ref.array.php

// ============================================
// Associative arrays
// ============================================

// Create an associative array
$person = [
    'name' => 'Brad',
    'surname' => 'Traversy',
    'age' => 30,
    'hobbies' => ['Tennis', 'Video Games']
];
print_r($person);

// Get element by key
echo $person['name'].'<br>';

// Set element by key
$person['channel'] = 'TraversyMedia';

// Null coalescing assignment operator. Since PHP 7.4
if (!isset($person['address'])) {
    $person['address']= 'unknown';
}

$person['address'] = $person['address'] ?? 'unknown';

print_r($person);

// Check if array has specific key


// Print the keys of the array
array_keys($person);

// Print the values of the array
array_values($person);

// Sorting associative arrays by values, by keys
ksort($person);
print_r($person);

// Two dimensional arrays
$todos = [
    ['title' => 'Todo title 1', 'completed' => true],
    ['title' => 'Todo title 2', 'completed' => false]
];

print_r($todos);