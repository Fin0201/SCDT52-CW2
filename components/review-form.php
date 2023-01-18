<?php 
require_once './inc/functions.php';
$message = '';


if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
   if (isset($_POST["leaveReview"]))
   {
      $reviewText = InputProcessor::processString($_POST['reviewText'] ?? '');

      $valid = $reviewText['valid'];

      if($valid) {
         $args = [
            'reviewText' => $reviewText['value'],
            'userId' => $_SESSION['user']['id']];

         $id = $controllers->reviews()->create_review($args);

         if(!empty($id) && $id > 0) {
            redirect("review", ["message" => "Review submitted!"]);
         }
         else {
         $message = "Error adding review."; //Change
         }
      }
      else {
         $message = "Please fix the following errors: ";
      }
   }
}
?>

<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" enctype="multipart/form-data">
<section>
   <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
         <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
               <div class="card-body p-5 text-center">
      
                  <h3 class="mb-2">Leave A Review</h3>
                  <div class="form-outline mb-4">
                     <input type="text" id="reviewText" name="reviewText" class="form-control form-control-lg" placeholder="Review" maxlength="255" required value="<?= htmlspecialchars($reviewText['value'] ?? '') ?>"/>
                     <span class="text-danger"><?= $reviewText['error'] ?? '' ?></span>
                  </div>
      
                  <button name="leaveReview" class="btn btn-primary btn-lg w-100 mb-4" type="submit">Add Review</button>
               
                  <?= isset($_GET['errmsg']) ? $message = $_GET['errmsg'] : '' ?>

                  <?php if ($message): ?>
                  <div class="alert alert-danger mt-4" role="alert">
                     <?= $message ?? '' ?>
                  </div>
               <?php endif ?>

               </div>
            </div>
         </div>
      </div>
   </div>
</section>
</form>