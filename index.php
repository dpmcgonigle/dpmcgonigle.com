<!DOCTYPE html>
<!--	THIS IS THE PHP FILE	-->

<?php
/*
*
*		index.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php file includes the headline banner and main content area, including both the head and tail in addition to the database connection and close
*
*/
?>

<!--	TAGS THAT NEED TO BE CLOSED: contentArea div, mainContent div     -->
<?php include 'php/dbconnect.php'; ?>
<?php include 'head.php'; ?>	

	<!--	MAIN CONTENT AREA	-->
	<div class="contentArea">
		<div class="headlineBanner"><h1 class="font-effect-outline">Daniel McGonigle, B.S.C.S. & M.S.C.S.
			<div class="projected">Projected 2019</div>
		</div>
		<div class="mainContent">
	
			<div class="mainDisplay">
				<h3 class="mainText">
					Good <span id="greeting">day</span>, <span id="browser"></span> internet traveler!
				</h3>
					<p class="mainText">I go by Dan and I created this page as an expression of my desire to work in the field of software engineering and web design.  
					After spending more than a decade as a meteorologist for the US Air Force as well as a teacher of meteorology and management, 
					I have decided that I would like to shift gears and pursue a passion for design, coding and problem solving that I want to make a career of.  
					Feel free to utilize the "Quick Reference" bar on the left to get a description of where the navigation buttons at the top of the page will take you.  
					While I would like to take full credit for this website, I owe credit to my professors at USM for investing their time and energy in me, 
					and I most definitely owe credit to my development team (pictured below).  Cheers, and thank you for stopping by!</p>
					<br><br><br><br>
						
					<img class="developmentTeam" src="img/developmentTeam.jpg">
			</div>
			
<?php include 'tail.php'; ?>	
<?php include 'dbclose.php'; ?>	
