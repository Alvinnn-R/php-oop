<?

// Polymorphism
// Polymorphism adalah kemampuan sebuah method untuk behavior berbeda tergantung dari object yang memanggil method tersebut.

class Programmer
{

    public string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class BackendProgrammer extends Programmer
{

}

class FrontendProgrammer extends Programmer
{

}

class Company
{
    public Programmer $programmer;
}

// function sayHelloProgrammer(Programmer $programmer)
// {
//     echo "Hello Programmer $programmer->name" . PHP_EOL;
// }

// Type Check and Cast
function sayHelloProgrammer(Programmer $programmer)
{
    if ($programmer instanceof BackendProgrammer) {
        echo "Hello Backend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof FrontendProgrammer) {
        echo "Hello Frontend Programmer $programmer->name" . PHP_EOL;
    } elseif ($programmer instanceof Programmer) {
        echo "Hello Programmer $programmer->name" . PHP_EOL;
    }
}
