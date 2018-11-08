<html>
<head>
</head>
<body>
<font face= 'calibri'>
<?php
	include("..\connect.php");
	
	error_reporting(0);
	session_start();

	if($_SESSION['logged'] == true){
	
	if($_SESSION['user_type']==1){
		//header('Location:..\home.php');

	}
	
	$id = $_GET['id'];
	$sql = "SELECT * from tbl where user_id = $id";
	$query = mysqli_query($con,$sql);
	
	while($getData = mysqli_fetch_array($query)){
		$fname = $getData['fname'];
		$mname = $getData['mname'];
		$lname = $getData['lname'];
		$password = $getData['password'];
		$contact_num = $getData['contact_num'];
		$email = $getData['email'];
		$bday = $getData['bday'];
		$gender = $getData['gender'];
		$user_type = $getData['user_type'];
	}	
		?>
<h1>Administrator Module</h1>
<h2>Edit User</h2>

<form action='<?php echo $_SERVER['PHP_SELF']; ?>' method='post'>
	<table border="1">
		
		<tr>
			<td>User Name</td>
			<td><input type='text' name='uname'></td>
		</tr>
		<tr>
			<td>First Name</td>
			<td><input type='text' name='fname' value='<?php echo $fname; ?>'></td>
		</tr>
		<tr>
			<td>Middle Name</td>
			<td><input type='text' name='mname' value='<?php echo $mname; ?>'></td>
		</tr>
		<tr>
			<td>Last Name</td>
			<td><input type='text'  name='lname' value='<?php echo $lname; ?>'></td>
		</tr>
		<tr>
			<td>Password</td>
			<td><input type='password'  name='pass1' value='<?php echo $password; ?>'></td>
		</tr>
		<tr>
			<td>Contact Number </td>
			<td><input type='text' name='contact' value='<?php echo $contact_num;?>'></td>
		</tr>
		<tr>
			<td>Email</td>
			<td><input type='text' name='email' value='<?php echo $email; ?>'></td>
		</tr>
		<tr>
			<td>Birthday</td>
			<td><input type='date' name='bday' value='<?php echo $bday;?>'></td>
		</tr>
		<tr>
			<td>Gender:</td>
			<th><select name = 'gender'>
			<?php 
			if($gender=='M'){
				$gen = "Male";
			}else
				$gen = "Female";
				echo "<option value = '$gender'>$gen</option>";
			?>
			<option value = 'M'>Male </option>
			<option value = 'F'>Female </option>
			</th>
		</tr>
		<tr>
			<th align = 'right'>User Type: </th>
			<td><select name ='type'>
				<?php
					if($user_type == '1'){
						$stat = "User";
					}else $stat = "Admin";
					echo "<option value = '$type'>$stat</option>";
				
				?>
				<option value ='1'>User</option>
				<option value ='2'>Admin</option>
				</select></td>
			</tr>
		<tr>
			<td colspan=2 align = 'center'>
			<input type="submit" name="submit" value="Update">
			<input type="reset" name="reset" value="Reset"></td>
		</tr>
	</table>
</form>
<a href = 'home.php'>Dashboard</a>
<a href = 'manageuser.php'>Back</a>
<a href = 'logout.php'>Log out</a>


<?php
	
	if(isset($_POST['submit'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$pass1 = $_POST['pass1'];
		$contact = $_POST['contact'];
		$email = $_POST['email'];
		$bday = $_POST['bday'];
		$gender = $_POST['gender'];
		$type = $_POST['type'];
		
		if(empty($fname) || empty($lname) || empty($contact) || empty($email) ||
			empty($bday) || empty($gender)){
				echo "Fields are required";
		}
		else{
			
				$sql = "UPDATE tbl SET
				fname = '$fname',
				lname = '$lname',
				mname = '$mname',
				email= '$email',
				contact_num = '$contact',
				bday = '$bday',
				gender = '$gender',
				user_type = '$user_type',
				where user_id = $id";
				
				$q = mysqli_query($con,$sql);
				
				if(!$q){
					echo "error in updating";
				}
				else{
					header("Location:manageuser.php?r=2");
				}
				$q = mysqli_query($con,$sql);
				
				if(!$q){
					echo "error in the transaction";
				}
				else{
					header("Location:manageuser.php?r=1");
				}
			}
			
		}
		
	
	}
	else{
		header ("location:login.php");
	}

?>
</font>
</body>
</html>