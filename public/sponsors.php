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
<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php?id=<?php echo $row['id'] ;?>">Home</a></li>
						<li><a href="hospitality.php?id=<?php echo $row['id'] ;?>">Hospitality</a></li>
						<li><a href="events.php?id=<?php echo $row['id'] ;?>">Events</a></li>
						<li class="active"><a href="sponsors.php?id=<?php echo $row['id'] ;?>">Sponsors</a></li>
						<li ><a href="blog.php?id=<?php echo $row['id'] ;?>">Blog</a></li>
						<?php if(isset($_SESSION['id']))
							{
							echo "<li><a href='signin.php?id={$row['id']}' >Signin </a></li>" ;
							}
							?>
						<li ><a href="#">Contact Us</a></li>
						<?php if(isset($_SESSION['row'])) { include_once('online_indicator.php');} ?>
						</a>
					</ul>	
</div>
</nav>
<body>
	<div class="container">
	<?php include_once('nav.php') ?>
	</div>
	<div>
		
	</div>
 </body>
</html>