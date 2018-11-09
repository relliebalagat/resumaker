<?php

session_start();
require_once('../connect.php');

if($_SERVER["REQUEST_METHOD"] == 'POST') {
  
  $user_id = $_SESSION['user_id'];
  $name = $_POST['name'];
  $organization = $_POST['school'];
  $position = $_POST['position'];
  $contact = $_POST['contact'];

  $sql = "INSERT INTO characterreference (UserAccountId, Name, Organization, Position, ContactNo ) VALUES ('$user_id', '$name', '$organization', '$position', '$contact')";

  if($con->query($sql) == true) {
    echo "success";
  } else {
    echo "failed";
  }


}