<?php

class Manager
{
    public string $name;

    public string $title;

    public function __construct(string $name = "", string $title = "Manager")
    {
        $this->name  = $name;
        $this->title = $title;
    }

    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is Manager $this->name" . PHP_EOL;
    }
}

class VicePresident extends Manager
{
    public function __construct(string $name = "")
    {
        parent::__construct($name, "VP");
    }

    public function sayHello(string $name): void
    {
        echo "Hi $name, my name is VP $this->name" . PHP_EOL;
    }
}
