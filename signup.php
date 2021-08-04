<?php
include 'db_con.php';
if ($connect->connect_error) {
  die("connection Failed" . $connect->connect_error);
} else {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $password = $_POST['password'];
  $phone = $_POST['phone'];
  $dob = $_POST['dob'];
  $rememberMe = $_POST['rememberMe'];
}
