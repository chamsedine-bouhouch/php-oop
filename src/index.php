<?php
// echo "hello world";
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
        return ' The car model is: ' .$this->name;
    }
};

/* Inheritance */
class Car extends Vehicule
{
    public function setBrand($brand)
    {
        $this->brand = $brand;
    }
}


//* Main Call */
$car = new Car();
$car->setBrand("BMW");
$car->getName();
var_dump($car);
