<!DOCTYPE html>
<html>
<head>
	<title>Admin Login</title>
	<link rel="stylesheet" type="text/css" href="style/indexstyle.css">
</head>
<body>
	<form method="post" action="login.php">
		<div id="login-div">
			<center>
				<h1>Admin Login</h1><br>
				<input type="text" name="login-username" id="login-username" placeholder="Enter The Username ..." autocomplete="off"><br><br>
				<input type="password" name="login-password" id="login-password" placeholder="Enter The Password ..."><br><br>
				<input type="submit" name="login" id="login" value="Login"><br><br><br>
				<a href="forgotpassword.php" id="forget-password">Forgot Password ?</a>
			</center>
		</div>
	</form>
</body>
</html>