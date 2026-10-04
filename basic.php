<?php
/*
$coffee_quantity = 3;
$coffee_price = 3;
$coffee_total = $coffee_quantity * $coffee_price;


$sandwich_quantity = 2;
$sandwich_price = 5;
$sandwich_total = $sandwich_quantity * $sandwich_price;

echo "Coffee Total = " . $coffee_total . "\n";
echo "Sandwich Total = " . $sandwich_total . "\n"; 

////////////////////////////////////////////////////////////////////////////////////////

echo "Hello", " Mowadah!\n";
print "Hello World!\n"; 

////////////////////////////////////////////////////////////////////////////////////////

$a = 3;
$b = 4.3;
$c = $a * $b;
echo "* = " . $c . "\n";
$c = $a / $b;
echo "/ = " . $c . "\n";
$c = $a - $b;
echo "- = " . $c . "\n";
$c = $a + $b;
echo "+ = " . $c . "\n";
$c = $a % $b;
echo "% = " . $c . "\n"; */

////////////////////////////////////////////////////////////////////////////////////////

// while (true){
//   echo "Enter a number: \n";
//   $number = trim(fgets(STDIN));
//   if ($number >=0){
//     echo "The number $number is positive\n";
//   } else if ($number < 0){
//     echo "The number $number is negative\n";
//   } else {
//     echo "Invalid input\n";
//   }
//   echo "Do you want to exit? (y/n): ";
//   $exit = trim(fgets(STDIN));
//   if (trim($exit) === 'y') {
//     break;
//   }
// }

////////////////////////////////////////////////////////////////////////////////////////

// for (;true;){
//   echo "Enter a number: \n";
//   $number = trim(fgets(STDIN));
//   if ($number >=0){
//     echo "The number $number is positive\n";
//   } else if ($number < 0){
//     echo "The number $number is negative\n";
//   } else {
//     echo "Invalid input\n";
//   }
//   echo "Do you want to exit? (y/n): ";
//   $exit = trim(fgets(STDIN));
//   if (trim($exit) === 'y') {
//     break;
//   }
// }

////////////////////////////////////////////////////////////////////////////////////////

// for ($i = 0; $i < 10; $i++) {
//   echo $i . "\n";
// }

// echo is a function that outputs one or more strings. 
// It can take multiple parameters, which will be concatenated together. 
// The echo statement does not return a value, so it cannot be used in expressions.

////////////////////////////////////////////////////////////////////////////////////////

// function add($a, $b) {
//   echo $a + $b;
// }
// function sub($a, $b) {
//   echo $a - $b;
// }
// function mul($a, $b) {
//   echo $a * $b;
// }
// function div($a, $b) {
//   if ($b == 0) {
//     echo "Division by zero is not allowed.";
//   } else {
//     echo $a / $b;
//   }
// }
// function mod($a, $b) {
//   if ($b == 0) {
//     echo "Division by zero is not allowed.";
//   } else {
//     echo $a % $b;
//   }
// }

// echo"Enter the first number: ";
// $a = trim(fgets(STDIN));
// echo"Enter the second number: ";
// $b = trim(fgets(STDIN));
// echo "The sum of $a and $b is: ";
// add($a, $b);
// echo "\nThe difference of $a and $b is: ";
// sub($a, $b);
// echo "\nThe product of $a and $b is: ";
// mul($a, $b);
// echo "\nThe division of $a and $b is: ";
// div($a, $b);
// echo "\nThe modulus of $a and $b is: ";
// mod($a, $b);