<?php 

require_once 'data/Person.php';

define("APPLICATION", "Belajar PHP OOP");
const VERSION_PHP = 8.1;

echo APPLICATION . PHP_EOL;
echo VERSION_PHP . PHP_EOL;

// Cara mengakses constant pada class
echo Person::AUTHOR . PHP_EOL;

// Self Keyword

?>