<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="validation.js"></script>
</head>
<body>
	<div class="login-box">
		<h2>Login Here</h2>
		<form action="login.php" method="POST">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Password:</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Login">
			<p>Don't have an account? <a href="signup.php">Sign up</a></p>
			<p>Forgotpassword<a href="forgotpassword.php">Forgotpassword</a></p>
		</form>
	</div>
</body>
</html>
