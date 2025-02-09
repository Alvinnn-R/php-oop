<?php

/*
 * Properties dalam OOP PHP merupakan representasi karakteristik atau atribut yang dimiliki oleh sebuah class.
 * Properties dapat dianalogikan sebagai variabel yang terkapsulasi dalam class dan mendefinisikan state dari objek.
 * 
 * Beberapa aspek penting terkait properties:
 * 1. Visibility/Access Level (public, private, protected)
 * 2. Property Type Declaration (string, int, array, dll)
 * 3. Static vs Instance Properties
 * 4. Property Initialization dan Default Values
 * 
 * Properties menjadi fundamental dalam implementasi enkapsulasi data,
 * dimana data internal objek dapat diproteksi dan diakses melalui
 * mekanisme yang terkontrol menggunakan getter dan setter methods.
 */

require_once 'data/Person.php';

$person          = new Person();
$person->name    = "Alvin Rama";
$person->address = "Surabaya";
$person->country = "Indonesia";

// var_dump($person);

echo "Name: $person->name" . PHP_EOL;
echo "Address: $person->address" . PHP_EOL;
echo "Country: $person->country" . PHP_EOL;

$person2          = new Person();
$person2->name    = "Putra";
$person2->address = "Ponorogo";
$person2->country = "Indonesia";

var_dump($person2);

// Test Error : Property Type Declaration
// $person->name = [];