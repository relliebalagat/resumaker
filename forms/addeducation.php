<?php

session_start();
require_once('../connect.php');

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  
  $user_id = $_SESSION['user_id'];
  // "duration=" + duration + "&position=" + position + "&company=" + company + "&description=" + description;
  $fromduration = $_POST['fromduration'];
  $toduration = $_POST['toduration'];
  $schoolLevel = $_POST['schoolLevel'];
  $school = $_POST['school'];
  $course = $_POST['course'];
  $award = $_POST['award'];
  $fieldofstudy = $_POST['fieldofstudy'];

  $sql = "INSERT INTO educationdetail (UserAccountId, EducationLevel, DurationFrom, DurationTo, School, FieldOfStudy, Course, Awards) VALUES ('$user_id', '$schoolLevel', '$fromduration', '$toduration', '$school', '$fieldofstudy', '$course', '$award')";

  if($con->query($sql) == true) {
    echo "success";
  } else {
    echo $sql . " --- failed"; 
  }


}