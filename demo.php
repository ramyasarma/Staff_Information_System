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
			<li class="current_page_item"><a href="index_by_fname_or_lname.php">Search_By_First_or_Last_name</a></li>
			<li><a href="index_for_age.php">Search_for_age</a></li>
			<li><a href="index_for_manager_info.php">Search_for_manager_info</a></li>
			<li><a href="index_for_married_or_single">Search_for_marital_status</a></li>
		        <li><a href="index_for_no_of_dependant">Search_for_dependant_info</a></li>
			<li><a href="index_for_project_employee">Search_for_employee_project</a></li>
			<li><a href="index_for_project_list">Search_for_project_list</a></li>
			<li><a href="index_for_salary_info">Search_for_salary_info</a></li>
			<li><a href="index_for_work_experience">Search_for_work_experience</a></li>
			<li><a href="index_for_working_time">Search_for_working_time</a></li>
			
		</ul>
	</div>
	<body>
	<h1> <p style='color:white;'>Display the employee details by entering the first name or the last name </p></h1>
	<h2> <p style='color:white;'>Enter the characters in first or last name </p></h2>
    <form action="search_by_fname_or_lname.php" method="GET">
        <input type="text" name="query" />
        <input type="submit" value="Search" />
    </form>
</body>
</html>


