<?php

require 'Shape.php';

class Circle extends Shape{
    public function getArea():float{
        return M_PI * pow($this->radius, 2);
    }
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }
}
$x = new Circle(4);
echo "Das ist die Fläche des Kreises : " . $x->getArea();
?>
