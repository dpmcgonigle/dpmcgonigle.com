<!-- CSS 405 Website #1: Resume site -->
<!-- Began 6/19/2017, Written with HTML5, CSS3, JavaScript and jQuery -->

<?php
/*
*
*		head.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php file includes the navigation buttons at the top of the page, the left-hand accordion descriptors, and the title bar
*
*/
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dan McGonigle, Software Engineer</title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<link href="https://fonts.googleapis.com/css?family=Roboto&effect=emboss" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Cookie&effect=outline" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Sanchez&effect=outline" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Eczar&effect=distressed" rel="stylesheet">	<!--	No longer in use	-->

		
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
		<script type="text/javascript" src="script.js"></script>
		
		<meta charset="UTF-8">
		<meta name="description" content="Dan McGonigle is a software engineer for hire">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript,jQuery,Programmer,Web Designer">
		<meta name="author" content="Dan McGonigle">
	</head>
	
	<body>
		<div class="pageWrapper">
			<header>
			
				<div class="headerHome">
					<a href="index.php"><img src="img/home.jpg" class="homeIcon"></a>
				</div>
			
			<!--	NAVIGATION BAR	-->
				<ul class="nav">
					<a href="resume.pdf" target="_blank"><li class="navbtn"><h4 class="font-effect-emboss">RESUME</h4></li></a>
					<a href="experience.php"><li class="navbtn"><h4 class="font-effect-emboss">EXPERIENCE</h4></li></a>
					<a href="goals.php"><li class="navbtn"><h4 class="font-effect-emboss">GOALS</h4></li></a>
					<a href="https://dpmcgonigle.wixsite.com/programming" target="_blank"><li class="navbtn"><h4 class="font-effect-emboss">BLOG</h4></li></a>
					<a href="about.php"><li class="navbtn"><h4 class="font-effect-emboss">ABOUT</h4></li></a>
				</ul>

			</header>
		
			<!--	LEFTHAND ACCORDION	-->
			<aside>
				<div class="asideTitle">
					<h2 class="font-effect-outline">Quick Reference</h2>
				</div>
				<div class="accordion">
					<button class="accordion"><h4>RESUME</h4></button>
					<div class="panel">
						<p>Includes:</p>
							<ul>
								<li>4x Degrees</li>
									<ul>
										<li>B.S.C.S.</li>
										<li>A.A.S.C.S.</li>
										<li>2x more A.A.S.</li>
									</ul>
								<li>16 Yrs Employed</li>
									<ul>
										<li>12 Yrs Air Force</li>
										<li>4 Yrs Medical</li>
										<li>3 Yrs Management</li>
										<li>7 Yrs Supervisory</li>
									</ul>
								<li>Programming</li>
									<ul>
										<li>Air Force work</li>
										<li>School Projects</li>
										<li>Personal Projects</li>
									</ul>
							</ul>
					</div>

					<button class="accordion"><h4>EXPERIENCE</h4></button>
					<div class="panel">
						<p>This section details and demonstrates the projects I have worked on in various languages utilized for various purposes.</p>
					</div>

					<button class="accordion"><h4>GOALS</h4></button>
					<div class="panel">
						<p>This section details my short and long term personal and professional goals.</p>
					</div>
					
					<button class="accordion"><h4>BLOG</h4></button>
					<div class="panel">
						<p>This section links to an ongoing blog in which I discuss useful information about different platforms and programming languages for novice and intermediate programmers.</p>
					</div>

					<button class="accordion"><h4>ABOUT</h4></button>
					<div class="panel">
						<p>This section details the tools, languages and techniques employed to design this webpage.</p>
					</div>
					
				</div>
				
			</aside>