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

</head>
<?
require 'header.';
?>
<body style='background-image:img/light.jpg'>

    <form method="POST" action = "" name="myForm">
	<input type = '' name='hjob' id='hjob'value="<?=$_POST['hjob']?>">
	<input type = '' name='id' id='id' value="<?=$_POST['id']?>">
    <!-- Page Content -->
    <div class="container">

        <div class="row">
	
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
		
		<div>
			<table class='table table-striped'>
				<tr>
					<th>No.</th>
					<th>Item/Product</th>
					<th>Quantity</th>
					<th>Price</th>
				</tr>
			
				<?php
						$sql = "SELECT * from admin_products";
						
						$query = mysqli_query($con, $sql);
						
						$ctr = 0;
						while ($getData = mysqli_fetch_array($query)){
							$id = $getData['user_id'];
							echo "<t>";
								echo "<td><button class='btn btn-link' type='submit' onclick='assignVal(\"".$getData['id']."\")'>".++$ctr."</button></td>";
								echo "<td>".$getData['name']."</td>";
								echo "<td>".$getData['quantity']."</td>";
								echo "<td>".$getData['price']."</td>";
								
							echo "</tr>";
						}
						
				?>
			
			</table>
			<hr>
			<?php
			if($_POST["hjob"] == "addnew"){
				$qty=$_POST["t_qty"];
				$prod=$_POST["t_product"];
				$amount=$_POST["t_amount"];
				$sql = "INSERT INTO `admin_products`(`name`, `price`, `quantity`) VALUES('$prod','$amount','$qty')";
				mysqli_query($con, $sql);
				echo "<script>location.reload();</script>";
			}
			
						$sql = "SELECT * from `admin_products` where ID = '".$_POST["id"]."'";
						
						$query = mysqli_query($con, $sql);
						
						$ctr = 0;$id="";$pname="";$qty="";$amt="";
						while ($getData = mysqli_fetch_array($query)){
							$id = $getData['user_id'];
							$amt = $getdata['price'];
							$qty = $getdata['quantity'];
						}
			?>
				<input type='text' class='form-control' name ='t_product' placeholder='Item/Product Name' value='<?=$pname?>'>
				<input type='text' class='form-control' name ='t_qty' placeholder='Quantity' value='<?=$qty?>'>
				<input type='text' class='form-control' name = 't_amount' placeholder='Amount' value='<?=$amt?>'>
			<hr>
			<button type='submit' onclick="document.getElementById('hjob').value = 'addnew'">Save</button>
		</div>
					
		
		
		
		
<?php
	}


	else {
		header('Location:login.php');
	}



?>
        </div>

    </div>
	</div>         
    <!-- /.container -->

    <div class="container">

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12">
                   <center> <p>Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </footer>

    </div>
    <!-- /.container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
	<script>
		function assignVal(e){
			document.getElementById("hjob").value="save";
			document.getElementById("id").value=e;
		}
	</script>
	</body>

</html>
