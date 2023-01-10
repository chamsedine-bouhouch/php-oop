<?php
namespace App\Model;

class Car extends Vehicule
{
    // With Type hinting
    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }
}