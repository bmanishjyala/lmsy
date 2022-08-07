<?php
session_start();
if (!(isset($_SESSION['user_id']) && ($_SESSION['user_role'] == 1))) {
  header('Location: ../');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Question</title>
  <?php include "./components/mdbootstrap_css.php" ?>


</head>

<body>
  <?php
  include "./components/sidebar_header.php" ?>
  <main style="margin-top: 58px">
    <div class="container pt-4">

      <!-- jumbotron -->

      <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Question</h1>
        <h4 class="mb-3">Question will be displayed over here</h4>
        <button type="button" class="btn btn-dark" data-mdb-toggle="modal" data-mdb-target="#exampleModal">
          Add New Question
        </button>
      </div>

      <!-- modal -->


      <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Add Question and Options</h5>
              <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>

            <?php

            require "../database/database.php";

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
              $question = $_POST['question'];
              $correct=$_POST['correct'];
              $option=array();
              $option[1]=$_POST["option1"];
              $option[2]=$_POST["option2"];
              $option[3]=$_POST["option3"];
              $option[4]=$_POST["option4"];

              if ($question !== "") {
                $user_id = $_SESSION['user_id'];
                $insert = "INSERT INTO `questions`(`question`, `user_id`) VALUES ('$question','$user_id')";
                if ($questionReference=$db_obj->write($insert)) {
                  foreach($option as $opt=>$text){
                    if($correct==$opt){
                      $is_correct=1;
                    }else{
                      $is_correct=0;
                    }

                    $optionInsert="INSERT INTO `options`( `option_text`, `question_id`, `is_correct`) VALUES ('$text','$questionReference','$is_correct')";
                    if(!($db_obj->write($optionInsert))){
          echo "Question didn't Added";
                    }

                  }
                }
              }
            }
            ?>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="container" method="POST">
     
        <div class="form-outline mb-4">

            <textarea class="form-control" name="question" id="form4Example3" rows="4"></textarea>
            <label class="form-label" for="form4Example3">Question</label>
            <div class="errorDiv  mb-3">
                <span class="error"> </span>
            </div>
        </div>
       
        <!-- option input -->
        <div class="form-outline mb-4">
            <input type="text" id="form4Example1" name="option1" class="form-control" />
            <label class="form-label" for="form4Example1">Option 1</label>
            <div class="errorDiv  mb-3">
                <span class="error">  </span>
            </div>
         
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form4Example2" name="option2" class="form-control" />
            <label class="form-label" for="form4Example2">Option 2</label>
            <div class="errorDiv  mb-3">
                <span class="error">  </span>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form4Example3" name="option3" class="form-control" />
            <label class="form-label" for="form4Example3">Option 3</label>
            <div class="errorDiv  mb-3">
                <span class="error">  </span>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="text" id="form4Example4" name="option4" class="form-control" />
            <label class="form-label" for="form4Example4">Option 4</label>
            <div class="errorDiv  mb-3">
                <span class="error">  </span>
            </div>
        </div>
        <div class="form-outline mb-4">
            <input type="number" id="form4Example1" min="1" max="4" name="correct" class="form-control" />
            <label class="form-label" for="form4Example1">Correct Option</label>
            <div class="errorDiv  mb-3">
                <span class="error"> </span>
            </div>
        </div>



        <!-- Submit button -->
        <button type="submit" class="btn btn-primary btn-block mb-4">Upload Question</button>
            </form>



          </div>
        </div>
      </div>

      <div class="container d-flex justify-content-center px-5">
  <table class="table  align-middle">
  <thead>
    <tr>
      <th scope="col">Q_Number</th>
      <th scope="col">Question</th>
      <th scope="col">Added By</th>
      <th scope="col">Control</th>
    </tr>
  </thead>
  <tbody>

      <?php
      $getData="SELECT questions.id,questions.question,questions.created_at,users.name
      FROM questions
      INNER JOIN users ON users.id=questions.user_id";
      $res=$db_obj->read($getData);
      
      foreach ($res as $key) {?>
      <tr>
      <th scope="row"><?php echo $key['id']?></th>
      <td><?php echo $key['question']?></td>
      <td><?php echo $key['name']?></td>
      <td>
        <button type="button" class="btn btn-link btn-sm px-3" data-mdb-toggle="tooltip" data-mdb-placement="top"title="Update Question">
        <i class="fa-solid text-success fa-arrow-up-long"></i>
        </button>
      <button type="button" class="btn btn-link btn-sm px-3" data-mdb-toggle="tooltip" data-mdb-placement="top" title="Delete Question">
          <i class="fas text-danger fa-times"></i>
        </button>
      </td>
</tr>
    <?php }

      ?>
    
  </tbody>
</table>
    </div>
      

      
     
    


 
  </main>
</body>

</html>