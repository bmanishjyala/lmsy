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
    <title>Dashboard</title>
    <?php include "./components/mdbootstrap_css.php" ?>

</head>

<body>

 <?php include "./components/sidebar_header.php" ?>
 
   

 <main style="margin-top: 65px">
       <div class="container pt-4">


            <!-- small info cards -->
 <section>
        <div class="row">
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-info">278</h3>
                    <p class="mb-0">Total Courses</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-book-open text-info fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 80%" aria-valuenow="80"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-warning">156</h3>
                    <p class="mb-0">Total Questions</p>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-comments text-warning fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 35%" aria-valuenow="35"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-success">156</h3>
                    <p class="mb-0">Total users</p>
                  </div>
                  <div class="align-self-center">
                    <i class="far fa-user text-success fa-3x"></i>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 13%" aria-valuenow="35"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-pencil-alt text-dark fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>278</h3>
                    <p class="mb-0">New Posts</p>
                  </div>
                </div>
                <div class="px-md-1">
                  <div class="progress mt-3 mb-1 rounded" style="height: 7px">
                    <div class="progress-bar bg-dark" role="progressbar" style="width: 33%" aria-valuenow="35"
                      aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
        </div>
        <div class="row">
         
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="far fa-comment-alt text-success fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>156</h3>
                    <p class="mb-0">New Comments</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
       
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div class="align-self-center">
                    <i class="fas fa-map-marker-alt text-danger fa-3x"></i>
                  </div>
                  <div class="text-end">
                    <h3>423</h3>
                    <p class="mb-0">Total Visits</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
        <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-primary">278</h3>
                    <p class="mb-0">New Projects</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-rocket text-primary fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          
          <div class="col-xl-3 col-sm-6 col-12 mb-4">
            <div class="card">
              <div class="card-body">
                <div class="d-flex justify-content-between px-md-1">
                  <div>
                    <h3 class="text-warning">64.89 %</h3>
                    <p class="mb-0">Unverified user</p>
                  </div>
                  <div class="align-self-center">
                    <i class="fas fa-chart-pie text-warning fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
          </div>
     
      </section>

  <!-- course display           -->


  <section>
  
   <div class="row">
  
      <?php
       require "../database/database.php";
      $getData = "SELECT * FROM `courses` Limit 2";
      $res=$db_obj->read($getData);
      foreach ($res as $key) {?>
    
    
    <div class="col-xl-6 mb-4">
          <div class="card">
            <div class="card-body">
              <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                  <img src="<?php echo $key['img']?>" alt="" style="width: 45px; height: 45px;object-fit:contain;" class="rounded-circle" />
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


      
    </main>

</body>

</html>