<?php

require 'Animal.php';

class Hund extends Animal{
    public function makeSound() : string{
        return "Woof!</br>";
    }
    public function eat(string $food) : void{
        echo "The dog is eating $food";
    }
}
$dog = new Hund();
echo $dog->makeSound();
echo $dog->eat("PIZZA") . "<br>";


?>
