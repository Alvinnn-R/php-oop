<?php

/*
 * Class adalah blueprint atau template yang digunakan untuk membuat objek dalam pemrograman berorientasi objek (OOP).
 * Sebuah class mendefinisikan properti (atribut) dan method (fungsi) yang akan dimiliki oleh objek-objek yang dibuat dari class tersebut.
 * 
 * Class mengimplementasikan konsep enkapsulasi dengan menyembunyikan detail implementasi internal dan hanya mengekspos antarmuka yang diperlukan.
 * Dalam paradigma OOP, class mendukung pewarisan (inheritance), polimorfisme, dan abstraksi untuk menciptakan kode yang modular dan dapat digunakan kembali.
 * 
 * Properti class dapat memiliki visibility modifier (public, private, protected) untuk mengontrol akses.
 * Method class dapat berupa constructor, getter/setter, dan method umum lainnya yang mendefinisikan perilaku objek.
 * 
 * @author Copilot
 * @version 1.0
 */

class Person
{
    // var $name;
    // var $address;
    // var $country;

    // Property Type Declaration
    public string $name;
    // public string $address;
    // public string $country;

    // Default Properties Value
    public string $country = "Indonesia";

    // Nullables Properties
    public ?string $address = null;

    // constant
    const AUTHOR = "Alvin Rama Saputra";

    // Function Construct
    public function __construct(string $name, ?string $address)
    {
        $this->name    = $name;
        $this->address = $address;
    }

    // Function
    public function sayHello(?string $name)
    {
        if (is_null($name)) {
            echo "Hi, My name is $this->name" . PHP_EOL;
        } else {
            echo "Hi $name, My name is $this->name" . PHP_EOL;
        }
    }

    // self keyword
    public function info()
    {
        echo "AUTHOR : " . self::AUTHOR . PHP_EOL;
    }

    // Destruct
    public function __destruct()
    {
        echo "Object person $this->name is destroyed" . PHP_EOL;
    }
}
