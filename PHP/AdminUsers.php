 <?php
//include_once '/Carget01/includes/client-signin.php';
 $connect = mysqli_connect("localhost", "root", "", "madetoeducate");  
 $sql = "SELECT id, alias, first,last,email,password,role FROM users where role = 'Administrator' or role = 'Student'";
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
                        <li class="active">
                            <a href="AdminUsers.php">
                            <i class="glyphicon glyphicon-user"></i>
                            Users </a>
                        </li>
                        <li>
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
                              <h3 class="panel-title">User List<span style="color: white; font-weight: bold;"></span></h3>
                              <br>
                          </div>
                          <div class="table-responsive">
                            <form method="POST" action="">
                              <table class="table table-bordered table-hover">
                                  <tr class="filters">
                                    <th style="width: 5%">
                                      <input type="text" class="form-control" placeholder="No" disabled>
                                    </th>
                                    <th style="width: 15%">
                                      <input type="text" class="form-control" placeholder="Name" disabled>
                                    </th>
                                    <th style="width: 15%">
                                      <input type="text" class="form-control" placeholder="Email" disabled>
                                    </th>
                                    <th style="width: 10%">
                                      <input type="text" class="form-control" placeholder="Role" disabled>
                                    </th>
                                    <th style="width: 5%">
                                        <input type="text" class="form-control" placeholder="Action" disabled>
                                    </th>
                                  </tr>
                                  <tbody>
                                    <?php
                                      if(mysqli_num_rows($result) > 0){
                                        while($row = mysqli_fetch_array($result)){
                                    ?>
                                    <tr>
                                        <td style="width: 5%"><?php echo $row["id"];?></td>
                                        <td style="width: 15%"><?php echo $row["first"];?></td>
                                        <td style="width: 15%"><?php echo $row["email"];?></td>
                                        <td style="width: 10%"><?php echo $row["role"];?></td>
                                        <td style="width: 5%">
                                           <a href="http://localhost:8080/link/delete.jsp"><button type="button" class="btn btn-default btn-xs btn-filter"><span class="glyphicon glyphicon-remove"></span>Delete</button></a>
                                        </td>
                                      <?php
                                        }
                                      }
                                      ?>
                                    </tr>
                                  </tbody>              
                              </table>
                              
                            </form>

                          </div>
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