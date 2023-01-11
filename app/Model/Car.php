<?php
namespace App\Model;

require_once 'functions.php';

class Car extends Vehicule
{
    // With Type hinting
    public function setBrand(string $brand)
    {
        $this->brand = $brand;
    }
}