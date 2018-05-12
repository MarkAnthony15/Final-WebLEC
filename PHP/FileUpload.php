<?php
    include_once 'pdfFile.php';
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
                            <a href="AdminUsers.php">
                            <i class="glyphicon glyphicon-user"></i>
                            Users </a>
                        </li>
                        <li class="active">
                            <a href="AdminLesson.php">
                            <i class="glyphicon glyphicon-info-sign"></i>
                            Lesson Overview </a>
                        </li>
                        <li>
                            <a href="AdminQuestion.php">
                            <i class="glyphicon glyphicon-question-sign"></i>
                            Questionares </a>
                        </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
    </div>
    <div class="col-sm-8 text-left"> 
        <div class="col-md-8" style="margin-top: 50px;">
            <div class="row content">
                <div class="panel panel-primary filterable">
                    <div class="panel-body">
                        <form method="post" action="FileUpload" enctype="multipart/form-data">
                            <tr>
                                <td>Lesson Title: </td>
                                <td><input type="text" name="lTitle" id="title"></td>
                                <br>
                                <br>
                            </tr>

                            <tr>
                                <td>Lesson Description: </td>
                                <td><input type="text" name="lDescription" id="title"></td>
                                <br>
                                <br>
                            </tr>
                            
                            <tr>
                                <td>Upload file: </td>
                                <td><input type="file" name="lesson"></td>
                                <br>
                            </tr> 
                            <tr>
                                <td><input type="submit" name="submit" value="Upload" ></td>
                            </tr>
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