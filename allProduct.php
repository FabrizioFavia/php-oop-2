<?php  
require_once "./Models/food.php";
require_once "./Models/toy.php";

$dogFood = [
new Food("Purina Gold", 35, 1, "14kg", "Dog", "https://m.media-amazon.com/images/I/8173tbHvOmL._AC_CR0%2C0%2C0%2C0_SX480_SY360_.jpg"),
new Food("Royal Canin", 209, 1, "20kg", "Dog", "https://m.media-amazon.com/images/I/41cQ0GI7fZL._AC_PIbundle-2,TopRight,0,0_SH20_.jpg"),
new Food("Royal Canin Maxi", 180, 1, "25kg", "Dog", "https://m.media-amazon.com/images/I/31Gb6G8-GeL.__AC_SX300_SY300_QL70_ML2_.jpg"),
new Food("Purina Picnic", 70, 1, "150kg", "Dog", "https://m.media-amazon.com/images/I/81GPeFvJmyL.__AC_SX300_SY300_QL70_ML2_.jpg"),
];

$catFood = [
new Food("Purina Pro Plan", 35, 1, "14kg", "Cat", "https://m.media-amazon.com/images/I/71jqAr4C1sL.__AC_SX300_SY300_QL70_ML2_.jpg"),
new Food("Royal Live Clear", 120, 1, "50kg", "Cat", "https://m.media-amazon.com/images/I/81H7uXHKNlL._AC_SX679_.jpg"),
new Food("Purina Multivitamins", 70, 1, "1kg", "Cat", "https://m.media-amazon.com/images/I/81izvA-NFDL.__AC_SX300_SY300_QL70_ML2_.jpg"),
new Food("Purina Natural", 100, 1, "150kg", "Cat", "https://m.media-amazon.com/images/I/71jMlBeN4UL.__AC_SX300_SY300_QL70_ML2_.jpg"),
];

$toy = [
new Toy("Soft ball", 5, 1, "Dog", "https://m.media-amazon.com/images/I/61br3pIiogL._AC_SX522_.jpg"),
new Toy("Snow puppy", 10, 1, "Dog", "https://m.media-amazon.com/images/I/61HFYIEpuPL._AC_SL1500_.jpg")
];
