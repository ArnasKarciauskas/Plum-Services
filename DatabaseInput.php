<?php
$user = "plumservices";
$pass = "P@ssword";
$database = "plumservices";
$JobName = $_POST['Value1'];
$ShortDesc = $_POST['Value2'];
$LongDesc = $_POST['Value3'];
$Phone = $_POST['Value4'];
$Email = $_POST['Value5'];
$Category = $_POST[ ]
$mysqli = new mysqli("den1.mysql2.gear.host", $user, $pass, $database);
@mysql_select_db($database) or die("not working");
$query = "INSERT INTO Jobs VALUES( '','','$JobName','$ShortDesc','$LongDesc','$phone','$email','$category'  ")
$mysqli_>query($query);
$mysqli->close();





?>