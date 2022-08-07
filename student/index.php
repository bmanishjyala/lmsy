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
    <title>Dashboard</title>
    <?php include "./components/mdbootstrap_css.php" ?>

</head>

<body>

 <?php include "./components/sidebar_header.php" ?>
   

   
    <main style="margin-top: 58px">
        <div class="container pt-4">


            <!-- small info cards -->
            <section>
                <div class="row">
                    <div class="col-xl-3 col-sm-6 col-12 mb-4">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex justify-content-between px-md-1">
                                    <div class="align-self-center">
                                        <i class="fas fa-pencil-alt text-info fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>278</h3>
                                        <p class="mb-0">New Posts</p>
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
                                        <i class="far fa-comment-alt text-warning fa-3x"></i>
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
                                        <i class="fas fa-chart-line text-success fa-3x"></i>
                                    </div>
                                    <div class="text-end">
                                        <h3>64.89 %</h3>
                                        <p class="mb-0">Bounce Rate</p>
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
                </div>
             
            </section>

  <!-- course display           -->
<section>
   <div class="row">
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
    </div>
    <div class="col-xl-3 col-sm-6 col-12 mb-4">
        <div class="card">
            <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
              <img src="https://mdbcdn.b-cdn.net/img/new/standard/nature/111.webp" class="img-fluid"/>
              <a href="#!">
                <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
              </a>
            </div>
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#!" class="btn btn-primary">Button</a>
            </div>
          </div>
    </div>
   </div>
   
      
</section>


        </div>
    </main>

</body>

</html>