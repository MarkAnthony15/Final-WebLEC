<?php
session_start();
$_SESSION['message'] = '';
include_once 'db-inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if(isset($_POST['submit'])) {


              $file = rand(1000,100000)."-".$_FILES['lesson']['name'];
              $file_loc = $_FILES['lesson']['tmp_name'];
              
              //set all variables
              $title = $mysqli->real_escape_string($_POST['lTitle']);
              $description = $mysqli->real_escape_string($_POST['lDescription']);
              $file_type = $_FILES['lesson']['type'];
              $folder="uploads/";
              //insert user data into database
              move_uploaded_file($file_loc,$folder.$file);
              $sql = "INSERT INTO lesson ( title, description, content, file) VALUES ( '$title', '$description', '$file_type', $file);";

              //if the query is successsful, redirect to welcome.php page, done!
              if ($mysqli->query($sql) === true)
              {
                  $_SESSION['message'] = "Successsful";
                  header("location: FileUpload.php");
              }
              else
              {
                  $_SESSION['message'] = 'Unsuccessful!';
                  echo $_SESSION['message'];
                  exit();
              }
              $mysqli->close();

    }


}
