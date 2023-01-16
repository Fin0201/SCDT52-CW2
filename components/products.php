<?php
require_once './inc/functions.php';

 $products =$controllers->products()->get_all_products();

foreach ($products as $product):
?>
    <!-- <div class="col-4">
        <div class="card">
            <img src="<?= $product['image'] ?>" 
                class="card-img-top" 
                alt="image of <?= $product['description'] ?>">
            <div class="card-body">
                <h5 class="card-title"><?= $product['name'] ?></h5>
                <p class="card-text"><?= $product['description'] ?></p>
                <p class="card-text"><?= $product['price'] ?></p>
            </div>
        </div>
    </div> -->



    <section class="vh-100 text-center col-4">
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="width: 18rem;">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="image of <?= $product['description'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <!-- <p class="card-text"><?= $product['description'] ?></p> -->
                        <p class="card-text">£<?= $product['price'] ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php 
endforeach;
?>
