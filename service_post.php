<?php
require 'db.php';

$service_title = $_POST['service_title'];
$service_des = $_POST['service_des'];


$uploaded_file = $_FILES['service_img'];
$after_explode = explode('.',$uploaded_file['name']);
$extention = end($after_explode);
$allowed_extention = array('jpg','jpeg','png','gif');
if(in_array($extention, $allowed_extention)){
  if($uploaded_file['size'] <= 2000000){

    $insert = "INSERT INTO service (service_title, service_des) VALUES ('$service_title', '$service_des')";
    $result = mysqli_query($db_connection, $insert);

    $last_id = mysqli_insert_id($db_connection);
    $file_name = $last_id.'.'.$extention;
    $new_location = 'uploads/service/'.$file_name;
    move_uploaded_file($uploaded_file['tmp_name'], $new_location);
    $name_to_save_db = $file_name;
    $update = "UPDATE service SET service_img='$file_name' WHERE id=$last_id";
    $photo_uploaded = mysqli_query($db_connection,$update);
    header('location:service.php');



  }
  else{
    echo "file is too large";
  }
}
else{
  echo "Invalid File Format";
}

?>
