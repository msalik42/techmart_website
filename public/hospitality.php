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
						<li class="active"><a href="index.php?id=<?php echo $row['id'] ;?>">Hospitality</a></li>
						<li><a href="events.php?id=<?php echo $row['id'] ;?>">Events</a></li>
						<li><a href="sponsors.php?id=<?php echo $row['id'] ;?>">Sponsors</a></li>
						<li ><a href="signin.php?id=<?php echo $row['id'] ;?>" >Signin</a></li>
						<li ><a href="#">Contact Us</a></li>
						<li ><a href="blog.php?id=<?php echo $row['id'] ;?>">Blog</a></li>
						<?php include_once('online_indicator.php') ?>
					
					</ul>
				</div>
			</div>
</nav>
<body style="margin:0;">
<div class="container-fluid" style="marign:0;">
		<div class="row">
			<div id="salik" class="col-md-12">
				<img class="hospitality" src="includes/uiet.jpg">
				<h1 style="margin-bottom:5px;padding-bottom:10px; text-align:center;"><b>Hospitality</b></h1>
				</img>
			</div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="0 auto">
				<div  style="margin-top:7px; color: #fff; background-image:url('includes/bg-footer-noise.jpg'); box-shadow:2px 2px 20px #7CEB98;margin-bottom:0;" class="alert alert-info">
				<h2 style="color:#DB4437"><b>About</b> &nbsp <i class="fa fa-user"></i></h2>
				<p style="text-align:justify;">Techkriti has been a host to a large number of participants since its inception, and these numbers have been ever growing since then. We at the Hospitality cell ensure that you have a wonderful experience here at the campus. We have a team of dedicated individuals which will cater to your needs such as accommodation, registration and lodging after you arrive at the campus. Our previous guests have taken back fond memories of their stay and the letters of appreciation left by them are a constant source of inspiration to us. We promise you to serve you in the best possible way so as to make your stay comfortable and enjoyable. During the festival our team will be available round the clock to answer your queries and helping you out in any matters of concern.
				</p>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>

		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="0 auto">
				<div  style="margin-top:7px; color: #fff; background-image:url('includes/bg-footer-noise.jpg'); box-shadow:2px 2px 20px #FFD34F;margin-bottom:0;" class="alert alert-info">
				<h2 style="color:#DB4437"><b>Reaching UIET Kanpur</b>	 &nbsp <i class="fa fa-car"></i></h2>
				<p style="text-align:justify;">
From Kanpur Central Railway Station :
Taxis and autos are easily available from the Cantt side of the Kanpur Central Railway Station (from Platform number 1 side). There is a pre-paid auto and taxi booth.
The rates are Rs. 300 for a taxi and Rs. 200 for an auto. Sometimes you may be able to negotiate a few rupees less with the driver, if you don't go to the pre-paid booth. For convenience, fix up the rates with the driver before you board the auto or the taxi.
We will also arrange for some buses from the Kanpur Central Railway Station to pick up the participants. These would be available on the Platform 1 side of the Railway Station. They will charge you with a nominal amount of Rs 15 or 20. However since the number of buses is limited, you might have to arrange for your own conveyance.
From the Bus Stand:
Buses will not be available here so you will have to arrange for your own conveyance.
Autos are easily available from the Bus stand to IIT Kanpur.
The rates are Rs 200 for an auto. For convenience, fix up the rates with the driver before you board the auto.
				</p>
				</div>
			</div>
		</div>
		
		<div class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="0 auto">
				<div  style="margin-top:7px; color: #fff; background-image:url('includes/bg-footer-noise.jpg'); box-shadow:2px 2px 20px #9191FF;margin-bottom:0;" class="alert alert-info">
				<h2 style="color:#DB4437"><b>Accomodation</b>	 &nbsp <i class="fa fa-building-o"></i></h2>
				<p style="text-align:justify;">
					<li>Accommodation will be provided from 2nd March. All the participants coming before can also stay in hotels outside IIT Kanpur.</li>
					<li>You are required to report at the Hospitality desk in SAC (Students Activity Center) as soon as you arrive at the campus. Look out for directions in the campus to reach the hospitality desk.</li>
					<li>All participants are required to carry their original college identity cards with photo proof to avail the accommodation in the campus and are required to follow the Rules and Regulations as mentioned on the respective page.</li>
					<li>All participants are required to carry their original college identity cards with photo proof to avail the accommodation in the campus and are required to follow the Rules and Regulations as mentioned on the respective page.</li>
					<li>There are a number of canteens in the campus which can cater to your eating requirements.</li>
					<li>The fees for registration is INR 1500 along with a security deposit of INR 100 .</li>
					<li>Mode of Registration is online.</li>
					<li>Registration fees will be submitted at Techmart office.</li>
				</p>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
		
		<div style="text-align:justify; "class="row">
			<div class="col-md-2"></div>
			<div class="col-md-8" style="0 auto">
				<div  style="margin-top:7px; margin-bottom:0;background-image:url('includes/bg-footer-noise.jpg	'); box-shadow:2px 2px 20px #FFA4A4; border:1px solid black; padding:20px;;">
				<h2 style="color:#DB4437"><b id="accomodation">FAQ-<b> &nbsp <i class="fa fa-question-circle"></i></h2>
				<div>
				<div id="faq"><b > <b id="red">1.</b> We are a group of friends not participating in any of the major competitions and just coming to Techkriti to have fun. Would we be allowed?</b></div>
				<div id="faq">No, you can come to Techkriti only if you participate in one of the events or workshops.</div>
				 
				<div id="faq"><b><b id="red">2.</b> I have received the hospitality form, what should I do next to avail accommodation?</b></div>
				<div id="faq">No further step is required; just present the hard copy of the form when you report at the hospitality desk. The registration fee(Rs 1500) plus the caution money (Rs. 100) is to be paid before you arrive at the campus for the festival (3-6 March), mode of payment being online.</div>
				 
				<div id="faq"><b><b id="red">3.</b> What is the procedure to be followed after we reach IIT Kanpur?</b></div>
				<div id="faq">
					&nbsp &nbsp &nbsp<li>You need to report to the Hospitality Desk, Students Activity Centre (SAC) along with your college identity card.</li>
					<li>You will have to produce the reciept of your online payment and a recent passport size photograph.</li>
					<li>Booklet will act as your identity card in campus.</li>
					<li>In case of a big contingent, contingent leader needs to present the ID cards of all the people in his contingent at the hospitality desk along with a list of all the people. Accommodation would be strictly on shared basis.</li>
				</div>
				<div id="faq"><b><b id="red">4.</b> My parents or professors want to accompany me, is this allowed?</b></div>
				<div id="faq">No, only the confirmed participants are allowed to enter the institute premises.</div>
				 
				<div id="faq"><b><b id="red">5.</b> I don’t want accommodation because I belong to Kanpur, am I expected to pay the registration amount.</b></div>
				<div id="faq">Yes, the registration amount has to be paid by every participant. The accommodation facilities are complimentary.</div>
				 
				<div id="faq"><b><b id="red">6.</b> Can two participants be from different colleges in a team event?</b></div>
				<div id="faq">Yes, Techkriti does not restrict cross participation from colleges in a team event.</div>
				 
				<div id="faq"><b><b id="red">7.</b> Can I get accommodation on 1st March or before, although the festival starts from 3rd of March?</b></div>
				<div id="faq">No, accommodation will be provided from 2nd evening. All the participants coming before can stay in hotels outside IIT Kanpur.</div>
				 
				<div id="faq"><b><b id="red">8.</b> How do I avail travelling facility from Kanpur station to IIT?</b></div>
				<div id="faq">
					<b>From Kanpur Central Railway Station:</b>
					<div id="faq">Taxis and autos are easily available from the Cantonment side of the Kanpur Central Railway Station (from Platform number 1 side).</div>
					<div id="faq">There is a pre-paid auto and taxi booth.</div>
					<div id="faq">The rates are Rs 300 for a taxi and Rs 200 for an auto.</div>
					<div id="faq">We will also arrange for some buses from the Kanpur Central Railway Station to pick up the participants. These would be available on the Platform 1 side of the Railway Station. They will charge you with a nominal amount of Rs 15 or 20. However since the number of buses is limited, you might have to arrange your own conveyance.</div>
					 
					<b id="faq"> From the Bus Stand:</b>
					<div id="faq">Buses will not be available here so you will have to arrange your own conveyance.</div>
					<div id="faq">Autos are easily available from the Bus stand to IIT Kanpur. The rates are Rs 200 for an auto. For convenience, fix up the rates with the driver before you board the auto.</div>
				</div>
			</div>
				</div>
			</div>
			<div class="col-md-2"></div>
		</div>
</div>
</div>
 </body>
</html>