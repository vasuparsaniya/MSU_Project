<!DOCTYPE html>
<html>
<head>
	<title>Sign Up Page</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="signup-box">
		<h2>Sign Up Here</h2>
		<form action="signup.php" method="POST">
			<p>Username:</p>
			<input type="text" name="username" placeholder="Enter Username">
			<p>Email:</p>
			<input type="email" name="email" placeholder="Enter Email">
			<p>Password:</p>
			<input type="password" name="password" placeholder="Enter Password">
			<input type="submit" name="submit" value="Sign Up">
			<p>Already have an account? <a href="login.php">Login</a></p>

			
		</form>
	</div>
</body>
</html>
