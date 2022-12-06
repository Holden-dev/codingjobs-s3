<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
</head>

<body>
    <h2>Register</h2>

    <form method="post">
        @csrf
        <input type="text" name="first_name" id="first_name" placeholder="First name"><br>
        <input type="text" name="last_name" id="last_name" placeholder="Last name"><br>
        <input type="text" name="postal_code" id="postal_code" placeholder="Postal code"><br>
        <input type="text" name="city" id="city" placeholder="City"><br>
        <input type="text" name="email" id="email" placeholder="Email"><br>
        <input type="text" name="password" id="password" placeholder="Password"><br>
        <input type="text" name="password_confirmation" id="password_confirmation"
            placeholder="Confirm password"><br>

        <input type="submit" name="registerBtn" value="Register">
    </form>
</body>

</html>
