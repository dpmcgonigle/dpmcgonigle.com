<!--	THIS IS THE EXERIENCE PAGE  -->

<?php
/*
*
*		experience.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php file discusses my programming experience
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
			
					<div class="mainDisplay" id="experience">

						<h3 class="mainText">A cursory glance at languages/projects I've worked on:</h3>
						
						<p class="mainText">
							<ul class="main">
								<li>Web Programming & Database Management</li>
								<ul class="main">
									<li>This Webpage!</li>
									<li>A <a href="weatherYelp/" target="_blank">"Yelp"-like page</a> I built for my students
										<br>This page interfaces with a database and takes suggestions from users for additions in food, nightlife and other activities. 
										Unfortunately, it is not allowed on the military network, which is why it is only populated with a handful of items.
									</li>
									<li>Database Management, Design and PHP programming</li>
									<li>JavaScript & JQuery</li>
									<li>phpMyAdmin</li>
									<li>HTML5 & CSS3</li>
								</ul>
								
								<li>Java</li>
								<ul class="main">
									<li>Swing UI</li>
									<li>JavaFX UI</li>
									<li>Android Programming
										<ul class="main">
											<li>Meteorology App</li>
											<li>Air Force Testing App</li>
											<li>School Projects</li>
										</ul>
									</li>
								</ul>
								
								<li>C++</li>
									<ul class="main">
										<li>Boost Library</li>
										<li>Loki Library</li>
										<li>STL Library</li>
									</ul>
									
								<li>C</li>
								
								<li>Assembly Language
									<br>I designed about a dozen basic programs for my Assembly college course, including embedding Assembly code into a C++ project.
								</li>
								
								<li>Math through Calculus III (It's a language!)</li>
								
								<li>General Purpose Programming Concepts</li>
								<ul class="main">
									<li>Object-Oriented Programming
										<br>Of course, this includes Inheritance, Polymorphism and Orthogonality
									</li>
									<li>Regex</li>
									<li>Data Structures</li>
									<li>Basic Operating System concepts</li>
									<li>Algorithms 
										<br>This includes time complexity (Big O, Theta and Omega), searching, sorting, and effective use of data structures.
									</li>								
									<li>Recursion</li>
									<li>Exception Handling</li>
									<li>Overloading/Overriding</li>
								</ul>
							</ul>
						</p>
					</div>
					
	<?php include 'tail.php'; ?>
<?php include 'php/dbclose.php'; ?>	
