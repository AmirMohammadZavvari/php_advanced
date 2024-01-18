<?php
    class Shape {
        public $name;
        public $color;
    
        public function __construct($name, $color) {
            $this->name = $name;
            $this->color = $color;
        }
    
        public function environment() {
            
        }
    
        public function area() {

        }
    }
    
    class Circle extends Shape {
        public function __construct($name, $color, $radius) {
            parent::__construct($name, $color);
            $this->radius = $radius;
        }
    
        public function environment() {
            return 2 * $this->radius * M_PI;
        }
    
        public function area() {
            return pow($this->radius, 2) * M_PI;
        }
    }
    
    class Rectangle extends Shape {
        public function __construct($name, $color, $length, $width) {
            parent::__construct($name, $color);
            $this->length = $length;
            $this->width = $width;
        }
    
        public function environment() {
            return 2 * ($this->length + $this->width);
        }
    
        public function area() {
            return $this->length * $this->width;
        }
    }
    
    // create a circle object
    $circle = new Circle("circle", "red", 5);
    echo "Area of circle: " . $circle->area() . "\n";
    echo "Environment of circle: " . $circle->environment() . "\n". "<br>";
    
    // create a rectangle object
    $rectangle = new Rectangle("rectangle", "blue", 3, 4);
    echo "Area of rectangle: " . $rectangle->area() . "\n";
    echo "Environment of rectangle: " . $rectangle->environment() . "\n";
    
?>