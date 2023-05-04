<?php

abstract class Animal{
    abstract public function makeSound() : string;
    abstract public function eat(string $food) : void;
}
