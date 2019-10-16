<?php
/*
*
*		head.php
*		Last updated 7/15/2018
*		Daniel McGonigle
*		This php file includes the navigation buttons at the top of the page and the left-hand accordion
*
*/
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dan McGonigle Web Solutions</title>
		
		<meta http-equiv="X-UA-Compatible" content="IE=Edge" />
		
		<!-- CSS files; style.css contains page structure, the second contains the color scheme, and the third/fourth contains bootstrap -->
		<link rel="stylesheet" type="text/css" href="css/style.css" id="cssStyle">
		<link rel="stylesheet" type="text/css" href="css/themes/wooded.css" id="cssTheme">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		
		<!-- jQuery import and JavaScript files; -->
		<script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"> </script>
		<script type="text/javascript" src="js/script.js"> </script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		
		<!-- meta data -->
		<meta charset="UTF-8">
		<meta name="description" content="McGonigle Web Design Company">
		<meta name="keywords" content="HTML,CSS,XML,JavaScript,jQuery,Programmer,Web Designer">
		<meta name="author" content="Dan McGonigle">
		<!-- Bootstrap 4 is designed to be responsive to mobile devices. Mobile-first styles are part of the core framework. -->
		<meta name="viewport" content="width=960;">
		
		<!-- Carousel Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Cabin+Sketch" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Permanent+Marker" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
		
		<!-- Other Fonts -->
		<link href="https://fonts.googleapis.com/css?family=Black+Ops+One" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	</head>
	
	<body>
	
		<div class="pageWrapper"> 
		
			<div class="myNavbar">
				<a href="index.php"><img src="img/logo.png" class="logo"></a>
				
							<!--	NAVIGATION BAR	-->
				<ul class="nav">
					<a href="webServices.php"><li class="navbtn"><h3>Web Services</h3></li></a>
					<a href="appDev.php"><li class="navbtn"><h3>App Dev.</h3></li></a>
					<a href="techSkills.php"><li class="navbtn"><h3>Tech. Skills</h3></li></a>
					<a><li class="navbtn dropdown"><h3>Toggle</h3></li></a>
					<a><li class="navbtn contactToggle"><h3>Contact</h3></li></a>
				</ul>
				
			</div>
		
			<div id="dropdown-content">
				<a href="#">Crisp Autumnal</a><br>
				<a href="#">Link 2</a><br>
				<a href="#">Link 3</a>
			</div>
			