<?php
if (isset($_POST)){
	if(!empty($_POST["user"]) and preg_match("/^[a-zA-Z][a-zA-Z0-9-_\.]{1,20}$/", $_POST["user"])){
			$login = stripcslashes($_POST["user"]);
		}if (!empty($_POST["password"])) {
			$password = stripcslashes($_POST["password"]);
        }
}


$mysqli = new mysqli("blogsport","root","MaxAlekseev1996","blogsport");

$login = mysqli_real_escape_string($mysqli, $login);
$password = mysqli_real_escape_string($mysqli, $password);

if($mysqli){
	$con_pass = "Developer";
	$con_pass2 = "vntu";
	$password = trim($password);
	$token = hash("ripemd128", "$con_pass$password$con_pass2");
	$query_select = "SELECT * FROM users WHERE user_login = '${login}' AND user_pas='${token}' ";
	$res_of_select = $mysqli->query($query_select);	
	if (isset($res_of_select)) {
		header("Refresh: 0; url='http://blogsport/index_reg.php'");
		session_start();
		$_SESSION['login'] = $login;
		$_SESSION['password'] = $password;
		exit();
	}else{
		header("Refresh: 0; url='http://blogsport/regestration.php'");
	}
}
?>


