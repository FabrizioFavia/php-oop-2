<?php 



class Toy extends Product{

    public $category = null;
    public $image = null;

    public function __construct($name, $price, $quantity, $category, $image)
    {
        parent::__construct($name, $price, $quantity);

        $this->category = $category;
        $this->image = $image;
    }


}

$ball = new Toy("Soft ball", 5, 1, "Dog", "https://m.media-amazon.com/images/I/61br3pIiogL._AC_SX522_.jpg");
$puppy = new Toy("Snow puppy", 10, 1, "Dog", "https://m.media-amazon.com/images/I/61HFYIEpuPL._AC_SL1500_.jpg");
