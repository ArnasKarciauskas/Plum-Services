<?php
// Some variables for the connection to the database
$user = "plumservices";
$pass = "P@ssword123";
$database = "plumservices";
// this code takes the info from the form and turns it into variables
$JobName = $_POST['JobName'];
$ShortDesc = $_POST['ShortDesc'];
$LongDesc = $_POST['LongDesc'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$category = $_POST['Category'];
//databse connection
$mysqli = new mysqli("den1.mysql2.gear.host", $user, $pass, $database);
mysqli_select_db($mysqli, $database) or die( "Unable to select database");
//
$sql = "INSERT INTO Jobs VALUES( '','','$JobName','$ShortDesc','$LongDesc','$phone','$email','$category')";
$mysqli->query($sql);
$mysqli->close();









?>