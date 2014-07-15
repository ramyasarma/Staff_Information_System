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
			<li><a href="dependant_info_form1.html">New User</a></li>
			<li><a href="#">Search</a></li>
			
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div>
<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
    $employee_id = $_POST["employee_id"];
    $worked_hours = $_POST["worked_hours"];
    $overtime_worked_hours = $_POST["overtime_worked_hours"];
	$sick_leaves = $_POST["sick_leaves"];
	$paid_leaves = $_POST["paid_leaves"];
		
	
 
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
    $sql_connection = mysql_connect("localhost", "root", "root");
 
    mysql_select_db("staffinfo", $sql_connection);
 
   
    $sql = "INSERT INTO time_info (
				employee_id,
				worked_hours,
				overtime_worked_hours,
				sick_leaves,
				paid_leaves
				)
                
            VALUES (
                '$employee_id',
				'$worked_hours',
				'$overtime_worked_hours',
				'$sick_leaves',
				'$paid_leaves'
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

$result = mysqli_query($con,"SELECT * FROM time_info where $employee_id=employee_id");

echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>Worked hours</th>
<th>OverTime Worked Hours</th>
<th>Sick Leaves</th>
<th>Paid Leaves</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['employee_id'] . "</td>";
  echo "<td>" . $row['worked_hours'] . "</td>";
  echo "<td>" . $row['overtime_worked_hours'] . "</td>";
  echo "<td>" . $row['sick_leaves'] . "</td>";
  echo "<td>" . $row['paid_leaves'] . "</td>";
  
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>