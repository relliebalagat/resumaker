<html>
<head>
</head>
<body>
<?php

	include("..\connect.php");
	
	error_reporting(0);
	session_start();

	if($_SESSION['logged'] == true){
			
	if($_SESSION['user_type'] == 1){
	header("Location:..\home.php");
	}
	
		$id = $_GET['id'];
		$stat =  $_GET['status'];
		
		$sql = "UPDATE tbl set status ='$stat' where user_id = $id";
		
		mysqli_query($con, $sql);
		
		header('location:adminuser.php');
		
	}
	else{
		header('location:login.php');
	}

?>
</body>
</html>