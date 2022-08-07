<?php 
 
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // getting value

  $email=$_POST['email'];
  $pass=$_POST['password'];
  $encrypt=md5($pass);
  // error check

  include "validation_class.php";
  $errors['email']=$check->email($email);
  $errors['pass']=$check->password($pass);

// connection + query run



if($errors['email']=="" && $errors['pass']==""){
 // connection and insertion file

 require "./database/database.php";
$search="SELECT * FROM `users` WHERE `email` LIKE '$email' AND `password` LIKE '$encrypt'";
$res=$db_obj->read($search);
?>
<pre><?php
print_r($res);?>
</pre><?php
 
 if($res[0]){
  $verified=$res[0]['is_verified'];
 $role_id=$res[0]['role_id'];
$user_id=$res[0]['id'];
 if($verified==1){
  if($role_id==1){
    session_start();
    $_SESSION['user_id']=$res[0]['id'];
    $_SESSION['user_role']=1;
    $_SESSION['user_name']=$res[0]['name'];
    $_SESSION['user_email']=$res[0]['email'];
    header('Location:./admin/');
 }else{
     session_start();
     $_SESSION['user_id']=$res[0]['id'];
     $_SESSION['user_role']=2;
     $_SESSION['user_name']=$res[0]['name'];
     $_SESSION['user_email']=$res[0]['email'];
     $querySelect="SELECT * FROM `courseopted` WHERE `user_id` like $res[0]['id']";
     $selectedCourse=$db_obj->read($querySelect);
     if($selectedCourse){
      header('Location:./student/');
     }else{
      header('Location:./student/selectCourse.php');
     }
    
   }
 }else{
   session_start();
  $_SESSION['user_name']=$res[0]['name'];
  $_SESSION['user_id']=$res[0]['id'];
  
    header("Location:./services/email_verification.php");
 }
 }else{
  ?><div class="  ">
    <div class="alert fixed-top   alert-danger  alert-dismissible fade show" role="alert">
  <strong>Error!</strong> Check Your Email/Password.

</div>
  </div> <?php
 }
 echo $_SESSION['name'];

}


  


 

}
