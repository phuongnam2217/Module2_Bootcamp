<?php
include_once "Model/products.php";
include_once "Service/Manage_Product.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product("Laptop"));
$productManager->add(new Product("Mobile"));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br>";
    echo $product->getPrice() . "<br>";
}
