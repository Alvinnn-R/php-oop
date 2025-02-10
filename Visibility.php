<?php

require_once 'data/Product.php';

$product = new Product("Apple MacBook Pro", 30000000);

// Error: Cannot access private property Product::$name
// echo "Product: $product->name" . PHP_EOL;
// echo "Price: $product->price" . PHP_EOL;

echo "Product: {$product->getName()}" . PHP_EOL;
echo "Price: {$product->getPrice()}" . PHP_EOL;

$Dummy = new ProductDummy("Samsung S24", 12000000);
$Dummy->info()

?>