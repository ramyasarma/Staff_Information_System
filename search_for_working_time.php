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
	<div id="menu">
		<ul>
			<li class="current_page_item"><a href="index_by_fname_or_lname.php">Search By First or Last name</a></li>
			<li><a href="index_for_age.php">Search for age</a></li>
			<li><a href="index_for_manager_info.php">Search for manager info</a></li>
			<li><a href="index_for_married_or_single.php">Search for marital status</a></li>
		        <li><a href="index_for_no_of_dependant.php">Search for dependant info</a></li>
			<li><a href="index_for_project_employee.php">Search for employee project</a></li>
			<li><a href="index_for_project_list.php">Search for project list</a></li>
			<li><a href="index_for_salary_info.php">Search for salary info</a></li>
			<li><a href="index_for_work_experience.php">Search for work experience</a></li>
			<li><a href="index_for_working_time.php">Search for working time</a></li>
		</ul>
	</div>
<?php
mysql_connect("localhost", "root", "root") or die("Error connecting to database: ".mysql_error());
mysql_select_db("staffinfo") or die(mysql_error());
?>
 
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
 $query = 0;     
$min_length = 0;
if(strlen($query) >= $min_length){ 
         
  $query = htmlspecialchars($query);
  // changes characters used in html to their equivalents, for example: < to &gt;
         
  $query = mysql_real_escape_string($query);
         
  $raw_results = mysql_query("select employee_id, date_of_joining, timestampdiff(year, date_of_joining, curdate()) as working_time from employee_basic_details ") or die(mysql_error());
             
    if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
      $fields_num = MYSQL_NUM_FIELDS($raw_results);

      ECHO "<h1><p style='color:white;'>Employee_Working_Duration</p></h1>";
      ECHO "<table border='1' cellpadding='5' cellspacing='5'><tr>";
      // printing table headers
      FOR($i=0; $i<$fields_num; $i++)
        {
	  $field = MYSQL_FETCH_FIELD($raw_results);
	  ECHO "<td><p style='color:white;'>{$field->name}</p></td>";
        }
      ECHO "</tr>\n";
      // printing table rows
      WHILE($row = MYSQL_FETCH_ROW($raw_results))
        {
	  ECHO "<tr>";

	  // $row is array... foreach( .. ) puts every element
	  // of $row to $cell variable
	  FOREACH($row AS $cell)
            ECHO "<td><p style='color:white;'>$cell</p></td>";

	  ECHO "</tr>\n";
        }
      
      
    }
    else{ 
      echo "<p style='color:white;'>No results</p>";
    }   
}
else{ 
  echo "<p style='color:white;'>Minimum length is ".$min_length."</p>";
}
?>
</div>
<div id="footer">
</div>
<!-- end #footer -->
</body>
</html>

