



			<div class="panel-container" >
					
			<div class="panel-content" style="text-align: center; position: relative;">
					
					<span class="close">&times;</span>
					
					<h1>Welkom op Selectworks.nl!</h1>
					
					<hr>
					
					<!-- Document server information / HTTP header information -->
					
					<?php 
					
					echo "This is the current page: <strong>".$currentPage."</strong>";
					echo "<br>";
					echo "This is the root of the server directory: <strong>".$root."</strong>";
					
					// Report all errors
					
					error_reporting(E_ALL);
					
					
					?>
					
					<!-- End of server/HTTP header information -->
					
					<br>
					<br>

					<!-- <script src="/Selectworks/slw-webapp-v1/app-includes/content-panels/content-panel-a.js"></script> -->

					<button onclick = "hidePanel()" id="neeButton" style="position: relative; bottom: 0px; background-color: red; border-radius: 10%; padding: 5px; color: black;"><b>Nee, ik ga niet akkoord</b></button>
					
					<button onclick = "createCookie()" id="jaButton" style="position: relative; bottom: 0px; background-color: green; border-radius: 10%;padding: 5px; color: black;"><b>Ja, ik ga akkoord</b></button>
					
					
					<hr>
						
			</div>
						
			</div>
		
		
