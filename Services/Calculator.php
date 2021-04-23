<?php


class Calculator
{

    public static function roundedPriceWithTax(float|int $price, float|int $tax): float|int
    {

        return round($price * (1 + $tax), 2);

    }


}
