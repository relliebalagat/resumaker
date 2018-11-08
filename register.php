<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resumaker | Registration</title>

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
<head><title>Registration</title>
<style>
table, th, td{
	background-color: white;
	background: rgba(0,0,0 0.2)
}
</style>
</head>
<body background = "img/bg.jpg">


<?php 

error_reporting(0);
session_start();



	if($_SESSION['logged'] == true){
		//header ('Location:home.php');
	}
	else {
		require_once ("connect.php");
	}require 'header.php';
?><br><br><br><br><br><br>
		
		<center><h2><font color = 'white'>Register</font></h2>
		<form action = '<?php echo $_SERVER ['PHP_SELF'];?>' method = 'post'>
		<table border = '1' >
		<tr>
			<th align = 'right'><font color = 'black'>First Name:</font></th>
			<th><input type= 'text' class="form-control" name= 'fname' value= '<?php echo $_POST['fname'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Middle Name:</font></th>
			<th><input type= 'text' class="form-control" name= 'mname' value= '<?php echo $_POST['mname'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Last Name:</font></th>
			<th><input type= 'text' class="form-control" name= 'lname' value= '<?php echo $_POST['lname'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Password:</font></th>
			<th><input type= 'password' class="form-control" name= 'pass1' value= '<?php echo $_POST['pass1'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Confirm Password:</font></th>
			<th><input type= 'password' class="form-control" name= 'pass2' value= '<?php echo $_POST['pass2'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Contact:</font></th>
			<th><input type= 'number'  class="form-control" name= 'contact' value= '<?php echo $_POST['contact'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Birthday:</font></th>
			<th><input type= 'date' class="form-control" name= 'bday' value= '<?php echo $_POST['bday'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Email:</font></th>
			<th><input type= 'email'  class="form-control" name= 'email' value= '<?php echo $_POST['email'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'><font color = 'black'>Gender:</font></th>
			<td><select name = 'gender' class="form-control">
				<option value= 'M'>Male</option>
				<option value= 'F'>Female</option>
				</select></td>				
		</tr>
		<tr>
		<th colspan = '2'><input type = 'submit' class="form-control " value = 'Register' name = 'submit'/>
		
		</tr>
		</table>		
		</form>
			
<?php			
			if (isset($_POST['submit'])){
				$fname = $_POST['fname'];
				$mname = $_POST['mname'];
				$lname = $_POST['lname'];
				$pass1 = $_POST['pass1'];
				$pass2 = $_POST['pass2'];
				$bday = $_POST['bday'];
				$email = $_POST['email'];
				$contact = $_POST['contact'];
				$gender = $_POST['gender'];
			
			if (empty($fname) || empty($lname) || empty($pass1) || empty($pass2) || empty($email)
				|| empty($contact) || empty($bday) || empty($gender)){
					echo "fields are required";
				}
				else{
					if ($pass1 == $pass2){
						$enc_pass = md5(md5($pass1));
						
				$sql = "INSERT INTO useraccount(FirstName, MIddleName, LastName, Password, Birthday, Email, ContactNo,Gender)
				VALUES('$fname', '$mname', '$lname', '$enc_pass', '$bday', '$email','$contact', '$gender')";
				$q = mysqli_query($con,$sql);
				
				if (!$q){
					echo "error in the transaction";
				}else{
					header("Location:login.php?r=1");
				}
				}
				
					}
				}
				
	
?>
</form>
</body>
</html>