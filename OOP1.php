<?php
class Shape {
  private $degree; // Default rotation degree
  protected $name;

  public function __construct($degree, $name) {
    $this->degree = $degree;
    $this->name = $name;
  }

  public function rotate($degree) {
    // Implementation for rotating the shape
    $angle = 0;
    $newAngle = ($angle + $degree) % 360; // Ensure the angle stays within 0-359 degrees
    echo "Rotated angle is " . $newAngle . " of {$this->name}. ";
  }

  public function playSound() {
    // Implementation for playing sound associated with the shape
    echo "Playing sound for the {$this->name}.";
  }
}

class Square extends Shape {
  protected $name = "square"; // Set the name for Square

  // Polymorphism (Overloading) --> Change the number of parameters in the function for example remove the "name" and "degree" parameter from the constructor
  // Overloading deals with the constructor only "public function __construct()" not other methods like "public function playSound()" in PHP.
  public function __construct() {
    // Overriding
  }

  // Polymorphism (Overriding) --> Change the inside of the function but keep the same name of the function
  public function playSound() {
    // Overriding the playSound method to provide a specific implementation for Square
    echo "Playing sound for the specific shape... {$this->name}";
  }
}

class Circle extends Shape {
  protected $name = "circle"; // Set the name for Circle

  public function __construct() {
  }

  
  public function playSound() {
    echo "Playing sound for the specific shape... {$this->name}";
  }
}

class Triangle extends Shape {
  protected $name = "triangle"; // Set the name for Triangle

  public function __construct() {
  }

  
  public function playSound() {
    echo "Playing sound for the specific shape... {$this->name}";
  }
}

class Amoeba extends Shape {
  protected $name = "amoeba"; // Set the name for Amoeba

  private $x;
  private $y;


  public function __construct($x, $y) {
    $this->x = $x;
    $this->y = $y;
  }

  public function rotate($degree) {
    // Implementation for rotating the shape
    $angle = 0;
    $distanceFromOrigin = sqrt($this->x ** 2 + $this->y ** 2); // Calculate the distance from the origin
    $rotateInfluence = $distanceFromOrigin / 10; // Influence of rotation based on distance
    $randomFactor = rand(-10, 10); // Random factor to introduce variability
    $newAngle = ($angle + $degree + $rotateInfluence + $randomFactor) % 360; // Ensure the angle stays within 0-359 degrees
    echo "Rotated angle is " . $newAngle . " of {$this->name}. ";
  }
  public function playSound() {
    echo "Playing sound for the specific shape... {$this->name}";
  }
}

$square = new Square();
echo $square->rotate(80) . " ";
$square->playSound(); 
echo "\n";

$circle = new Circle();
echo $circle->rotate(380) . " ";
$circle->playSound(); 
echo "\n";

$triangle = new Triangle();
echo $triangle->rotate(470) . " ";
$triangle->playSound(); 
echo "\n";

$amoeba = new Amoeba(15, 69);
echo $amoeba->rotate(80) . " ";
$amoeba->playSound(); 
echo "\n";