<?php 
		session_start();
		if(isset($_SESSION['row'])){
		$_SESSION['row'] = null;
		}
?>
<?php include_once('head.php') ?>
<?php include_once('nav.php')?>
<?php include_once('../includes/db_connection.php');?>
<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php">Home</a></li>
						<li><a href="hospitality.php">Hospitality</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="sponsors.php">Sponsors</a></li>
						<li class="active"><a href="signin.php" >Signin</a></li>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="blog.php">Blog</a></li>
						<?php if(isset($_SESSION['row'])) { include_once('online_indicator.php');} ?>
					
					</ul>
				</div>
			</div>
</nav>
<body>
<div class="container-fluid">
				<div style="width:100%;height:100%">
					<div class="alert alert-info"style="max-width:500px;margin:0 auto">
						<form action="process.php" method="post" role="form">
										<div class="form-group">
											<label for="usr">Userame:</label>
											<input name="username" type="text" class="form-control" id="usr">
										</div>
										<div class="form-group">
											<label for="pwd">Password:</label>
											<input name="password" type="password" class="form-control" id="pwd">
										</div>
										<div class="form-group">
											<label for="pwd"></label>
											
											<a href="login-signup.php"  >Create an account?</a><br/><br/>
											<input style="width:200px;" class="btn btn-success"  type="submit" value="Login" class="form-control" id="pwd">
											<br />
											
										</div>
									</form>
					</div>
				</div>


 










		
		
</div>
 </body>
</html>