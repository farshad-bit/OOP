<?php

class Person {
    public $name;
    public $age;
    public $gender;
    public function __construct($name, $age, $gender){
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
    }
    public function displayInfo(){
        echo "Person : <br> Deine Name : {$this->name} <br> Deine alter : {$this->age} <br> Deine gender : {$this->gender} <br>"; 
    }

    
}

 $per1 = new Person ('Farshad', 32, 'Mann');
 // var_dump($per1);
$per1->displayInfo();
echo "--------<br>";
