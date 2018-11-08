<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resumaker</title>

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

</head><br><br><br><br><br><br><br><br>
<?php error_reporting(0);
	session_start();
	include("connect.php");
	require 'header.php';
?>
<body background="img/bg.jpg" >

	
		<?php 	
			if($_SESSION['logged'] == true){
				header ('location:resumeform.php');
			}
			else{
					echo "<marquee direction = 'transition' <h3>$msg</h3></marquee>";
		?>

	<form action="<?php echo $_SERVER['PHP_SELF']?>" method='post'>
	<center>
			<font color = 'white'>Username:</font><input type='text' name='username' value = '<?php echo $_COOKIE['username']; ?>' /></br></br>
			<font color = 'white'>Password: </font><input type='password' name='password' /><br><br>
			<input type='submit' name='login' value='login'/><br>
			<font color = 'white'><input name="chk" type='checkbox'/>Remember username</font><br><br>
			<a href ='register.php'>Register now!</a>
	</center>
	</form>

		<?php 
		
			if(isset($_POST['login'])){
				$get_username = $_POST['username'];
				$get_password = $_POST['password'];
				$enc_password = md5(md5($get_password));
				
				if(isset($_POST['chk'])){
					set_cookie("username", $get_username);	
				}
				
				if(empty($get_username) or empty($get_password)){
					echo "username/password required";
				}
				else
				{
					$sql = "SELECT * from useraccount where Email = '$get_username'";
					$q = mysqli_query($con,$sql);
					
					if(mysqli_num_rows($q) > 0){
						
						while($row = mysqli_fetch_array($q)){
							$db_fname = $row['FirstName'];
							$db_lname = $row['LastName'];
							$db_mname = $row['MIddleName'];
							$db_username = $row['Email'];
							$db_password = $row['Password'];
							$db_user_id = $row['Id'];
							$db_bday = $row['Birthday'];
							$db_gender = $row['Gender'];
							$db_email = $row['Email'];
							$db_contact = $row['ContactNo'];
							//$db_user_type = $row['user_type'];
							//$db_status = $row['status'];
						}
						
						if(($enc_password == $db_password) AND ($get_username == $db_username)){
								session_start();
								$_SESSION['user_id'] = $db_user_id;
								$_SESSION['username'] = $get_username;
								$_SESSION['fname'] = $db_fname;
								$_SESSION['lname'] = $db_lname;
								$_SESSION['mname'] = $db_mname;
								$_SESSION['bday'] = $db_bday;
								$_SESSION['gender'] = $db_gender;
								$_SESSION['email'] = $db_email;
								$_SESSION['contact'] = $db_contact;
								$_SESSION['logged'] = true;
								//$_SESSION['user_type'] = $db_user_type;
								
								header ('location:resumeform.php');


								/*if ($db_user_type == 1){
									header ('location:home.php');}
									elseif ($db_user_type == 2){
										header ("Location:admin/home.php");}
									elseif ($db_user_type == 3){
										header ("Location:manager/home.php");}
							*/
								//header("Location:home.php");
						}
						else
						{
							echo "invalid username/password";
						}
						
					}
					else
					{
						echo "invalid username/password";
					}
						
				}
			}		
			
		}	
	?>
			
</body>
</html>