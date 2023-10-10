<?php
class Employee {
    public $name;
    public $salary;
    
    public function initialize($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }
    
    public function print() {
        echo "Name: " . $this->name . "<br>";
        
        if ($this->salary > 6000) {
            echo "Has to pay taxes.";
        } else {
            echo "Doesn't have to pay taxes.";
        }
    }
}

$employee1 = new Employee();
$employee1->initialize("John Doe", 8000);
$employee1->print();
?>