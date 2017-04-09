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
						<?php if(!isset($_SESSION['row']))
							{
							echo "<li><a href='signin.php?id={$row['id']}' >Signin </a></li>" ;
							}
							?>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="blog.php?id=<?php echo $row['id'] ;?>">Blog</a></li>
						<?php if(isset($_SESSION['row'])) { include_once('online_indicator.php');} ?>
						
						</a>
					</ul>
				</div>
			</div>
</nav>
<body>
<div class="container-fluid">
		<?php echo $_GET['e_name'];?>
		<div style="width:100%; height:100%">
			<div class="alert alert-seccess" style="margin:0 auto; height:100%;width:100%;">
			<h1>
			
			</div>
		</div>










		
		
</div>
 </body>
</html>