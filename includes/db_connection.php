<?php	//For login
	//connect to database for user
	define("DB_SERVER", "localhost");
	define("DB_USER", "root");
	define("DB_PASSWORD", "");
	define("DB_NAME", "techmart-16");
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if(!$connection){
		die("connection error");
	}
	else
	{
	}
?>