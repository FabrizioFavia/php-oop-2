 <?php

 require_once "./Models/toy.php";

class Cart
{
    public $items = [""];
    public $total = 0;

    public function __construct($items, $total)
    {
        $this->items = $items;
        $this->total = $total;
    }
    public function addToCart($item){
        $this->items[] = $item;
    }

}


$userCart = new Cart ([],0);
$userCart->addToCart($ball);
$userCart->addToCart($puppy)
?>


