<?php 

class validation{
    

    function name($value){
        if (empty($value)) {
           return "Name is required";
          }else if(!preg_match("/^[a-zA-Z-' ]*$/",$value)){
           return "Only letters and white space allowed";
          }else {
            return NULL;
          }


    }
    function email($value){
        if (empty($value)) {
            return "Email is required";
            }
            else if(!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix",$value)) {
             return "Enter a Valid Email";
            }else {
              return NULL;
            }
    }



  function contact($value){
        if (empty($value)) {
          return  "Mobile Number  is required";
            }
            else if(strlen($value)!==10){
              return "Mobile Number Should be 10 digits";
            }else {
              return NULL;
            } 
    }
  function password($value){
        if (empty($value)) {
          return "Please Enter a Password";
             
            }else {
              return NULL;
            } 
    }
function confirm_password($value,$value1){
        if (empty($value)) {
          return  "Please Confirm Password";
          }else if($value!=$value1){
            return "Password Didn't Match";
           }else {
            return NULL;
           }
    }
        
       
       


}
class EmptyCheck{
  function empty($value){
    if (empty($value)) {
      return "Please Fill This Field";
  }
}
}

  
  
$check=new validation();
$is_empty=new EmptyCheck();
?>