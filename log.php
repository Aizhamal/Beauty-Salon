<?php
  include 'connection.php';
  if($_GET){
    if($_GET['login'] == "" ||$_GET['password'] == ""){
      header("Location:log-page.php");
    }else{
      $login = $_GET['login'];
      $password = $_GET['password'];
      $sql_query = "SELECT * FROM user where login = '$login' and password = '$password' ";
      if($res=$con->query($sql_query)){
        if(mysqli_num_rows($res)>0){
          session_start();
          $_SESSION['login'] = $login;
          header("Location:index.php");
        }else{
          header("Location:log-page.php");
        }
      }
    }
  }
?>
