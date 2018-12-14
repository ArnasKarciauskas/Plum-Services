<!DOCTYPE html>
<html lang="eng">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title> Login Form </title>
		
        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="assets/css/form-elements.css">
        <link rel="stylesheet" href="assets/css/loginstyle.css">

        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="assets/ico/favicon.png">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
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
						<li><a href="signup.php">Sign-Up</a></li>
						<li><a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account</a></li>
			</ul>
		  </div>
		  <!--/.nav-collapse -->
		</div>
	   </nav>
    <div class="h-100 row align-items-center">
        <div>
            <p> This
            is some sample
            text try push down the form 
            </p>
        </div>

        <form action="DatabaseInput.php" method="post">
            Job Name: <input type="text" name ="JobName"/>
            Short Description: <input type="text" name ="ShortDesc"/>
            Long Description: <input type="text" name ="LongDesc"/>
            Phone Number: <input type="text" name ="Phone"/>
            Email Address: <input type="text" name ="Email"/>
            Job Category:   <select name="Category">
                                <option value="Web Sevices">Web Services</option>
                                <option value="Internet Marketing">Internet Marketing</option>
                                <option value="Translation">Mercedes</option>
                                <option value="Photo">Photo/Video</option>
                                <option value="Mechanic">Mechanic</option>
                                <option value ="Handy man"> Handy Man</option>
                            </select>
            <input type="Submit"/>
        
            
        </form>
        </div>
    </body>
</html>