<?php include_once('head.php') ?>
<?php include_once('nav.php')?>
<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php">Home</a></li>
						<li><a href="hospitality.php">Hospitality</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="sponsors.php">Sponsors</a></li>
						<li class="active"><a href="signin.php" >Signin</a></li>
						<li ><a href="#">Contact Us</a></li>
					
					</ul>
				</div>
			</div>
</nav>
<body>
	<div class="container-fluid">
		<div style="display: block;left:50%; margin-left: auto; margin-right: auto;" class="row">
			<img src="includes/logo.jpg" class="img-circle" style="display: block; margin-left: auto; margin-right: auto; background:lightblue;margin:auto; width:100px;height:100px;"/>
		<div class="row">
			<div style="margin-left:auto; margin-right:auto; max-width:400px; text-align:justify;">
			<?php 
				if(isset($_GET['id'])&&$_GET['id']=='whoweare')
				{
					echo "<h1>About Techmart'15</h1>";
					$name =file_get_contents('includes/about-techmart.txt');
					echo $name;
				}
				else
			?>
			</div>
			<?php include_once('includes/about_icon.php'); ?>
			
		</div>
		
	</div>
	
 </body>
</html>