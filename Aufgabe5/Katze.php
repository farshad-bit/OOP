<?php


require 'Animal.php';

class Katze extends Animal{
    public function makeSound(): string{
        return "Meow!";
    }
    public function eat(string $food) : void{
        echo "The cat is eating $food.";
    }
}
$cat = new Katze();
echo $cat->makeSound() . "<br>";
echo $cat->eat('PIZZA');

?>
