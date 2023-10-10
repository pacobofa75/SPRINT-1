<?php

class Shape {
    public $width;
    public $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }
}

class Triangle extends Shape {
    public function area() {
        return ($this->width * $this->height) / 2;
    }
}

class Rectangle extends Shape {
    public function area() {
        return $this->width * $this->height;
    }
}

$triangle = new Triangle(6, 4);
echo "Area of triangle: " . $triangle->area() . "<br>";

$rectangle = new Rectangle(5, 8);
echo "Area of rectangle: " . $rectangle->area() . "<br>";
?>