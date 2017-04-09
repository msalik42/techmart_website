<?php
	require_once('../includes/db_connection.php');
	session_start();
	// get pass values from login.php
	if(isset($_POST['username'])) {
	$_SESSION['username'] = $_POST['username'];
	$username = $_SESSION['username'];
	}
	elseif(isset($_SESSION['username'])){
		$username = $_SESSION['username'];
	}
	else{
		$username = null;
	}
	if(isset($_POST['password'])){
		$_SESSION['password'] = $_POST['password'];
		$password = $_SESSION['password'];
	}
	elseif(isset($_SESSION['password']))
	{
		$password = $_SESSION['password'];
	}
	else{
		$password = null;
	}
	
	// to prevent from sql injection
	$username = stripcslashes($username);
	$password = stripcslashes($password);
	
	$username = mysqli_real_escape_string($connection, $username);
	$password = mysqli_real_escape_string($connection, $password);
	
	
	// performin query
	$query = "SELECT * FROM users WHERE `username` = '$username' AND `password` = '$password' ";
	$result = mysqli_query($connection, $query);
	if(!$result){
		die("query failed in process.php line-49");
	}

	//retreving content from database
	$row = mysqli_fetch_array($result);
	if($row['username'] == $username && $row['password'] == $password ){
		$_SESSION['row'] = $row;
	?>
		<?php $id = urldecode($row['id']); ?>
		<?php header("Location: index.php?id={$id}");?>
	<?php
	}
	else{
		echo "oh!! somthig wronng!!!";
	}
	mysqli_free_result($result);

?>