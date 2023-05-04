<?php
class Person{
    private $name;
    private $age;
    

    public function __construct($name, $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function getname(){
        return $this->name;
    }
    public function setname($name){
        $this->name = $name;
    }
    public function getage(){
        return $this->age;
    }
    public function setage($age){
        $this->age = $age;
    }
}

$per = new Person('Alex', 32);
echo "Die Alter Name war  : " . $per->getname() . "<br>";
$per->setname("John");
echo "die neues Name ist  : " . $per->getname() . "<br>";
echo "Die alter age war : " . $per->getage() . "<br>";
$per->setage(18);
echo "Die neues age : " . $per->getage();


?>
