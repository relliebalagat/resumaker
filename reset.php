<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Design Soldier</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<html>
<head>
	<title>Reset Password</title>
		<?php 
			error_reporting(0);
			session_start();
			require("connect.php");
			require 'header.php';
		?>
</head>
	<body>
	<form action = '<?php echo $_SERVER['PHP_SELF']; ?>' method = 'post'>
		<center>	
			<h1>Reset Password</h1>
			<table border = '1'>
								<tr>
									<td>Old Password:</td>
									<td><input type = 'password' name = 'oldpass'></input></td>
								</tr>
							
								<tr>
									<td>New Password:</td>
									<td><input type = 'password' name = 'newpass'></input></td>
								</tr>
							
								<tr>
									<td>Confirm Password:</td>
									<td><input type = 'password' name = 'conpass'></input></td>
								<tr>
									<th colspan ='2'><input type='submit' value='SAVE' name='submit'>
									<input type ='reset' value='RESET' name='reset'></th>
								</tr>
			</table>
			
		</center>	
		<?php
			if(isset($_POST['submit'])){
				$oldpass = md5(md5(md5($_POST['oldpass'])));
				$newpass = md5(md5(md5($_POST['newpass'])));
				$conpass = md5(md5(md5($_POST['conpass'])));
				
				if(empty($oldpass) || empty($newpass) || empty($conpass)){
					echo "FIELDS WITH * ARE REQUIRED";
				}
				else{
					
							$id = $_SESSION['user_id'];
							$sql = "SELECT * FROM tbl where user_id = $id";
							$q = mysqli_query($con,$sql);
							if(mysqli_num_rows($query)>0){
							while ($getData = mysqli_fetch_array($query)){
									$password = $getData['password'];
								
								}
							if(($password == $oldpass)){
									if($newpass == $oldpass){
										echo "Password you entered is the Current Password";
									}else{
										if($conpass == $newpass){
											$pass = "UPDATE tbl SET password = '$newpass' where user_id ='$id'";
											mysqli_query($con,$pass);
											header("location:logout.php");
										}else{
											echo "The Confirm / New Password is Invalid";
										}
									}
							}else{
								echo "Wrong Current Password";
							}
							}else{
								echo "ERROR IN THE TRANSACTION";
							}
							}
							
				}
		?>
	</body>
</html>