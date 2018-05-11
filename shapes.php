<?php

    interface Shape{
        public function get_area(); 
    }
    
    class Rect implements Shape{
        public $width;
        public $height;
        
        public function __construct($width, $height) {
            $this->width = $width;
            $this->height = $height;
        }
        
        public function get_area() {
            return $this->width * $this->height;
        }
    }
    
    class Circle implements Shape{
        public $radius;
        
        public function __construct($radius) {
            $this->radius = $radius;
        }
        
        public function get_area() {
            return $this->radius * $this->radius * 3.14156;
        }
    }
    
    function get_price(Shape $shape){
        return $shape->get_area() * 5;
    }
    
    $rect = new Rect(4, 8);
    $circle = new Circle(9);
    
    echo "Price for rectengular carpet is " . get_price($rect) . "<br />";
    echo "Price of the circle carpet is " . get_price($circle) . "<br />";
      