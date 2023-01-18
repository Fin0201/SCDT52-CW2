<?php
session_start();
require __DIR__ . "/inc/header.php";
?>
     
   <h1 class="text-center">Manage users!</h1>

   <?php
   if (isset($_SESSION['user']))
   {
      if ($_SESSION['user']['accountType'] == 'admin')
      {
        ?>
        <section class="vh-100 text-center">
            <div class="container py-5 h-75">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <?php require __DIR__ . "/components/manage-users.php"; ?>
                </div>
            </div>
        </section>
        <?php
      }
   }
?>