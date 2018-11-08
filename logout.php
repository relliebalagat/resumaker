<html> 
<head>
</head>
<body>
<?php error_reporting(0);
	session_start();
	
	if ($_SESSION['logged'] == true){
		session_destroy();
		
		header("Location:login.php");
			
	}
	else{
		header ('Location:login.php');
		
	}
?>
</body>
</html> 
