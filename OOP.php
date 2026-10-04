<?php

// OOP (Object-Oriented Programming) is a programming paradigm that uses objects and classes to structure code.
//  It allows for encapsulation, inheritance, abstraction, and polymorphism, making it easier to manage and maintain complex codebases.

// Encapsulation: Encapsulation is the concept of bundling data (properties or attributes) and methods (functions) that operate on that data into a single unit called a class.
// It restricts direct access to some of the object's components, which can prevent the accidental modification of data.
// In PHP, this is achieved using access modifiers like public, private, and protected.
class Shape {
  private $degree = 0; // Default rotation degree
  private $name;

  // Constructor is a special method that is automatically called when an object of the class is created. 
  // It is used to set up the initial state of the object.
  public function __construct($degree, $name) {
    $this->degree = $degree;
    $this->name = $name;
  }

  public function rotate() {
    // Implementation for rotating the shape
    $angle = 0;
    $newAngle = ($angle + $this->degree) % 360; // Ensure the angle stays within 0-359 degrees
    echo "Rotated angle is " . $newAngle . " of {$this->name}. ";
  }

  public function playSound() {
    // Implementation for playing sound associated with the shape
    echo "Playing sound for the {$this->name}.";
  }
}

class Square extends Shape {
  // Polymorphism: Polymorphism allows objects of different classes to be treated as objects of a common superclass.
  // In this case, the Square class inherits from the Shape class and can override its methods
  // Polymorphism (Overloading)
  public function __construct() {
    
  }

  public function playSound() {
    // Implementation for playing sound associated with the shape
    echo "Playing sound for the specific shape.";
  }
}

// $circle = new Shape(390, "circle");
// $circle->rotate(); // Output: Rotated angle is 30 of circle.
// $circle->playSound(); // Output: Playing sound for the circle.

$square = new Square();
$square->rotate(); // Output: Rotated angle is 90 of square.
$square->playSound(); 

////////////////////////////////////////////////////////////////////////////////////////