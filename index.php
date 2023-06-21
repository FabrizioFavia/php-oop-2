<?php

require "./Models/product.php";
require "./Models/toy.php";
require "./cart.php"



?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>

<body>
    <div class="container-lg p-5">
        <div class="productCard border border-success">
            <div>
                <?php print_r($ball->name) ?>
            </div>
            <div>
                <?php print_r($ball->price) ?>
            </div>
            <div>
                <?php print_r($ball->quantity) ?>
            </div>
            <div>
                <?php print_r($ball->category) ?>
            </div>
            <div>
                <img src=<?php print_r($ball->image) ?> alt="">
                
            </div>
            <div>
                <?php print_r($items) ?>
                
            </div>
        </div>
    </div>
</body>

</html>