<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Job Info</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png">

	<script
	  src="https://code.jquery.com/jquery-3.3.1.js"
	  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
	  crossorigin="anonymous"></script>
		<script>$(document).ready(function () {
		    $('div.navbar-header').fadeIn(3000).removeClass('navbar-header');
		});</script>
		<script>$(document).ready(function () {
		    $('div.navbar').fadeIn(3000).removeClass('navbar');
		});</script>
		<script>$(document).ready(function () {
		$('div.card').fadeIn(1000).removeClass('card');
		});</script>
		
	<script src="https://unpkg.com/scrollreveal/dist/scrollreveal.min.js"></script>
</head>

    <body>
	  <nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
		  <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			  <span class="sr-only">Toggle navigation</span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			  <span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#"><img src="" width="30" height="30" alt=""> </a>
		  </div>
		  <div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php">Home</a></li>
						<li><a href="index.php #serv">Back to jobs</a></li>
						<li><a href ="JobPost.php">Post a Job</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Sign-Up</a></li>
						<li><a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account</a></li>
			</ul>
		  </div>
		  <!--/.nav-collapse -->
		</div>
	  </nav>

        <!-- Top content -->
	<div class="container">		
			<div class="col-md-6">
				<img  class="img-fluid" src="img/profile-default.png" alt="p" />
				<hr/>
				<h3 class="text-center">Name:</h3>
				<hr/>
			</div>
			<div class="col-md-6" id="descmargin">
				<h2>Job Description:</h2>
				<h4>Description:</h4>
				<h4>Phone Number:</h4>
				<h4>E-mail:</h4>
				<h4>Category:</h4>				
			</div>
	</div>	

	<div class="outline4">
		<div class="container">
			<footer>Plumservice Copyright &copy; 2018<br/></footer>
		</div>
	</div>
	
        <!-- Javascript -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>       
    </body>
</html>