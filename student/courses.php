<?php
session_start();
if (!(isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 2))) {
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
</head>
<body>
<?php
include "./components/sidebar_header.php"?>
   <main style="margin-top: 58px">
        <div class="container pt-4">
            
        <!-- jumbotron -->

<div class="p-5 text-center bg-light">
    <h1 class="mb-3">Course</h1>
    <h4 class="mb-3">You have Opted For This Course </h4>
    <button type="button" class="btn btn-primary" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
Take Test
</button>
  </div>

<!-- Button trigger modal -->

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-fullscreen">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Take Quiz</h5>
        <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body d-flex justify-content-center align-items-center ">

      <div class="card shadow-lg w-75">
  <div class="card-body">
    <h5 class="card-title">Q1</h5>
    <p class="card-text">What does Php Stands For ?</p>
    <button type="button" class="btn btn-primary">Button</button>
  </div>
</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

        </div>
   </main>
</body>
</html>
