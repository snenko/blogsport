<!DOCTYPE html>
<html>
<head>
	<title>Регистрация</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style_reg.css">
</head>
<body>
	<form action="core.php" method="POST">
		<div class="group">
			<label for="user_login">Login:</label><br>
			<input type="text" name="user" class="user_login" required><br>
			
			<label for="user_pass">Password:</label><br>
			<input type="password" name="pass" class="user_pass" required><br>
			
			<label for="user_email">Email:</label><br>
			<input type="email" name="email" class="user_email" required><br>
			<input type="submit" name="Send"><br>
		</div>
	</form>
</body>
</html>