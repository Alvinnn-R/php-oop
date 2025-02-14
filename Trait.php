<?php

require_once 'data/SayGoodBye.php';

use Data\Traits\ParentPerson;
use Data\Traits\Person;

$person = new Person();
// $person->hello("Alvin");
// $person->goodBye("Rama");
$parentPerson = new ParentPerson();
// $parentPerson->hello("Alvin");
// $parentPerson->goodBye("Rama");

$person->name = "saputra";
var_dump($person->name);
$person->test();

$person->run();
