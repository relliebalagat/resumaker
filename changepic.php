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
</head>
<body>
<br>
<?php 
	include ("connect.php");
	require 'header.php';
	error_reporting(0);
	session_start();
	
	if ($_SESSION['logged'] = true){
		
	if ($SESSION ['user_type'] == 2){
	header ("location:admin\home.php");
	}
	echo "<center>";
	
	$id = $_SESSION ['user_id'];

	
	$query = "SELECT * FROM tbl where user_id = $id";
	
	$q = mysqli_query($con,$query);
	
		while ($row = mysqli_fetch_array($q)){
			$fname = $row['fname'];
			$prof_pic = $row['prof_pic'];
		}
	
	echo "<img src = '$prof_pic' height = '150px'/></br>";
	echo "Hello $fname!";
	
	?>
	
	<form enctype = 'multipart/form-data' action ='<?php echo $_SERVER['PHP_SELF'];?>'method='post'>
	<input type ='file' name ='changedp'/>
	<input type ='submit' name ='upload' value ='Upload!'/>
	</form>
	
	
<?php

include 'reset.php';
?>
	
	<?php
		if(isset($_POST['upload'])){
			if ($_FILES['changed']['error']>0){
				echo "Error: ". $_FILES['changedp']['error'];
			}else{
				//echo $_FILES['changedp']['name']."<br/>";
				//echo $_FILES['changedp']['type']."<br/>";
				//echo $_FILES['changedp']['size']."<br/>";
				$temp_name = $_FILES['changedp']['tmp_name'];
				$org_name = $_FILES['changedp']['name'];
				$path = "img";
				$upload_pic = "$path/$org_name";
				
				move_uploaded_file ($temp_name,"$path/$org_name");
				
				$sql = "UPDATE tbl set prof_pic = '$upload_pic' where user_id = $id";
				mysqli_query($con,$sql);
				header ("location:home.php?r=1");
				
				
				
			}
		}
	}
	else{
		header('Location:login.php');
	}
	
	?>
	
	