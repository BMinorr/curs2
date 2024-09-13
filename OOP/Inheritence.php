<?php
class ParentClass {
    public $property1 = '1';
    public $property2 = '2';
    public $property3 = '3';

    public function getProperty2() {
        return $this->property2;
    }
}

class ChildClass extends ParentClass {

    private $salary;

    public function __construct($name, $age, $phone, $salary) {)
    {
        parent::__construct($name, $age, $phone);
        $this->salary = $salary;
    }
}