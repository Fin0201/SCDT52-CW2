<?php
    require __DIR__ . "/inc/header.php";

    require_once './inc/functions.php';

    $products =$controllers->products()->get_all_products();
?>

<h1 class="text-center">Search for a product!</h1>
<section class="vh-100 text-center">
    <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
         <?php require __DIR__ . "/components/products.php"; ?>
      </div>
    </div>
</section> 

<?php require __DIR__ . "/inc/footer.php"; ?>