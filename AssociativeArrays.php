<?php

// Associative arrays (Dictionaries, Maps) are arrays that use named keys that you assign to them.

// $person = ["first_name" => "John", "last_name" => "Doe", "age" => 30];
// echo $person["first_name"] . "\n"; // Outputs: John
// echo $person["last_name"] . "\n"; // Outputs: Doe
// echo $person["age"] . "\n"; // Outputs: 30

////////////////////////////////////////////////////////////////////////////////////////

// $person = [
//     ["first_name" => "John", "age" => 30],
//     ["first_name" => "Jane", "age" => 25],
//     ["first_name" => "Bob", "age" => 40]
// ];

// foreach ($person as $p) {
//     echo $p["first_name"] . " is " . $p["age"] . " years old.\n";
// }

// print_r($person); // Outputs the entire associative array structure

////////////////////////////////////////////////////////////////////////////////////////

// $person = ["first_name" => "John", "age" => 30];

// print_r($person);

// $person["grade"] = "A"; // Adding a new key-value pair to the associative array
// print_r($person);

////////////////////////////////////////////////////////////////////////////////////////

// $person = [];
// $person["name"] = "Mowadah";
// $person["grade"] = 89;

// $keys = array_keys($person);
// foreach ($keys as $key) {
//     echo $key . "\n"; // Outputs: name, grade
//     echo $person[$key] . "\n"; // Outputs: Mowadah, 89
// }

////////////////////////////////////////////////////////////////////////////////////////

// $person = [];
// $person["name"] = "Mowadah";
// $person["grade"] = 89;

// $keys = array_keys($person);
// $values = array_values($person);
// foreach ($keys as $key) {
//     echo $key . "\n"; // Outputs: name, grade
// }
// foreach ($values as $value) {
//     echo $value . "\n"; // Outputs: Mowadah, 89
// }

