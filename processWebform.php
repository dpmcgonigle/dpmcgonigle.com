<!-- Process Webform -->
<?php

/*
*
*		processWebform.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php file includes the php files that create the main web page while confirming the information that the user passed along in the contact info form
*
*/

//retrieve the user input from the contact form
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];

?>

<!--	TAGS THAT NEED TO BE CLOSED: contentArea div, mainContent div; this info is for debugging purposes since the html is split into several files     -->
<?php include 'php/dbconnect.php'; ?>
<?php include 'head.php'; ?>	

	<!--	MAIN CONTENT AREA	-->
	<div class="contentArea">
		<div class="headlineBanner"><h1 class="font-effect-outline">Daniel McGonigle, B.S.C.S. & M.S.C.S.
			<div class="projected">Projected 2019</div>
		</div>
		<div class="mainContent">
	
			<div class="mainDisplay">	
				<h1>Thank you for submitting the form!</h1>
				<p>Here is the information we got:</p>
			
				<ul>
					<?php 
						echo '<li>Name: ' . $name . '</li>';
						echo '<li>Email: ' . $email . '</li>';
						echo '<li>Message: ' . $message . '</li>';
					?>
				</ul>
				
				<?php include 'php/processForm.php'; ?>
				
			</div>
			
<?php include 'tail.php'; ?>	
<?php include 'php/dbclose.php'; ?>	

    


