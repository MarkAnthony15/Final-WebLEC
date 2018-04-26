<%-- 
    Document   : Log-in
    Created on : Apr 26, 2018, 10:09:31 PM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
    <title>MadeToCreate</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
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
          <li><a href="#">Questions</a></li>
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
          <li><a href="ClientSign-Up.jsp"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
          <li><a href="Log-in.jsp"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        </ul>   
      </div>
    </nav>
    <div class="container">
        <div class="row centered-form">
        <div class="col-md-4 col-md-8 col-md-4 col-sm-offset-2 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                        <h4 class="panel-title"><strong>Made To Educate</strong>community</h4>
                        </div>
                        <div class="panel-body">
                        <form role="form">
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <label>Email</label>
                                <div class="form-group">
                                    <input type="email" name="email" id="email" class="form-control input-sm" placeholder="Email Address">
                                </div>
                            </div>

                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <label>Password</label>
                                <div class="form-group">
                                    <input type="password" name="password" id="password" class="form-control input-sm" placeholder="Password">
                                </div>
                            </div>
                            
                            <div class="col-xs-10 col-sm-10 col-md-10">
                                <div class="form-group">
                                        <input type="submit" value="Login" class="btn btn-info btn-block">
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
