<?php
session_start();



?>
<!DOCTYPE html>
<html>
  <head id="home">
	<meta charset="utf-8">
	<title>Plum Services</title>
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
        <div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
                        <li><a href = "AccountInformation.php"><?php
                            echo $_SESSION['username']; ?></a> </li>
						<li><a href="#serv">Services</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="#home">Home</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Sign-Up</a></li>
						<li> <a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account </a></li>
                
			  </ul>
		  </div>
        <h1>Account Information</h1>
        <h2>Welcome </h2>
        <h2>Username: <?php echo $_SESSION['username']; ?> </h2>
        <h2>Password: <?php echo $_SESSION['password']; ?> </h2>
        <h2>You are user number<?php echo $_SESSION['id']; ?>?</h2>
        <h2>Editing coming soon TM </h2>

    </body>

    
</html>