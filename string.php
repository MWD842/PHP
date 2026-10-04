<?php

// String is array of characters.
// For example, "Hello" is a string of 5 characters: H, e, l, l, o.

// $name = "Mowadah";

// echo $name[0]; // Outputs: M
// echo $name[2]; // Outputs: w
// echo $name[4]; // Outputs: d

////////////////////////////////////////////////////////////////////////////////////////

// $name = "Mowadah";
// for ($i = 0; $i < strlen($name); $i++) {
//     echo $name[$i] . "\t"; // Outputs: M o w a d a h
// }

////////////////////////////////////////////////////////////////////////////////////////

// $name = "Mowadah Al Waili";
// $position = strpos($name, "Waili"); // Returns the position of the first occurrence of "Waili" in the string
// echo "Position of Waili: " . $position; // Outputs: Position of Waili: 8

////////////////////////////////////////////////////////////////////////////////////////

// $name = "Mowadah Al Hosani";
// $fix_name = str_replace("Hosani", "Waili", $name); // Replaces all occurrences of "Hosani" with "Waili"
// echo $fix_name; // Outputs: Mowadah Al Waili

////////////////////////////////////////////////////////////////////////////////////////

// $name = "Mowadah Al Waili";
// $fix_name = str_replace(" ", "", $name); // Replaces all occurrences of " " with ""
// echo $fix_name; // Outputs: MowadahAlWaili

////////////////////////////////////////////////////////////////////////////////////////

// $name = "    Mowadah Al Waili    ";
// $fix_name = trim($name); // Removes whitespace from the beginning and end of the string
// echo $fix_name; // Outputs: Mowadah Al Waili

////////////////////////////////////////////////////////////////////////////////////////

// $name = "Mowadah Al Waili";
// $name_array = str_split($name); // Splits the string into an array of characters
// print_r($name_array);
// // Outputs: 
// // Array ( [0] => M [1] => o [2] => w [3] => a [4] => d [5] => a [6] => h [7] =>   [8] => A 
// // [9] => l [10] =>   [11] => W [12] => a [13] => i [14] => l [15] => i )

////////////////////////////////////////////////////////////////////////////////////////

$name = "Mowadah,Al Waili";
$names = explode(",", $name); // Splits the string into an array of words
print_r($names);
// Outputs:
// Array ( [0] => Mowadah [1] => Al Waili )

