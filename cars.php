<?php
session_start();
$servername = "den1.mysql2.gear.host";
$username = "plumservices";
$password = "P@ssword123";
$dbname = "plumservices";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Jobs WHERE category = 'Mechanic'";
$result = $conn->query($sql);






?>

<!DOCTYPE html>
<html>

<head id="home">
	<meta charset="utf-8">
	<title>Plum Services</title>
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/liststyle.css">
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

          <li><a href="index.php#serv">Services</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="index.php#contact">Contact</a></li>
          <li><a href="index.php">Home</a></li>
          <li><a href="login.php">Login</a></li>
          <li><a href="signup.php">Sign-Up</a></li>
          <li> <a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account </a></li>

      </ul>
    </div>
    <!--/.nav-collapse -->
  </div>
  </nav>
  <div class="container">
    <img alt="background" title="background" src="img\mechanic.jpg" />
 </div>
 <div class="container">
 	<div class="row">
        <div id="custom-search-input">
        <div class="input-group col-md-12">
         <input type="text" class="  search-query form-control" placeholder="What are you looking for?" />
        <span class="input-group-btn">
         <button class="btn btn-danger" type="button">
        <span class=" glyphicon glyphicon-search"></span>
       </button>
     </span>
    </div>
   </div>
 	</div>
 </div>
 <br />
 <div class="container">
 <?php if ($result->num_rows > 0) {
     // output data of each row
     while($row = $result->fetch_assoc()) {

      echo '
       <div class="row">
         <div class="col-md-3">
           <img class="img-responsive" src="img\car.png" alt="Generic placeholder image" width="140" height="140">
           <h1>'.$row["job_Name"].' </h1>
           <p>'.$row["Long_Desc"].'</p>
           <p>0'.$row["phone_Number"].' </p>
         </div>
         ';
     }
     } else {
     echo "No results Found";
     }
     $conn->close();

  ?>
 </div>
 <div class="container">

   <div class="col-md-2 col-md-offset-10">
      <a href="Delete/MechanicDelete.php" class="btn btn-danger">Delete All Records </a>

 </div>
 </div>
  </body>

  </html>
