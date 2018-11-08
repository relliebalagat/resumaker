

<!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Resumaker</a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="home.php">Resume Form</a>
                    </li>
					<li>
                        <a href="aboutus.php">List of Resume</a>
                    </li>
                    <li>
                        <a href="aboutus.php">Job Match</a>
                    </li>
				 </ul>
				 <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#">Hi, <?php echo $_SESSION['fname'] ?>!</a>
                    </li>
					<li>
                        <a href="logout.php">Logout</a>
                    </li>
					
               </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

   