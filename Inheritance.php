<?php

require_once 'data/Manager.php';

$manager       = new Manager();
$manager->name = "Alvin";
$manager->sayHello("Jono");

$vp       = new VicePresident();
$vp->name = "Putra";
$vp->sayHello("Jono");