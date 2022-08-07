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
  
<section>
  
  <div class="row">
 
     <?php
      require "../database/database.php";
     $getData = "SELECT * FROM `courses`";
     $res=$db_obj->read($getData);
     foreach ($res as $key) {?>
   
   
   <div class="col-xl-6 mb-4">
         <div class="card">
           <div class="card-body">
             <div class="d-flex justify-content-between align-items-center">
               <div class="d-flex align-items-center">
                 <img src="<?php echo $key['img']?>" alt="" style="width: 20%; height: 100%;object-fit:contain;" class="" />
                 <div class="ms-3">
                   <p class="fw-bold mb-1"><?php echo $key['name'] ?></p>
                   <p class="text-muted mb-0">Admin</p>
                 </div>
               </div>
               <span class="badge rounded-pill badge-success">Active</span>
             </div>
           </div>
           <div class="card-footer border-0 bg-light p-2 d-flex justify-content-around">
             <a class="btn btn-link m-0 text-reset" href="<?php echo $key['info'] ?>" role="button" data-ripple-color="primary">Documentation<i class="fas fa-envelope ms-2"></i></a>
             <a class="btn btn-link m-0 text-reset" href="#" role="button" data-ripple-color="primary">Question<i class="fas fa-phone ms-2"></i></a>
           </div>
         </div>
       </div>



     <?php 
     }
     ?>
 

  </div>
  
     
</section>
</body>

</html>