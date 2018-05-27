<?php
/*
*
*		tail.php
*		Last updated 5/20/2018
*		Daniel McGonigle
*		This php include file creates the contact form and footer for each web page
*
*/
?>
					<div class="form">  <!--begin form-->
						<form action="processWebform.php" method="post" id="contactForm">
              
							<center>
							<div class="formName">
								Name:
								<input type="text" name="name">
							</div>
              
							<div class="formEmail">
								Email:
								<input type="text" name="email">
							</div>
							
							<div class="formMessage">
								Message:<br>
								<textarea rows=5 cols=100 form="contactForm" name="message"></textarea>
							</div>
							
							<div class="formSubmit">
								<input type="submit" value="Submit">
								<button class="formClear"><p>Clear Form</p></button>
							</div>
							
							</center>
							
            </form> 
					</div>  <!--end form-->
					
					
				</div>  <!--end mainContent-->
			
				<div class="contactBanner">
					<img src="img/up.png">
					<img src="img/up.png">
					<h1 class="font-effect-outline">contact</h1>

				</div>
			
				<footer>

					<h3 class="font-effect-outline" id="footerText">Last updated: April 8, 2018.  Site visitors: <?php include 'php/counter.php'; ?>	</h3>
					<p>Whether you think you can or you think you can’t, you’re right. —Henry Ford</p>
				</footer>		
			
			</div>   <!--	end content area-->
			
		</div>		<!--	end pageWrapper	-->
		
	</body>

</html>