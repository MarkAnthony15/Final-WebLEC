<?php include 'database.php'; ?>
<?php
    if(isset($_POST['submit'])){
        //Get post variables
        $question_number = $_POST['question_number'];
        $question_text = $_POST['question_text'];
        $correct_choice = $_POST['correct_choice'];
        //Choices array
        $choices = array();
        $choices[1] = $_POST['choice1'];
        $choices[2] = $_POST['choice2'];
        $choices[3] = $_POST['choice3'];
        $choices[4] = $_POST['choice4'];
        
        //Question query
        $query = "INSERT INTO `questions`(question_number, text)
                    VALUES('$question_number','$question_text')";
                    
        //Run query
        $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
        
        //Validate insert
        if($insert_row){
            foreach($choices as $choice => $value){
                if($value != ''){
                    if($correct_choice == $choice){
                        $is_correct = 1;
                    } else {
                        $is_correct = 0;
                    }
                    //Choice query
                    $query = "INSERT INTO `choices` (question_number, is_correct, text)
                            VALUES ('$question_number','$is_correct','$value')";
                            
                    //Run query
                    $insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    
                    //Validate insert
                    if($insert_row){
                        continue;
                    } else {
                        die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
                    }
                }
            }
            $msg = 'Question has been added';
        }
    }
    
    /*
    * Get total questions
    */
    $query = "SELECT * FROM `questions`";
    //Get The Results
    $questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $total = $questions->num_rows;
    $next = $total+1;
?>
<!DOCTYPE html>
<html>
<head>
    <title>MadeToCreate</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <script type="text/javascript" src="../bootstrap/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand active" href="../index.html" >MadeToEducate</a>
        </div>
        <ul class="nav navbar-nav">
          <li><a href="Questions.php">Questions</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><span class="glyphicon glyphicon-log-out"></span><i>Log Out</i></a></li>
        </ul>   
      </div>
    </nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
        <div class="profile-sidebar">
                <!-- SIDEBAR USERPIC -->
                <div class="profile-userpic">
                    <img src="../thavit.jpg" class="img-responsive" alt="Default">
                </div>
                <!-- END SIDEBAR USERPIC -->
                <!-- SIDEBAR USER TITLE -->
                <div class="profile-usertitle">
                    <div class="profile-usertitle-name">
                        Thanos Vitas
                    </div>
                    <div class="profile-usertitle-job">
                        Admin
                    </div>
                </div>
                <!-- END SIDEBAR USER TITLE -->
                <!-- SIDEBAR MENU -->
                <div class="profile-usermenu">
                    <ul class="nav">
                        <li>
                            <a href="AdminUsers.html">
                            <i class="glyphicon glyphicon-user"></i>
                            Users </a>
                        </li>
                        <li>
                            <a href="#">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            Lesson Overview </a>
                        </li>
                        <li class="active">
                            <a href="#" target="_blank">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            Questionares </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
        </div>
    </div>
    <div class="col-sm-10 text-left"> 
        <div class="col-md-10" style="margin-top: 50px;">
            <div class="row content">
                <div class="panel panel-primary filterable">
                    <div class="panel-heading">
                        <h3 class="panel-title">Add Question<span style="color: white; font-weight: bold;"></span></h3>
                    </div>
                    <div class="">
                       <form role="form" action="AdminQuestion.php" method="POST">
                            <div class="row container">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <label>Question Number</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control input-sm" value="<?php echo $next; ?>" name="question_number" />
                                    </div>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <label>Question</label>
                                    <div class="form-group">
                                        <textarea class="form-control input-sm" name="question_text"></textarea>
                                    </div>
                                </div>

                            </div>
                            <div class="row container">
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <label>Choice 1</label>
                                    <div class="form-group">
                                        <textarea class="form-control input-sm" name="choice1"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <label>Choice 2</label>
                                    <div class="form-group">
                                        <textarea class="form-control input-sm" name="choice2"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <label>Choice 3</label>
                                    <div class="form-group">
                                        <textarea class="form-control input-sm" name="choice3"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-xs-8 col-sm-8 col-md-8">
                                    <label>Choice 4</label>
                                    <div class="form-group">
                                        <textarea class="form-control input-sm" name="choice4"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row container">
                                <div class="col-xs-2 col-sm-2 col-md-2">
                                    <label>Correct Choice Number:</label>
                                    <div class="form-group">
                                        <input type="number" class="form-control input-sm" name="correct_choice" />
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row container">
                                <div class="col-xs-3 col-sm-3 col-md-3">
                                    <div class="form-group">
                                            <input type="submit" name="submit" value="Submit" class="btn btn-info btn-block">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </div>
</div>
    <footer>
        <p>Copyright ©<a style="color:#0a93a6; text-decoration:none;" href="../index.html"> Made To Educate</a>. All rights reserved 2018-2019.</p>
    </footer>
</body>
</html>