<?php

require_once 'data/Animal.php';

use Data\Cat;
use Data\Dog;

$cat       = new Cat;
$cat->name = 'Luna';
$cat->run();

$dog       = new Dog;
$dog->name = 'Heli';
$dog->run();
