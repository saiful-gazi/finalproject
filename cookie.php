<?php

if(!isset($_COOKIE['abul'])){
  header('location:logout.php');
}
else{
  setcookie('abul','jorina',time()+20);
}
 ?>
