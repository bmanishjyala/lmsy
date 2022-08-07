<?php
session_start();
if (!(isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 1))) {
  header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Courses</title>
  <?php include "./components/mdbootstrap_css.php" ?>

  <style>
    .errorDiv {
      position: relative;
      width: 100%;
    }

    .error {
      position: absolute;
      font-size: 12px;
      margin-left: 25px;
      margin-top: 2px;
      color: red;
    }
  </style>
</head>

<body>
  <?php
  include "./components/sidebar_header.php" ?>
  <main style="margin-top: 58px">
    <div class="container ">

      <!-- jumbotron -->

      <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Course</h1>
        <h4 class="mb-3">Create And Update All Course Here</h4>
        <button type="button" class="btn btn-dark" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
          Add New Course
        </button>
      </div>


      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Course Basic Information</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>

            <?php

            require "../database/database.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $course_name = $_POST['course_name'];
              $course_img = $_POST['course_img'];
              $course_info = $_POST['course_info'];
              if ($course_name !== "" && $course_img !== "" && $course_info !== "") {
                $user_id = $_SESSION['user_id'];
                $insert = "INSERT INTO `courses`( `name`, `img`, `info`, `user_id`) VALUES ('$course_name','$course_img','$course_info','$user_id')";
                if ($db_obj->write($insert)) {
                  $course_name = $course_img = $course_info = "";
                }
              }
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
              <div class="modal-body">
                <div class="row mb-4">


                  <div class="col">
                    <div class="form-outline">
                      <input type="text" name="course_name" id="form6Example2" class="form-control" required />
                      <label class="form-label" for="form6Example2">Course Name</label>
                    </div>

                  </div>
                </div>



                <!-- Text input -->
                <div class="form-outline mb-4">
                  <input type="text" name="course_img" id="validationCustom02" class="form-control" required />
                  <label class="form-label" for="validationCustom02">Image Url</label>

                </div>


                <!-- Message input -->
                <div class="form-outline mb-4">
                  <textarea class="form-control" name="course_info" id="form6Example7" rows="4" required></textarea>
                  <label class="form-label" for="form6Example7">Reference information</label>

                </div>



                <!-- Submit button -->
                <button type="submit" name="submit" id="submit" class="btn btn-primary btn-block mb-4">Add Course</button>

              </div>
            </form>



          </div>
        </div>
      </div>

      
<div class="row row-cols-1 row-cols-md-3 g-4">
  <!-- iteraation of cards -->
      <?php
      $getData = "SELECT * FROM `courses` ORDER By id DESC";
      $res=$db_obj->read($getData);
      if($res){
        foreach ($res as $key) {?>
          <div class="col">
      <a href="showCourseInfo.php?csid=<?php echo $key['id'] ?>&&csname=<?php echo $key['name'] ?>">
      <div class="card  h-100">
           <img src="<?php echo $key['img'] ?>" style="  width: 100%;
         height: 15vw;
         object-fit: cover;" alt="Hollywood Sign on The Hill"/>
           <div class="card-body ">
             <h5 class="card-title text-dark"><?php echo $key['name'] ?></h5>
             <p class="card-text text-dark">
               This is a longer card with supporting text below as a natural lead-in to
               additional content. This content is a little bit longer.
             </p>
             <div class="d-flex justify-content-evenly mt-2">
               <a href="<?php echo $key['info'] ?>" class="btn btn-primary">Notes</a>
               <a href="delete.php?delid=<?php echo $key['id'] ?>" class="btn btn-primary">Delete</a>
             </div>
           </div>
         </div>
      </a>
       </div>
           <?php 
           }
           }
           ?>
      
     
      </div>
      </div>
      
      
 
  </main>
</body>

</html>