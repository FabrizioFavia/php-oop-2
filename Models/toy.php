<?php 

require "./cart.php";

class Toy extends Product{

    public $category = null;
    public $image = null;

    public function __construct($name, $price, $quantity, $category, $image)
    {
        parent::__construct($name, $price, $quantity);

        $this->category = $category;
        $this->image = $image;
    }

    public function addToChart($item){
        $items[] = $item;
    }


}

$ball = new Toy("Soft ball", 5, 1, "Dog", "https://m.media-amazon.com/images/I/61br3pIiogL._AC_SX522_.jpg");
$ball->addToChart($ball);
