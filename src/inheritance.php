<?php
/* This example illustrate the use of Inheritance in php; */ 
// Parent class
class Vehicule
{
    // private member accesible within the class
    // The $name property has a default value of "N/A"
    private $name = "N/A";
    // private member accecible from both the parent and the child classes
    protected $brand;

    public function __construct(string $name = null)
    {
        // Only if the model value is passed it will be assigned
        if ($name) {
            $this->name = $name;
        }
    }
    public function setName($x)
    {
        $this->name = $x;
    }
    public function getName()
    {
        return ' The car Name is: ' .$this->name;
    }
};

/* Child class */
class Car extends Vehicule
{
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}

/* Main Call */
$car = new Car("C4");
$car->setBrand("BMW");
var_dump($car->getName());