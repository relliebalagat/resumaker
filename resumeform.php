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



	if($_SESSION['logged'] == true){
		//header ('Location:home.php');
	}
	else {
		header ('Location:home.php');
	}
	require 'header_user.php';
	require ("connect.php");
	
?>
<body>

	<div class="container">

		<h2>Create your Resume</font></h2><hr/><br>
		<form action = '<?php echo $_SERVER ['PHP_SELF'];?>' method = 'post' enctype="multipart/form-data">
			<div class="panel-group" id="accordion">
             	<input type="text" value=0 id="txtctr" name="txtctr" hidden>
             	<input type="text" value=0 id="txtwctr" name="txtwctr" hidden>
             	<input type="text" value=0 id="txtsctr" name="txtsctr" hidden>
             	<input type="text" value=0 id="txtstctr" name="txtstctr" hidden>
             	<input type="text" value=0 id="txtactr" name="txtactr" hidden>
             	<input type="text" value=0 id="txtcctr" name="txtcctr" hidden>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
					        Personal Details
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse1" class="panel-collapse collapse in">
					  	<div class="panel-body">
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-4">
						  			<label>First Name</label>
						  			<input type="text" class="form-control" id="fname" name="fname" placeholder="Enter First Name" value='<?php echo $_SESSION['fname'] ?>'>
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Middle Name</label>
						  			<input type="text" class="form-control" id="mname" name="mname" placeholder="Enter Middle Name" value='<?php echo $_SESSION['mname'] ?>'>
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Last Name</label>
						  			<input type="text" class="form-control" id="lname" name="lname" placeholder="Enter Last Name" value='<?php echo $_SESSION['lname'] ?>'>
						  		</div>
					  		</div>

					  		<div class="col-lg-12  form-group">
						  		<div class="col-lg-8">
						  			<label>Address</label>
						  			<input type="text" class="form-control" id="address"  name="address" placeholder="Enter Address">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Birth Date</label>
						  			<input type="date" class="form-control" id="bday" name="bday" value='<?php echo $_SESSION['bday'] ?>'>
						  		</div>
						  		
					  		</div>

					  		<div class="col-lg-12  form-group">
						  		<div class="col-lg-3">
						  			<label>Contact No.</label>
						  			<input type="text" class="form-control" id="contactno" name="contactno" placeholder="Enter Contact No." value='<?php echo $_SESSION['contact'] ?>'>
						  		</div>
						  		<div class="col-lg-3">
						  			<label>Email</label>
						  			<input type="email" class="form-control" id="email" name="email" placeholder="Enter Email" value='<?php echo $_SESSION['email'] ?>'>
						  		</div>
						  		<div class="col-lg-3">
						  			<label>Gender</label>
						  			<select name='gender' id="gender" class="form-control">
										<option value= 'M'>Male</option>
										<option value= 'F'>Female</option>
									</select>
						  		</div>

						  		<div class="col-lg-3">
						  			<label>Image(1x1 or 2x2)</label>
						  			<input type="file" accept="jpg, png, jpeg" class="form-control" id="image" name="image">
						  		</div>
						  		
					  		</div>

					  		<div class="col-lg-12  form-group">
						  		<div class="col-lg-3">
						  			<label>Civil Status</label>
						  			<select name = 'civil' id="civil" class="form-control">
										<option value= 'Single'>Single</option>
										<option value= 'Married'>Married</option>
										<option value= 'Married'>Divorced</option>
										<option value= 'Married'>Widowed</option>
										<option value= 'Married'>Separated</option>
									</select>
						  		</div>
						  		<div class="col-lg-3">
						  			<label>Religion</label>
						  			<select class="form-control" id="religion" name="religion">
                                      <option>Roman Catholic</option>
                                      <option>Born-again Christian</option>
                                      <option>Iglesia ni Cristo</option>
                                      <option>Orthodoxy</option>
                                      <option>Protestantism</option>
                                      <option>Mormon</option>
                                      <option>Islam</option>
                                      <option>Buddhism</option>
                                      <option>Judaism</option>
                                      <option>Hinduism</option>
                                      <option>Islam</option>
                                      <option>Others</option>
                                  </select>
						  		</div>
						  		<div class="col-lg-3">
						  			<label>Height</label>
						  			<input type="number" class="form-control" id="height" name="height" placeholder="in meters">
						  		</div>

						  		<div class="col-lg-3">
						  			<label>Weight</label>
						  			<input type="number" class="form-control" id="weight" name="weight" placeholder="in kilograms">
						  		</div> 
						  		
					  		</div>
					  	</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
					        Educational Background
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse2" class="panel-collapse collapse in">
					  	<div class="panel-body">
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-3">
						  			<label>Duration</label>
						  			<input type="text" class="form-control" id="eduration" placeholder="Enter Duration">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Level</label>
						  			<select id = 'elevel' class="form-control">
										<option value= 'Primary'>Primary</option>
										<option value= 'Secondary'>Secondary</option>
										<option value= 'Tertiary'>Tertiary</option>
										<option value= 'Post Graduate'>Post Graduate</option>
									</select>
						  		</div>
						  		<div class="col-lg-5">
						  			<label>School</label>
						  			<input type="text" class="form-control" id="eschool" placeholder="Enter SChool">
						  		</div>
					  		</div>

	  						<div class="col-lg-12 form-group">
						  		<div class="col-lg-5">
						  			<label>Course</label>
						  			<input type="text" class="form-control" id="ecourse" placeholder="Enter Course">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Award</label>
						  			<input type="text" class="form-control" id="eaward" placeholder="Enter Award">
						  		</div>
						  		<div class="col-lg-3">
						  			<input type="submit" class="btn btn-success btnAdd " id="eadd" value="Add">
						  		</div>
					  		</div>
					  		<br>
					  		<div  class="col-lg-12 form-group">
					  			<table id="tblEducation" class='table table-responsive table-bordered' style='display: none'>
									<tr>
									<th>Duration</th>
									<th>Level</th>
									<th>School</th>
									<th>Course</th>
									<th>Award</th>
									</tr>
								</table>


						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM educationdetail WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									//echo "";
									?>
									<script type="text/javascript">$('#tblEducation').show()</script>
									<?php

									while($row = mysqli_fetch_array($result)) {
									    echo "<tr>";
									    echo "<td>" . $row['Duration'] . "</td>";
									    echo "<td>" . $row['EducationLevel'] . "</td>";
									    echo "<td>" . $row['School'] . "</td>";
									    echo "<td>" . $row['Course'] . "</td>";
									    echo "<td>" . $row['Awards'] . "</td>";
									    echo "</tr>";
									}
									echo "</table>";
								}
								
								mysqli_close($con);
								?>
					  		</div>
					  	</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					        Work Experience
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse3" class="panel-collapse collapse in">
					  	<div class="panel-body">
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-3">
						  			<label>Duration</label>
						  			<input type="text" class="form-control" id="wduration" placeholder="Enter Duration">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Job Position</label>
						  			<input type="text" class="form-control" id="wposition" placeholder="Enter Job Position">
						  			
						  		</div>
						  		<div class="col-lg-5">
						  			<label>Company</label>
						  			<input type="text" class="form-control" id="wcompany" placeholder="Enter Company">
						  		</div>
					  		</div>

					  		<div class="col-lg-12 form-group">
						  		<div class="col-lg-5">
						  			<label>Job Description</label>
						  			<input type="text" class="form-control" id="wdescription" placeholder="Enter Job Description">
						  		</div>
						  		<div class="col-lg-3">
						  			<input type="submit" class="btn btn-success btnAdd " id="wadd" value="Add">
						  		</div>
					  		</div>

					  		<div  class="col-lg-12 form-group">

					  			<table id="tblWork" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>Duration</th>
									<th>Position</th>
									<th>Company</th>
									<th>Description</th>
									</tr>
								</table>

						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM workdetails WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									//echo "";
									?>
									<script type="text/javascript">$('#tblWork').show()</script>
									<?php
									while($row = mysqli_fetch_array($result)) {
									    echo "<tr>";
									    echo "<td>" . $row['Duration'] . "</td>";
									    echo "<td>" . $row['Position'] . "</td>";
									    echo "<td>" . $row['Company'] . "</td>";
									    echo "<td>" . $row['Description'] . "</td>";
									    echo "</tr>";
									}
									echo "</table>";
								}
								
								mysqli_close($con);
								?>
					  		</div>
					  	</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
					        Skills
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
						  			<input type="submit" class="btn btn-success btnAdd " id="sadd" value="Add">
						  		</div>
					  		</div>
					  		<div class="col-lg-12 form-group">
					  			<table  id="tblSkill" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>Skill</th>
									<th>Skill Level</th>
									</tr>
								</table>

						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM skill WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									//echo "";

									?>
									<script type="text/javascript">$('#tblSkill').show()</script>
									<?php

									while($row = mysqli_fetch_array($result)) {
									    echo "<tr>";
									    echo "<td>" . $row['Skill'] . "</td>";
									    echo "<td>" . $row['SkillLevel'] . "</td>";
									    echo "</tr>";
									}
									echo "</table>";
								}
								
								mysqli_close($con);
								?>
					  		</div>
					  	</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
					        Seminars and Trainings
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse4" class="panel-collapse collapse in">
					  	<div class="panel-body">
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-2">
						  			<label>Date</label>
						  			<input type="text" class="form-control" id="semduration" placeholder="mm/yyyy">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Seminar/Training</label>
						  			<input type="text" class="form-control" id="semtraining" placeholder="Enter Seminar/Training">
						  			
						  		</div>

						  		<div class="col-lg-4">
						  			<label>Description</label>
						  			<input type="text" class="form-control" id="semdescription" placeholder="Enter Description">
						  		</div>
						  		<div class="col-lg-2">
						  			<input type="submit" class="btn btn-success btnAdd " id="semadd" value="Add">
						  		</div>
						  		
					  		</div>
					  		<div  class="col-lg-12 form-group">
					  			<table id="tblSeminar" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>Date</th>
									<th>Seminar/Training</th>
									<th>Description</th>
									</tr>
								</table>

						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM seminartraining WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									//echo "";
									?>
									<script type="text/javascript">$('#tblSeminar').show()</script>
									<?php
									while($row = mysqli_fetch_array($result)) {
									    echo "<tr>";
									    echo "<td>" . $row['Date'] . "</td>";
									    echo "<td>" . $row['SeminarTraining'] . "</td>";
									    echo "<td>" . $row['Description'] . "</td>";
									    echo "</tr>";
									}
									echo "</table>";
								}
								
								mysqli_close($con);
								?>
					  		</div>

					  		
					  	</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
					        Awards and Achievements
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse5" class="panel-collapse collapse in">
					  	<div class="panel-body">
					  		<div class="col-lg-12 form-group">
						  		<div class="col-lg-2">
						  			<label>Duration</label>
						  			<input type="text" class="form-control" id="aaduration" placeholder="Enter Duration">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Award/Achievement</label>
						  			<input type="text" class="form-control" id="award" placeholder="Enter Award/Achievement">
						  			
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Description</label>
						  			<input type="text" class="form-control" id="aadescription" placeholder="Enter Description">
						  		</div>
						  		<div class="col-lg-2">
						  			<input type="submit" class="btn btn-success btnAdd " id="awardadd" value="Add">
						  		</div>
						  		
					  		</div>
					  		<div  class="col-lg-12 form-group">
					  			<table id="tblAward" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>Date</th>
									<th>Achievement</th>
									<th>Description</th>
									</tr>
								</table>
						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM achievement WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									?>
									<script type="text/javascript">$('#tblAward').show()</script>
									<?php
									while($row = mysqli_fetch_array($result)) {
									    echo "<tr>";
									    echo "<td>" . $row['Date'] . "</td>";
									    echo "<td>" . $row['Achievement'] . "</td>";
									    echo "<td>" . $row['Description'] . "</td>";
									    echo "</tr>";
									}
									echo "</table>";
								}
								
								mysqli_close($con);
								?>
					  		</div>

					  		
					  	</div>
					  	</div>
					</div>
				</div>

				<div class="panel panel-info">
					<div class="panel-heading">
						<h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">
					        Character References
					    	</a>
				      	</h4>
			 	 	</div>
			 	 	<div id="collapse6" class="panel-collapse collapse in">
					  	<div class="panel-body">
					  		<div class="col-lg-12 form-group">
						  		<div class="col-lg-6">
						  			<label>Name</label>
						  			<input type="text" class="form-control" id="crname" placeholder="Enter Name">
						  		</div>
						  		<div class="col-lg-6">
						  			<label>School/Company</label>
						  			<input type="text" class="form-control" id="crschool" placeholder="Enter School/Company">
						  			
						  		</div>
						  	</div>
						  	<div class="col-lg-12 form-group">
						  		<div class="col-lg-4">
						  			<label>Position</label>
						  			<input type="text" class="form-control" id="crposition" placeholder="Enter Position">
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Contact No</label>
						  			<input type="number" class="form-control" id="crcontant" placeholder="Enter Contact No">
						  		</div>
						  		<div class="col-lg-2">
						  			<input type="submit" class="btn btn-success btnAdd " id="cradd" value="Add">
						  		</div>
						  		
					  		</div>

					  		<div class="col-lg-12 form-group">

					  			<table id="tblCharacter" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>Name</th>
									<th>Organization</th>
									<th>Position</th>
									<th>Contact No.</th>
									</tr>
								</table>

						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM characterreference WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									?>
									<script type="text/javascript">$('#tblCharacter').show()</script>
									<?php

									
									while($row = mysqli_fetch_array($result)) {
									    echo "<tr>";
									    echo "<td>" . $row['Name'] . "</td>";
									    echo "<td>" . $row['Organization'] . "</td>";
									    echo "<td>" . $row['Position'] . "</td>";
									    echo "<td>" . $row['ContactNo'] . "</td>";
									    echo "</tr>";
									}
									echo "</table>";
								}
								
								mysqli_close($con);
								?>
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

		<?php			
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
				
	
		?>
	</div>

	<?php
			include 'footer.php';
	?>
</body>

</html>

<script type="text/javascript" src="js/jquery.js" ></script>

<script type="text/javascript">

// function addEduc() {
// 	 //$('#tblEducation').append('');
// 	 alert('jom');
// }
ctr = 0;
wctr = 0;
sctr = 0;
stctr = 0;
actr = 0;
cctr = 0;


$('#eadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
    $('#tblEducation').show();
    $('#tblEducation').append("<tr><td><label name='lblduration"+(ctr)+"' >"+ $('#eduration').val() +"</label></td><td><label name='lbllevel"+(ctr)+"' >"+ $('#elevel').val() +"</label></td><td><label name='lblschool"+(ctr)+"' >"+ $('#eschool').val() +"</label></td><td><label name='lblcourse"+(ctr)+"' >"+ $('#ecourse').val() +"</label></td><td><label name='lblaward"+(ctr)+"' >"+ $('#eaward').val() +"</label></td></tr>");
	ctr++;
	$('#txtctr').val(ctr);
});

$('#wadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
    $('#tblWork').show();
    $('#tblWork').append("<tr><td><label name='lblwduration"+(wctr)+"' >"+ $('#wduration').val() +"</label></td><td><label name='lblwposition"+(wctr)+"' >"+ $('#wposition').val() +"</label></td><td><label name='lblwcompany"+(wctr)+"' >"+ $('#wcompany').val() +"</label></td><td><label name='lblwdescription"+(wctr)+"' >"+ $('#wdescription').val() +"</label></td></tr>");
	wctr++;
	$('#txtwctr').val(wctr);

});

$('#sadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
    $('#tblSkill').show();
    $('#tblSkill').append("<tr><td><label name='lblskill"+(sctr)+"' >"+ $('#skill').val() +"</label></td><td><label name='lblslevel"+(sctr)+"' >"+ $('#slevel').val() +"</label></td></tr>");
	sctr++;
	$('#txtsctr').val(sctr);

});

$('#semadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
    $('#tblSeminar').show();
    $('#tblSeminar').append("<tr><td><label name='lblsemduration"+(stctr)+"' >"+ $('#semduration').val() +"</label></td><td><label name='lblsemtraining"+(stctr)+"' >"+ $('#semtraining').val() +"</label></td><td><label name='lblsemdescription"+(stctr)+"' >"+ $('#semdescription').val() +"</label></td></tr>");
	stctr++;
	$('#txtstctr').val(stctr);

});

$('#awardadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
    $('#tblAward').show();
    $('#tblAward').append("<tr><td><label name='lblaaduration"+(actr)+"' >"+ $('#aaduration').val() +"</label></td><td><label name='lblaward"+(actr)+"' >"+ $('#award').val() +"</label></td><td><label name='lblaadescription"+(actr)+"' >"+ $('#aadescription').val() +"</label></td></tr>");
	actr++;
	$('#txtactr').val(actr);

});

$('#cradd').click(function(e) {
    e.preventDefault();
    //alert('jom');
    $('#tblCharacter').show();
   $('#tblCharacter').append("<tr><td><label name='lblcrname"+(cctr)+"' >"+ $('#crname').val() +"</label></td><td><label name='lblcrschool"+(cctr)+"' >"+ $('#crschool').val() +"</label></td><td><label name='lblcrposition"+(cctr)+"' >"+ $('#crposition').val() +"</label></td><td><label name='lblcrcontant"+(cctr)+"' >"+ $('#crcontant').val() +"</label></td></tr>");
	cctr++;
	$('#txtcctr').val(cctr);

});


</script>

