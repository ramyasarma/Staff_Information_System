<?php
$username = null;
$password = null;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		
		
		
		
		if($username == 'user' && $password == 'password') {
			session_start();
			$_SESSION["authenticated"] = 'true';
			header('Location: employee_basic_details_form.php');
		}
		else {
		
			header('Location: login.php');
		}
		
	} else {
		header('Location: login.php');
	}
} else {
?>
<!doctype html>

<head>

	<!-- Basics -->
	
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<title>Login</title>

	<!-- CSS -->
	
	<link rel="stylesheet" href="css/reset.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/styles.css">
	
</head>

	<!-- Main HTML -->
	
<body>
	
	<!-- Begin Page Content -->
	
	<div id="container">
		
		<form>
		
		<label for="name">Username:</label>
		
		<input type="name">
		
		<label for="username">Password:</label>
		
		<p><a href="#">Forgot your password?</a>
		
		<input type="password">
		
		<div id="lower">
		
		<input type="checkbox"><label class="check" for="checkbox">Keep me logged in</label>
		
		<input type="submit" value="Login">
		
		</div>
		
		</form>
		
	</div>
	
	
	<!-- End Page Content -->
	
</body>

</html>

<?php } ?>
