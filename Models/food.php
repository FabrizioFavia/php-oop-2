<?php  
class Food extends Product{

public $category = null;
public $image = null;


public function __construct($name, $price, $quantity, $category, $image)
{
    parent::__construct($name, $price, $quantity);

    $this->category = $category;
    $this->image = $image;
    
}

}



?>