<?php
session_start();
require 'db.php';

$email = $_POST['email'];
$password = $_POST['password'];

$select_query = "SELECT COUNT(*) as tahsan, username, email, profile_photo, role FROM user_info WHERE email='$email' and password='$password'";

$result = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result);

if($after_assoc['tahsan']==1){
  $_SESSION['kuddus']= 'ache';
  $_SESSION['name'] = $after_assoc['username'];
  $_SESSION['email'] = $after_assoc['email'];
  $_SESSION['photo'] = $after_assoc['profile_photo'];
  $_SESSION['role'] = $after_assoc['role'];

  setcookie('abul','jorina');
  header('location:dash.php');
}
else {
  echo "invalid email or password";
}

 ?>
