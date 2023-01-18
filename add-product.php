<?php
session_start();
require __DIR__ . "/inc/header.php";
?>
     
   <h1 class="text-center">Add Product!</h1>

   <?php
   if (isset($_SESSION['user']))
   {
      if ($_SESSION['user']['accountType'] == 'admin')
      {
         require __DIR__ . "/components/add-product-form.php";
      }
   }

require __DIR__ . "/inc/footer.php";
?>