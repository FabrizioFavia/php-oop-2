<?php  
class Food extends Product{

public $category = null;
public $image = null;


public function __construct($name, $quantity, $category, $image)
{
    parent::__construct($name, $quantity);

    $this->category = $category;
    $this->image = $image;
    
}

}



?>