<?php 
		//For signup
	$f_name = $_POST['f_name'];
	$l_name = $_POST['l_name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	
?>
<?php
	require_once('../includes/db_connection.php');

	$query = "SELECT * FROM users WHERE username = '$username' LIMIT 1 ";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("query failed in signupprocess.php line-23 ");
	}
	$uname_check = mysqli_num_rows($result);  //getting the number of rows in database table
	if($uname_check < 1){ 
		// to prevent from sql injection
		$username = stripcslashes($username);
		$password = stripcslashes($password);
	
		$username = mysqli_real_escape_string($connection, $username);
		$password = mysqli_real_escape_string($connection, $password);


		// query
		
			//adding to user table for registration
		$query = "INSERT INTO users (`f_name`, `l_name`, `email`,`username`, `password`)	
				VALUES ('$f_name', '$l_name', '$email', '$username', '$password')";
		$result = mysqli_query($connection, $query);
			if(!$result){
				die("query failed in signupprocess.php line-36 ");
			}
										// addding to events list???	
		echo "{$username} is created";
		?>
		<?php header("Location: signin.php");?>
	<?php
	}
	else{
		echo "user already exist";
		exit();
	}
?>
	<a href="login.php">Login</a>