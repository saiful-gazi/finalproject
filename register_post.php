<?php
require 'db.php';

$username = $_POST['username'];
$email = $_POST['email'];
$password = $_POST['password'];
$mobile = $_POST['mobile'];
$role = $_POST['role'];

$select_query = "SELECT COUNT(*) as tahsan FROM user_info WHERE mobile='$mobile'";

$result1 = mysqli_query($db_connection,$select_query);
$after_assoc = mysqli_fetch_assoc($result1);

if($after_assoc['tahsan']==1){
  echo "email addresss already exist";
}
else {
  $uploaded_file = $_FILES['profile_photo'];
  $after_explode = explode('.',$uploaded_file['name']);
  $extention = end($after_explode);
  $allowed_extention = array('jpg','jpeg','png','gif');
  if(in_array($extention, $allowed_extention)){
    if($uploaded_file['size'] <= 2000000){
      $insert_query = "INSERT INTO user_info (username, email, password, mobile,role) VALUES ('$username','$email','$password','$mobile','$role')";
      $result = mysqli_query($db_connection, $insert_query);

      $last_id = mysqli_insert_id($db_connection);
      $file_name = $last_id.'.'.$extention;
      $new_location = 'uploads/user_photo/'.$file_name;
      move_uploaded_file($uploaded_file['tmp_name'], $new_location);
      $name_to_save_db = $file_name;
      $update = "UPDATE user_info SET profile_photo='$file_name' WHERE id=$last_id";
      $photo_uploaded = mysqli_query($db_connection,$update);
      header('location:register.php');

    }
    else{
      echo "file is too large";
    }
  }
  else{
    echo "Invalid File Format";
  }

}




 ?>
