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
	//header("Location:..\home.php");}
		
		}
		
		$id = $_SESSION['user_id'];
		$query = "SELECT * FROM tbl where user_id = $id";
		$q = mysqli_query($con,$query);
			
			while($row = mysqli_fetch_array($q)){
				$fname = $row['fname'];
				$prof_pic = $row['prof_pic'];
			}
		echo "<img src = '../$prof_pic' height = '50px'/> <br>";
		echo "Hello $fname :)";
		
?>
	<h1>Administrator Module</h1>
	<div><h3><a href = 'adminuser.php'><img src ='../prof_pic.png' alt= 'Manage User' height = '50px'></a></h3>
	<div><h3><a href = 'adduser.php'>Add User</a></h3>
	<table border = '1'>
		<tr>
			<th>No.</th>
			<th>Picture</th>
			<th>First Name</th>
			<th>Middle Name</th>
			<th>Last Name</th>
			<th>Email Address</th>
			<th>Contact Number</th>
			<th>Birthday</th>
			<th>Gender</th>
			<th>Status</th>
			<th>User Type</th>
		</tr>
		<?php
		
			$sql = "SELECT * from tbl";
			$query = mysqli_query($con,$sql);
			$ctr = 0;
				while ($getData = mysqli_fetch_array($query)){
					echo "<tr>";
						echo "<td>".++$ctr."</td>";
						echo "<td><img src ='../".$getData['prof_pic']. "'height ='30px'/></td>";
						echo "<td>".$getData['fname']. "</td>";
						echo "<td>".$getData['mname']. "</td>";
						echo "<td>".$getData['lname']. "</td>";
						echo "<td>".$getData['email']. "</td>";
						echo "<td>".$getData['contact_num']. "</td>";
						echo "<td>".$getData['bday']. "</td>";
						if($getData['gender']=='M'){
							$gen = "Male";
						}		
						else {$gen = "Female"; }
						echo "<td>$gen</td>";
						if($getData['status']=='1'){
							$stat = "<a href ='status.php?id=$id&status=0'>active</a>";
						}		
						else {$stat = "<a href ='status.php?id=$id&status=1'>deactivate</a>"; }
						echo "<td>$stat</td>";
						if($getData['user_type']=='1'){
							$user = "user";
						}		
						else {$user = "admin"; }
						echo "<td>$user</td>";
						
					
					echo "</tr>";
				}
				
				if($_GET['r'] == 1){
					echo "user created";
				}
				if($_GET['r'] == 2){
					echo "user updated";
				}
				if($_GET['r'] == 3){
					echo "user deleted";
				}				
		?>
		
	</table>
	
	
	
	</div>
	<?php
	}
	else{
		header ('location:login.php');	
	}

?>
</body>
</html>