<?php
$user = "plumservices";
$pass = "P@ssword123";
$database = "plumservices";
$JobName = $_POST['JobName'];
$ShortDesc = $_POST['ShortDesc'];
$LongDesc = $_POST['LongDesc'];
$phone = $_POST['Phone'];
$email = $_POST['Email'];
$mysqli = new mysqli("den1.mysql2.gear.host", $user, $pass, $database);
mysqli_select_db($mysqli, $database) or die( "Unable to select database");
$sql = "INSERT INTO Jobs VALUES( '','','$JobName','$ShortDesc','$LongDesc','$phone','$email','')";
$mysqli->query($sql);
$mysqli->close();





?>