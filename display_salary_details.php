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
</div>
	
<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
    $employee_id = $_POST["employee_id"];
    $basic_monthly_salary = $_POST["basic_monthly_salary"];
    $hra = $_POST["hra"];
	$dearness_allowance = $_POST["dearness_allowance"];
	$bonus = $_POST["bonus"];
	$taxes = $_POST["taxes"];
	$medical_insurance = $_POST["medical_insurance"];
	$employee_account_no = $_POST["employee_account_no"];
	$bank_name = $_POST["bank_name"];
	$bank_branch_id = $_POST["bank_branch_id"];
	
	
	
 
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
    $sql_connection = mysql_connect("localhost", "root", "root");
 
    mysql_select_db("staffinfo", $sql_connection);
 
   
    $sql = "INSERT INTO salary_info (
                employee_id,
				basic_monthly_salary,
				hra,
				dearness_allowance,
				bonus,
				taxes,
				medical_insurance,
				employee_account_no,
				bank_name,
				bank_branch_id
				)
            VALUES (
                '$employee_id',
				'$basic_monthly_salary',
				'$hra',
				'$dearness_allowance',
				'$bonus',
				'$taxes',
				'$medical_insurance',
				'$employee_account_no',
				'$bank_name',
				'$bank_branch_id'
				
            )";
 
    mysql_query($sql, $sql_connection);
 
    mysql_close($sql_connection);
	
	echo "<p style='color:white;'>Record Added</p>";
	$con=mysqli_connect("localhost","root","root","staffinfo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM salary_info where $employee_id=employee_id");

echo "<table border='1'>
<tr>
<th><p style='color:white;'>Employee Id</p></th>
<th><p style='color:white;'>Basic Monthly Salary</p></th>
<th><p style='color:white;'>HRA</p></th>
<th><p style='color:white;'>Dearness Allowance</p></th>
<th><p style='color:white;'>Bonus</p></th>
<th><p style='color:white;'>Taxes</p></th>
<th><p style='color:white;'>Medical Insurance</p></th>
<th><p style='color:white;'>Employee Account Number</p></th>
<th><p style='color:white;'>Bank Name</p></th>
<th><p style='color:white;'>Bank Branch Id</p></th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  //echo "<p style='color:red;'>".$ip['cityName']."</p>";
  echo "<td><p style='color:white;'>" . $row['employee_id'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['basic_monthly_salary'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['hra'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['dearness_allowance'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['bonus'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['taxes'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['medical_insurance'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['employee_account_no'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['bank_name'] . "</p></td>";
  echo "<td><p style='color:white;'>" . $row['bank_branch_id'] . "</p></td>";
  }
echo "</table>";
echo "</p>";
mysqli_close($con);
?>

	<!-- end #menu -->
	
		<!-- end #page --> 
</div>
<div id="footer">
	<p>Copyright (c) 2012 Sitename.com. All rights reserved. Design by <a href="http://www.freecsstemplates.org">FCT</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
