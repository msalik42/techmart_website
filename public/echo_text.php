<?php 
								include_once('../includes/db_connection.php');
								$query = "select text from chats";
								$result = mysqli_query($connection, $query);
								if(!$result)
								{
								die ('query failed');
								}
								while($list = mysqli_fetch_assoc($result)){
								//output data from each row
								echo "{$list['text']}";
								echo "<br/>";
						
								}
							?>