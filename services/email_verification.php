<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <?php include "../admin/components/mdbootstrap_css.php"  ?>
</head>

<body>
    <section class="d-flex justify-content-center aling-items-center">
        <div class="card mb-3 h-50" style="max-width: 540px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="../img/signup.webp" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Activate your Account</h5>
                        <p class="card-text">Hello <span class="text-success"><?php echo $_SESSION["user_name"] ?></span>  , You have registered to Codefox Learning Management System. Please Click the button given down below to acctiavte your account.</p>

                        <?php
                   require "../database/database.php";

                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            $userId=$_POST["id"];
                           if($userId){
                              $queryStatus="UPDATE `users` SET `is_verfied`='1' WHERE `user_id` = '$userId'";
                              $res=$db_obj->write($queryStatus);
                              if($res){
                                session_unset();
                                session_destroy();
                                header('Location:../');
                              }else{
                                echo "ther is some error while activating your account";
                              }
                           }
                            
                        }
                        ?>


                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                            <input type="hidden" name="id" value="<?php echo $_SESSION["user_id"] ?>">
                            <button type="submit" class="btn btn-primary">Activate your Account</button>
                        </form>
                        <p class="card-text text-center mt-3"><small class="text-muted">You can ignore this mail if you have already activated your account. </small></p>

                    </div>
                </div>
            </div>
        </div>
    </section>

</body>

</html>