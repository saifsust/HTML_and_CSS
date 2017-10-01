<!DOCTYPE html>
<html>
	<head>
		<title>Banasree</title>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<!--link-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="../css/menu.css">
		<link rel="stylesheet" type="text/css" href="../css/home.css">
		<!--script-->
		<script type="text/javascript" src="../js/jqueryOfMenu.js"></script>
		<script type="text/javascript" src="../js/function.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!--javascript-->
		<script language="javascript" type="text/javascript">
		
		function clearText(field)
		{
		if (field.defaultValue == field.value) field.value = '';
		else if (field.value == '') field.value = field.defaultValue;
		}
		</script>
		<link rel="stylesheet" href="../css/nivo-slider.css" type="text/css" media="screen" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript"></script>
		<script src="../js/jquery.nivo.slider.js" type="text/javascript"></script>
		<script type="text/javascript">
		$(window).load(function() {
			$('#slider').nivoSlider({
				effect:'random',
				slices:10,
				animSpeed:500,
				pauseTime:2000,
				startSlide:0, //Set starting Slide (0 index)
				directionNav:false,
				directionNavHide:false, //Only show on hover
				controlNav:false, //1,2,3...
				controlNavThumbs:false, //Use thumbnails for Control Nav
				pauseOnHover:true, //Stop animation while hovering
				manualAdvance:false, //Force manual transitions
				captionOpacity:0.8, //Universal caption opacity
				beforeChange: function(){},
				afterChange: function(){},
				slideshowEnd: function(){} //Triggers after all slides have been shown
			});
		});
		</script>
	</head>
	<body>
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
		<div id="wrap">
			<header>
				<div class="inner relative">
					<a id="menu-toggle" class="button dark" href="#"><i class="icon-reorder"></i></a>
					<nav id="navigation">
						<ul id="main-menu">
							<li class="current-menu-item"><a href="#">Home</a></li>
							<li class="parent">
								<a href="#">Course</a>
								<ul class="sub-menu">
									<li><a href="chemestry-chapter-01.php">Chemestry </a></li>
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
		<div class="sliderSection template clear">
			<div id="slider">
				<a href="#"><img src="../images/banasree/01.jpg" alt="nature 1" title=" SAIFUl ISLAM" /></a>
				<a href="#"><img src="../images/banasree/02.jpg" alt="nature 2" title="Liton" /></a>
				<a href="#"><img src="../images/banasree/03.jpg" alt="nature 3"  title="BABU" /></a>
				<a href="#"><img src="../images/banasree/04.jpg" alt="nature 4"  title="kobri" /></a>
			</div>
		</div>
		<div class="mainContent template clear">
			
			<div class="samepost clear">
				<h2>our post title</h2>
				<img src="../images/group.jpg" alt="post image"/>
				<p>
					The number √n r0 is the length of each of the radius vectors representing the
					n roots.
					The first root c0 has argument θ0/n; and the two roots when n = 2 lie at
					the opposite ends of a diameter of the circle |z| = √n r0, the second root being −c0.
					When n ≥ 3, the roots lie at the vertices of a regular polygon of n sides inscribed
					in that circle.
				</p>
				<div class="readmore clear">
					<a href="#">read more</a>
				</div>
			</div>
			
			<div class="samepost clear">
				<h2>our post title</h2>
				<img src="../images/group.jpg" alt="post image"/>
				<p>
					The number √n r0 is the length of each of the radius vectors representing the
					n roots.
					The first root c0 has argument θ0/n; and the two roots when n = 2 lie at
					the opposite ends of a diameter of the circle |z| = √n r0, the second root being −c0.
					When n ≥ 3, the roots lie at the vertices of a regular polygon of n sides inscribed
					in that circle.
				</p>
				<div class="readmore clear">
					<a href="#">read more</a>
				</div>
			</div>
			
			<div class="samepost clear">
				<h2>our post title</h2>
				<img src="../images/group.jpg" alt="post image"/>
				<p>
					The number √n r0 is the length of each of the radius vectors representing the
					n roots.
					The first root c0 has argument θ0/n; and the two roots when n = 2 lie at
					the opposite ends of a diameter of the circle |z| = √n r0, the second root being −c0.
					When n ≥ 3, the roots lie at the vertices of a regular polygon of n sides inscribed
					in that circle.
				</p>
				<div class="readmore clear">
					<a href="#">read more</a>
				</div>
			</div>
			
		</div>
		<div class="sideBar template clear">
			<div class="firstSideBar">
				<h2>Resources</h2>
				<ul>
					<li><a href="#">Physics</a></li>
					<li><a href="#">Chemestry</a></li>
					<li><a href="#">Bangla</a></li>
					<li><a href="#">English</a></li>
				</ul>
				
			</div>
			<div class="firstSideBar">
				<h2>Address</h2>
				<p>Block : B</p>
				<p>Road : 4</p>
				<p>House : 35</p>
				<p>Rampura ,Banasree</p>
				<p>Mobile : 01727234234</p>
			</div>
			
			
		</div>
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