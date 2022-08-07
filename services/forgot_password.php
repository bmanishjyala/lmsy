<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Forgot Password</title>
  <?php include "../admin/components/mdbootstrap_css.php"  ?>
  <link rel="stylesheet" href="../style.css">
</head>

<body class="d-flex justify-content-center align-items-center " style="min-height:100vh;">

  <div class="card shadow-lg mb-3" style="width: 400px;">
    <div class="row g-0">

      <div class="col-md-12">
        <div class="card-body">
          <h5 class="card-title">Forgot Password</h5>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" >

            <div class="form-floating mb-2 w-100">
              <input type="email" class="form-control" id="floatingInput" name="email" required placeholder="name@example.com">
              <label for="floatingInput">Email address</label>

            </div>

            <div class="mt-3 d-flex justify-content-center flex-column">
              <button class="mx-3  btn btn-primary mt-3" name="submit" type="submit">Send Reset Link</button>
              <button class="mx-3 btn btn-primary mt-3" name="reset" type="reset">Clear</button>
            </div>
            <div class="mt-3 text-center">
              <p>Don't have an account?<span class="signin_link"><a class="text-decoration-none mx-1" href="../signup.php">Sign Up</a></span></p>
            </div>
          </form>

         
        </div>
      </div>
    </div>
  </div>


</body>

</html>
<?php



if ($_SERVER["REQUEST_METHOD"] == "POST") {

  if ($_POST['email']) {
    $user_email = $_POST['email'];
    require "../database/database.php";
    $searchUser = "SELECT * FROM `users` WHERE `email` LIKE '$user_email'";
    $res = $db_obj->read($searchUser);
    if ($res) {
      $user_id = $res[0]['id'];
      $user_name = $res[0]['name'];
      session_start();
      $_SESSION['start'] = time();
      $_SESSION['name'] = $user_name;
     $_SESSION['expire'] = $_SESSION['start'] + (1 * 60) ; 

      header('Location: password_reset.php');
    } else {
      echo "No User Found With This Email";
    }
  }
}
?>