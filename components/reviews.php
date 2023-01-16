<?php
require_once './inc/functions.php';

$reviews =$controllers->reviews()->get_all_reviews();

foreach ($reviews as $review):
?>
    <?php $members =$controllers->members()->get_member_by_id($review['userId']); ?>
    <div class="text-center col-4">
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title"><?= $members['firstname'] ?> <?= $members['lastname'] ?></p>
                        <h6 class="card-text"><?= $review['reviewText'] ?></h6>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
endforeach;
?>
