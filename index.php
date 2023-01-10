<?php
require "src/Model/Vehicule.php";
require "src/Model/Car.php";
require "src/Database/Logger.php";
require "src/Utils/Logger.php";

use App\Model\Car;
use App\Database\Logger as DatabaseLogger;
use App\Utils\Logger;

/* Main Call */
$car = new Car("C4");
$car->setBrand("BMW");
var_dump($car->getName());