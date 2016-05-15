<?php
include("connection.php");
if($_POST){

$name = $_POST['name'];
$surname = $_POST['surname'];
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
  if($name == ""||$surname == ""||$login == ""||$email == ""||$password == ""){
    header("Location:reg-page.php");
  }else{
    $query = "INSERT INTO user VALUES(null,'$name','$surname','$login','$email','$password')";
    if($con->query($query)){
      header("Location:log-page.php");
    }
  }
}
?>
