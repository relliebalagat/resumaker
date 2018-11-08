<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Resumaker | Resume Form</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/shop-homepage.css" rel="stylesheet">
    <link href="css/mystyle.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
		th {
			background-color: #baefbc;
		}
	</style>
</head>

<?php 

error_reporting(0);
session_start();



	require 'header_company.php';
	require ("connect.php");
	
?>
<body>

	<div class="container">

		<h2>Post your Job Vacancies</font></h2><hr/><br>
		<form action = '<?php echo $_SERVER ['PHP_SELF'];?>' method = 'post' enctype="multipart/form-data">
			<div class="panel-group" id="accordion">
             
				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        Job Details
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse1" class="panel-collapse collapse in">
					  	<div class="panel-body">
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-8">
						  			<label>Job Position</label>
						  			<input type="text" class="form-control" id="position" name="position" placeholder="Enter Job Position">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Years of Experience:</label>
						  			<input type="number" class="form-control" id="experience" name="experience" placeholder="Enter Years of Experience">
						  		</div>
					  		</div>

					  		<div class="col-lg-12  form-group">
						  		<div class="col-lg-12">
						  			<label>Job Description</label>
						  			<textarea rows="4" cols="50" class="form-control" id="description"  name="description" placeholder="Enter Job Description"></textarea>
						  		</div>
						  	</div>
						  	<div class="col-lg-12  form-group">
						  		<div class="col-lg-10">
						  			<label>Course Required</label>
						  			<input type="text" class="form-control" id="course" placeholder="Enter Course">
						  		</div>
						  		
						  		<div class="col-lg-2">
						  			<input type="submit" class="btn btn-success btnAdd " id="courseadd" value="Add">
						  		</div>
					  		</div>

					  	</div>
					</div>
				</div>



				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					        Skills Required
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse3" class="panel-collapse collapse in">
					  	<div class="panel-body">
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-6">
						  			<label>Skill</label>
						  			<input type="text" class="form-control" id="skill" placeholder="Enter Skill">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Skill Level</label>
						  			<select id='slevel' class="form-control">
										<option value= 'Beginner'>Beginner</option>
										<option value= 'Intermediate'>Intermediate</option>
										<option value= 'Advanced'>Advanced</option>
									</select>
						  		</div>
						  		<div class="col-lg-2">
						  			<input type="submit" class="btn btn-success btnAdd " id="skilladd" value="Add">
						  		</div>
					  		</div>
					  		<div class="col-lg-12 form-group">
					  			<table  id="tblSkill" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>Skill</th>
									<th>Skill Level</th>
									</tr>
								</table>

						  		
					  		</div>
					  	</div>
					</div>
				</div>

				<div class="col-lg-12">
					<br>
					<center>
						<input type="submit" class="btn btn-primary btn-lg" id="btnSave" name="btnSave" value="Save">
					</center>
					<br><br>
				</div>
			</div>
		</form>

		<!-- <?php			
			if (isset($_POST['btnSave'])){
				$fname = $_POST['fname'];
				$mname = $_POST['mname'];
				$lname = $_POST['lname'];
				$bday = $_POST['bday'];
				$email = $_POST['email'];
				$contactno = $_POST['contactno'];
				$address = $_POST['address'];
				$email = $_POST['email'];
				//$image = $_POST['image'];
				$civil = $_POST['civil'];
				$religion = $_POST['religion'];
				$height = $_POST['height'];
				$weight = $_POST['weight'];
				$id = $_SESSION['user_id'];

				//file upload
				$target_dir = "img/";
				$target_file = $target_dir . basename($_FILES["image"]["name"]);
				$uploadOk = 1;
				$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

				echo $imageFileType;
				echo $target_file;
				$check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }

			    //echo $imageFileType;
						
				$sql = "INSERT INTO personaldetail (UserAccountId, Image, Address, CivilStatus, Height, Weight, Religion)
				VALUES('$id', '$target_file', '$address', '$civil', '$height', '$weight','$religion')";
				$q = mysqli_query($con,$sql);
				echo $sql;
				// if ($con->query($sql) === TRUE) {
				//     echo "New record created successfully";
				// } else {
				//     echo "Error: " . $sql . "<br>" . $con->error;
				// }

				//echo $sql;
				// echo $con;
			
				if (!$q){
					echo "error in the transaction";
				}else{
					echo "successfully saved";
					
				}
				$con->close();
			}

			// Check file size
			if ($_FILES["image"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    $uploadOk = 0;
			}
			// // Allow certain file formats
			// if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			// && $imageFileType != "gif" ) {
			//     echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
			//     $uploadOk = 0;
			// }
			
			 // Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			//if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
				
	
		?> -->
	</div>

	<?php
			include 'footer.php';
	?>
</body>

</html>

<script type="text/javascript" src="js/jquery.js" ></script>


