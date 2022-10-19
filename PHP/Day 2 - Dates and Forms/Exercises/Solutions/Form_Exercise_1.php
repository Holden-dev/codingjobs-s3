<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Exercise 1</title>
</head>

<body>
	<?php
	// Check if button was clicked
	if (isset($_POST['loginBtn'])) {

		// Check if email is valid
		$email = $_POST['email'];
		if (strpos($email, '@')) {
			echo '<span style="color: green">Valid email</span>';
		} else {
			echo '<span style="color: red">Invalid email</span>';
		}
	}
	?>

	<form method="POST">
		<input type="text" name="email" placeholder="Email"><br>
		<input type="text" name="password" placeholder="Password"><br>
		<input type="submit" value="Login" name="loginBtn">
	</form>
</body>

</html>