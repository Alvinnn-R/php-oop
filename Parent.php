<?php

require_once 'data/Shape.php';

use Data\Rectangle;
use Data\Shape;

$shape = new shape();
echo $shape->getCorner() . PHP_EOL;

$rectangle = new Rectangle();
echo $rectangle->getCorner() . PHP_EOL;
// Parent Keyword
echo $rectangle->getParentCorner() . PHP_EOL;
