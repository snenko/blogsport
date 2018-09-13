<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Вход</title>
	<link rel="icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="http://vladmaxi.net/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/style_int.css" />
</head>
<body>
	<form id="slick-login" action="session.php" method="post">
		<label for="user">Логин:</label><input type="text" name="user" class="placeholder" placeholder="admin@example.com" required>
		<label for="password">Пароль:</label><input type="password" name="password" class="placeholder" placeholder="Сложный пароль..." required>
		<input type="submit" value="ВОЙТИ">
	</form>
</body>
</html>