<html>
<head>
</head>
<body>
<br><br><br><br><br><br><br><br>
<?php 
	include ("../connect.php");
	
	error_reporting(0);
	session_start();
	require 'header.php';
	if ($_SESSION['logged'] = true){
		
	if ($SESSION ['user_type'] == 1){
	header ("location:..\home.php");
	}
	elseif($_SESSION['user_type']==2){
		header("Location:admin\home.php");}
	elseif($_SESSION['user_type']==3){
		header("Location:manager\home.php");}
	
	$id = $_SESSION ['user_id'];

	
	$query = "SELECT * FROM tbl where user_id = $id";
	
	$q = mysqli_query($con,$query);
	
		while ($row = mysqli_fetch_array($q)){
			$fname = $row['fname'];
			$prof_pic = $row['prof_pic'];
		}
	echo "<img src = '$prof_pic' height = '50px'/></br>";
	echo "Hello $fname!";
	
	?>
		<h2><b><center>Administrator Module</center><b></h2>
		<h2>Manage User<img src = '..\img\manageuser.jpg' alt = 'Manage User' height = '20px'/></h2>
		
		<div>
			<table border= '2'>
				<tr>
					<th>No.</th>
					<th>Pictures</th>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
					<th>Email Address</th>
					<th>Contact Number</th>
					<th>Birthday</th>
					<th>Gender</th>
					<th>Status</th>
					<th>User Type</th>
					<th>Actions</th>
				</tr>
			
				<?php
						$sql = "SELECT * from tbl";
						
						$query = mysqli_query($con, $sql);
						
						$ctr = 0;
						while ($getData = mysqli_fetch_array($query)){
							$id = $getData['user_id'];
							echo "<tr>";
								echo "<td>".++$ctr."</td>";
								echo "<td><img src = '../".$getData['prof_pic']."'height ='30px'/></td>";
								echo "<td>".$getData['fname']."</td>";
								echo "<td>".$getData['mname']."</td>";
								echo "<td>".$getData['lname']."</td>";
								echo "<td>".$getData['email']."</td>";
								echo "<td>".$getData['contact_num']."</td>";
								echo "<td>".$getData['bday']."</td>";
								if ($getData['gender'] == 'M') {
									$gen = "Male";
								}
								else {$gen = "Female";}
								echo "<td>$gen</td>";
								if ($getData['status'] == '1'){
									$stat = "<a href = 'status.php?id=$id&status=0'>active</a>'";
								}
								else {$stat = "<a href = 'status.php?id=$id&status=1'>deactivate</a>'";}
								echo "<td>$stat</td>";
								
								
								if ($getData['user_type'] == '1'){
									$type = "user";
								}
								else {$type = "seller";}
								echo "<td>$type</td>";
								
								echo "<td><a href= 'edituser.php?id=$id'>edit</a> | <a href= 'delete.php?id=$id'>delete</a> </td>";
								
							echo "</tr>";
						}
						
						if ($_GET ['r'] == 1 ){
							echo "user created";
						}
						if ($_GET['r'] == 2 ){
							echo "user updated";
						}
						
						if ($_GET['r'] == 3 ){
							echo "user deleted";
						}
						
				?>
			
			</table>
			
		</div>
					
		
		
		
		
<?php
	}


	else {
		header('Location:login.php');
	}



?>
</body>
</html>