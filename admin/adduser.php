<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Design Soldier</title>'

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
<head><title></title></head>
<body>
<br><br><br><br><br><br><br><br>
<form name='registration_form' method='post'/>
<?php 
include ("../connect.php");
require ("header.php");
?>
		<h2><b><center>Add User</b></h2>
		<center>
		<form action = '<?php echo $_SERVER ['PHP_SELF'];?>' method = 'post'>
		<table border = '1'>
		<tr>
			<th align = 'right'>First Name:</th>
			<th><input type= 'text' name= 'fname' value= '<?php echo $_POST['fname'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Middle Name:</th>
			<th><input type= 'text' name= 'mname' value= '<?php echo $_POST['mname'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Last Name:</th>
			<th><input type= 'text' name= 'lname' value= '<?php echo $_POST['lname'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Password:</th>
			<th><input type= 'password' name= 'pass1' value= '<?php echo $_POST['pass1'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Confirm Password:</th>
			<th><input type= 'password' name= 'pass2' value= '<?php echo $_POST['pass2'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Contact:</th>
			<th><input type= 'number' name= 'contact' value= '<?php echo $_POST['contact'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Birthday:</th>
			<th><input type= 'date' name= 'bday' value= '<?php echo $_POST['bday'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Email:</th>
			<th><input type= 'email' name= 'email' value= '<?php echo $_POST['email'];?>'/></th>
		</tr>
		<tr>
			<th align = 'right'>Gender:</th>
			<td><select name = 'gender'>
				<option value= 'M'>Male</option>
				<option value= 'F'>Female</option>
				</select></td>				
		</tr>
		<tr>
			<th align = 'right'>User Type:</th>
			<td><select name = 'type'>
				<option value= '1'>User</option>
				<option value= '2'>Admin</option>
				</select></td>				
		</tr>
		<tr>
		<th colspan = '2'><input type = 'submit' value = 'register' name = 'submit'/>
		<input type = 'reset' value = 'reset' name = 'reset'/></th>
		</tr>
		</table>		
		</form>
			</center>
<?php			
			if (isset($_POST['submit'])){
				$fname = $_POST['fname'];
				$mname = $_POST['mname'];
				$lname = $_POST['lname'];
				$pass1 = $_POST['pass1'];
				$pass2 = $_POST['pass2'];
				$bday = $_POST['bday'];
				$email = $_POST['email'];
				$contact_num = $_POST['contact'];
				$gender = $_POST['gender'];
				$user_type = $_POST['type'];
				
			
			if (empty($fname) || empty($lname) || empty($pass1) || empty($pass2) || empty($email)
				|| empty($contact_num) || empty($bday) || empty($gender) ){
					echo "fields are required";
				}
				else{
					if ($pass1 == $pass2){
						$enc_pass = md5(md5($pass1));
						
				$sql = "INSERT INTO tbl(fname, mname, lname, password, bday, email, contact_num,gender,user_type)
				VALUES('$fname', '$mname', '$lname', '$enc_pass', '$bday', '$email', '$contact_num', '$gender', $user_type)";
				$q = mysqli_query($con,$sql);
				
				if (!$q){
					echo "error in the transaction";
				}else{
					header("Location:manageuser.php?r=1");
				}
				}
				
					}
				}
				
	
?>
</form>
</body>
</html>