<?php
  require __DIR__ . "/inc/header.php";

  require_once './inc/functions.php';

  $results = '';


  if ($_SERVER['REQUEST_METHOD'] == 'POST')
  {
    if (isset($_POST["addReview"]))
    {
      $search = InputProcessor::processString($_POST['search']);

      $valid = $search['valid'];

      if ($valid) {

        $args = $search['value'];

        $products = $controllers->products()->get_product_by_name($args);

        if (!$products) {
          $results = "No results"; 
        } else {
          $results = $products; 
        }
      }
    }
  }
?>



<h1 class="text-center">Search for a product!</h1>

<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <div class="container py-5 w-50">
    <div class="input-group">
        <input type="text" id="search" name="search" class="form-control rounded-left" placeholder="Search" value="<?= htmlspecialchars($search['value'] ?? '') ?>" />
        <button name="addReview" class="btn btn-info border-light" type="submit">search</button>
    </div>
  </div>
</form>


<section class="text-center">
    <div class="container">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <?php
          if ($results == 'No results') { ?>
            <h2><?= $results ?></h2>
          <?php } elseif (!$results) {
            require __DIR__ . "/components/products.php";
          } else {
            require __DIR__ . "/components/search-products.php";
          }
          ?>
         
      </div>
    </div>
</section> 

<?php require __DIR__ . "/inc/footer.php"; ?>