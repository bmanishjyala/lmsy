<?php 

$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $name=$_POST['name'];
  $roleId=$_POST['register_as'];
  $email=$_POST['email'];
  $contact=$_POST['number'];
  $pass=$_POST['password'];
  $cfnpass=$_POST['confirmpassword'];

  // validation class
  require 'validation_class.php';
  // validation check

if($roleId ==""){
  $errors['register']="Register As Teacher or Student ";
}
 $errors['name']= $check->name($name);
   $errors['email']=$check->email($email);
   $errors['contact']=$check->contact($contact);
   $errors['pass']=$check->password($pass);
   $errors['cfnpass']=$check->confirm_password($cfnpass,$pass);
     



if($errors['name']== "" && $errors['email']=="" && $errors['contact']=="" && $errors['pass']=="" && $errors['cfnpass']=="" && $errors['register']==""){
        $encrypt=md5($pass);
  // connection and insertion file

  require "./database/database.php";
$insertQuery="INSERT INTO `users`(`name`, `email`, `contact`, `role_id`, `password` ) VALUES ('$name','$email','$contact','$roleId','$encrypt')";
 $res=$db_obj->write($insertQuery);
echo $res;
 echo "Hello";

 if($res){
 header('Location:./index.php');
 }else{
  
  echo "Not Inserted";
 }

 }



}
