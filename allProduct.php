<?php  
require_once "./Models/food.php";
require_once "./Models/toy.php";

$dogFood = [
new Food("Purina Gold", 35, 1, "Cane", "https://m.media-amazon.com/images/I/8173tbHvOmL._AC_CR0%2C0%2C0%2C0_SX480_SY360_.jpg"),
new Food("Royal Canin", 209, 1, "Cane", "https://m.media-amazon.com/images/I/41cQ0GI7fZL._AC_PIbundle-2,TopRight,0,0_SH20_.jpg"),
new Food("Royal Canin Maxi", 180, 1, "Cane", "https://m.media-amazon.com/images/I/31Gb6G8-GeL.__AC_SX300_SY300_QL70_ML2_.jpg"),
new Food("Purina Picnic", 70, 1, "Cane", "https://m.media-amazon.com/images/I/81GPeFvJmyL.__AC_SX300_SY300_QL70_ML2_.jpg"),
];

$catFood = [
new Food("Purina Pro Plan", 35, 1, "Gatto", "https://m.media-amazon.com/images/I/71jqAr4C1sL.__AC_SX300_SY300_QL70_ML2_.jpg"),
new Food("Royal Live Clear", 120, 1, "Gatto", "https://m.media-amazon.com/images/I/81H7uXHKNlL._AC_SX679_.jpg"),
new Food("Purina Multivitamins", 70, 1, "Gatto", "https://m.media-amazon.com/images/I/81izvA-NFDL.__AC_SX300_SY300_QL70_ML2_.jpg"),
new Food("Purina Natural", 100, 1, "Gatto", "https://m.media-amazon.com/images/I/71jMlBeN4UL.__AC_SX300_SY300_QL70_ML2_.jpg"),
];

$toy = [
new Toy("Soft ball", 5, 1, "Cane", "https://m.media-amazon.com/images/I/61br3pIiogL._AC_SX522_.jpg"),
new Toy("Snow puppy", 10, 1, "Cane", "https://shop-cdn-m.mediazs.com/bilder/gioco/per/cani/bday/dog/6/400/86497_pla_birthday_dog_fg_1985_6.jpg")
];


$dogFood[0]->setWeight(1);
$dogFood[1]->setWeight(10);
$dogFood[2]->setWeight(500, "g");
$dogFood[3]->setWeight(250, "g");


$catFood[0]->setWeight(2);
$catFood[1]->setWeight(300, "g");
$catFood[2]->setWeight(500, "g");
$catFood[3]->setWeight(1);

$toy[0]->setWeight(200, "g");
$toy[1]->setWeight(100, "g");

$dogFood[0]->setType("carne");
$dogFood[1]->setType("pesce");
$dogFood[2]->setType("carne");
$dogFood[3]->setType("pesce");


$catFood[0]->setType("pesce");
$catFood[1]->setType("carne");
$catFood[2]->setType("pesce");
$catFood[3]->setType("carne");

$toy[0]->setType("Gomma");
$toy[1]->setType("Peluche");


