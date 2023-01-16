<?php
require_once './inc/functions.php';

 $products =$controllers->products()->get_all_products();

foreach ($products as $product):
?>
    <div class="text-center col-4">
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <a class="card product-link" style="width: 18rem;" href="./product.php?id=<?= $product['id'] ?>">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="image of <?= $product['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text">£<?= $product['price'] ?></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php 
endforeach;
?>
