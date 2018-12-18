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
                        <li><a href = "AccountInformation.php"><?php
                            echo $_SESSION['username']; ?></a> </li>
						<li><a href="#serv">Services</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
						<li><a href="#home">Home</a></li>
                        <li><a href ="JobPost.php"> Post a Job</a></li>
						<li><a href="login.php">Login</a></li>
						<li><a href="signup.php">Sign-Up</a></li>
						<li> <a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account </a></li>

			  </ul>
		  </div>
		  <!--/.nav-collapse -->
		</div>
	  </nav>

	<section id="showcase">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<div class="showcase-left">
						<div class = "container">
							<div class="row">

							<h1 class="a" style="font-size:120px; color:blueviolet; font: ">Plum Services</h1>
							<h2 class="b">There for you when you need it most</h2>
							<hr class="my-4">
							<p class="c">Search through a wide variety of different categories for a service you want</p>
							<a class="btn btn-primary btn-lg" href="#serv" role="button">search for services</a>
							</div>
						</div>
           			</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="info-left">
						<img src="img/jumbotron.jpg">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="showcase-right">
						<h1>Why Plumservice?</h1>
						<p> We have a wide variety of benefits ranging from a simple and easy to understand user interface, to 24/7 support.</p>
					</div>
					<br>
				</div>
			</div>
		</div>
	</section>
	<br>

	<section>
		<div class="container" id="serv">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="info-left">
						<img src="">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">

				</div>
			</div>
		</div>
	</section>
	<hr>

<div class="main">

 <!--cards -->
<div class="container-fluid">
  <div class="row">
    <!--<div class="col-md-4">-->
    <div class="col-sm-4">
		<div class="card">
			<div class="image">
			   <img src="img/Webdev.png" alt="web services">
			</div>
			<div class="title">
			 <h1>Web services</h1>
			</div>
			<div class="des">
			 <p>Need a website? Look no further..</p>
			<button><a href="WebServices.php">See more</a></button>
			</div>
		</div>
	</div>

<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
	<div class="card">
		<div class="image">
		   <img src="img/SEO.png" alt="SEO">
		</div>
		<div class="title">
		 <h1>
		Internet Marketing</h1>
		</div>
		<div class="des">
		 <p>Social Media marketing, SEO, etc..</p>
		<button><a href="internetMarket.php">See more</a></button>
		</div>
	</div>
</div>

<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
	<div class="card">
		<div class="image">
		   <img src="img/language.png" alt="Translation">
		</div>
		<div class="title">
		 <h1>Data input & Translation</h1>
		</div>
		<div class="des">
		 <p>Need a document transcribed? Video translated?</p>
		<button><a href="Translation.php">See more</a></button>
		</div>
	</div>
</div>
</div>
</div>

<!--cards -->
<div class="container-fluid">
  <div class="row">
    <!--<div class="col-md-4">-->
<div class="col-sm-4">
      <div class="card">
		<div class="image">
		   <img src="img/vid.png" alt="VIDEO">
		</div>
		<div class="title">
		 <h1>
		Photo & Video</h1>
		</div>
		<div class="des">
		 <p>Request a video, take professional photos for your business..</p>
		<button><a href="videography.php">See more</a></button>
		</div>
	</div>
</div>

<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
	<div class="card">
		<div class="image">
		   <img src="img/car.png" alt="Car Services">
		</div>
		<div class="title">
		 <h1>Car Services</h1>
		</div>
		<div class="des">
		 <p>Mechanic comes to you! Best local prices for quick fixes on your car.</p>
		<button><a href="cars.php">See more</a></button>
		</div>
	</div>
</div>

<!--cards -->
<!--<div class="col-md-4">-->
<div class="col-sm-4">
	<div class="card">
		<div class="image">
		   <img src="img/handyman.png" alt="Handy-man">
		</div>
		<div class="title">
		 <h1>Handy Man</h1>
		</div>
		<div class="des">
		 <p>Plumbing? Painting? Moving? Local handy man services...</p>
		<button><a href="handyman.php">See more</a></button>
		</div>
	</div>
</div>
</div>
</div>
</div>

	<div class="outline">
		<div class="container">
			<div class="row">
				<div class="col-lg-12" id="about">
					<h3 class="text-center">About Us</h3>
					<p class="text-center">The company was created in 2018 by a group of 4 students, it has since grown to be very popular service booking website in Ireland. We are a leading provider for online and physical services. Our goal as a company is to provide you with a 5 star customer service and the best overall experience possible, please do not hesitate to contact us with any questions or issues which may arise. Our helplines are open 24/7.</p>
				</div>
			</div>
		</div>
	</div>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<form role="form" method="post" action="php/contact.php">
						<div class="form-group">
							<label>Name: </label>
							<input class="form-control" type="text" name="name" id="name" placeholder="Enter your name">
						</div>
						<div class="form-group">
							<label>Email: </label>
							<input class="form-control" type="text" name="email" id="email" placeholder="Enter your e-mail">
						</div>
						<div class="form-group">
							<label>Message: </label>
							<textarea class="form-control" type="text" name="message" id="message" placeholder="Enter your message"></textarea>
						</div>
						<input id="submit" name="submit" type="submit" value="Submit" class="btn btn-primary">
					</form>
				</div>
				<div class="col-md-7 col-sm-7">
						<br/>
						<br/>
						<p class="text-right">+353 85 2722131</p>
						<p class="text-right">info@ps.ie</p>
						<p class="text-right">National College of Ireland</p>
						<p class="text-right">IFSC</p>
						<p class="text-right">Dublin</p>
				</div>
			</div>
		</div>
	</section>

	<div class="outline3">
		<div class="container">
			<footer>Plumservice Copyright &copy; 2018<br/></footer>
		</div>
	</div>

	<script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<script>
		window.sr = ScrollReveal();
		sr.reveal('.navbar', {
			duration: 2000,
			origin: 'bottom'
		});
		sr.reveal('.showcase-left', {
			duration: 2000,
			origin: 'top',
			distance: '300px'
		});
		sr.reveal('.showcase-right', {
			duration: 2000,
			origin: 'right',
			distance: '300px'
		});
		sr.reveal('.showcase-btn', {
			duration: 2000,
			delay: 2000,
			origin: 'bottom'
		});
		sr.reveal('#testimonial div', {
			duration: 2000,
			origin: 'bottom'
		});
		sr.reveal('.info-left', {
			duration: 2000,
			origin: 'left',
			distance: '300px',
			viewFactor: 0.2
		});
		sr.reveal('.info-right', {
			duration: 2000,
			origin: 'right',
			distance: '300px',
			viewFactor: 0.2
		});

	</script>

	<script>
		$(function() {
			// Smooth Scrolling
			$('a[href*="#"]:not([href="#"])').click(function() {
				if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
					var target = $(this.hash);
					target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
					if (target.length) {
						$('html, body').animate({
							scrollTop: target.offset().top
						}, 1000);
						return false;
					}
				}
			});
		});

	</script>
</body>
</html>
