<?php
include 'connection.php';
if ($_POST) {
      if (move_uploaded_file($_FILES['img']['tmp_name'], "images/".$_FILES['img']['name'])) {
      } else {
      }
      $name = $_POST['name'];
      $desc = $_POST['desc'];
      $image = "images/".$_FILES['img']['name'];
      $query = "INSERT INTO therapy VALUES(null,'".$name."','".$desc."','".$image."')";
      if(!$con->query($query)){
        echo $con->error;
      }
      header("Location:therapies.php");
      }
?>
