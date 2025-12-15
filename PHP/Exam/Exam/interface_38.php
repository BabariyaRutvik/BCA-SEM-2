<!-- 38 . Write a PHP program to create and use interfaces in PHP.-->
<?php

// Define an interface
interface Vehicle {
    public function start();
    public function stop();
}

// Implement the interface in a class
class CarVehicle implements Vehicle {
    public function start() {
        return "Car is starting.";
    }

    public function stop() {
        return "Car is stopping.";
    }
}

// Create an object of the class
$car = new CarVehicle();

// Use the methods
echo $car->start(); // Output: Car is starting.
echo "<br>";
echo $car->stop();  // Output: Car is stopping.
echo "<br>";
?>