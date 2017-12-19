<?php
	session_start();
	include_once 'db_con.php';

	
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Membership Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/flexboxgrid.css">
	<link rel="stylesheet" href="css/loginstyle.css">
	<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
  	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
		<link rel="stylesheet" href="css/loginformstyle.css">

</head>

<body>
	<header id="main-header">
		<div class="container">
			<div class="row end-sm end-md end-lg middle-xs middle-sm middle-md middle-lg"> <!-- Dette er hele rækken, som indeholder 2 kolonner. En på 2 og en på 10
								En Row floater alt!-->
				<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					<h1>Login</h1>
				</div>
				<div class="col-xs-12 col-sm-10 col-md-10 col-lg-10">
					<nav id="navbar">
						<ul><li><a href="index.php">Home</a></li>
							<li class="current"><a href="membership.php">Membership</a></li>
							<li><a href="fixtures.html">Fixtures</a></li>
							<li><a href="tickets.html">Tickets</a></li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
	</header>
		<section id="showcase">
		<div class="container">
			<div class="row center-xs center-sm center-md center-lg middle-xs middle-sm middle-md middle-lg">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 showcase-content">
					<h1>BECOME A <span class="yellow">PART</span> OF <span class="blue">THE TEAM!</span></h1>
				</div>
				<div class="form">
					  <ul class="tab-group">
						<li class="tab"><a href="#signup">Sign Up</a></li>
						<li class="tab active"><a href="#login">Log In</a></li>
					  </ul>
				<div class="tab-content">
							
			<!-- LOGIN LOGIN -->
				<div id="login">	
				  <h1>Enter The Blues!</h1>	
				  <form action="includes/login.inc.php" method="POST">
					<div class="field-wrap">
						<input type="email" name="email" required autocomplete="off" placeholder="Email Address">
					</div>
					<div class="field-wrap">
						<input type="password" name="pwd" required autocomplete="off" placeholder="Password">
					</div>
					<button type="submit" name="submit" class="button button-block"/>Log In</button>
				  </form>
				</div>
					
					<!-- SIGN UP SIGN UP -->
					<div id="signup">   
						<h1>Sign Up for Free</h1>
						<p>After you've signed up, please click the Login button</p>
						  <form action="includes/signup.inc.php" method="POST">
						  	<div class="top-row">
								<div class="field-wrap">
							  		<input type="text" name="first" required autocomplete="off" placeholder="First Name *" />
								</div>
								<div class="field-wrap">
									<input type="text" name="last" required autocomplete="off" placeholder="Last Name *">
								</div> 
					 	 	</div>
					  		<div class="field-wrap">
								<input type="email" name="email" placeholder="Email *">
					  		</div>
							<div class="field-wrap">
								<input type="text" name="uid" required autocomplete="off" placeholder="Username *">
					  		</div>
					  		<div class="field-wrap">
								<input type="password" name="pwd" required autocomplete="off" placeholder="Password *">
					  		</div>
					  		<button type="submit" name="submit" class="button button-block"/>Complete</button>
          				</form>
        			</div>
		
			  </div><!-- tab-content -->     
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="js/index.js"></script>
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