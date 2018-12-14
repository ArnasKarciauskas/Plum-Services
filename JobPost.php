<!DOCTYPE html>
<html lang="eng">
    <head>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CRoboto%7CJosefin+Sans:100,300,400,500" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="css/style.css">
    <link rel="icon" href="img/favicon.png">

    </head>
    <body>
        <div id="navbar" class="collapse navbar-collapse">
			<ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Home</a></li>
				<li><a href="signup.php">Sign-Up</a></li>
				<li><a href="SignOut.php" class="btn btn-danger">Sign Out of Your Account</a></li>
			</ul>
		  </div>
      
        <form action="DatabaseInput.php" method="post">
            Job Name: <input type="text" name ="JobName"/>
            Short Description: <input type="text" name ="ShortDesc"/>
            Long Description: <input type="text" name ="LongDesc"/>
            Phone Number: <input type="text" name ="Phone"/>
            Email Address: <input type="text" name ="Email"/>
            Job Category <input type="text" name = "Category"/>
            <input type="Submit"/>
            
        </form>
    </body>
</html>