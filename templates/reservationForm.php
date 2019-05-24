<form id="reservationForm">
	<h2>Reservation</h2>
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

		<label class="required">Where:</label>
		<input class="radioChosePlace" type="radio" name="placeToEvent" value="1"/>Grand Hall<br/>
		<input class="radioChosePlace" type="radio" name="placeToEvent" value="2"/>West Coast Lounge<br/>
		<div class="warning">Please select a place!</div>

		<label class="required">Date:</label>
		<input id="dateEvent" type="date" name="dateEvent"/>
		<div class="warning">Please select a date!</div>

		<label class="required">Number of guests:</label>
		<input id="numberOfGuests" type="number" name="numberOfGuests" placeholder="100" />
		<div class="warning">Please insert the number of guests!</div>

		<label>Request more info:</label>
		<textarea id="strMessage" rows="5" placeholder="Type your message...."></textarea>

		<a href="#" id="sendReservation" class="submitBtn btn purpleBtn" onclick="validate()">Send Contact Info</a>
	</div>
</form>