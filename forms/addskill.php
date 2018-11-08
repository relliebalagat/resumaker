<?php

session_start();
require_once('../connect.php');

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  
  $user_id = $_SESSION['user_id'];
  $skill = $_POST["skill"];
  $skillLevel = $_POST["skillLevel"];

  $sql = "INSERT INTO skill (UserAccountId, Skill, SkillLevel) VALUES ('$user_id', '$skill', '$skillLevel')";

  if($con->query($sql) == true) {
    echo "success";
  } else {
    echo "failed";
  }


}