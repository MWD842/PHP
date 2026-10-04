<?php
// Indexed arrays

// // index   0 , 1 , 2 , 3 , 4
// $numbers = [1, 2, 3, 4, 5];
// echo $numbers[0]; // Outputs: 1
// echo $numbers[4]; // Outputs: 5

////////////////////////////////////////////////////////////////////////////////////////

// $names = ["Alice", "Bob", "Charlie"];
// echo $names[0] . "\n"; // Outputs: Alice
// echo $names[1] . "\n"; // Outputs: Bob
// echo $names[2] . "\n"; // Outputs: Charlie

////////////////////////////////////////////////////////////////////////////////////////

// // Mixed data types in an array
// $names = ["Alice", 123, true, null, 45.67, false];
// echo $names[0] . "\n"; // Outputs: Alice
// echo $names[1] . "\n"; // Outputs: 123
// echo $names[2] . "\n"; // Outputs: 1 (true is converted to 1)
// echo $names[3] . "\n"; // Outputs: (empty string for null)
// echo $names[4] . "\n"; // Outputs: 45.67
// echo $names[5] . "\n"; // Outputs: (empty string for false)

////////////////////////////////////////////////////////////////////////////////////////

// $names = ["Alice", "Bob", "Charlie"];
// for ($index = 0; $index < count($names); $index++) {
//     echo $names[$index] . "\n";
// }
// // Output:
// // Alice
// // Bob
// // Charlie

////////////////////////////////////////////////////////////////////////////////////////

// $names = ["Alice", "Bob", "Charlie"];
// $length = count($names);
// for ($index = 0; $index < $length; $index++) {
//     echo $names[$index] . "\n";
// }
// // Output:
// // Alice
// // Bob
// // Charlie
// // Last index is $length - 1; 

////////////////////////////////////////////////////////////////////////////////////////

// $names =[];

// array_push($names, "Khalifa");
// array_push($names,"Mohammed");
// array_push($names,"Tareef");

// for ($i = 0; $i < count($names); $i++) {
//     echo $names[$i] . "\n";
// }

////////////////////////////////////////////////////////////////////////////////////////

// $names =[];

// array_push($names, "Khalifa", "Mohammed", "Tareef");

// for ($i = 0; $i < count($names); $i++) {
//     echo $names[$i] . "\n";
// }

////////////////////////////////////////////////////////////////////////////////////////

// $names =[];

// array_push($names, "Khalifa", "Mohammed", "Tareef");

// for ($i = 0; $i < count($names); $i++) {
//     echo $names[$i] . "\n";
// }

// $last = array_pop($names);
// echo "Last Element: " . $last . "\n"; // Outputs: Last Element: Tareef
// print_r($names); 
// // Outputs: 
// // Array ( 
// // [0] => Khalifa 
// // [1] => Mohammed 
// //)

////////////////////////////////////////////////////////////////////////////////////////

// $names =["Mowadah"];
// $students =["Rahma"];
// $merged = array_merge($names, $students);
// print_r($merged);
// // Output:
// // Array (
// // [0] => Mowadah
// // [1] => Rahma
// // )

////////////////////////////////////////////////////////////////////////////////////////

// // Queue: First In First Out (FIFO)

// $names_queue = ["Mowadah", "Rahma", "Khalifa"];

// // enqueue: add to the end of the queue
// function enqueue($element){
//     global $names_queue;
//     array_push($names_queue, $element);
// }

// // dequeue: remove from the front of the queue
// function dequeue(){
//     global $names_queue;
//     return array_shift($names_queue);
// }

// print_r($names_queue);

// enqueue("A");
// enqueue("B");
// dequeue();
// dequeue();
// enqueue("C");

// print_r($names_queue);

////////////////////////////////////////////////////////////////////////////////////////

// // Stack: Last In First Out (LIFO)

// $books_stack = ["Chemestry", "Physics", "Mathematics"];

// // push: add to the top of the stack
// function push($element){
//     global $books_stack;
//     array_push($books_stack, $element);
// }

// // pop: remove from the top of the stack
// function pop(){
//     global $books_stack;
//     return array_pop($books_stack);
// }

// print_r($books_stack);

// pop();

// print_r($books_stack);

// push("NewBook");

// print_r($books_stack);

////////////////////////////////////////////////////////////////////////////////////////

// // Stack: Last In First Out (LIFO)

// $books_stack = ["Chemestry", "Physics", "Mathematics"];

// // push: add to the top of the stack
// function push($element){
//     global $books_stack;
//     array_unshift($books_stack, $element);
// }

// // pop: remove from the top of the stack
// function pop(){
//     global $books_stack;
//     return array_shift($books_stack);
// }

// print_r($books_stack);

// pop();

// print_r($books_stack);

// push("NewBook");

// print_r($books_stack);

////////////////////////////////////////////////////////////////////////////////////////

// $Seating_list = [
//   ["A1", "A2", "A3","A4"],
//   ["B1", "B2", "B3","B4"],
//   ["C1", "C2", "C3","C4"]
//   ];

//   print_r($Seating_list);
//   echo "Seat at row 1, column 2: " . $Seating_list[0][1] . "\n"; // Outputs: Seat at row 1, column 2: A2

////////////////////////////////////////////////////////////////////////////////////////

// $Seating_list = [
//   ["A1", "A2", "A3","A4"],
//   ["B1", "B2", "B3","B4"],
//   ["C1", "C2", "C3","C4"]
// ];

// // Output per row
// for ($row = 0; $row < count($Seating_list); $row++) {
//   echo "Row " . ($row + 1) . ": ";
//   for ($seat =0; $seat < count($Seating_list[$row]); $seat++) {
//     echo $Seating_list[$row][$seat] . " ";
//   }
//   echo "\n";
// }

////////////////////////////////////////////////////////////////////////////////////////

// $Seating_list = [
//   ["A1", "A2", "A3","A4", "A5"],
//   ["B1", "B2", "-","B4"],
//   ["-", "C2", "C3","-"]
// ];

// // Output per row
// echo "X: Seat is taken\n\n";
// for ($row = 0; $row < count($Seating_list); $row++) {
  
//   echo "Row " . ($row + 1) . ": ";
//   for ($seat =0; $seat < count($Seating_list[$row]); $seat++) {
//     $seat_per_row = $Seating_list[$row][$seat];
//     if ($seat_per_row === "-") {
//       $seat_per_row = "X"; // Replace "-" with "X"
//     }
//     echo $seat_per_row . "\t"; // Use tab for better spacing
//   }
//   echo "\n";
// }