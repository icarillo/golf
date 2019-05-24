<form method="post" onsubmit="return validate()" action="actions/saveUser.php" autocomplete="off"><!-- open form --->
    <h2>Create a User</h2>
    <div class="formInfo"><!-- open div that contains form fields -->
        <label class="required">Full Name:</label>
        <input id="strName" type="text" name="strName" placeholder="userName" />
        <div class="warning">
            Please Enter a User Name!
        </div>

        <label class="required">Password:</label>
        <input id="strpassword" type="text" name="strpassword" placeholder="At least 4 characters" />
        <div class="warning">Please insert a Password!</div>
        
		<a id="createUserBtn" href="#" class="purpleBtn">Create User</a>

    </div><!-- Close my div that contains my form-->
</form>
