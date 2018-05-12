 <?php  
    include_once 'question.php';
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
<div class="container">
    <div class="row centered-form">
        <div class="col-md-10">
            <div class="panel panel-default">
                  <div class="panel-heading text-center">
                    <h4>Ask the <strong>Made To Educate</strong> community</h4>
                  </div>
                    <div class="panel-body">
                        <form role="form" action="Askquestions.php">
                          <label>Alias</label>
                          <div class="form-group">
                            <input type="text" name="alias" id="title" class="form-control input-sm">
                          </div>
                          <label>Title</label>
                          <div class="form-group">
                            <input type="text" name="title" id="title" class="form-control input-sm" placeholder="What's your question ? Be specific.">
                          </div>
                          <div class="form-group">
                            <label for="comment">Comment:</label>
                            <textarea class="form-control" rows="3" id="comment" name="comment"></textarea>
                          </div>                         
                          <div class="col-xs-3 col-sm-3 col-md-3">
                              <div class="">
                                      <input type="submit" name="submit" value="POST" class="btn btn-info btn-block">
                              </div>
                          </div>
                        </form>
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