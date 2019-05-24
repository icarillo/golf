<form id="loginForm" method="post" onsubmit="return validate();" action="../actions/processLogin.php" autocomplete="off"><!-- open form --->
    <h2>Login</h2>
    <div class="formInfo"><!-- open div that contains form fields -->
        <label class="required">Full Name:</label>
        <input id="userID" type="text" name="strUsername" placeholder="Username" />
        <div class="warning">
            Please Enter a User Name!
        </div>

        <label class="required">Password:</label>
        <input id="strpassword" type="password" name="strpassword" placeholder="At least 4 characters" />
        <div class="warning">Please insert a Password!</div>
        
		<input type="submit" class="purpleBtn" value="Login">
        <a href="../index.php" class="backHome">Back to home page</a>

    </div><!-- Close my div that contains my form-->
</form>
