<?php


class Product
{

    private int $id;
    private string $name;
    private float $price;
    private float $tax;

    public function __construct(int $id, string $name, float $price, float $tax)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->tax = $tax;
    }

    public function getRoundedPriceWithTax(): float|int
    {

        return Calculator::roundedPriceWithTax($this->price, $this->tax);

    }


    public function getId(): int
    {
        return $this->id;
    }


    public function getName(): string
    {
        return $this->name;
    }


    public function getPrice(): float
    {
        return $this->price;
    }


    public function getTax(): float
    {
        return $this->tax;
    }


}
