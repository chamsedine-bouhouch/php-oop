<?php
/* According to the Polymorphism principle, 
methods in different classes that do similar things 
should have the same name. */
interface Shape
{
    public function CalcArea();
}

class Rectangle implements Shape
{
    private $width = 0;
    private $height = 0;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function CalcArea()
    {
        return $this->width*$this->height;
    }
}
class Square implements Shape
{
    private $side = 0;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function CalcArea()
    {
        return $this->side**2;
    }
}
class Circle implements Shape {
    private $radius;
     
    public function __construct($radius)
    {
      $this -> radius = $radius;
    }
    
    // calcArea calculates the area of circles 
    public function calcArea()
    {
      return $this -> radius * $this -> radius * pi();
    }
  }
$rectangle=new Rectangle(95,28);
var_dump( $rectangle->CalcArea());

$square=new Square(2023);
var_dump($square->CalcArea());

$circle=new Circle(500);
var_dump($circle->CalcArea());

