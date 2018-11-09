<?php

session_start();
require_once('../connect.php');

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  
  $user_id = $_SESSION['user_id'];
  $date = $_POST['date'];
  $award = $_POST['award'];
  $description = $_POST['description'];

  $sql = "INSERT INTO achievement (UserAccountId, Achievement, Duration, Description) VALUES ('$user_id', '$award', '$date', '$description')";

  if($con->query($sql) == true) {
    echo "success";
  } else {
    echo  $sql . " ----failed";
  }

}
