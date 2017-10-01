<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		
		<script type="text/javascript" src="../js/jqueryOfMenu.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
		
		
	</head>
	<body>
		<!-- Header content -->
		<div class="headerSection template clear">
			
			<div class="logo" >
				<a href="#">
					<img src="../images/logo.png" alt="logo"/>
				</a>
				<h1>Udvabon Coaching Center </h1>
				<p>Our Choaching Center</p>
			</div>
			
			<div class="social">
				<a href="www.facebook.com">
					<img src="../images/social/facebook.png" alt="Facebook"/>
				</a>
				<a href="www.gmail.com">
					<img src="../images/social/googleplus.png" alt="GooglePlus" />
				</a>
				<a href="www.twitter.com">
					<img src="../images/social/twitter.png" alt="Twitter" />
				</a>
				<a href="www.linkedIn.com">
					<img src="../images/social/linkedIn.png" alt="LinkedIn" />
				</a>
			</div>
		</div>
		<!-- Menu Content -->
		<div id="wrap">
			<header class="template">
				<div class="inner relative">
					<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
					<nav id="navigation template">
						<ul id="main-menu">
							<li class="current-menu-item"><a href="banasree.php">Home</a></li>
							<li class="parent">
								<a href="#">Student</a>
								<ul class="sub-menu">
									<li><a href="Student-information.php">Information</a></li>
									<li><a href="#">Salary</a></li>
									
									
								</ul>
							</li>
							<li class="parent">
								<a href="#">Result Upload</a>
								<ul class="sub-menu">
									<li><a href="#">Banasree Branch</a>
									<ul class="sub-menu">
										<li><a href="banasree-chemestry-result-upload.php">Chemestry </a></li>
										<li><a href="#">Physics</a></li>
										<li><a href="#">Mathematics</a></li>
										<li><a href="#">Bangla</a></li>
										<li><a href="#"></i>English</a></li>
										<li><a href="#">Social Science</a></li>
									</ul>
								</li>
								<li><a href="#">Malibagh Branch</a>
								<ul class="sub-menu">
									<li><a href="#">Chemestry </a></li>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Bangla</a></li>
									<li><a href="#"></i>English</a></li>
									<li><a href="#">Social Science</a></li>
								</ul>
							</li>
							<li><a href="#">Badda Branch</a>
							<ul class="sub-menu">
								<li><a href="#">Chemestry </a></li>
								<li><a href="#">Physics</a></li>
								<li><a href="#">Mathematics</a></li>
								<li><a href="#">Bangla</a></li>
								<li><a href="#"></i>English</a></li>
								<li><a href="#">Social Science</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li class="parent">
					<a href="#">Post</a>
				</li>
				<li class="parent">
					<a href="admin.php">Admin</a>
				</li>
				<li class="parent">
					<a href="#">Write About</a>
				</li>
			</ul>
		</nav>
		<div class="clear"></div>
	</div>
</header>
</div>
<!---         main content      -->
<div class="mainContent template clear">
<!--  content-->
<div class="content">
	<!--tab-group-->
	<ul class="tab-group">
		<li class="tab active"><a href="#signup">Sign Up</a></li>
		<li class="tab"><a href="#login">Log In</a></li>
		
	</ul>
	<!-- tab-content content-->
	<div class="tab-content ">
		
		<!-- signup-content-->
		<div id="signup">
			<h1>Sign Up</h1>
			<!--form Content-->
			<form action="/" method="Post" >
				<!--top-row -->
				<div class="top-row">
					<div class="field-wrap">
						<input type="text" name="fName" placeholder="First Name" />
					</div>
					<div class="field-wrap">
						<input type="text" name="lName" placeholder="Last Name" />
					</div>
					</div>	<!--top-row -->
					
					<div class="field-wrap">
						<input type="email" name="semail" placeholder="Email" />
					</div>
					<div class="field-wrap">
						<input type="password" name="spassword" placeholder="Password" />
					</div>
					<div class="field-wrap">
						<input type="password" name="scpassword" placeholder="Conferm Password" />
					</div>
					<button type="submit"  class="button button-block"/> Sign Up </button>
				</form>
				</div><!-- signup-content-->
				
				<!-- login-content-->
				<div id="login">
					<h1>Log In</h1>
					<!--form Content-->
					<form action="/" method="Post" >
						<div class="field-wrap">
							<input type="email" name="lemail" placeholder="Email" />
						</div>
						<div class="field-wrap">
							<input type="password" name="lpassword" placeholder="Password" />
						</div>
						
						<p class="forgot"><a href="#">Forgot Password?</a></p>
						<button type="submit"  class="button button-block"/> Log In </button>
					</form>
					</div><!-- login-content-->
					
					</div><!-- tab-content content-->
					</div><!--  content-->
					</div><!---         main content      -->
					<!--  Footer Content -->
					<div class="footerSection template clear">
						<div class="footerMenu clear">
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="about.php">About</a></li>
								<li><a href="contact.php">Contact</a></li>
								<li><a href="privacy.php">Privacy</a></li>
							</ul>
						</div>
						<p>&copy;Copyright Udvabon Coaching Center</p>
					</div>
					<!-- java Script file contenet -->
					<script src="../js/admin.js"></script>
				</body>
			</html>