<?php 
	session_start();
	if(!isset($_SESSION['row'])){
		header('Location: signin.php');
	}
	else{
	$row = $_SESSION['row'];
	}
?>
<?php include_once('head.php') ?>
<?php include_once('nav.php')?>
<?php include_once('../includes/db_connection.php');?>

<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php?id=<?php echo $row['id'] ;?>">Home</a></li>
						<li><a href="hospitality.php?id=<?php echo $row['id'] ;?>">Hospitality</a></li>
						<li><a href="events.php?id=<?php echo $row['id'] ;?>">Events</a></li>
						<li><a href="sponsors.php?id=<?php echo $row['id'] ;?>">Sponsors</a></li>
						<li ><a href="blog.php?id=<?php echo $row['id'] ;?>">Blog</a></li>
						<?php if(!isset($_SESSION['row']))
							{
							echo "<li><a href='signin.php?id={$row['id']}' >Signin </a></li>" ;
							}
							?>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="blog.php">Blog</a></li>
						<?php if(isset($_SESSION['row'])) { include_once('online_indicator.php');} ?>
						
						</a>
					</ul>
				</div>
			</div>
</nav>
<body>
<div class="container-fluid">
		<div id="data" >
				
				<script>
				function SubmitForm() {
				var email = $("#email").val();
				$.post("send.php", {email: email },
				   function(data) {
					 
				   });														//script for submit data without reloading;
				}
				</script>
				
				<br /><h1 style="text-align:center;">
							<?php 
								include_once('../includes/db_connection.php');
								$query = "select text from chats limit 20";
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
					</h1> 		<!-- this h1 tag will be use for showing chats... this p tag will echo by php code-->
			<script>
			var height = 0;
			$('#data h1').each(function(i, value){
			height += parseInt($(this).height());			//scroll up script
			});

			height += '';

			$('#data').animate({scrollTop: height});
			</script>
				
				
				
				
				
				
				
				
				
		</div>
			
		
			
				<div style="width:100%;height:100%">
					<div style="max-width:700px;margin:0 auto">
						<form action=""  method="post" id="frm">
						 <input style="width:70%;height:40px;background:#fff;font-size:25px; border-radius:40px;padding:10px;"name="email" id="email" type="text" />
						 <input style="display:none;"name="phone" id="phone" type="text" />
						 <input autofocus; style="margin-left:30px;  width:40px;height:40px;background:#fff;border-radius:40px;font-size:25px; padding:10px;" type="button" id="searchForm" onclick="SubmitForm();" value=">" />
						 </form>
					</div>
				</div>
</div>
 </body>
</html>

