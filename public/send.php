<?php
  $text =  $_POST['email']."<br />";
  echo "All Data Submitted Sucessfully!"
?>


<?php include_once('../includes/db_connection.php');?>
<?php 


	$text = stripcslashes($text);
	
	$text = mysqli_real_escape_string($connection, $text);
	



	$query = "insert into chats (`text`) values('{$text}')";
	$result = mysqli_query($connection, $query);
	if(!$result)
	{
		die ("error: data not submitted");
	}


?>
