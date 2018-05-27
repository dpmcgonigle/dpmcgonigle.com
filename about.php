<!--	THIS IS THE ABOUT PAGE  -->

<?php
/*
*
*		about.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php file discusses what went into designing this website as a whole
*
*/
?>

<?php include 'php/dbconnect.php' ?>
	<?php include 'head.php'; ?>	
			<!--	MAIN CONTENT AREA	-->
			<div class="contentArea">
		<div class="headlineBanner"><h1 class="font-effect-outline">Daniel McGonigle, B.S.C.S. & M.S.C.S.
			<div class="projected">Projected 2019</div>
		</div>
				<div class="mainContent">
			
					<div class="mainDisplay">
						<h3 class="mainText">
							About this webpage:
						</h3>
						<p class="mainText">
							This project was iniated in 2017 during a web design course at the University of Southern Mississippi.  The course included HTML5/CSS3, PHP, JavaScript, 
							GIT, Command Line interface and SQL, utilizing modules from Codecademy.com for each of those areas.  Each of these pages includes PHP files for everything
							before and after this main content panel, and they also include PHP files to connect to the database that sends me your contact information if you choose 
							to send that by clicking on the "contact" ribbon below.  A single style sheet is employed to style all HTML elements within this set of web pages, and 
							a single JavaScript file is employed for actions such as the mouseover effects and accordion effects.  The site is hosted on Blue Host, and the files 
							are all uploaded through FileZilla.  Lastly but not least, I need to give a shoutout to my development team, pictured below.
							<img class="developmentTeam" src="img/developmentTeam.jpg">
						</p>
					</div>
					
	<?php include 'tail.php'; ?>
<?php include 'php/dbclose.php'; ?>	
