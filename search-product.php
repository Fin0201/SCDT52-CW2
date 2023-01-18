<?php
  require __DIR__ . "/inc/header.php";

  require_once './inc/functions.php';

  require __DIR__ . "/components/search-product.php";

  $results = '';
?>


<section class="vh-100 text-center">
    <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <?php
          if (!$reuslts) {
            require __DIR__ . "/components/products.php";
          } else {
            
          }
         
      </div>
    </div>
</section> 

<?php require __DIR__ . "/inc/footer.php"; ?>