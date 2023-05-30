<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
<h1>Register a User</h1>

<form action="save-registration.php" method="POST" onsubmit="return validateForm()">
	<div>
		<label>First Name</label>
		<input type="text" name="first_name" placeholder="First Name" required/>	
	</div>

	<div>
		<label>Middle Name</label>
		<input type="text" name="middle_name" placeholder="Middle Name"/>	
	</div>
	
	<div>
		<label>Last Name</label>
		<input type="text" name="last_name" placeholder="Last Name" required/>	
	</div>
	
	<div>
		<label>Email Address</label>
		<input type="email" name="email" placeholder="email@address.com" required/>	
	</div>
	
	<div>
		<label>Password</label>
		<input type="password" id="password" name="password" minlength="8" required/>	
	</div>
	
	<div>
		<label>Confirm Password</label>
		<input type="password" id="confirm_password" name="confirm_password" onkeyup="validateForm()" minlength="8" required/>	
		<span id="message"></span>
	</div>

	<div>
		<label>Birthdate</label>
		<input type="date" name="birthdate" required/>	
	</div>

	<div>
		<label>Gender<br></label>
		<input type="radio" name="gender" required value="Male"> Male
    	<input type="radio" name="gender" required value="Female"> Female
	</div>

	<div>
		<label>Address</label>
		<input type="text" name="address" required/>	
	</div>

	<div>
		<label>Contact Number</label>
		<input type="text" name="contact_number" required/>	
	</div>

	<br>
	<div>
		<button type="submit">
			Register User
		</button>	
	</div>
</form>
</body>
</html>

<script>	
	function validateForm() {
		var password = document.getElementById("password").value;
		var confirm_password = document.getElementById("confirm_password").value;
		var messageElement = document.getElementById("message");

		if (password !== confirm_password) {
			messageElement.innerHTML = "Passwords do not match";
			return false; // Prevent form submission
		} else {
			messageElement.innerHTML = "";
			return true; // Allow form submission
		}
	}

	document.getElementById("password").onchange = checkPassword;
	document.getElementById("confirm_password").onkeyup = checkPassword;
</script>

<style>
	#message {
		font-size: 12px;
		color: red;
	}
</style>
