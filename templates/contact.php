<section id="contactSection">
  	<div id="contactHolder">
	   <div id="contactContainer">
			<form method="post" onsubmit="return validate()" action="actions/saveContacts.php" autocomplete="off"><!-- open form --->
				<h2>Contact us</h2>
				<div class="formInfo"><!-- open div that contains form fields -->
					<label class="required">Full Name:</label>
					<input id="strName" type="text" name="strName" placeholder="Name and Lastname" />
					<div class="warning">
						Please Type your fullname here!
					</div>

					<label class="required">e-mail:</label>
					<input id="strEmailAddress" type="text" name="strEmailAddress" placeholder="name@server.com" />
					<div class="warning">Please be sure that yo complete acording to example:<br/> john@domain.com</div>

					<label class="required">Cell phone:</label>
					<input id="nPhoneNumber" type="text" name="nPhoneNumber" placeholder="555-555-5555" />
					<div class="warning">Please insert a contact number here!</div>

					<label>Message:</label>
					<textarea id="strMessage" rows="5" placeholder="Type your message...."></textarea>

					<a href="#" id="saveContact" class="submitBtn btn purpleBtn" onclick="validate()">Send Contact Info</a>

				</div><!-- Close my div that contains my form-->
			</form>
		</div>
		<div class="mapContainer">
			<h2>Visit us</h2>
			<!---------------------MAP---------------------------->
			<div id="map"></div><!--map-->
			<div class='address'>
					<span id="contactInfoDecoration"> </span>
					<h3>Elsing Golf Course</h3>
					<p>570 Dunsmuir St #600</p>
					<p>Vancouver,BC V6B 1Y1</p>
					<br>
					<p>604.222.3333</p>
					<p>contact@elsing.ca</p>
			</div>
		<!--	<img class="address" src="assets/address.png">-->
		</div><!--map container-->
	</div>
</section>