<!-- 39. Write a PHP program to demonstrate the concept of constructor and destructor.-->
<?php

class Student {
    public $name;
    public $age;

    // Constructor
    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
        echo "Constructor called for student: " . $this->name . "<br>";
    }

    // Destructor
    public function __destruct() {
        echo "Destructor called for student: " . $this->name . "<br>";
    }

    // Method to display student information
    public function displayInfo() {
        echo "Name: " . $this->name . ", Age: " . $this->age . "<br>";
    }
}

// Create objects of Student class
$student1 = new Student("Rutvik", 25);
$student2 = new Student("Dhaval", 27);

// Display information
$student1->displayInfo();
$student2->displayInfo();

?>