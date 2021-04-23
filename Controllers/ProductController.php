<?php


class ProductController
{


    public function render()
    {

        $connection = new Connection();
        $db = $connection->openConnection();

        $productLoader = new ProductLoader($db);
        $products = $productLoader->allProducts();

        require 'View/products.php';

    }

}
