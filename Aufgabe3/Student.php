<?php

require 'Person.php';
class Student extends Person{
    public $studentID;
    public $course;

    public function __construct($name, $age, $gender, $studentID, $course){
         parent::__construct($name, $age, $gender);
         $this->studentID = $studentID;
        $this->course = $course;
    }
    public function displayInfo(){
        echo "Student:<br> Deine Name : {$this->name} <br> Deine alter : {$this->age} <br> Deine gender : {$this->gender} <br> Deine StudentID : {$this->studentID} <br> Deine Cours : {$this->course} <br>";
    }

}
$per2 = new Student ('Alex', 25, 'Mann', 1233, "itpu");
// var_dump($per2);
$per2->displayInfo();
echo "--------<br>";



?>
