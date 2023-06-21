<?php

class Product
{
    public $name;
    public $price = 0;
    public $quantity;

    public function __construct($name, $price, $quantity)
    {
        $this -> name = $name;
        $this -> price = $price;
        $this -> quantity = $quantity;
    }
}


