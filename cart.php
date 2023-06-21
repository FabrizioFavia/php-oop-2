 <?php

 require_once "./Models/toy.php";
 require_once "./allProduct.php";

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
        $this->total += $item->price;
    }

    

}

 $userCart = new Cart ([],0);

 
 $userCart->addToCart($dogFood[0]);
 $userCart->addToCart($catFood[2]);
 $userCart->addToCart($toy[0]);

 
?>


