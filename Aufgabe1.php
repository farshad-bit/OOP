<?php
class Bicycle{
    public $manufacturer;
    public $model;
    public $year;

    public function __construct($manufacturer, $model, $year){
        $this->manufacturer = $manufacturer;
        $this->model = $model;
        $this->year = $year;
    }
}
//$bicycle = new Bicycle();
$kalkhoff = new Bicycle('Kalkhoff', 'image 3.b Move Wabe', 2022);

echo "Die marke  " . $kalkhoff->manufacturer . "<br>";
echo "das Model  " . $kalkhoff->model . "<br>";
echo "das Jahr " . $kalkhoff->year . "<br>";




?>
