<?php
    session_start();
    require __DIR__ . "/inc/header.php";

    $message =  isset($_GET['message']) ? htmlspecialchars($_GET['message']) : '';
?>

<h1 class="text-center"> <?php
if ($message) {
    echo $message;
} else {
    echo 'Leave a Review!';
}
?></h1>

<?php
    if (!isset($_SESSION['user'])) { ?>
        <section class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                    <div class="card shadow-2-strong" style="border-radius: 1rem;">
                        <div class="card-body p-5 text-center">
                            <h3 class="mb-2">Please sign in to leave a review</h3>
                            <a class="btn btn-primary btn-lg w-100 mb-4" type="submit" href="./login.php">Login</a>
                            <a class="btn btn-secondary btn-lg w-100" type="submit" href="./register.php">Register</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <?php }
    else {

        if (!$message) {
            require __DIR__ . "/components/review-form.php";
        } else { ?>
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-8 col-lg-6 col-xl-5">
                        <div class="alert alert-info mt-4 text-center" role="alert">
                            <?= $message ?? '' ?>
                        </div>
                    </div>
                </div>
        <?php }
    } ?>


<section class="vh-100 text-center">
    <div class="container py-5 h-75">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <?php require __DIR__ . "/components/reviews.php"; ?>
        </div>
    </div>
</section> 


<?php require __DIR__ . "/inc/footer.php"; ?>