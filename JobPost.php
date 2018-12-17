<!DOCTYPE html>
<html lang="eng">
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
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Sign-Up</a></li>
						<li><a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account</a></li>
			</ul>
		  </div>
		  <!--/.nav-collapse -->
		</div>
	   </nav>
        <div class="container container-table">
			<div class ="row vertical-centre-row">
                <div class="col-md-4 col-md-offset-4">
					<form action="DatabaseInput.php" method="post">
						Job Name:<input type="text" class="form-control" name ="JobName"/>
						<br/>
						Short Description:<textarea rows="5" class="form-control" name="ShortDesc"></textarea>
						<br/>
						Long Description: <textarea rows="7" class="form-control" name ="LongDesc"></textarea>
						<br/>
						Phone Number: <input type="text" class="form-control" name ="Phone"/>
						<br/>
						Email Address: <input type="text" class="form-control" name ="Email"/>
						<br/>
						Category:
								<select class="custom-select" name="Category">
									<option value="Web Sevices">Web Services</option>
									<option value="Internet Marketing">Internet Marketing</option>
									<option value="Translation">Translation</option>
									<option value="Photo">Photo/Video</option>
									<option value="Mechanic">Mechanic</option>
									<option value ="Handy man"> Handy Man</option>
								</select>
								<br/>
							    <br/>
								<input type="Submit" class="btn btn-primary"/>
					</form>
				</div>
			</div>
		</div>
    </body>
</html>
