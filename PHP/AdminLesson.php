  <?php
//include_once '/test/includes/client-signin.php';
 $connect = mysqli_connect("localhost", "root", "", "madetoeducate");  
 $sql = "SELECT id, title, description, content FROM lesson";
 $result = mysqli_query($connect, $sql);  
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
    <div class="col-sm-10 text-left"> 
        <div class="col-md-10" style="margin-top: 50px;">
            <div class="row content">
                <div class="panel panel-primary filterable">
                        <div class="panel-heading">
                            <h3 class="panel-title">Lesson List<span style="color: white; font-weight: bold;"></span></h3>
                            <br>
                            <th>
                                <a href="FileUpload.php">
                                <button type="text"  class="form-control addButton" placeholder="Add New"> + Add New </button>
                                </a>
                            </th>
                            <br> 
                       </div>
                        <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <tr class="filters">
                              <th style="width: 10%">
                                <input type="text" class="form-control" placeholder="No" disabled>
                              </th>
                              <th style="width: 25%">
                                <input type="text" class="form-control" placeholder="Title" disabled>
                              </th>
                              <th style="width: 25%">
                                <input type="text" class="form-control" placeholder="Description" disabled>
                              </th>
                              <th style="width: 10%">
                                  <input type="text" class="form-control" placeholder="Action" disabled>
                              </th>
                            </tr>
                            <tbody class="table table-bordered table-striped">
                                <?php
                                    if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){
                                ?>
                                <tr>
                                    <td style="width: 10%"><?php echo $row["id"];?></td>
                                    <td style="width: 25%"><?php echo $row["title"];?></td>
                                    <td style="width: 25%"><?php echo $row["description"];?></td>
                                    <td style="width: 10%">
                                         <a href="<?php echo $row["content"];?>" target="_blank"> <button type="button" class="btn btn-default btn-xs btn-filter" name="readPDF"><span class="glyphicon glyphicon-file"></span>View</button></a>
                                    </td>
                                <?php
                                    }
                                }
                                 ?>
                                </tr>
                                
                            </tbody>              
                        </table>
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