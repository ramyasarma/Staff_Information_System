
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
			<li class="current_page_item"><a href="existing_basic_details.html">Basic Details</a></li>
			<li><a href="#">Personal Details</a></li>
			<li><a href="existing_salary_details.html">Salary Info</a></li>
			<li><a href="existing_academic_qualification.html">Academic Qualification</a></li>
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

    $highschool_name = $_POST["highschool_name"];
    $year_of_passing_10 = $_POST["year_of_passing_10"];
	$percentage_10 = $_POST["percentage_10"];
	$year_of_passing_12 = $_POST["year_of_passing_12"];
	$percentage_12 = $_POST["percentage_12"];
	$degree = $_POST["degree"];
	$degree_institute_name = $_POST["degree_institute_name"];
	$degree_year_of_passing = $_POST["degree_year_of_passing"];
	$degree_percentage = $_POST["degree_percentage"];
	
	
 
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
    $sql_connection = mysql_connect("localhost", "root", "root");
 
    mysql_select_db("staffinfo", $sql_connection);
 
   
    $sql = "UPDATE academic_qualification SET 
                	highschool_name='$highschool_name',
					year_of_passing_10='$year_of_passing_10',
            		percentage_10 ='$percentage_10', 
			year_of_passing_12='$year_of_passing_12',
	percentage_12 = '$percentage_12',
	degree ='$degree',
	degree_institute_name = '$degree_institute_name',
	degree_year_of_passing = '$degree_year_of_passing',
	degree_percentage = '$degree_percentage'
	 
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

$result = mysqli_query($con,"SELECT * FROM academic_qualification where employee_id='$employee_id'");

echo "<table border='1'>
<tr>
<th><p style='color:white;'>Employee Id</p></th>
<th><p style='color:white;'>High School Name</p></th>
<th><p style='color:white;'>Year of Passing 10th</p></th>
<th><p style='color:white;'>Percentage in 10th</p></th>
<th><p style='color:white;'>Year of Passing 12th</p></th>
<th><p style='color:white;'>Percentage in 12th</p></th>
<th><p style='color:white;'>Highest degree</p></th>
<th><p style='color:white;'>University</p></th>
<th><p style='color:white;'>Year of Passing</p></th>
<th><p style='color:white;'>Percentage</p></th>
</tr>";


while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><p style='color:white;'>" . $row['employee_id'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['highschool_name'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['year_of_passing_10'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['percentage_10'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['year_of_passing_12'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['percentage_12'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['degree'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['degree_institute_name'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['degree_year_of_passing'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['degree_percentage'] . "</p></td>";
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
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

	