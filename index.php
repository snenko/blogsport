<?php
$header = "header.php";
$main = "main.php";
$footer = "footer.php";
$datetime = date('d.m.Y');


?>
<!DOCTYPE html>
<html>
<head>
	<title>Главная</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet">
</head>
<body>
	<header>
		<?php require_once($header);?>
	</header>
	<main>
		<?php require_once($main); ?>
	</main>
	<footer>
		<?php require_once($footer); ?>
	</footer>
</body>
</html> 
