<?php  

require 'Shape.php';

class Rectangle extends Shape {
     public function getArea():float{
        return $this->width * $this->height;
    }
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }
} 
$rectanlage = new Rectangle(10, 5);
echo "Die Rectanlage ist " . $rectanlage->getArea() . "<br>";

?>
