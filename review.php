<?php
    require __DIR__ . "/inc/header.php";
    session_start();
?>

<h1 class="text-center">Leave A Review!</h1>

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
    <?php } else {
        require __DIR__ . "/components/review-form.php";
    }




?>

<?php require __DIR__ . "/inc/footer.php"; ?>