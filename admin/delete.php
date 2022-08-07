<?php 
session_start();
if (!(isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 1))) {
    header('Location: ../');
}
// course delete

    $id=$_GET['delid'];
    $opType=$_GET['delt'];
    
    require "../database/database.php";
if($opType=="quest"){
    $deleted="DELETE FROM `coursequestionsrelation` WHERE `question_id` =$id";
    $res=$db_obj->write($deleted);
    
    // question related to course 

     header('Location:./courses.php');
}else{
    $deleted="DELETE FROM `courses` WHERE `id` =$id";
    $res=$db_obj->write($deleted);
    
    // question related to course 
    
    $deletedQuestion="DELETE FROM `coursequestionsrelation` WHERE `course_id` =$id";
    $resDel=$db_obj->write($deletedQuestion);
     header('Location:./courses.php');
}



?>