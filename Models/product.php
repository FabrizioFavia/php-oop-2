<?php

require_once "./Traits/weightable.php";
require_once "./Traits/typeOf.php";

class Product{

    use Weightable;
    use TypeOf;

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


