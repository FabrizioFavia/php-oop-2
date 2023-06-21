<?php 
require "./Models/product.php";
require "./cart.php";
require_once "./allProduct.php";

header("Content-Type: application/json");

 $price= $userCart->total;
 $userCart = new Cart ([],0);
echo "Acquisto confermato, il prezzo totale è di ", $price, "€";
