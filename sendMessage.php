<?php
include 'db_con.php';
if ($connect->connect_error) {
  die("connection failed: " . $connect->connect_error);
} else {

  $name = $_POST['name'];
  $email = $_POST['email'];
  $subject = $_POST['subject'];
  $message = $_POST['message'];

  $insert_que = "insert into message(name,email,subject,description) values('$name','$email','$subject','$message')";
  mysqli_query($connect, $insert_que);
  $check_que = "select * from message where email='$email'";
  $res = mysqli_query($connect, $check_que);
  if (mysqli_num_rows($res) >= 1) {

    echo '<script>alert("Successfully Message send!");window.location = "index.php";</script>';
  } else {

    echo '<script>alert("Message could not sent!");</script>';

    header("Location:index.php");
  }
}
