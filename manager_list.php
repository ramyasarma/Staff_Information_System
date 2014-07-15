<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
			<li class="current_page_item"><a href="employee_basic_details_form1.html">Basic Details</a></li>
			<li><a href="personal_details_form1.html">Personal Details</a></li>
			<li><a href="academic_qualification.html">Academic Qualification </a></li>
			<li><a href="edit_work_experience_details.php">Work Experience </a></li>
			<li><a href="time_info.html">Time Info</a></li>
			<li><a href="salary_info.html">Salary Info</a></li>
			<li><a href="dependant_info_form1.html">Dependant Info</a></li>			
			<li><a href="project_list_employees_form.php">Project Of Employees List</a></li>
			<li><a href="project_list_form.php">Project List</a></li>
			<li><a href="manager_list.php">Manager List</a></li>	
			
		</ul>
	</div>
<?php



$con=mysqli_connect("localhost","root","root","staffinfo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM manager");

echo "<table border='1'>
<tr>
<th><p style='color:white;'>Employee Id</p></th>
<th><p style='color:white;'>Manager Id</p></th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td><p style='color:white;'>" . $row['employee_id'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['manager_id'] . "</p></td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>