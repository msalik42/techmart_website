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
		<div class="col-md-12">
			<div class="tossing "style="max-width: 730px; margin:  auto;">
			<p class="techmart-front">T</p>
			<p class="techmart-front">E</p>
			<p class="techmart-front">C</p>
			<p class="techmart-front">H</p>
			<p class="techmart-front">M</p>
			<p class="techmart-front">A</p>
			<p class="techmart-front">R</p>
			<p class="techmart-front">T</p>
			<p style="background:white; color:#23819c; width:90px; height:90px;  padding-top:5px;font-size:2em;"id="2016"class="techmart-front"><b>20</b><br/><b style="margin-left:30px;" >16</b></p></p>
			</div>
		</div>
	<div class="row">
		<div class="col-md-8">
		</div>
		<div class="col-md-4">
				<div style="margin-top:20px;border-radius:20px;
				border-top:5px solid black;">
					<ul>
						<li><marquee>Last Date of Registration is <b>28 Oct</b>.</marquee></li>
						<li><marquee><b>Code Trek</b> event is going on CSE lab at 2:00 O'Clock</marquee></li>
						<li><marquee>Winner of <b>Robo Race</b> is <b>Mohd.Yardan</b></marquee></li>
						<li><marquee>Robo Race event is going on OT At 2:00 O'Clock</marquee></li>
						<li><marquee>Robo Race event is going on OT At 2:00 O'Clock</marquee></li>
						<li><marquee>Robo Race event is going on OT At 2:00 O'Clock</marquee></li>
						
					</ul>
				</div>
			</div>
		</div>
	</div>
		


 










		
		
</div>




















 </body>
</html>