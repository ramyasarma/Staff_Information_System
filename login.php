<?php
//$username = null;
//$password = null;
ob_start();
$host="localhost"; // Host name 
$username="root"; // Mysql username 
$password="root"; // Mysql password 
$db_name="staffinfo"; // Database name 
$tbl_name="authenticate"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password") or die(mysql_error());
//echo "Connected to MySQL<br />";
mysql_select_db("$db_name") or die(mysql_error());
//echo "Connected to Database<br />";
// Define $username and $password 

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if(!empty($_POST["username"]) && !empty($_POST["password"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
		
		$sql="SELECT * FROM $tbl_name WHERE username='$username' and password='$password'";
		$result=mysql_query($sql);

		// Mysql_num_row is counting table row
		$count=mysql_num_rows($result);
		if($count == 1) {
			session_start();
			$_SESSION["authenticated"] = 'true';
			header('Location: profile.php');
		}
		else {
		  echo "Invalid username or password!!";
		  //		  header('Location: login.php');
		}
		
	} else {
		header('Location: login.php');
	}
} else {
?>
<!DOCTYPE html>
<html lang="en">
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<!--
Design by Free CSS Templates
http://www.freecsstemplates.org
Released for free under a Creative Commons Attribution 2.5 License

Name       : SimpleDisplay 
Description: A two-column, fixed-width design with dark color scheme.
Version    : 1.0
Released   : 20120611

-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="keywords" content="" />
<meta name="description" content="" />
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Staff Information System</title>
<link href="http://fonts.googleapis.com/css?family=Arvo" rel="stylesheet" type="text/css" />
<link href="style.css" rel="stylesheet" type="text/css" media="screen" />
<script type="text/javascript" src="jquery/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="jquery/jquery.gallerax-0.2.js"></script>
<style type="text/css">
@import "gallery.css";
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
		<div id="logo">
			<h1><a href="firstpage.html">Staff Information System</a></h1>
		</div>
	</div>
	<!-- end #header -->
</div>

<head>
	
	<title>Login</title>
	
        
    
</head>
<body>
<div id = "container"align="center">

    <form id="login" method="post">
    <label for="name"><p style="color:white" >Username:</p></label>
    <input id="username" name="username" type="name" >
			<label for="password"><p style="color:white" >Password:</p></label>
			
			<input id="password" name="password" type="password">					
			<div id = "lower">
			
			<input type="submit" value="Login" >
			  </div>
		</form>
     
</div>




</body>

<div id="footer">
	<p>Staff Information System <a href="http://www.freecsstemplates.org"> DBMS</a>.</p>
</div>
<!-- end #footer -->
</html>



						<?php 
						} 
			ob_end_flush();
?>
