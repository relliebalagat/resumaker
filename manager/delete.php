<html>
<head>
</head>
<body>
<?php
	include ("..\connect.php");
	
	error_reporting(0);
	session_start();
	
	if ($_SESSION ['logged'] == true){
		
	if ($SESSION ['user_type'] == 1){
	header ("location:admin\home.php");
	}
			$id = $_GET['id'];
			$sql = "DELETE from tbl where user_id=$id";
			
			mysqli_query($con,$sql);
			header ("location:manageuser.php?r=3");
	}
	else{
		header('Location:login.php');
	}
?>


</body>
</html>