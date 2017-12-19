<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Chelsea FC</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/flexboxgrid.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
	<!-- HEADER -->
	<header id="main-header">
		<div class="container">
			<div class="row end-sm end-md end-lg center-xs middle-xs middle-sm middle-md middle-lg"> <!-- Dette er hele rækken, som indeholder 2 kolonner. En på 2 og en på 10
								En Row floater alt! HUUUUUUSSSSSK!!! AT SÆTTE CENTER-XS IND PÅ ALLE UNDERSIDER--> 
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<h1><a href="index.php">Chelsea</a></h1>
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<nav id="navbar">
						<div class="toggle">
							<i class="fa fa-bars menu" aria-hidden="true"></i>
						</div>
						<ul>
							<li class="current"><a href="index.php">Home</a></li>
							<li><a href="membership.php">Membership</a></li>
							<li><a href="fixtures.html">Fixtures</a></li>
							<li><a href="tickets.html">Tickets</a></li>
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
	<!-- SHOWCASE -->
	<section id="showcase">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-10 col-sm-10 col-md-10 col-lg-7 showcase-content">
					<h2>Welcome to</h2>
					<h1>Your New <span class="primary-text"> Chelsea</span></h1>
				</div>
					<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10">
					<a href="membership.php" class="button">Sign Me Up</a>
					<div class="undertext">
						<h3>We have brand new features if you become a member today!</h3>
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- SCROLL FEATURES-->
	<section id="scroll-features">
		<div class="container">
			<div class="row center-xs center-md center-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<h1>LATEST NEWS</h1>
				</div>
				<!-- ROW 1-->
				<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
					<!-- NEWS 1-->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img class="desktop" src="images/desktopnews1.jpg">
						<img class="mobile" src="images/mobilenews1.jpg">
					</div>
					<!-- NEWS 2-->
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img class="desktop" src="images/desktopnews2.jpg">
						<img class="mobile" src="images/mobilenews2.jpg">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img class="desktop" src="images/desktopnews3.jpg">
						<img class="mobile" src="images/mobilenews3.jpg">
					</div>
					<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
						<img class="desktop" src="images/desktopnews4.jpg">
						<img class="mobile" src="images/mobilenews4.jpg">
					</div>
				</div>
			</div>
	</section><br>
	<section id="matchcentre">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg">
				<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 textbox">
						<h1>MATCH CENTRE</h1>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3>Previous Match</h3>
						<img class="desktop" src="images/previousmatch2.jpg">
						<img class="mobile" src="images/mc_previousmatch_mobile.jpg"
					</div>
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<h3>Next Match</h3>
						<img class="desktop" src="images/nextmatch2.jpg">
						<img class="mobile" src="images/mc_pnextsmatch_mobile.jpg">
					</div>
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

	
	