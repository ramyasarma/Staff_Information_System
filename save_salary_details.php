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
 
   
    $sql = "UPDATE salary_info SET 
                	employee_id='$employee_id',
            		basic_monthly_salary ='$basic_monthly_salary', 
					hra='$hra',
					dearness_allowance = '$dearness_allowance',
					bonus ='$bonus',
					taxes = '$taxes',
					medical_insurance = '$medical_insurance',
					employee_account_no = '$employee_account_no',
					bank_name = '$bank_name',
					bank_branch_id = '$bank_branch_id '
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

$result = mysqli_query($con,"SELECT * FROM salary_info where employee_id='$employee_id'");

echo "<table border='1'>
<tr>
<th><p style='color:white;'>Employee Id</p></th>
<th><p style='color:white;'>Basic Monthly Salary</p></th>
<th><p style='color:white;'>HRA</p></th>
<th><p style='color:white;'>Dearness Allowance</p></th>
<th><p style='color:white;'>Bonus</p></th>
<th><p style='color:white;'>Taxes</p></th>
<th><p style='color:white;'>Medical Insurance</p></th>
<th><p style='color:white;'>Employee Account No.</p></th>
<th><p style='color:white;'>Bank Name</p></th>
<th><p style='color:white;'>Bank Branch ID</p></th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['employee_id'] . "</td>";
  echo "<td>" . $row['basic_monthly_salary'] . "</td>";
  echo "<td>" . $row['hra'] . "</td>";
  echo "<td>" . $row['dearness_allowance'] . "</td>";
  echo "<td>" . $row['bonus'] . "</td>";
  echo "<td>" . $row['taxes'] . "</td>";
  echo "<td>" . $row['medical_insurance'] . "</td>";
  echo "<td>" . $row['employee_account_no'] . "</td>";
  echo "<td>" . $row['bank_name'] . "</td>";
  echo "<td>" . $row['bank_branch_id'] . "</td>";

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
	<p>Staff Information System<a href="http://www.freecsstemplates.org">DBMS</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>

	