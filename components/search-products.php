<?php
session_start();
require_once './inc/functions.php';

$reviews =$controllers->reviews()->get_all_reviews();

if (isset($_POST["delete"]))
{
    $id = (int)$_POST['delete'];

    $del_product = $controllers->products()->delete_product($id);

}

foreach ($results as $product):
?>
    <div class="text-center col-4">
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <a class="card product-link" style="width: 18rem;" href="./product.php?id=<?= $product['id'] ?>">
                    <img src="<?= $product['image'] ?>" class="card-img-top" alt="image of <?= $product['name'] ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= $product['name'] ?></h5>
                        <p class="card-text">£<?= $product['price'] ?></p>
                        <form method="post" action="">
                            <?php if (isset($_SESSION['user'])):
                                if ($_SESSION['user']['accountType'] == 'admin'): ?>
                                    <button name="delete" class="btn btn-danger" value="<?php echo $product['id']; ?>" type="submit">Delete product</button>
                                <?php endif;
                            endif; ?>
                        </form>
                    </div>
                </a>
            </div>
        </div>
    </div>
<?php 
endforeach;
?>
