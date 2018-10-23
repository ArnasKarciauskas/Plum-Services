<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Plum Services</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
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
				<a class="navbar-brand" href="#"><img src="img/p.jpg" width="30" height="30" alt=""> Plumservice</a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="categories.html">Services</a></li>
					<li><a href="#info1">About</a></li>
					<li><a href="#contact">Contact</a></li>
					<li><a href="#showcase">Home</a></li>
					<li><a href="login.html">Login</a></li>
					<li><a href="signup.html">Sign-Up</a></li>
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
			<div class="jumbotron">
				<h1 class="a">Hello there....</h1>
				<h2 class="b">"WE PROVIDE WHAT YOU NEED"</h2>
				<hr class="my-4">
				<p class="c">Search for all services, all in one place.We are here to sort it all.</p>
				<a class="btn btn-primary btn-lg" href="categories.html" role="button">search for services</a>
			</div>
		</div>
		</div>
		</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="info-left">
						<img src="img/why1.jpg">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="showcase-right">
						<h1>Why Plumservice?</h1>
						<p> You'll Get More Competitive Bids. 24/7 Support.Same day delivery. Helps to create a successfull business at affordable costs.</p>
					</div>
					<br>
				</div>
			</div>
		</div>
	</section>
	<br>

	<section id="info1">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="info-left">
						<img src="img/support-vector.png">
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="info-right">
						<h2>Services we provide...</h2>
						<p>Graphics & Design, Programming, Webdesigning, writing, Plumbers, Electricians, Mechanics, Cleaners...</p>
						<br>

					</div>
				</div>
			</div>
		</div>
	</section>
	<hr>
	<section id="info2">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6">
					<div class="info-left">
						<h2>should add more details here about our webite</h2>
					</div>
				</div>
				<div class="col-md-6 col-sm-6">
					<div class="info-right">
						<h2>any other details</h2>
						<p>we will need to add some details here as well.we can discuss together.</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="contact">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-5">
					<form role="form" method="post" action="php/contact.php">
						<div class="form-group">
							<label>Name: </label>
							<input class="form-control" type="text" name="name" id="name" placeholder="Enter Name">
						</div>
						<div class="form-group">
							<label>Email: </label>
							<input class="form-control" type="text" name="email" id="email" placeholder="Enter Email">
						</div>
						<div class="form-group">
							<label>Message: </label>
							<textarea class="form-control" type="text" name="message" id="message" placeholder="Enter Message"></textarea>
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
