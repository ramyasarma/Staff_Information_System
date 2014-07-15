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
<?php
mysql_connect("localhost", "root", "root") or die("Error connecting to database: ".mysql_error());
mysql_select_db("staffinfo") or die(mysql_error());
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Changing password</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
 $query = $_GET['query'];     
$username = $_GET['username'];
$oldpassword = $_GET['oldpassword'];
$min_length = 1;
if(strlen($query) >= $min_length){ 
         
  $query = htmlspecialchars($query);
  // changes characters used in html to their equivalents, for example: < to &gt;
         
  $query = mysql_real_escape_string($query);
  $sql = mysql_query("select * from authenticate where username = '$username' and password = '$oldpassword'");
  if(mysql_num_rows($sql) > 0) {
  $raw_results = mysql_query("update authenticate set password = '$query' where username = '$username' and password = '$oldpassword'") or die(mysql_error());
             echo "<p style='color:white;' align='center;'>Changed Successfully!</p>";
			 }
			 else {
			 echo "<p style='color:white;'>Username not found</p> ";
			 }
}
?>
</div>
<div id="footer">
	
</div>
<!-- end #footer -->
</body>
</html>
