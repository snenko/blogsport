<?php
#session_start();
header("Content-type: text/html; charset=utf-8");
header("Refresh: 1; url='http://blogsport/input.php'");
error_reporting(E_ALL);


if (isset($_POST)) {

	if(!empty($_POST["user"]) and preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/", $_POST["user"])){
		$login = stripcslashes($_POST["user"]);
	}if (!empty($_POST["pass"])) {
		$password = stripcslashes($_POST["pass"]);
	}if (!empty($_POST["email"]) and preg_match("/^([a-zA-Z0-9_\.-]+)@([a-z0-9_\.-]+)\.([a-z\.]{2,6})$/", $_POST["email"])) {
		$email = stripcslashes($_POST["email"]);
		#echo "Спасибо за правильное заполнение формы регистрации, $login))";
	}
}else{
	echo "Форма не передалась.";
}


$db_host = "blogsport";
$db_name = "blogsport";
$db_login = "root";
$db_pass = "MaxAlekseev1996";

$mysqli = new mysqli($db_host, $db_login, $db_pass, $db_name);

$login = mysqli_real_escape_string($mysqli, $login);
$password = mysqli_real_escape_string($mysqli, $password);
$email = mysqli_real_escape_string($mysqli, $email);

if($mysqli){
	
	$query_select = "SELECT * FROM users WHERE user_login = '${login}' ";
	$res_of_select = $mysqli->query($query_select);
	if (mysqli_num_rows($res_of_select) > 0) {
		echo "<br> Такой пользователь уже зарегистрирован в системе? вернитесь пожалуйста обратно.";
		echo "<br><a href='regestration.php'> Вернуться назад</a>";
	}else{
		$con_pass = "Developer";
		$con_pass2 = "vntu";
		$password = trim($password);
		$token = hash("ripemd128", "$con_pass$password$con_pass2");
		#$_SESSION['log'] = $login;
		#$_SESSION['pass'] = $token;
		$query_insert = "INSERT INTO users (user_login, user_pass, user_email) VALUES ('${login}','${token}','${email}')";
		$mysqli->query($query_insert);
		echo "<br><p>Вы успешно зарегистрированы). Сейчас Вам прийдеться зайти как пользователь.</p>";
	}
}else{
	echo $mysqli->connect_error;
}

mysqli_close($mysqli);


