<!DOCTYPE html>
<html>
	<head>
		<title>Admin create account</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!-- css link -->
		<link rel="stylesheet" type="text/css" href="../css/student-informations.css">
		<!--bootsrap link -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<!--script link -->
		<script type="text/javascript" src="../js/jqueryOfMenu.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>
		
		
		
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
							<li class="current-menu-item"><a href="#">Home</a></li>
							<li class="parent">
								<a href="#">Course</a>
								<ul class="sub-menu">
									<li><a href="chemestry.php">Chemestry </a></li>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Bangla</a></li>
									<li><a href="#"></i>English</a></li>
									<li><a href="#">Social Science</a></li>
									
								</ul>
							</li>
							<li class="parent">
								<a href="#">Model Test</a>
								<ul class="sub-menu">
									<li><a href="chemestry-model-test.php">Chemestry </a></li>
									<li><a href="#">Physics</a></li>
									<li><a href="#">Mathematics</a></li>
									<li><a href="#">Bangla</a></li>
									<li><a href="#"></i>English</a></li>
									<li><a href="#">Social Science</a></li>
								</ul>
							</li>
							<li class="parent">
								<a href="#">Branch</a>
								<ul class="sub-menu">
									<li><a href="banasree.php">Banasree</a></li>
									<li><a href="malibagh.php">Malibagh</a></li>
									<li><a href="badda.php">Badda</a></li>
								</ul>
							</li>
							<li class="parent">
								<a href="notice-board.php">Notice Board</a>
							</li>
							<li class="parent">
								<a href="admin.php">Admin</a>
							</li>
							<li class="parent">
								<a href="about.php">About</a>
							</li>
						</ul>
					</nav>
					<div class="clear"></div>
				</div>
			</header>
		</div>
		
		<!---         main content      -->
		<div class="mainContent template clear">
			
			<!-- content-->
			
			<div class="content">
				<!-- Header -->
				<h1>Fill Up Your Detail  Information</h1>
				
				
				<!-- Form -->
				<form>
					
					<div class="field-wrap">
						<input type="text" name="name" placeholder="Name"/>
					</div>
					<div class="field-wrap">
						<input type="text" name="fName" placeholder="Father Name"/>
					</div>
					<!--field-wrap-->
					<div class="field-wrap">
						<input type="text" name="mName" placeholder="Mother Name"/>
						</div><!--field-wrap-->
						<!--address-->
						<div class="address-content">
							<h1>Present Address</h1>
							<div class="field-wrap">
								<input type="text" name="house" placeholder="House"/>
							</div>
							<div class="select-wrap">
								<h1>District</h1>
								<select class="select">
									<option value="school">Dhaka</option>
									<option value="college">Comilla</option>
									<option value="versity">Rajshahi</option>
								</select>
							</div>
							<div class="field-wrap">
								<input type="text" name="thana" placeholder="Thana"/>
							</div>
							<div class="field-wrap">
								<input type="text" name="postCode" placeholder="Post Code"/>
							</div>
							<div class="select-wrap">
								<h1>Division</h1>
								<select class="select">
									<option value="school">Dhaka</option>
									<option value="college">Comilla</option>
									<option value="versity">Rajshahi</option>
								</select>
							</div>
							</div><!--address-->
							<!--address-->
							<div class="address-content">
								<h1>Permanent Address</h1>
								<div class="field-wrap">
									<input type="text" name="house" placeholder="House"/>
								</div>
								<div class="select-wrap">
									<h1>District</h1>
									<select class="select">
										<option value="school">Dhaka</option>
										<option value="college">Comilla</option>
										<option value="versity">Rajshahi</option>
									</select>
								</div>
								<div class="field-wrap">
									<input type="text" name="thana" placeholder="Thana"/>
								</div>
								<div class="field-wrap">
									<input type="text" name="postCode" placeholder="Post Code"/>
								</div>
								<div class="select-wrap">
									<h1>Division</h1>
									<select class="select">
										<option value="school">Dhaka</option>
										<option value="college">Comilla</option>
										<option value="versity">Rajshahi</option>
									</select>
								</div>
								</div><!--address-->
								<!-- personal Info -->
								<div class="pInfo">
									<!--field-wrap-->
									<div class="field-wrap">
										<input type="text" name="mobile" placeholder="Mobile Number"/>
										</div><!--field-wrap-->
										<!--field-wrap-->
										<div class="field-wrap">
											<input type="text" name="fmName" placeholder="Father Mobile Number"/>
											</div><!--field-wrap-->
											<!--field-wrap-->
											<div class="field-wrap">
												<input type="text" name="religion" placeholder="Religion"/>
												</div><!--field-wrap-->
												<!--field-wrap-->
												<div class="field-wrap">
													<input type="text" name="nationality" placeholder="Nationality"/>
													</div><!--field-wrap-->
													</div><!-- personal Info -->
													<!--select-->
													<div class="institute-field-select">
														<div class="inst-select-div">
															<select class="select">
																<option value="school">School</option>
																<option value="college">College</option>
																<option value="versity"> University</option>
															</select>
														</div>
														<!--field-wrap-->
														<div class="field-select-wrap">
															<input type="text" name="isti" placeholder="institute"/>
															</div><!--field-wrap-->
															</div><!--select-->
															<!--Image-->
															<!--field-wrap-->
															<div class="image-field">
																<h1>select Picture</h1>
																<input type="file" name="image" placeholder="choose Picture" />
																</div><!--field-wrap-->
																<button type="submit" class="button button-block" >submit</button>
																</form>	<!-- Form -->
																</div><!-- content-->
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
															</body>
														</html>m