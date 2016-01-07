<?php
function connection(){
	$hostname = "yys";
	$username = "lakshmi";
	$password = "lakshmi";
	$dbname = "lakshmi";

	$con=mysqli_connect($hostname,$username,$password,$dbname);

	if($con){
		echo "connection successful";
	}
	else{
		echo "not connected";
	}
	
	}
?>