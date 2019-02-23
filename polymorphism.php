<?php

 abstract class Shape {
    abstract function area();
}

class Circle extends Shape {
    private $radius; 
    
    public function __construct($radius) {
    $this -> radius = $radius;
    }
    
    public function area() {
    return $this -> radius * $this -> radius * pi();
    }
   }

   class Rectangle extends Shape {
    private $width; 
    private $height;
    
    public function __construct($width,$height) {
    $this -> width  = $width;
    $this -> height = $height;
    }
    
    public function area() {
    return $this -> width * $this -> height;
    }
   }

$rect = new Rectangle(3,3);
echo 'Area of Rectangle is : '.$rect -> area(). '<br>';
$circ = new Circle (7);
echo 'Area of circle is : '.$circ -> area().'<br>';