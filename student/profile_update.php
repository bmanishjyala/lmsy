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
    <title>All Students</title>
    <?php include "./components/mdbootstrap_css.php" ?>
</head>
<body>
    
 <?php include "./components/sidebar_header.php" ?>
   

   
   <main style="margin-top: 58px">
       <div class="container pt-4">

       </div>
   </main>
</body>
</html>