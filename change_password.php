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
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="firstpage.html">Home</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="employee_basic_details_form1.html">New User</a></li>
			<li><a href="existing_basic_details.html">Existing User</a></li>
			<li><a href="index_by_fname_or_lname.php">Search</a></li>
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="two-columns">
		<body>
	<h1> <p style='color:white' align="center">Change Password</p></h1>
	
    <form action="changing_password.php" method="GET">
	<label for="username"><p style="color:white" >Username:</p></label>
	<input type="text" name="username" />
	<label for="oldpassword"><p style="color:white" >Old Password:</p></label>
	<input type="text" name="oldpassword" />
	<label for="newpassword"><p style="color:white" >New Password:</p></label>
        <input type="text" name="query" />
        <input type="submit" value="Change" />
    </form>
</body>
		<div id="col2"><img src="images/download.jpg" alt="" width="260" height="240" class="image-style" />
			<div class="text-style"></div>
		</div>
	</div>
	
	
		<!-- end #page --> 
</div>
<div id="footer">
	<p>Staff Information System <a href="http://www.freecsstemplates.org"> DBMS</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>



