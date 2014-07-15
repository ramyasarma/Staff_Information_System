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
			<h1><a href="#">Staff Information System</a></h1>
		</div>
	</div>
	<!-- end #header -->
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="#">Home</a></li>
			<li><a href="login.php">Login</a></li>
			<li><a href="employee_basic_details_form1.html">New User</a></li>
			<li><a href="#">Search</a></li>
			
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div>
<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
    $employee_id = $_POST["employee_id"];
    $mobile_number = $_POST["mobile_number"];
    $landline_number = $_POST["landline_number"];
	$address = $_POST["address"];
	$city = $_POST["city"];
	$postal_code = $_POST["postal_code"];
	
	
 
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
    $sql_connection = mysql_connect("localhost", "root", "root");
 
    mysql_select_db("staffinfo", $sql_connection);
 
   
    $sql = "INSERT INTO employee_basic_details (
                employee_id,
				mobile_number,
				landline_number,
				address,
				city,
				postal_code
				)
            VALUES (
                '$employee_id',
				'$mobile_number',
				'$landline_number',
				'$address',
				'$city',
				'$postal_code',
				
            )";
 
    mysql_query($sql, $sql_connection);
 
    mysql_close($sql_connection);
	
	echo "Record Added";
	$con=mysqli_connect("localhost","root","root","staffinfo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM personal_details where $employee_id=employee_id");

echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>Mobile no</th>
<th>Landline no</th>
<th>Address</th>
<th>City</th>
<th>Postal code</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['employee_id'] . "</td>";
  echo "<td>" . $row['mobile_number'] . "</td>";
  echo "<td>" . $row['landline_number'] . "</td>";
  echo "<td>" . $row['address'] . "</td>";
  echo "<td>" . $row['city'] . "</td>";
  echo "<td>" . $row['postal_code'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>

