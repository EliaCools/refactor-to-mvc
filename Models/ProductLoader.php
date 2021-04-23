<?php


class ProductLoader
{
    private PDO $db;

    public function __construct(PDO $db)
    {
        $this->db = $db;
    }


    /** @return Product[] */
    public function allProducts(): array
    {


        $productsRaw = $this->db->query('SELECT * from products');

        foreach ($productsRaw as $product) {
            $products[] = new Product($product['id'], $product['name'], $product['price'], $product['tax']);
        }


        return $products;

    }


}
