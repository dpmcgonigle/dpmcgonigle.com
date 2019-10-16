<?php
/*
*
*		index.php
*		Last updated 7/15/2018
*		Daniel McGonigle
*		This php file includes the main content pane
*		Tags still open: html, body, div.container-fluid pageWrapper, div.col-sm-8 contentDiv
*
*/
?>

<?php include 'head.php'; ?>

	<div class="mainContent">
		
		<br>
	

		  <div id="myCarousel" class="carousel slide" data-ride="carousel">
			<!-- Indicators -->
			<ol class="carousel-indicators">
			  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			  <li data-target="#myCarousel" data-slide-to="1"></li>
			  <li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>

			<!-- Wrapper for slides -->
			<div class="carousel-inner">
			  <div class="item active" id="modernize">
				<img src="img/modernize.jpeg" alt="Modernize and revolutionize your company's presence" style="width:100%;">
				<h1 class="title">Modernize</h1>
				<h3 class="caption">Your Business Image</h3>
			  </div>

			  <div class="item" id="connect">
				<img src="img/connect.jpeg" alt="Connect with a broader audience" style="width:100%;">
				<h1 class="title">Connect</h1>
				<h3 class="caption">To A Broader Audience</h3>
			  </div>
			
			  <div class="item" id="maximize">
				<img src="img/maximize.jpeg" alt="Maximize your bottom line" style="width:100%;">
				<h1 class="title">Maximize</h1>
				<h3 class="caption">Your Company's Potential</h3>
			  </div>
			</div>

			<!-- Left and right controls -->
			<a class="left carousel-control" href="#myCarousel" data-slide="prev">
			  <span class="glyphicon glyphicon-chevron-left"></span>
			  <span class="sr-only">Previous</span>
			</a>
			<a class="right carousel-control" href="#myCarousel" data-slide="next">
			  <span class="glyphicon glyphicon-chevron-right"></span>
			  <span class="sr-only">Next</span>
			</a>
		  </div>
		
		<center>
			<div class="welcome">					
				<div class="contentRow">
					<div class="smallCol">
						<div class="bullet"><img src="img/logo_shape_transparent.png" class="bulletImg"></div>
					</div>
					<div class="largeCol">
						<h3 class="titleClass">Your Business is My Business</h3>
						<br>
						<p class="contentText">Let me help you put your best possible foot forward by advertising your business in the most 
						effective manner possible while providing a user experience that keeps your users coming back for more.</p>
					</div>
				</div>
				<br>
				<div class="contentRow">
					<div class="largeCol">
						<h3 class="titleClass">Launch Your Public Interface</h3>
						<br>
						<p class="contentText">Whether you are already online or you need to take that bold step in 
						establishing your online presence, I can work with you to help you actualize the vision you 
						have for your company.</p>
					</div>
					<div class="smallCol">
						<div class="bullet"><img src="img/logo_shape_transparent.png" class="bulletImg"></div>
					</div>
				</div>
				<br>
				<div class="contentRow">
					<div class="smallCol">
						<div class="bullet"><img src="img/logo_shape_transparent.png" class="bulletImg"></div>
					</div>	
					<div class="largeCol">
						<h3 class="titleClass">Explore Your Options</h3>
						<br>
						<p class="contentText">I am experienced with a multitude of software engineering platforms and 
						programming/scripting languages.  Use the navigation buttons at the top of the screen to explore 
						some of the ways in which I can help you realize your company's potential image.</p>
					</div>
				</div>
			</div>
		<center>
	</div>

<?php include 'tail.php'; ?>