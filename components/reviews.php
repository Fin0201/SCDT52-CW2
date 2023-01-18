<?php
require_once './inc/functions.php';

$reviews =$controllers->reviews()->get_all_reviews();

if (isset($_POST["delete"]))
{
    $id = (int)$_POST['delete'];

    $review = $controllers->reviews()->delete_review($id);
    if ($review) {
        redirect("review");
    }

}


foreach ($reviews as $review):
?>
    <?php $members =$controllers->members()->get_member_by_id($review['userId']); ?>
    <div class="text-center col-4">
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title"><?= "{$members['firstname']} {$members['lastname']}" ?></p>
                        <h6 class="card-text"><?= $review['reviewText'] ?></h6>
                        <form method="post" action="">
                            <?php if (isset($_SESSION['user'])):
                                if ($_SESSION['user']['accountType'] == 'admin' || $_SESSION['user']['id'] == $review['userId']): ?>
                                    <button name="delete" class="btn btn-danger" value="<?php echo $review['id']; ?>" type="submit">Delete review</button>
                                <?php endif;
                            endif; ?>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
endforeach;
?>
