<?php

$age = 20;
$salary = 300000;

// Sample if
if($age == 20) {
    echo "1";
}

// Without circle braces
if($age == 20) echo "1";


// Sample if-else
if ($age > 20) {
    echo '1'.'<br>';
} else {
    echo '2'.'<br>';
}

// Difference between == and ===
if($age == 20) {
    echo '1'.'<br>';
}
if($age === "20") {
    echo '2'.'<br>';
}

// if AND
if($age > 20 && $salary === 300000) {
    echo 'Do Something';
}

// if OR
if($age > 20 || $salary === 300000) {
    echo 'Do Something else';
}

// Ternary if
echo $age < 22 ? 'Young' : 'Old';

// Short ternary
$myAge = $age ?: '18';

print_r($myAge);

// Null coalescing operator
$myName = isset($name) ? $name : 'John';
$myName = $name ?? 'John';

// switch
$userRole = 'admin'; //editor, user, admin

switch($userRole) {
    case 'admin':
        echo 'is admin';
        break;
    case 'editor':
        echo 'is editor';
        break;
    case 'user':
        echo 'is user';
        break;
    default:
        echo 'unassigned';
        break;
}