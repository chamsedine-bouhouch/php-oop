<?php
// namespace App;
require_once 'functions.php';

use App\Model\Car;
use App\Database\Logger as DatabaseLogger;
use App\Utils\Logger;


/* Main Call */
$car = new Car("C4");
$car->setBrand("BMW");
var_dump($car->getName());

$logger = new DatabaseLogger();
$logger->log('this is a test message #1');
$logger->log('this is a test message #2');