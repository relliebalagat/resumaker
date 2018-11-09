<?php

session_start();
require_once('../connect.php');

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  
  $user_id = $_SESSION['user_id'];
  $date = $_POST['date'];
  $seminar = $_POST['seminar'];
  $description = $_POST['description'];

  $sql = "INSERT INTO seminartraining (UserAccountId, SeminarTraining, Date, Description) VALUES ('$user_id', '$seminar', '$date', '$description')";

  if($con->query($sql) == true) {
    echo "success";
  } else {
    echo "failed";
  }


}
