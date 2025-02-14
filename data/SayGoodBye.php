<?
namespace Data\Traits;

trait sayGoodBye
{
    public function goodBye(?string $name): void
    {
        if (is_null($name)) {
            echo "Good Bye" . PHP_EOL;
        } else {
            echo "Good Bye $name" . PHP_EOL;
        }
    }
}

trait sayHello
{
    public function hello(?string $name): void
    {
        if (is_null($name)) {
            echo "Hello" . PHP_EOL;
        } else {
            echo "Hello $name" . PHP_EOL;
        }
    }
}

// trait properti
trait HasName
{
    public string $name;
}

trait CanRun
{
    abstract public function run(): void;
}

class ParentPerson
{
    public function goodBye(?string $name): void
    {
        echo "Good Bye in person" . PHP_EOL;
    }

    public function hello(?string $name): void
    {
        echo "Hello in person" . PHP_EOL;
    }
}

trait all
{
    use sayHello, sayGoodBye, HasName, CanRun {
        // dapat di Override
        // hello as private;
        // goodBye as private;
    }
}

class Person extends ParentPerson
{
    // use sayHello, sayGoodBye, HasName, CanRun {
    //     // dapat di Override
    //     hello as private;
    //     goodBye as private;
    // }

    // Trait Inheritance
    use all;

    public function run(): void
    {
        echo "Person $this->name is running" . PHP_EOL;
    }

    public function test(): void
    {
        $this->hello("Alvin");
        $this->goodBye("Kevin");
    }

}
