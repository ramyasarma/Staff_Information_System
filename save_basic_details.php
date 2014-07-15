
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
			<li><a href="existing_basic_details.html">Basic Details</a></li>
			<li><a href="#">Personal Details</a></li>
			<li><a href="existing_salary_details.html">Salary Info</a></li>
			<li><a href="#">Add Here</a></li>
			<li><a href="#">Add Here</a></li>
			<li><a href="#">Add Here</a></li>
			<li><a href="#">Add Here</a></li>
			<li><a href="#">Add Here</a></li>
			<li><a href="#">Add Here</a></li>
			<li><a href="#">Add Here</a></li>
			
			<li class="last"><a href="#">Contact</a></li>
		</ul>
	</div>
	<div id="two-columns">
		<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
    $employee_id = $_POST["employee_id"];
    echo $employee_id;

    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
	$lname = $_POST["lname"];
	$gender = $_POST["gender"];
	$dob = $_POST["dob"];
	$designation = $_POST["designation"];
	$department = $_POST["department"];
	$date_of_joining = $_POST["date_of_joining"];
	$date_of_leaving = $_POST["date_of_leaving"];
	$marital_status = $_POST["marital_status"];
	$blood_group = $_POST["blood_group"];
	$nationality = $_POST["nationality"];
	$pan_no= $_POST["pan_no"];
	
 
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
    $sql_connection = mysql_connect("localhost", "root", "root");
 
    mysql_select_db("staffinfo", $sql_connection);
 
   
    $sql = "UPDATE employee_basic_details SET 
                	fname='$fname',
            		lname ='$lname', 
			mname='$mname',
	gender = '$gender',
	dob ='$dob',
	designation = '$designation',
	department = '$department',
	date_of_joining = '$date_of_joining',
	date_of_leaving = '$date_of_leaving',
	marital_status = '$marital_status',
	blood_group = '$blood_group',
	nationality='$nationality',
	pan_no='$pan_no'
	
 
				WHERE employee_id=$employee_id";
            			
    mysql_query($sql, $sql_connection);
 
    mysql_close($sql_connection);
	
	echo "Record Added";
	$con=mysqli_connect("localhost","root","root","staffinfo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM employee_basic_details where employee_id='$employee_id'");

echo "<table border='1'>
<tr>
<th><p style='color:white;'>Employee Id</p></th>
<th><p style='color:white;'>First Name</p></th>
<th><p style='color:white;'>Middle Name</p></th>
<th><p style='color:white;'>Last Name</p></th>
<th><p style='color:white;'>Gender</p></th>
<th><p style='color:white;'>DOB</p></th>
<th><p style='color:white;'>Designation</p></th>
<th><p style='color:white;'>Department</p></th>
<th><p style='color:white;'>DOJ</p></th>
<th><p style='color:white;'>Date Of Leaving</p></th>
<th><p style='color:white;'>Marital Status</p></th>
<th><p style='color:white;'>Blood Group</p></th>
<th><p style='color:white;'>Nationality</p></th>
<th><p style='color:white;'>Pan Number</p></th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><p style='color:white;'>" . $row['employee_id'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['fname'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['mname'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['lname'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['gender'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['dob'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['designation'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['department'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['date_of_joining'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['date_of_leaving'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['marital_status'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['blood_group'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['nationality'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['pan_no'] . "</p></td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>


		<div id="col2"><img src="images/download.jpg" alt="" width="260" height="240" class="image-style" />
			<div class="text-style"></div>
		</div>
	</div>
	<!-- end #menu -->
	
		<!-- end #page --> 
</div>
<div id="footer">
	<p>Staff Information System <a href="http://www.freecsstemplates.org">DBMS</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

	