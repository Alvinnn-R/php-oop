<?
namespace Data;

interface hasBrand
{
    function getBrand(): string;
}

interface isMaintenance
{
    function isMaintenance(): bool;
}

interface car extends hasBrand
{
    public function drive(): void;
    function getTire(): int;
}

class Avanza implements car, isMaintenance
{

    public function drive(): void
    {
        echo "Drive Avanza";
    }

    public function getTire(): int
    {
        return 4;
    }

    public function getBrand(): string
    {
        return "Toyota";
    }

    public function isMaintenance(): bool
    {
        return false;
    }
}
