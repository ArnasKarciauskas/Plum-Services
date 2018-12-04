<?php 

/* 
Database Information, 

*/
define('DB_SERVER','den1.mysql2.gear.host');
define('DB_USERNAME','plumservices');
define ('DB_PASSWORD', 'P@ssword123');
define ('DB_NAME', 'plumservices');



$link = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_NAME);



// check if the database has connecting correctly
if($link === false){
    die("ERROR: Connection not established.".mysqli_connect_error());
}














?>