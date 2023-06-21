<?php  
class Food extends Product{

public $category = null;
public $image = null;
public $weight = "500gr";

public function __construct($name, $price, $quantity, $weight, $category, $image)
{
    parent::__construct($name, $price, $quantity);

    $this->category = $category;
    $this->image = $image;
    $this->weight = $weight;
}

}

?>