<?php
class ProductsControler
{
    private $productManager;

    public function __construct(){
        $this->productManager = new ProductManager();
    }


    public function displayProducts()
    {
        $products = $this->productManager->readAllProducts();

        return $products;
    }

}