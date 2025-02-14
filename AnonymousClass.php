<?php
// Anonymous Class
// Anonymous class adalah class yang tidak memiliki nama. Anonymous class biasanya digunakan untuk membuat class sekali pakai.

interface HelloWorld
{
    public function sayHello(): void;
}

// class AnonymousClass implements HelloWorld
// {
//     public function sayHello(): void
//     {
//         echo "Hello World" . PHP_EOL;
//     }
// }

// $helloWorld = new AnonymousClass();

$helloWorld = new class implements HelloWorld
{
    public function sayHello(): void
    {
        echo "Hello World" . PHP_EOL;
    }
};

$helloWorld->sayHello();

// Anonymous Class dengan Constructor

$hello = new class("Alvin") implements HelloWorld
{
    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    
    public function sayHello(): void
    {
        echo "Hello $this->name" . PHP_EOL;
    }
};

$hello->sayHello();