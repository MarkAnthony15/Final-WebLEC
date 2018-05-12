<?php
session_start();
$_SESSION['message'] = '';
include_once 'db-inc.php';

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    if(empty($_POST['first_name']) || empty($_POST['last_name']) || empty($_POST['alias']) || empty($_POST['email']) || empty($_POST['password'] ))
    {
        $_SESSION['message'] = "Oops, you might have missed filling up a part.";
        echo $_SESSION['message'];
        exit();
    }
    else
    {
      if(isset($_POST['terms']))
      {

          //check if the 2 passwds are equal
          if ($_POST['password'] == $_POST['password_confirmation'])
          {

              //set all variables
              $first_name = $mysqli->real_escape_string($_POST['first_name']);
              $last_name = $mysqli->real_escape_string($_POST['last_name']);
              $alias = $mysqli->real_escape_string($_POST['alias']);
              $email = $mysqli->real_escape_string($_POST['email']);
              $password = md5($_POST['password']); //md5 has password for security

              //insert user data into database
              $sql = "INSERT INTO users ( alias, first, last, email, password) VALUES ( '$alias', '$first_name', '$last_name', '$email','$password');";

              //if the query is successsful, redirect to welcome.php page, done!
              if ($mysqli->query($sql) === true)
              {
                  $_SESSION['message'] = "Registration succesful! Added $firstname to the database!";
                  header("location: ../index.html");
              }
              else
              {
                  $_SESSION['message'] = 'User could not be added to the database!';
                  echo $_SESSION['message'];
                  exit();
              }
              $mysqli->close();

          }
          else
          {
              $_SESSION['message'] = 'Your passwords do not match!';
              echo $_SESSION['message'];
              exit();
          }

      }
      else
      {
          $_SESSION['message'] = 'Please check the Terms and Conditions if you agree!';
          echo $_SESSION['message'];
          exit();
      }
    }


}
