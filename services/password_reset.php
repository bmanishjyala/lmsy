<?php session_start();
$now = time();

   if($now > $_SESSION['expire'])

   {

       session_destroy();

      echo "Session is Expire Please Login or Try Again.";?><a href="../">Click here</a><?php
       

   }else{

  
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Reset Page</title>
    <!-- bootstrap link -->
    <?php include "../admin/components/mdbootstrap_css.php"  ?>
</head>
<body>
<section class="d-flex justify-content-center align-items-center" style="min-height:100vh ;">
<div class="card mb-3" style="max-width: 740px;">
  <div class="row g-0">
    <div class="col-md-4 d-flex align-items-center">
      <img src="../img/forgot.svg" class="img-fluid rounded-start" alt="forgotPassword">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h4 class="card-title  text-center">Forgot your password?</h4>
        <p class="card-text">Hey <span class="text-success"><?php echo $_SESSION['name'] ?></span>, we received a request to reset your password.Let’s get you a new one!</p>
<div class="d-flex justify-content-center">
<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
  Reset your Password
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Reset your password</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">

      <?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user_pass=$_POST['pass'];
$user_cfnpass=$_POST['cfn_pass'];
if(isset($user_pass)&&isset($user_cfnpass)){
    if($user_pass===$user_cfnpass){
        require "../database/database.php";
        $user_id= $_SESSION['user_id'];
        $user_pass= md5($user_pass);
        $queryStatus="UPDATE `users` SET `user_password`='$user_pass' WHERE `user_id` = '$user_id'";
        $res=$db_obj->write($queryStatus);
        if($res){
          session_unset();
          session_destroy();
          header('Location:../');
        }else{
          echo "ther is some error while reseting your account";
        }
    }
}

}
?>
      <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">


  <!-- Password input -->
  <div class="form-outline mb-4">
    <input type="text" id="form2Example2" name="pass" class="form-control" />
    <label class="form-label" for="form2Example2">Password</label>
  </div>
  <div class="form-outline mb-4">
    <input type="password" id="form2Example3" name="cfn_pass" class="form-control" />
    <label class="form-label" for="form2Example3">Confirm Password</label>
  </div>

  <!-- 2 column grid layout for inline styling -->


  <!-- Submit button -->
  <div class="d-flex align-items-center justify-content-center">
  <button type="submit" class="btn btn-primary mx-3 ">Confirm</button>
  <button type="reset" class="btn btn-primary mx-3 ">Clear</button>
  </div>

  
</form>

      </div>
    
    </div>
  </div>
</div>
</div>
        <p class="card-text lead fs-6 mt-3" >Didn’t request a password reset? You can ignore this message.</p>
        <p class="card-text"><small class="text-muted">Having trouble? @ contact us</small></p>
      </div>
    </div>
  </div>
</div>
</section>
</body>
</html>
<?php  }?>