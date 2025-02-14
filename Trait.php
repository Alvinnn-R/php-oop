<?php

require_once 'data/SayGoodBye.php';

use Data\Traits\Person;

$person = new Person();
$person->hello("Alvin");
$person->goodBye("Rama");

$person->name = "saputra";
var_dump($person->name);

$person->run();
