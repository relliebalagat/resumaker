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


	function displayYear() {
		$year = date("Y");
											
		for($i = $year; $i > 1980; $i--) {
			echo '<option value="' . $year . '">'. $year .'</option>';
			$year--;
		}
	}
	
?>
<body>

	<div class="container">
		<input type="hidden" id="userAccountId" value="<?php echo $_SESSION['user_id'] ?>">
		<h2>Create your Resume</font></h2><hr/><br>
		<form action="forms/insertpersonaldetails.php" method='post' enctype="multipart/form-data">
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
						  		<div class="col-lg-2">
						  			<label>From</label>
						  			
										<select class="form-control" id="fromeduration">
											<?php

											displayYear();

											?>
										</select>

						  		</div>
									<div class="col-lg-2">
						  			<label>To</label>
						  			
										<select class="form-control" id="toeduration">
											<?php

											displayYear();

											?>
										</select>

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
						  		<div class="col-lg-4">
						  			<label>School</label>
						  			<input type="text" class="form-control" id="eschool" placeholder="Enter SChool">
						  		</div>
					  		</div>

	  						<div class="col-lg-12 form-group">
									<div class="col-lg-3">
						  			<label>Field Of Study</label>
						  			<select class="form-control" id="efield">
											<option value="" selected></option>
											<option value="Accounting and Finance">Accounting and Finance</option>
											<option value="Information Technology">Information Technology</option>
											<option value="Engineering">Engineering</option>
										</select>
						  		</div>

						  		<div class="col-lg-3">
						  			<label>Course</label>
						  			<input type="text" class="form-control" id="ecourse" placeholder="Enter Course">
						  		</div>
						  		<div class="col-lg-3">
						  			<label>Award</label>
						  			<input type="text" class="form-control" id="eaward" placeholder="Enter Award">
						  		</div>

						  		<div class="col-lg-2">
						  			<button type="button" class="btn btn-success btnAdd " id="eadd">Add</button>
						  		</div>
					  		</div>
					  		<br>
					  		<div  class="col-lg-12 form-group">
					  			<table id="tblEducation" class='table table-responsive table-bordered' style='display: none'>
									<tr>
									<th>From</th>
									<th>To</th>
									<th>Level</th>
									<th>School</th>
									<th>Field Of Study</th>
									<th>Course</th>
									<th>Award</th>
									</tr>
								</table>
								<!-- <script type="text/javascript">$('#tblEducation').show()</script> -->
									
						  		<?php
								
								$q = (int)$_SESSION['user_id'];

								$sql="SELECT * FROM educationdetail WHERE UserAccountId = $q";
								$result = mysqli_query($con,$sql);
								//echo $sql;
								//echo  $result;
								//echo mysqli_num_rows($result);

								if(mysqli_num_rows($result) > 0)
								{
									?>
									
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
						  			<label>From</label>
										<select class="form-control" id="wfromduration">
											
											<?php
	
												displayYear();						
	
											?>
										</select>
						  		</div>
									<div class="col-lg-3">
						  			<label>To</label>
										<select class="form-control" id="wtoduration">
											
											<?php
											
											displayYear();
											
											?>
										</select>
						  		</div>
						  		<div class="col-lg-4">
						  			<label>Job Position</label>
						  			<input type="text" class="form-control" id="wposition" placeholder="Enter Job Position">
						  			
						  		</div>
						  		
					  		</div>

					  		<div class="col-lg-12 form-group">
									<div class="col-lg-5">
						  			<label>Company</label>
						  			<input type="text" class="form-control" id="wcompany" placeholder="Enter Company">
						  		</div>
						  		<div class="col-lg-5">
						  			<label>Job Description</label>
						  			<input type="text" class="form-control" id="wdescription" placeholder="Enter Job Description">
						  		</div>
						  		<div class="col-lg-2">
						  			<button type="button" class="btn btn-success btnAdd " id="wadd">Add</button>
						  		</div>
					  		</div>

					  		<div  class="col-lg-12 form-group">

					  			<table id="tblWork" class='table table-responsive table-bordered' style="display: none">
									<tr>
									<th>From</th>
									<th>To</th>
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
						  			<button type="button" class="btn btn-success btnAdd " id="sadd">Add</button>
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

		var fromduration = $('#fromeduration').val();
		var toduration = $('#toeduration').val();
		var schoolLevel = $('#elevel').val();
		var school = $('#eschool').val();
		var fieldofstudy = $('#efield').val();
		var course = $('#ecourse').val();
		var award = $('#eaward').val();

		var data = "fromduration=" + fromduration + "&toduration=" + toduration + "&schoolLevel=" + schoolLevel + "&school=" + school + "&course=" + course + "&award=" + award + "&fieldofstudy=" + encodeURIComponent(fieldofstudy);

		var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
				if(this.responseText === 'success') {
					alert('Education add successfully');
				} else {
					alert('Cannot add Education');
				}
      }
    }
    xml.open("POST", "forms/addeducation.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(data);	

    //alert('jom');
    $('#tblEducation').show();
    $('#tblEducation').append("<tr><td><label name='lbltoduration"+(ctr)+"' >"+ $('#toeduration').val() +"</label></td><td><label name='lbltoduration"+(ctr)+"' >"+ $('#fromeduration').val() +"</label></td><td><label name='lbllevel"+(ctr)+"' >"+ $('#elevel').val() +"</label></td><td><label name='lblschool"+(ctr)+"' >"+ $('#eschool').val() +"</label></td><td><label name='lbltoduration"+(ctr)+"' >"+ $('#efield').val() +"</label></td><td><label name='lblcourse"+(ctr)+"' >"+ $('#ecourse').val() +"</label></td><td><label name='lblaward"+(ctr)+"' >"+ $('#eaward').val() +"</label></td></tr>");
	ctr++;
	$('#txtctr').val(ctr);
});

$('#wadd').click(function(e) {
		
		var fromduration = $('#wfromduration').val();
		var toduration = $('#wtoduration').val();
		var position = $('#wposition').val();
		var company = $('#wcompany').val();
		var description = $('#wdescription').val();
		
	  var data = "fromduration=" + fromduration + "&toduration=" + toduration + "&position=" + position + "&company=" + company + "&description=" + description;
		
		var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
				if(this.responseText === 'success') {
					alert('Work Experience add successfully');
				} else {
					alert('Cannot add Work Experience');
				}
      }
    }
    xml.open("POST", "forms/addworkexperience.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(data);	

    //alert('jom');
    $('#tblWork').show();
    $('#tblWork').append("<tr><td><label name='lblwfromduration"+(wctr)+"' >"+ $('#wfromduration').val() +"</label></td><td><label name='lblwtoduration"+(wctr)+"' >"+ $('#wtoduration').val() +"</label></td><td><label name='lblwposition"+(wctr)+"' >"+ $('#wposition').val() +"</label></td><td><label name='lblwcompany"+(wctr)+"' >"+ $('#wcompany').val() +"</label></td><td><label name='lblwdescription"+(wctr)+"' >"+ $('#wdescription').val() +"</label></td></tr>");
	wctr++;
	$('#txtwctr').val(wctr);

});

$('#sadd').click(function(e) {
		//e.preventDefault();
		var userId = document.getElementById('userAccountId').value;
		var xml = new XMLHttpRequest();
    xml.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
				if(this.responseText === 'success') {
					alert('Skill add successfully');
				} else {
					alert('Cannot add skill');
				}
      }
    }
    xml.open("POST", "forms/addskill.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send("skill=" + $('#skill').val() +"&skillLevel=" + $('#slevel').val() );

    
    //alert('jom');
    $('#tblSkill').show();
    $('#tblSkill').append("<tr><td><label name='lblskill"+(sctr)+"' >"+ $('#skill').val() +"</label></td><td><label name='lblslevel"+(sctr)+"' >"+ $('#slevel').val() +"</label></td></tr>");
	sctr++;
	$('#txtsctr').val(sctr);

});

$('#semadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
		var date = $('#semduration').val();
		var seminar = $('#semtraining').val();
		var description = $('#semdescription').val();
		var data = "date=" + date + "&seminar=" + seminar + "&description=" + description;
		var xml = new XMLHttpRequest();
		xml.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
				if(this.responseText === 'success') {
					alert('Seminar/Training add successfully');
				} else {
					alert('Cannot add seminar/training');
				}
      }
    }
    xml.open("POST", "forms/addseminar.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(data);

    $('#tblSeminar').show();
    $('#tblSeminar').append("<tr><td><label name='lblsemduration"+(stctr)+"' >"+ $('#semduration').val() +"</label></td><td><label name='lblsemtraining"+(stctr)+"' >"+ $('#semtraining').val() +"</label></td><td><label name='lblsemdescription"+(stctr)+"' >"+ $('#semdescription').val() +"</label></td></tr>");
	stctr++;
	$('#txtstctr').val(stctr);

});

$('#awardadd').click(function(e) {
    e.preventDefault();
    //alert('jom');
		var duration = $('#aaduration').val();
		var award = $('#award').val();
		var description = $('#aadescription').val();
		
		var data = "date=" + duration + "&award=" + award + "&description=" + description;

		var xml = new XMLHttpRequest();
		xml.onreadystatechange = function() {
      if(this.readyState == 4 && this.status == 200) {
				console.log(this.responseText);
				if(this.responseText === 'success') {
					alert('Achievement add successfully');
				} else {
					alert('Cannot add Achievement');
				}
      }
    }
    xml.open("POST", "forms/addachievement.php", true);
    xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    xml.send(data);

    $('#tblAward').show();
    $('#tblAward').append("<tr><td><label name='lblaaduration"+(actr)+"' >"+ $('#aaduration').val() +"</label></td><td><label name='lblaward"+(actr)+"' >"+ $('#award').val() +"</label></td><td><label name='lblaadescription"+(actr)+"' >"+ $('#aadescription').val() +"</label></td></tr>");
	actr++;
	$('#txtactr').val(actr);

});

$('#cradd').click(function(e) {
    e.preventDefault();
    //alert('jom');
	var name = $('#crname').val();
	var school = $('#crschool').val();
	var position = $('#crposition').val();
	var contactNo = $('#crcontant').val();
	
	var data = "name=" + name + "&school=" + school + "&position=" + position + "&contact=" + contactNo;

	var xml = new XMLHttpRequest();
	xml.onreadystatechange = function() {
		if(this.readyState == 4 && this.status == 200) {
			console.log(this.responseText);
			if(this.responseText === 'success') {
				alert('Achievement add successfully');
			} else {
				alert('Cannot add Achievement');
			}
		}
	}
	xml.open("POST", "forms/addreference.php", true);
	xml.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xml.send(data);

	 $('#tblCharacter').show();
   $('#tblCharacter').append("<tr><td><label name='lblcrname"+(cctr)+"' >"+ $('#crname').val() +"</label></td><td><label name='lblcrschool"+(cctr)+"' >"+ $('#crschool').val() +"</label></td><td><label name='lblcrposition"+(cctr)+"' >"+ $('#crposition').val() +"</label></td><td><label name='lblcrcontant"+(cctr)+"' >"+ $('#crcontant').val() +"</label></td></tr>");
	cctr++;
	$('#txtcctr').val(cctr);

});


</script>

