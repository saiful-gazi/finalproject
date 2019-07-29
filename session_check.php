<?php
session_start();

if(!isset($_SESSION['kuddus'])){
  header("location:login.php");
}
 ?>
