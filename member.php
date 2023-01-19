<?php 
    session_start(); 
    require_once 'inc/functions.php';

    $message = isset($_GET['error']) ? htmlspecialchars($_GET['error']) : '';

    if (!isset($_SESSION['user']))
    {
        redirect('login', ["error" => "You need to be logged in to view this page"]);
    }
    
    if (isset($_POST["delete"]))
    {
        $id = $_SESSION['user']['id'];

        $member = $controllers->members()->delete_member($id);
        if ($member) {
            session_unset();
            redirect("register");
        }
    }

    if ($_SERVER['REQUEST_METHOD'] == 'POST')
    {
        if (isset($_POST["edit"]))
        {
            $id = $_SESSION['user']['id'];
            $fname = InputProcessor::processString($_POST['fname']);
            $sname =  InputProcessor::processString($_POST['sname']);
            $email =  InputProcessor::processEmail($_POST['email']);
            $password = $_SESSION['user']['password'];

            $valid = $fname['valid'] && $sname['valid'] && $email['valid'];
    
            $message = !$valid ? "Please fix the above errors:" : '';
    
            if ($valid)
            {
    
                $args = ['id' => $id,
                        'firstname' => $fname['value'],
                        'lastname' => $sname['value'],
                        'email' => $email['value']];
    
                $member = $controllers->members()->update_member($args);
                if (!$member) {
                    redirect("member", ["error" => "Invalid input"]);
                } else {
                    redirect("login", ["error" => "Please log in with your new details"]);
                }
            }
        }
    }



    $title = 'Member Page'; 
    require __DIR__ . "/inc/header.php"; 
?>

<h1 class="text-center"><?= $_SESSION['user']['firstname'] ?? 'Member' ?>!</h1>


<form method="post" action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>">
  <section>
    <div class="container py-5 h-75">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">
            <h3 class="mb-2">Update Account Details</h3>
              <div class="form-outline mb-4">
                <input required type="text" id="fname" name="fname" class="form-control form-control-lg" placeholder="Firstname" value="<?= htmlspecialchars($fname['value'] ?? '') ?>"/>
                <small class="text-danger"><?= htmlspecialchars($fname['error'] ?? '') ?></small>
              </div>

              <div class="form-outline mb-4">
                <input required type="text" id="sname" name="sname" class="form-control form-control-lg" placeholder="Surname" value="<?= htmlspecialchars($sname['value'] ?? '') ?>"/>
                <small class="text-danger"><?= htmlspecialchars($sname['error'] ?? '') ?></small>
              </div>


              <div class="form-outline mb-4">
                <input required type="email" id="email" name="email" class="form-control form-control-lg" placeholder="Email" value="<?= htmlspecialchars($email['value']?? '') ?>" />
                <small class="text-danger"><?= htmlspecialchars($email['error'] ?? '') ?></small>
              </div>

                <button name="edit" class="btn btn-success" type="submit">Update Account</button>
                <button name="delete" class="btn btn-danger" type="submit">Delete Account</button>
                <?php if ($message): ?>
                <div class="alert alert-danger mt-4">
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


<?php require __DIR__ . "/inc/footer.php"; ?>