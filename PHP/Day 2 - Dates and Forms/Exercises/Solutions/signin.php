<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Form Exercise 3</title>
</head>

<body>
	<h1>Sign-in</h1>

	<?php
	$firstName = '';
	$lastName = '';
	$email = '';

	// Make sure button is clicked
	if (isset($_POST['signinBtn'])) {
		$errors = array();

		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$cPassword = $_POST['cPassword'];

		// Validations
		if (empty($firstName))
			$errors['firstName'] = 'First name is mandatory !';

		if (empty($lastName))
			$errors['lastName'] = 'First name is mandatory !';


		if (empty($email))
			$errors['email'] = 'Email is mandatory !';
		else if (strlen($email) < 8 or strlen($email) > 50)
			$errors['email'] = 'Email must be between 8 and 50 characters long.';

		if (strlen($password) < 8)
			$errors['password'] = 'Passwords must be at least 8 characters long.';
		else if ($password != $cPassword)
			$errors['password'] = 'Passwords must match';


		// Only if NO erros
		if (empty($errors)) {
			echo "First name : $firstName<br>";
			echo "Last name : $lastName<br>";
			echo "Email : $email<br>";

			if (isset($_POST['newsletter']))
				echo "Subscribed to the newsletter.<br>";
		} else {
			// foreach ($errors as $key => $value) {
			// 	echo "$key : $value<br>";
			// }
		}
	}
	?>

	<form method="post">
		<input type="text" name="lastName" placeholder="Last Name" value="<?php echo $lastName; ?>">
		<?php
		if (isset($errors['lastName']))
			echo $errors['lastName'];
		?>
		<br>

		<input type="text" name="firstName" placeholder="First Name" value="<?php echo $firstName; ?>">
		<?php
		if (isset($errors['firstName']))
			echo $errors['firstName'];
		?>
		<br>

		<input type="text" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
		<?php
		if (isset($errors['email']))
			echo $errors['email'];
		?>
		<br>

		<input type="text" name="password" placeholder="Password">
		<?php
		if (isset($errors['password']))
			echo $errors['password'];
		?>
		<br>

		<input type="text" name="cPassword" placeholder="Confirm Password"><br>
		<label for="news">Subscribe to the newsletter</label>
		<input type="checkbox" name="newsletter" id="news"><br>
		<input type="submit" name="signinBtn" value="Signin">
	</form>
</body>

</html>