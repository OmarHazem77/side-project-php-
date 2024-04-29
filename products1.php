<?php
$products = [
    ["name" => "tshirt", "price" => 75, "Quantity" => 150],
    ["name" => "cap", "price" => 80, "Quantity" => 1504],
    ["name" => "hoodie", "price" => 90, "Quantity" => 1500],
    ["name" => "boxer", "price" => 40, "Quantity" => 1800]
];
?>
<style>
    .products {
        display: flex;
        flex-wrap: wrap;
    }

    .product {
        width: 30%;
        padding: 10px;
        margin: 20px;
        box-sizing: border-box;
        box-shadow: 0 0 3px gray;
        margin-bottom: 20px;
    }
</style>
<div class="products">
    <?php foreach ($products as $product) { ?>
        <div class="product">
            <h1><?= $product["name"] ?></h1>
            <p>price <ins><?= $product["price"] ?></ins></p>
            <p>Quantity <ins><?= $product["Quantity"] ?></ins></p>
        </div>
    <?php } ?>
</div>
