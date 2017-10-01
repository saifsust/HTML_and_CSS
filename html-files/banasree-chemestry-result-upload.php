<!DOCTYPE html>
<html>
	<head>
		<title>Admin</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

		<!--link-->
		<link rel="stylesheet" type="text/css" href="../css/admin.css">
		
		<!--Script-->
		<script type="text/javascript" src="../js/jqueryOfMenu.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
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
				<a href="#">
					<img src="../images/social/facebook.png" alt="Facebook"/>
				</a>
				<a href="#">
					<img src="../images/social/googleplus.png" alt="GooglePlus" />
				</a>
				<a href="#">
					<img src="../images/social/twitter.png" alt="Twitter" />
				</a>
				<a href="#">
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
									<li><a href="#">Information</a></li>
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
<!-- login content-->
<div class="login clear">
	<h1>login </h1>
	
	<table>
		<tr>
			<th>Enter Youer Name</th>
			
		</tr>
		<tr>
			<td>
				<input type="text" name="user name" placeholder="Enter User Names"/>
			</td>
		</tr>
		<tr>
			<th>Enter Password</th>
		</tr>
		<tr>
			<td>
				<input type="Password" name="user name" placeholder="Enter Password" />
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="submit" value="login" />
			</td>
		</tr>
	</table>
	<a href="admin-create-account.php"><h4>Create Account</h4></a>
</div>
</div>
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
</body>
</html>