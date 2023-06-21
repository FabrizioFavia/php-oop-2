 <?php

class Cart
{
    public $items = [""];
    public $total = 0;

    public function __construct($items, $total)
    {
        $this->items = $items;
        $this->total = $total;
    }

}


$userCart = new Cart (["prova"],0)
?>
