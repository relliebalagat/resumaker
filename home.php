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

</head>
<?php
	require 'header.php';
?>
<body background="img/bg.jpg">
				<center>
				<div class="tab-content">
					<div id="home" class="tab-pane fade in active">
				<p>
						<div class="inner cover">
						<h1 class="cover-heading"></h1>
						<p class="lead"><font face="calibri"></font></p>
						<p class="lead">
							<a href="login.php" data-toggle="tab" class="btn btn-lg btn-default"><font face="calibri">Create Your Resume</font></a>
							<a href="companylogin.php" data-toggle="tab" class="btn btn-lg btn-default"><font face="calibri">Log in as Employer</font></a>
						</p>
					
						</div>
					</p>
					
					</div>
					</center>
					
<?php

include 'footer.php';
?>
</body>
</html>