<?php error_reporting(E_ALL ^ E_NOTICE); ?>
<?php
session_start();
if ((isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 1))) {
  header('Location: ./admin/');
  die;
}
if (isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 2)) {
  header('Location: ./student/');
  die;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <?php include "./admin/components/mdbootstrap_css.php" ?>
 <link rel="stylesheet" href="style.css">
  <style>



    .divider:after,
    .divider:before {
      content: "";
      flex: 1;
      height: 1px;
      background: #eee;
    }
  </style>
</head>

<body>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex align-items-center justify-content-center h-100">
        <div class="col-md-8 col-lg-7 col-xl-6">
          <img src="https://bootstrapious.com/i/snippets/sn-registeration/illustration.svg" class="img-fluid" alt="Phone image">
        </div>
        <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
          <p class="text-center display-6">Log <span style="color:rgb(108, 99, 255);"> in</span>  </p>
          <?php require "./validation/login_validation.php"; ?>
          <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
            <!-- Email input -->
            <div class="d-flex flex-column align-items-center mb-2">
              <div class="d-flex flex-row align-items-center w-100">
                <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  <input type="email" id="form3Example3c" name="email" class="form-control border-bottom" />
                  <label class="form-label" for="form3Example3c">Your Email</label>

                </div>
              </div>

              <div class="errorDiv mb-3 w-100">
                <span class="error" id="emailLabel"> <?php echo $errors['email']; ?> </span>
              </div>
            </div>

            <!-- Password input -->

            <div class="d-flex flex-column  align-items-center mb-2">
              <div class="d-flex flex-row align-items-center w-100">
                <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                <div class="form-outline flex-fill mb-0">
                  <input type="password" id="form3Example4c" name="password" class="form-control border-bottom w-100" />
                  <label class="form-label" for="form3Example4c">Password</label>

                </div>

              </div>
              <div class="errorDiv mb-3 w-100">
                <span class="error" id="emailLabel"> <?php echo $errors['pass']; ?> </span>
              </div>
            </div>

            <div class="d-flex justify-content-end align-items-center mb-4">
              <!-- Checkbox -->

              <a href="./services/forgot_password.php" style="color:rgb(108, 99, 255);">Forgot password?</a>
            </div>

            <!-- Submit button -->
            <div class="d-flex justify-content-center">
              <button type="submit" class="btn btn-lg text-white  mx-2">Log in</button>
              <button type="reset" class="btn btn-lg  text-white mx-2">Clear</button>
            </div>


            <div class="mt-4 d-flex justify-content-center">
              <p class="mb-5 pb-lg-2" style="color: grey">Don't have an account? <a href="./signup.php" style="color:rgb(108, 99, 255);">Register here</a></p>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
</body>

</html>