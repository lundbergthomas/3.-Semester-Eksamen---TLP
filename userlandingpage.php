<?php
	session_start();
	include_once 'includes/db_con.php';
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/flexboxgrid.css">
	<link rel="stylesheet" href="css/userlandingpage.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
	
	
	<header id="main-header">
		<div class="container">
			<div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg"> <!-- Dette er hele rækken, som indeholder 2 kolonner. En på 2 og en på 10
								En Row floater alt! HUUUUUUSSSSSK!!! AT SÆTTE CENTER-XS IND PÅ ALLE UNDERSIDER--> 
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<h1>Chelsea</h1>
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<nav id="navbar">
						<div class="toggle">
							<i class="fa fa-bars menu" aria-hidden="true"></i>
						</div>
						<ul>
							<li class="current"><a href="index.php">Match Preview</a></li>
							<li><a href="#">Match Review</a></li>
							<li><a href="#">Tickets</a></li>
							<li><a href="#">Your Match</a></li>
						</ul>
					</nav>
					<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
					<script type="text/javascript">
						$(document).ready(function(){
							$('.menu').click(Function(){
											 $('#navbar').toggleClass('active');
											 })
						})
					</script>
				</div>
			</div>
		</div>
	</header>
	
	<!-- TOP SECTION -->
	<section id="top">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>THIS IS<br> <span class="yourchelsea">YOUR CHELSEA</span></h1>
				</div>
			</div>
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 logout">
					<h3>Logout as user</h3>
					<form action="logout.php" method="POST">
						<button type="submit" name="submitLogout">Logout</button>
					</form>
				</div>
			</div>
		</div>
	</section>
	
	<!-- INCLUDES -->
	<section id="includes">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>Thank you for creating your membership</h3>
					<h1>So what's included?</h1>
				</div>
				<div class="row center-xs center-sm center-md center-lg row1">
					<div class="col-12-xs col-sm-4 col-md-4 col-lg4">
						<i class="fa fa-eye fa-4x" aria-hidden="true"></i>
						<h2>Match Preview</h2>
						<p>Get fully prepared for our next match by our Match Preview videos</p>
					</div>
					<div class="col-12-xs col-sm-4 col-md-4 col-lg4">
						<i class="fa fa-list-alt fa-4x" aria-hidden="true"></i>´
						<h2>Match Review</h2>
						<p>Get all the stats of our previous match</p>
					</div>
					<div class="col-12-xs col-sm-4 col-md-4 col-lg4">
						<i class="fa fa-play fa-4x" aria-hidden="true"></i>
						<h2>Match Highlights</h2>
						<p>Watch all the extended highlights from our previous match</p>
					</div>
				</div>
				<div class="row center-xs center-sm center-md center-lg row2">
					<div class="col-12 col-xs-6 col-sm-6 col-md-6 col-lg-6">
						<i class="fa fa-credit-card-alt fa-4x" aria-hidden="true"></i>
						<h2>Ticket Discount</h2>
						<p>Get exclusive discounts as a member</p>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<i class="fa fa-info-circle fa-4x" aria-hidden="true"></i>
						<h2>Local Information</h2>
						<p>See your exact local kick off time and where to watch the game with other Chelsea fans</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	
	<!-- MATCH PREVIEW -->
	<section id="matchpreview">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-10 col-sm-10 col-md-12 col-lg-12">
					<h1>Match Preview</h1>
					<img src="images/matchpreviewpic.jpg">
					<h4>Saturday 9 December 2017 - Click here for your local time</h4>
					<iframe src="https://player.vimeo.com/video/246765418?title=0&byline=0" width="640" height="800" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	
	<!-- MATCH REVIEW -->
	<section id="matchreview">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>Match Review</h1>
					<img src="images/matchreviewresult.jpg">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Match Review Video</h2>
					<iframe src="https://player.vimeo.com/video/246765418?title=0&byline=0" width="640" height="700" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h2>Match Highlights Video</h2>
					<iframe width="560" height="315" src="//ok.ru/videoembed/394736700006" frameborder="0" allowfullscreen></iframe>
				</div>
			</div>
		</div>
	</section>
	
	<!-- YOUR MATCH DAY -->
	<section id="yourmd">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>YOUR MATCH DAY</h1>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<img src="images/mdlogobox.png">
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 location">
					<i class="fa fa-map-marker fa-4x" aria-hidden="true"><span class="locationtext1"> Your Location:</span><span class="locationtext2"> Copenhagen, Denmark</span></i>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<i class="fa fa-clock-o fa-4x" aria-hidden="true"><span class="locationtext1"> Your Local K/O Time:</span><span class="locationtext2"> 13:30</span></i>
				</div>
				
			</div>
		</div>
	</section>
	
	<!-- DID YOU KNOW -->
	<section id="didyouknow">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>DID YOU KNOW</h1>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h3>You can watch this match with other Danish Chelsea fans at Café Guldhornene in Copenhagen.<br>
					<span class="location">(Vestergade 20, Copenhagen 1456)</span></h3>
				</div>
			</div>
		</div>
	</section>
	
	<!-- TICKET DISCOUNT -->
	<section id="tickets">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>TICKET DISCOUNTS</h1>
				</div>
			</div>
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 box1 shedend">
					<h2>Shed End</h2>
					<p>Normal Price: 50£</p>
					<h3>Your Price: 40£</h3>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 box1 mh">
					<h2>Matthew Harding</h2>
					<p>Normal Price: 54£</p>
					<h3>Your Price: 44£</h3>
				</div>
				<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3 box1 eaststand">
					<h2>East Stand</h2>
					<p>Normal Price: 60£</p>
					<h3>Your Price: 40£</h3>
				</div>
			
			</div>
			
		</div>
	</section>
		<footer>
		<div class="container">
			<div class="row center-xs start-sm start-md start-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<h3>Chelsea Football Club</h3>
					<p>Fulham Rd, Fulham, London SW6 1HS, Storbritannien</p>
					<p>School Project</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<p>&#169;Thomas Lundberg Pallesen</p>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					<img src="images/nike.png">
				</div>
			</div>
		</div>	
	</footer>
</body>
</html>