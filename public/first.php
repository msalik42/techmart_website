<?php	//For login
	//connect to database for user
	define("DB_SERVER", "mysql11.000webhost.com");
	define("DB_USER", "a8479182_salik");
	define("DB_PASSWORD", "salikansari12");
	define("DB_NAME", "a8479182_salik");
	$connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
	if(!$connection){
		die("connection error");
	}
	echo "Hurre!!! you are connected to Techmart.";
?>