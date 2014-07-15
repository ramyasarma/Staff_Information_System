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
			<li><a href="existing_personal_details.html">Personal Details</a></li>
			<li><a href="existing_dependant_info_details.html">Dependant Info</a></li>
			<li><a href="existing_project_of_employees_details.html">Project Data</a></li>
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
$id = $_GET['id'];
echo "The ID is: ".$id;
?>
		<form action="save_project_of_employees_details.php" method="post">
        <table>
			<tr>
                <td>
                  <p style="color:white">  Employee Id:</p>
                </td>
                <td>
                    <input type="text" id="employee_id" name="employee_id" />
                </td>
            </tr>
			<tr>
                <td>
                   <p style="color:white"> Project id:
                </td>
                <td>
                    <input type="text" id="project_id" name="project_id" />
                </td>
            </tr>
                      
			<tr>
                <td>
                   <p style="color:white"> Project Name:
                </td>
                <td>
                    <input type="text" id="project_name" name="project_name" />
                </td>
            </tr>
			
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" id="submit" value="Save" />
                    <input type="reset" id="reset" value="Reset" />
					
                </td>
            </tr>
        </table>
    </form>
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
