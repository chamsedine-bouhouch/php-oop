<?php
// Abstract classes are declared with the abstract keyword, and contain abstract methods.
abstract class Vehicle
{
    protected $tankVolume;
    // Abstract classes can have non abstract methods
    public function setTankVolume($volume)
    {
        $this->tankVolume = $volume;
    }
    abstract public function CalcMillesFullTrack();
}
class Car extends Vehicle
{
    // Since we inherited abstract method, we need to define it in the child class, 
    // by adding code to the method's body.
    public function CalcMillesFullTrack()
    {
        return $this->tankVolume * 3;
    }
}
class Bus extends Vehicle
{
    private $NumPassenger = 100;
    public function CalcMillesFullTrack()
    {
        return ($this->tankVolume) * $this->NumPassenger * 3;
    }
}


/* Main  Call */
$car = new Bus();
$car->setTankVolume(45);
echo $car->CalcMillesFullTrack();
