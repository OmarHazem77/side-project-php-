<?php
$products =[ 
    ["name" => "tshert"  , "price" => 75 , "Quantity"=>150 ],
    ["name" => "cap"  , "price" =>80 , "Quantity"=> 1504],
    ["name" => "hody"  , "price" => 90 , "Quantity"=> 0],
    ["name" => "boxer"  , "price" =>40 , "Quantity"=> 0] 
];

?>
<style>
    .products{display:flex;
             flex-wrap:wrap;
    }
    .product{ width:30%;
              padding:10px;
              margin: 20PX; 
              box-sizing:border-box;
              box-shadow:0 0 3px gray;
              margin-bottom:20px;
    }
</style>
<div class="products">
<?php foreach($products as $product){?>
    <div class="product">
        
        <h1><?= $product["name"] ?> </h1>
        <p>price <ins><?= $product["price"] ?> </ins></p>
        <p>Quantity <ins><?= $product["Quantity"] ?></ins></p>
        <?php if($product["Quantity"]==0) { ?>
           <p style = "color:red">out of stock</p>
       <?php } ?>
    </div>
    <?php } ?> 
</div>

