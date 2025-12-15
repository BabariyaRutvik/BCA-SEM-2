<!-- 37. Write a PHP program to implement inheritance (e.g., a base class "Person" and a derived class "Employee").-->
<?php
  
// Base class 
class Person {
    public $name;
    public $age;

    public function __construct($name, $age) {
        $this->name = $name;
        $this->age = $age;
    }

    public function introduce() {
        return "Hello, my name is " . $this->name . 
               " and I am " . $this->age . " years old.";
    }
}

// Derived class
class Employee extends Person {
    public $employeeId;
    public $salary;

    public function __construct($name, $age, $employeeId, $salary) {
        parent::__construct($name, $age);
        $this->employeeId = $employeeId;
        $this->salary = $salary;
    }

    // Method overriding
    public function introduce() {
        return parent::introduce() .
               " I am an employee with ID: " . $this->employeeId .
               " and salary: ₹" . number_format($this->salary, 2);
    }
}

// Creating objects
$person1 = new Person("Rutvik", 25);
$employee1 = new Employee("Rutvik", 25, "EMP101", 30000);

// Display output
echo $person1->introduce();
echo "<br><br>";
echo $employee1->introduce();

?>
