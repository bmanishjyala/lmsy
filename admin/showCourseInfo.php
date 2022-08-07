<?php
session_start();
if (!(isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 1))) {
    header('Location: ../');
}
require "../database/database.php";
$course_id = $_GET['csid'];
$course_name = $_GET['csname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $course_name ?></title>
    <?php include "./components/mdbootstrap_css.php" ?>


</head>

<body>
    <?php
      include "./components/sidebar_header.php" 
    ?>
    <main style="margin-top: 58px">
        <div class="container pt-4">

            <!-- jumbotron -->

            <div class="p-5 text-center bg-light">
                <h1 class="mb-3"><?php echo $course_name ?></h1>
                <h4 class="mb-3">Question will be displayed over here</h4>
                <button type="button" class="btn btn-dark" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
                    Add New Question
                </button>
            </div>

            <!-- modal -->

            <div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog ">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">SELECT QUESTION FROM LIST</h5>
                            <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">

                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">
                                        </th>


                                        <th scope="col">Question</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!-- showing question inside Modal -->
                                    <?php if ($_SERVER["REQUEST_METHOD"] == "POST") {

                                        if (isset($_POST)) {
                                            foreach ($_POST as $key => $value) {
                                                $questionRef = "INSERT INTO `coursequestionsrelation`(`course_id`, `question_id`) VALUES ('$course_id','$key')";
                                                $res = $db_obj->write($questionRef);
                                            }
                                        }
                                    }

                                    ?>



                                    <form action="" method="POST">
                                        <button class="btn btn-primary" type="submit">Submit</button>
                                        <?php

                                        $getData = "select id,question from questions;";
                                        $res = $db_obj->read($getData);

                                        foreach ($res as $key) { ?>
                                            <tr>
                                                <th scope="row">
                                                    <div class="form-check">
                                                        <input class="form-check-input" type="checkbox" name="<?php echo $key['id']  ?>" id="flexCheckDefault" />
                                                    </div>
                                                </th>
                                                <td><?php echo $key['question']  ?></td>

                                            </tr>
                                        <?php }

                                        ?>

                                    </form>
                                </tbody>
                            </table>

                        </div>

                    </div>
                </div>
            </div>


            <!-- showing all question related to the course -->
            <div class="container d-flex justify-content-center px-5">
                <table class="table  align-middle">
                    <thead>
                        <tr>
                            <th scope="col">Q_Number</th>
                            <th scope="col">Question</th>
                            <th scope="col">Control</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        // gettting all question id from table relation where course is (getting it from  paramterized link)

                        $getQuestionId = "SELECT `question_id`  FROM `coursequestionsrelation` WHERE `course_id` Like '$course_id' order by `created_at` desc";
                        $response = $db_obj->read($getQuestionId);
          
                        
                        // getting all question whose id matchs in relation table

                      if($response){
                        foreach ($response as $questionId ) {
                            
                            $id = $questionId['question_id'];
                            // echo $id;
                            $question = "SELECT id,question FROM `questions` WHERE `id` = $id";
                         
                            $getRes= $db_obj->read($question);
                           
                            foreach($getRes as $print){
                            ?>
                                <tr>
                                    <th scope="row"><?php echo $print['id'] ?></th>
                                    <td><?php echo $print['question'] ?></td>
                                    <td>
                                        <a href="delete.php?delid=<?php echo $print['id'] ?>&&delt=quest" type="button" class="btn btn-link btn-sm px-3" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Delete Question">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                        <?php
                            }
                        }

                      }
                        ?>

                    </tbody>
                </table>
            </div>








    </main>
</body>

</html>