 <?php

class Cart
{
    public $items = [];
    public $total = 0;

    public function __construct($items, $total)
    {
        $this->items = $items;
        $this->total = $total;
    }

}


$userChart = new Cart (["prova"],0)
?>
