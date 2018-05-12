<?php
session_start();
$_SESSION['message'] = '';
include_once 'db-inc.php';

if(isset($_POST['login'])){
    $email=$_POST['email'];
    $password = md5($_POST['password']);
    
    $query="select * from users where email='$email' and password='$password'";
    $result=mysqli_query($mysqli,$query);
    
    while($row=mysqli_fetch_array($result)){
        if($row['email']==$email && $row['password']==$password && $row['role']=="Administrator"){
            $_SESSION['first_name']=$first_name;
            header("Location: /test/link/AdminUsers.php");
        }else if($row['email']==$email && $row['password']==$password && $row['role']=="Student"){
            header("Location: /test/link/Userhome.php");
        }else
            header("Location: /test/");
    }
}
?>



