<?

class Product
{
    // private $name;
    // private $price;

    protected $name;
    protected $price;

    public function __construct($name, $price)
    {
        $this->name  = $name;
        $this->price = $price;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getPrice(): string
    {
        return $this->price;
    }
}

class ProductDummy extends Product{

    public function info(){
        echo "Name: $this->name" . PHP_EOL;
        echo "Price: $this->price" . PHP_EOL;
    }
}
