
<?php include_once('head.php') ?>
<?php include_once('nav.php')?>
<?php include_once('../includes/db_connection.php');?>
<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="hospitality.php">Hospitality</a></li>
						<li><a href="events.php">Events</a></li>
						<li><a href="sponsors.php">Sponsors</a></li>
						<li ><a href="signin.php" >Signin</a></li>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="blog.php">Blog</a></li>
						<?php include_once('online_indicator.php') ?>
					
					</ul>
				</div>
			</div>
</nav>
<body>
<div class="container-fluid" style="margin-bottom:0px;">
				<div style="width:100%; height:100%;">
					<div style="max-width:500px; margin:0 auto;" class="alert alert-info">
						<form action="singprocess.php" method="POST" role="form">
										<div class="form-group">
											<label for="usr">First Name:</label>
											<input required autofocus type="text" name="f_name" class="form-control" id="usr" />
										</div>
										<div class="form-group">
											<label for="usr">Last Name:</label>
											<input name="l_name" type="text" class="form-control" id="pwd" />
										</div>
										<div class="form-group">
											<label for="usr">Email:</label>
											<input required name="email" type="email" class="form-control" id="pwd" />
										</div>
										<div class="form-group">
											<label for="usr">Username:</label>
											<input required name="username" type="text" class="form-control" id="pwd" />
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password1" id="password1" placeholder="New Password" autocomplete="off" />
											<br />
										</div>
										<div class="form-group">
											<input type="password" class="form-control" name="password" id="password2" placeholder="Repeat Password" autocomplete="off" />
											<br />	
												<div class="row">
													<div class="col-sm-12">
														<span id="pwmatch" class="glyphicon glyphicon-remove" style="color:#FF0004;"></span> Passwords Match
														<br />
														<br />
														<a href="signin.php">Already have an account</a>
														<input  id="but" type="submit" class="col-xs-12 btn btn-primary btn-load" data-loading-text="Creating Account..." value="Register" />
													</div>
												</div>
										</div>
								</form>
					</div>
				</div>					
									<script>
									
									$("input[type=password]").keyup(function(){
	
	if($("#password1").val() == $("#password2").val()){
		$("#pwmatch").removeClass("glyphicon-remove");
		$("#pwmatch").addClass("glyphicon-ok");
		$("#pwmatch").css("color","#00A41E");
		$("#but").css("display","block");
	}else{
		$("#pwmatch").removeClass("glyphicon-ok");
		$("#pwmatch").addClass("glyphicon-remove");
		$("#pwmatch").css("color","#FF0004");
		$("#but").css("display","none");
	}
		
});
									</script>


 










		
		
</div>
 </body>
</html>