
<?php 
error_reporting(0);
	session_start();
	include("connect.php");
	require 'headerb.php';
/*
	
	$cms = "SELECT * from cms";
	$result = mysqli_query($con, $cms);
		while($getCMS = mysqli_fetch_array($result)){
			$bg = $getCMS['color_background'];
			$msg = $getCMS['welcome_msg'];
		}
*/
$qty=$_POST["t_qty"];
$prod=$_POST["t_product"];
$amount=$_POST["t_amount"];
$sql = "INSERT INTO `products`(`name`, `price`, `quantity`) VALUES('$prod','$amount','$qty')";
mysqli_query($con, $sql);
echo $sql;
?>