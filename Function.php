<?php

require_once 'data/Person.php';

// Test Function
// $alvin = new Person();
$alvin = new Person("Alvin", "Ponorogo");
$alvin->name = "Alvin Rama";
$alvin->address = "Surabaya";
$alvin->country = "Indonesia";

$alvin->sayHello("Bagus");

// $putra = new Person();
$putra = new Person("Putra", "Sidoarjo");
$putra->name = "Putra";
$putra->sayHello(null);

// self keyword
$alvin->info();
$putra->info();