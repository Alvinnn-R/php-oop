<?php

trait A
{
    public function doA(): void
    {
        echo "a" . PHP_EOL;
    }

    public function doB(): void
    {
        echo "b" . PHP_EOL;
    }
}

trait B
{
    public function doA(): void
    {
        echo "A" . PHP_EOL;
    }

    public function doB(): void
    {
        echo "B" . PHP_EOL;
    }
}

class Conflict
{
    use A, B {
        A::doA insteadof B;
        B::doB insteadof A;
    }
}

$conflict = new Conflict();
$conflict->doA();
$conflict->doB();
