<?php

// // This function takes two parameters, $a and $b, and outputs their sum. 
// // There is no return statement, so the function does not return a value. 
// // Instead, it uses the echo statement to output the result directly.
// function add($a, $b) { 
//   echo $a + $b;
//   // return;
// }
// add(10,15);

////////////////////////////////////////////////////////////////////////////////////////

// // This function takes two parameters, $a and $b, and returns their sum.
// // The return statement allows the function to send a value back to the caller, 
// // which can then be used in expressions or assigned to variables.
// function sum($a, $b) { 
//   return $a + $b;
// }
// $result = sum(5,8);
// $anotherResult = $result * 2; // Using the returned value in an expression
// echo "\n" . $result;
// echo "\n". $anotherResult;

////////////////////////////////////////////////////////////////////////////////////////

// function sumTwoNumbers($a, $b) {
//   if ($a < 0 && $b < 0) {
//     return -1; 
//   }
//   $theResult = $a + $b; 
//   return $theResult; 
// }

// $result = sumTwoNumbers(-1,-5);
// if ($result == -1) {
//   echo "Invalid input. Please enter non-negative numbers.";
// } else {
//   echo "The sum is: " . $result;
// }

// $result = sumTwoNumbers(-2,-3);
// echo "\n" . $result;

////////////////////////////////////////////////////////////////////////////////////////

// function sumTwoNumbers( int $a, int $b): int {
//   if ($a < 0 && $b < 0) {
//     return -1; 
//   }
//   $theResult = $a + $b; 
//   return $theResult; 
// }

// $result = sumTwoNumbers(-1,-5);
// if ($result == -1) {
//   echo "Invalid input. Please enter non-negative numbers.";
// } else {
//   echo "The sum is: " . $result;
// }

////////////////////////////////////////////////////////////////////////////////////////

// // Call by value --> take a copy of "a" and pass it to the function. The original value of "a" remains unchanged.
// function addOne(int $number): int {
//   $number = $number + 1;  // Same as $number++;
//   return $number;
// }


// $a = 10;
// $result = addOne($a);
// echo "a: " . $a . "\n"; // Outputs: a: 10
// echo "result: " . $result . "\n"; // Outputs: result: 11

////////////////////////////////////////////////////////////////////////////////////////

// // Call by reference --> pass the original "a" variable to the function, allowing the function to modify its value directly.
// function addOneByReference(int &$number): int {
//   $number = $number + 1;  // Same as $number++;
//   return $number;
// }


// $a = 10;
// $result = addOneByReference($a);
// echo "a: " . $a . "\n"; // Outputs: a: 11
// echo "result: " . $result . "\n"; // Outputs: result: 11

////////////////////////////////////////////////////////////////////////////////////////

// // Call by reference
// function addOneByReference(int &$number1 , int &$number2): int {
//   $number1 = $number1 + 1;  // Same as $number1++;
//   $number2 = $number2 + 1;  // Same as $number2++;
//   return $number1 + $number2;
// }


// $a = 10;
// $b = 20;
// $result = addOneByReference($a, $b);
// echo "a: " . $a . "\n"; // Outputs: a: 11
// echo "b: " . $b . "\n"; // Outputs: b: 21
// echo "result: " . $result . "\n"; // Outputs: result: 32

////////////////////////////////////////////////////////////////////////////////////////

