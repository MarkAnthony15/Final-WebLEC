<?php
 $connect = mysqli_connect("localhost", "root", "", "madetoeducate");  
 $sql = "SELECT name, title, comment FROM question";
 $result = mysqli_query($connect, $sql);  
 ?>
<!DOCTYPE html>
<html>
<head>
    <title>MadeToCreate</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../bootstrap/css/style.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="../font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../bootstrap/css/pure-min.css">
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
          <li class="active"><a href="Questions.php">Questions</a></li>
        </ul>
        <div class="col-sm-3 col-md-3">
            <form class="navbar-form" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Search" name="q">
                <div class="input-group-btn">
                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                </div>
            </div>
            </form>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="ClientSign-Up.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="Log-in.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>   
      </div>
    </nav>
    <!--container-->
    <div class="container-fluid text-center">    
      <div class="row content">
        
        <div class="col-sm-10 text-left"> 
          <h1>QUESTION SECTION</h1>
<?php
  if(mysqli_num_rows($result) > 0){
      while($row = mysqli_fetch_array($result)){
?>
          <div class="panel panel-default">
            <div class="panel-heading"><p><b>Title: </b><?php echo $row["title"];?><br>
              <b>Author: </b><?php echo $row["name"];?><a href="questionReply.php" class=" pull-right"> <i class="fa fa-reply"></i> Reply</a></p></div>
            <div class="panel-body"><strong><?php echo $row["comment"];?></strong></div>
          </div>
<?php
  }
}
?>
        </div>
        <div class="col-sm-2 sidenav">
          <div class="well">
            <div class="form-group">
                <a href="Askquestions.php"><button type="submit" class="btn btn-info btn-block">Ask Questions</button> </a>
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