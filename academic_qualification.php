<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
    $employee_id = $_POST["employee_id"];
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
 
   
    $sql = "INSERT INTO academic_qualification (
				employee_id,
				highschool_name,
				year_of_passing_10,
				percentage_10,
				year_of_passing_12,
				percentage_12,
				degree,
				degree_institute_name,
				degree_year_of_passing,
				degree_percentage
				)
                
            VALUES (
                '$employee_id',
				'$highschool_name',
				'$year_of_passing_10',
				'$percentage_10',
				'$year_of_passing_12',
				'$percentage_12',
				'$degree',
				'$degree_institute_name',
				'$degree_year_of_passing',
				'$degree_percentage'
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

$result = mysqli_query($con,"SELECT * FROM academic_qualification where $employee_id=employee_id");

echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>High School Name</th>
<th>Year of Passing 10th</th>
<th>Percentage in 10th</th>
<th>Year of Passing 12th</th>
<th>Percentage in 12th</th>
<th>Highest degree</th>
<th>University</th>
<th>Year of Passing</th>
<th>Percentage</th>

</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['employee_id'] . "</td>";
  echo "<td>" . $row['highschool_name'] . "</td>";
  echo "<td>" . $row['year_of_passing_10'] . "</td>";
  echo "<td>" . $row['percentage_10'] . "</td>";
  echo "<td>" . $row['year_of_passing_12'] . "</td>";
  echo "<td>" . $row['percentage_12'] . "</td>";
  echo "<td>" . $row['degree'] . "</td>";
  echo "<td>" . $row['degree_institute_name'] . "</td>";
  echo "<td>" . $row['degree_year_of_passing'] . "</td>";
  echo "<td>" . $row['degree_percentage'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>