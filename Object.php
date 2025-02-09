<?php

/*
 * 
 * Object adalah instance atau wujud nyata dari sebuah class yang telah didefinisikan.
 * Dalam paradigma pemrograman berorientasi objek (OOP), object merupakan entitas fundamental
 * yang mengenkapsulasi data (properti/atribut) dan perilaku (method/fungsi) dalam satu kesatuan.
 * 
 * Object dibuat menggunakan keyword 'new' diikuti dengan nama class.
 * Setiap object memiliki:
 * 1. Identity  - Identitas unik yang membedakannya dari object lain
 * 2. State     - Kondisi internal yang disimpan dalam properti
 * 3. Behavior  - Kemampuan untuk melakukan aksi melalui method
 * 
 * Konsep ini memungkinkan pengembangan software yang lebih terstruktur,
 * mudah dimaintain, dan dapat digunakan kembali (reusable).
 */

require_once 'data/Person.php';

$person = new Person();

var_dump($person);
