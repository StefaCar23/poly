<?php

    interface Math{
        public function calculate();
}

class Square implements Math{
    public $number;
    
    public function __construct($val) {
        $this->number = $val;
    }
    
    public function calculate() {
        echo "Square's surface area is: " . $this->number * $this->number . "<br />";
    }
}

class Cube implements Math{
    public $number;
    
    public function __construct($val) {
        $this->number = $val;
    }
    
    public function calculate() {
        echo "Cube's surface area is: " . $this->number * $this->number * 6 . "<br />";
    }
}

class Circle implements Math{
    public $number;
    
    public function __construct($val) {
        $this->number = $val;
    }
    
    public function calculate() {
        echo "The circle's surface area is: " . $this->number * $this->number * 3.14156 . "<br />";
    }
}

$square = new Square(2);
$square->calculate();

$cube = new Cube(5);
$cube->calculate();

$circle = new Circle(8);
$circle->calculate();

