<?php

session_start();
require_once('../connect.php');

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  
  $user_id = $_SESSION['user_id'];
  // "duration=" + duration + "&position=" + position + "&company=" + company + "&description=" + description;
  $fromduration = $_POST['fromduration'];
  $toduration = $_POST['toduration'];
  $position = $_POST['position'];
  $company = $_POST['company'];
  $description = $_POST['description'];

  $sql = "INSERT INTO workdetails (UserAccountId, Position, Company, DurationFrom, DurationTo, Description) VALUES ('$user_id', '$position', '$company', '$fromduration', '$toduration', '$description')";

  if($con->query($sql) == true) {
    echo "success";
  } else {
    echo $sql;
  }


}