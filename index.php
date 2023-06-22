<?php

require "./Models/product.php";
require "./cart.php";
require_once "./allProduct.php";


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="main.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.4.0/axios.min.js" integrity="sha512-uMtXmF28A2Ab/JJO2t/vYhlaa/3ahUOgj1Zf27M5rOo8/+fcTUVH0/E0ll68njmjrLqOBjXM3V9NiPFL5ywWPQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg bg-success">
            <div class="container-lg">
                <a class="navbar-brand text-white pb-1" href="#">Animal & Friends</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse d-flex justify-content-between" id="navbarNav">
                    <ul class="navbar-nav">

                        <li class="nav-item">
                            <a class="nav-link active text-white" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Products</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Pricing</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item">

                            <button class="btn" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight"><i class="fa-solid fa-cart-shopping text-dark fs-4 text-white"></i></button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!--DOG SECTION -->
    <div class="sectionTitle container-lg my-5">
        <h2>Cibo per cani</h2>
    </div>
    <div class="container-lg d-flex my-3">
        <?php
        foreach ($dogFood as $product) { ?>
            <div class="productCard border border-dark me-4 p-3">
                <div class="imgContainer mb-3">
                    <img class="productImage" src=<?php echo $product->image ?> alt="">
                </div>
                <h4><?php echo $product->name ?></h4>
                <div class="d-flex justify-content-between pt-2">
                    <p><strong>Prezzo: <?php echo $product->price ?> € </strong></p>
                    <p><strong>Peso: <?php echo $product->weight ?></strong></p>
                </div>
                <p><strong>Categoria: <?php echo $product->category ?></strong></p>
            </div>
        <?php } ?>
    </div>

    <!-- CAT SECTION -->
    <div class="sectionTitle container-lg my-5">
        <h2>Cibo per gatti</h2>
    </div>
    <div class="container-lg d-flex my-3">
        <?php
        foreach ($catFood as $product) { ?>
            <div class="productCard border border-dark me-4 p-3">
                <div class="imgContainer mb-3">
                    <img class="productImage" src=<?php echo $product->image ?> alt="">
                </div>
                <h4><?php echo $product->name ?></h4>
                <div class="d-flex justify-content-between">
                    <p><strong>Prezzo: <?php echo $product->price ?> € </strong></p>
                    <p><strong>Peso: <?php echo $product->weight ?></strong></p>
                </div>
                <p><strong>Categoria: <?php echo $product->category ?></strong></p>
            </div>
        <?php } ?>
    </div>

    <!-- TOYS -->

    <div class="sectionTitle container-lg my-5">
        <h2>Cibo per gatti</h2>
    </div>
    <div class="container-lg d-flex my-3">
        <?php
        foreach ($toy as $product) { ?>
            <div class="toyCard border border-dark me-4 p-3">
                <div class="imgContainer mb-3">
                    <img class="productImage" src=<?php echo $product->image ?> alt="">
                </div>
                <h4><?php echo $product->name ?></h4>
                <div class="pb-2">
                    <p><strong>Prezzo: <?php echo $product->price ?> € </strong></p>
                </div>
                <p><strong>Categoria: <?php echo $product->category ?></strong></p>

            </div>
        <?php } ?>
    </div>


    <!-- OFFCANVAS -->




    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h3 class="offcanvas-title" id="offcanvasRightLabel">Carrello</h3>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <?php
            foreach ($userCart->items as $product) { ?>
                <div class="cartProduct mb-4 p-2 d-flex">
                    <div class="cartImgContainer mb-3">
                        <img class="productImage" src=<?php echo $product->image ?> alt="">
                    </div>
                    <div class="d-flex flex-column">
                        <h5 class="ms-3"><?php echo $product->name ?></h5>
                        <div class="pb-2">
                            <p class="ms-3"><strong>Prezzo: <?php echo $product->price ?> € </strong></p>
                        </div>

                    </div>


                </div>
            <?php }

            ?>
            <h4 class="mb-3">Totale: <?php echo $userCart->total ?> €</h4>
            <button onclick="purchase()" class="btn btn-success">Acquista</button>
        </div>
    </div>
</body>

</html>

<script>
    function purchase() {
        axios.get("cartService.php").then((risposta) => {
            console.log(risposta.data);
            alert(risposta.data)
        })
    }
</script>