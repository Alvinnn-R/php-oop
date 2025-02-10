<?php

require_once 'data/Manager.php';

$manager       = new manager();
$manager->name = "Alvin";
$manager->sayHello("Jono");

$vp       = new VicePresident();
$vp->name = "Alvin";
$vp->sayHello("Jono");

// Constructor Overriding
$manager       = new manager();
// $manager->name = "";
$manager->sayHello("Jono");

$vp       = new VicePresident();
// $manager->name = "";
$vp->sayHello("Jono");
