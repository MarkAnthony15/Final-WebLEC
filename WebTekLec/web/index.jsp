<%-- 
    Document   : index
    Created on : Apr 26, 2018, 10:08:08 PM
    Author     : Admin
--%>

<%@page contentType="text/html" pageEncoding="UTF-8"%>
<!DOCTYPE html>
<html>
<head>
	<title>MadeToCreate</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="./bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="./bootstrap/css/style.css">
	<script type="text/javascript" src="./bootstrap/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="./javascript/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
    <nav class="navbar navbar-inverse">
      <div class="container-fluid">
        <div class="navbar-header">
          <a class="navbar-brand active" href="index.html" >MadeToEducate</a>
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
      </div>
    </nav>

<div class="container">
  <div class="row">
    <!-- Carousel -->
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner">
          <div class="item active">
            <img src="123.jpg" alt="First slide">
                    <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h1>
                              <span>Welcome to <strong>Made To Educate</strong></span>
                            </h1>
                            <h3>
                              <span>Advance your knowledge. Build your career.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="./link/Log-in.jsp"><span class="glyphicon glyphicon-user"></span> Login</a><a class="btn btn-theme btn-sm btn-min-block" href="./link/ClientSign-Up.jsp"><span class="glyphicon glyphicon-log-in"></span> Register</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="123.jpg" alt="First slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to LOREM IPSUM</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
          <div class="item">
            <img src="123.jpg" alt="First slide">
            <!-- Static Header -->
                    <div class="header-text hidden-xs">
                        <div class="col-md-12 text-center">
                            <h2>
                                <span>Welcome to LOREM IPSUM</span>
                            </h2>
                            <br>
                            <h3>
                              <span>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</span>
                            </h3>
                            <br>
                            <div class="">
                                <a class="btn btn-theme btn-sm btn-min-block" href="#">Login</a><a class="btn btn-theme btn-sm btn-min-block" href="#">Register</a></div>
                        </div>
                    </div><!-- /header-text -->
          </div>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
      </a>
    </div><!-- /carousel -->
  </div>
</div>
    <footer>
        <p>Copyright ©<a style="color:#0a93a6; text-decoration:none;" href="index.html"> Made To Educate</a>. All rights reserved 2018-2019.</p>
    </footer>
</body>
</html>
