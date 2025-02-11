<?
namespace Data;

interface car
{
    function drive(): void;
    function getTire(): int;
}

class Avanza implements car
{

    public function drive(): void
    {
        echo "Drive Avanza";
    }

    public function getTire(): int
    {
        return 4;
    }
}
