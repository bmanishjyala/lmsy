<?php
session_start();
if(!(isset($_SESSION['user_id'])&& ($_SESSION['user_role']==1))){
  header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
    <?php include "./components/mdbootstrap_css.php" ?>
</head>
<body>
    
 <?php include "./components/sidebar_header.php" ?>
   

   
   <main style="margin-top: 58px">
       <div class="container pt-4">
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Role</th>
      <th>Status</th>
      <th>Contact Number</th>
      <th>Created On</th>
    </tr>
  </thead>
  <tbody>
      
  <?php
       require "../database/database.php";
      $getData = "SELECT * FROM `users`";
      $res=$db_obj->read($getData);
      foreach ($res as $key) {?>
   <tr>
      <td>
        <div class="d-flex align-items-center">
          
          <div class="ms-3">
            <p class="fw-bold mb-1"><?php echo $key['name'] ?></p>
            <p class="text-muted mb-0"><?php echo $key['email'] ?></p>
          </div>
        </div>
      </td>
      <td>
        <p class="fw-normal mb-1"><?php echo (($key['role_id']==1)? "Admin/Teacher":"Student") ?></p>
        
      </td>
      <td>
      
      <?php if ($key['is_verified']==1) { ?><span class="badge badge-success rounded-pill d-inline">Verified</span> <?php }else{ ?> <span class="badge badge-warning rounded-pill d-inline">Awaiting</span><?php }?>
   
      
      </td>
      <td><?php echo $key['contact']?></td>
      <td>
        <button type="button" class="btn btn-link btn-sm btn-rounded">
        <?php echo $key['created_at']?>
        </button>
      </td>
    </tr>



      <?php 
      }
      ?>
 
  </tbody>
</table>
       </div>
   </main>
</body>
</html>