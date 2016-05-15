<?php
  include "connection.php";
  $var = $_GET['id'];
  if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
  }
$sql = "DELETE FROM therapy WHERE therapy_id='$var'";
if ($con->query($sql) === TRUE) {
  header("Location:therapies.php");
} else {
    header("Location:therapies.php");
}

 ?>
