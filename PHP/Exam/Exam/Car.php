<!--36. Write a PHP class for a "Car" with attributes (like model, color) and methods (start, stop).-->
<?php
 class Car{

    // Attributes
    public $model;
    public $color;

    // Constructor
    public function __construct($model, $color){
        $this->model = $model;  
        $this->color = $color;
    }
    // Method to start the Car
    public function start(){
        return "The " . $this->color . " " . $this->model . " is starting.";
    }
    // Method to stop the Car
    public function stop(){
        return "The " . $this->color . " " . $this->model . " is stopping.";
    }


}
// creating objects of Car class
$car1 = new Car("Toyota", "Red");
$car2 = new Car("Honda", "Blue");
// Using the methods
echo $car1->start(); // Output: The Red Toyota is starting.
echo "<br>";
echo $car2->stop();  // Output: The Blue Honda is stopping.
echo "<br>";
echo $car1->stop();  // Output: The Red Toyota is stopping.
echo "<br>";
echo $car2->start(); // Output: The Blue Honda is starting.
echo "<br>";

?>