<?php
require 'Person.php';

class Teacher extends Person {

    public $teacherID;
    public $subject;
    

    public function __construct($name, $age, $gender, $teacherID, $subject){
        parent::__construct($name, $age, $gender);
        $this->teacherID = $teacherID;
        $this->subject = $subject;
    }

    public function displayInfo(){
        echo "Teacher: <br> Deine Name : {$this->name} <br> Deine alter : {$this->age} <br> Deine gender : {$this->gender} <br> Deine techerID : {$this->teacherID} <br> Deine Subjekt : {$this->subject} <br>";
    }
}

$per3 = new Teacher('julia', 50, 'Frau', 1255, 'Mathe');
// var_dump($per3);
$per3->displayInfo();


?>
