<?php

// Abstraction: Abstraction is the concept of hiding the complex implementation details of a class and exposing only the necessary functionalities to the user.

interface Shape {
  public function rotate(int $degree): int;
  public function playSound();
}

class Square implements Shape {
  public function rotate(int $degree): int{
    return 123;
  }
  public function playSound(){
    echo "Playing sound... ";
  }
}

class Amoeba implements Shape {
  public function rotate(int $degree): int{
    return 444;
  }
  public function playSound(){
    echo "Playing sound... ";
  }
}

$square = new Square();
echo $square->rotate(80) . " ";
$square->playSound();

$amoeba = new Amoeba();
echo $amoeba->rotate(80) . " ";
$amoeba->playSound();