<?php
require_once './inc/functions.php';

$users =$controllers->members()->get_all_members();

if (isset($_POST["delete"]))
{
    $id = (int)$_POST['delete'];

    $member = $controllers->members()->delete_member($id);

    redirect('/manage-user');
}


foreach ($users as $user):
?>
    <div class="text-center col-4">
        <div class="container py-5 h-75">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <p class="card-title"><?= "{$user['firstname']} {$user['lastname']}" ?></p>
                        <h6 class="card-text">User ID: <?= $user['id'] ?></h6>
                        <form method="post" action="">
                            <button name="delete" class="btn btn-danger" value="<?php echo $user['id']; ?>" type="submit">Delete review</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
endforeach;
?>