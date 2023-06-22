<?php

require_once "./Traits/weightable.php";
require_once "./Traits/typeOf.php";

class Product{

    use Weightable;
    use TypeOf;

    public $name;
    public $price;
    public $quantity;

    public function __construct($name, $quantity)
    {
        $this -> name = $name;
        $this -> quantity = $quantity;
    }

    public function setPrice($price){
        if ($price>0) {
            $this->price = $price;
        }
    }

    public function getPrice(){
        if($this->price<0){
            throw new Exception("Il prezzo non può essere minore di 0");
        }
        return $this->price . " €";
    }
    
}


