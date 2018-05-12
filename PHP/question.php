<?php
session_start();
$_SESSION['message'] = '';
include_once 'db-inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
      if(isset($_POST['submit']))
      {

              //set all variables
              $name = $mysqli->real_escape_string($_POST['alias']);
              $title = $mysqli->real_escape_string($_POST['title']);
              $comment = $mysqli->real_escape_string($_POST['comment']);

              //insert user data into database
              $sql = "INSERT INTO question ( name, title, comment) VALUES ( '$name', '$title', '$comment');";

              //if the query is successsful, redirect to welcome.php page, done!
              if ($mysqli->query($sql) === true)
              {
                  $_SESSION['message'] = "Successsful";
                  header("location: Questions.php");
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
