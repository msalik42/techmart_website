<?php 
	session_start();
	if(!isset($_SESSION['row'])){
		header('Location: signin.php');
	}
	else{
	$row = $_SESSION['row'];
	}
?>
<?php include_once('head.php')?>
<?php include_once('nav.php')?>
<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav navbar-right">
						<li ><a href="index.php?id=<?php echo $row['id'] ;?>">Home</a></li>
						<li><a href="hospitality.php?id=<?php echo $row['id'] ;?>">Hospitality</a></li>
						<li class="active"><a href="events.php?id=<?php echo $row['id'] ;?>">Events</a></li>
						<li><a href="sponsors.php?id=<?php echo $row['id'] ;?>">Sponsors</a></li>
						<li ><a href="signin.php?id=<?php echo $row['id'] ;?>" >Signin</a></li>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="blog.php?id=<?php echo $row['id'] ;?>">Blog</a></li>
						<?php include_once('online_indicator.php') ?>
					
					</ul>
				</div>
			</div>
</nav>
<body style="width:100%; height:100%;">


<script>
$(document).ready(function(){
    $("#ansari").click(function(){
        $("#salik").css({"background-color":"red"})
		    .slideUp(200)
            .slideDown(200);
		;
    });
	setTimeout(function(){ myWindow.close() }, 3000);
});
</script>
		<div style="height:100%; width:100%;" id="events-container">
			<div style="margin:0 auto auto 8%; clear:both;">
				<div id="events-16" style="width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="codeTrek">Code Trek</h1>
					<a href="" data-toggle="modal" data-target="#codeTrek_mode "><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-code fa-5x">
						<br />
						<p data-toggle="modal" data-target="#codeTrek_mode " style="font-size:20px;">Code Trek</p>
					</i>
					</div>
				</div>
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="focus">Focus</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-camera-retro fa-5x">
						<br />
						<p style="font-size:20px;">Focus</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="adWar">Ad-War</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Ad-War</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="constructo" >Constructo</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<img src="includes/bridge-icon-png-3.png" style="width:100px;height:100px;"/>
						<br />
						<p style="font-size:20px;">Constructo</p>
					</i>
					</div>
				</div>
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="electromatrix" >Electromatrix</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<img src="includes/electronics_256.png" style="width:80px;height:80px;"/>
						<br />
						<p style="font-size:20px;">Electromatrix</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="hitz" >Hitz</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Hitz</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="ingenium" >Ingenium</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Ingenium</p>
					</i>
					</div>
				</div>
				
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="lanGaming" >Lan Gaming</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-gamepad fa-5x">
						<br />
						<p style="font-size:20px;">Lan Gaming</p>
					</i>
					</div>
				</div>
				
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="marathon" >Marathon</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<img src="includes/man-icon-png-24.png" style="width:80px;height:80px;"/>
						<br />
						<p style="font-size:20px;">Marathon</p>
					</i>
					</div>
				</div>
				
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="pioneers" >Pioneers</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Pioneers</p>
					</i>
					</div>
				</div>
				
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="quizzomenia" >Quizzomenia</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Quizzomenia</p>
					</i>
					</div>
				</div>
				
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="reflux" >Reflux</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Reflux</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="robotics">Robotics</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<img src="includes/Alien_robot.png" style="width:80px;height:80px;"/>
						<br />
						<p style="font-size:20px;">Robotics</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="rocketWar" >Rocket War</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Rocket War</p>
					</i>
					</div>
				</div>
				
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="showBuzz" >Show Buzz</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Show Buzz</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="background-color:lightblue"id="salik">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="spellingBee" >Spelling Bee</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<img src="includes/Aibj8pzGT.png	" style="width:80px;height:80px;"/>
						<br />
						<p style="font-size:20px;">Spelling Bee</p>
					</i>
					</div>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="tattva" >Tattva</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<img src="includes/atom-512.png	" style="width:80px;height:80px;"/>
						<br />
						<p style="font-size:20px;">Tattva</p>
					</i>
					</div>
				</div>
				
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="treesurHunt">Treasure Hunt</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">Treasure Hunt</p>
					</i>
					</div>
				</div>
				
				
				<div id="events-16" style="padding:auto; width:240px;height:240px background-color:#fcfcfc">
					<div style="text-align:center;" class="on-events-hover">
					<h1 id="react" >React</h1>
					<a href=""><h3 style="width:70px;height:30px;">Details</h3></a><br/>
					<i class="fa fa-video-camera fa-5x">
						<br />
						<p style="font-size:20px;">React</p>
					</i>
					</div>
					
				</div>	
			</div>
	</div>
	
	
	
	
	<div  id="codeTrek_mode" class="modal fade" role="dialog">
  <div  class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div style="width:100%; height:100%;" class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      
    </div>

  </div>
</div>
	
	
	
	
	
	
	
	
	
	
</body>
</html>