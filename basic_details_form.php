<?php
    // Grab our POSTed form values
    // Note that whatever is enclosed by $_POST[""] matches the form input elements
    $employee_id = $_POST["employee_id"];
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
	$pan_no = $_POST["pan_no"];
	
	
 
    // Connect to our DB with mysql_connect(<server>, <username>, <password>)
    $sql_connection = mysql_connect("localhost", "root", "root");
 
    mysql_select_db("staffinfo", $sql_connection);
 
   
    $sql = "INSERT INTO employee_basic_details (
                employee_id,
				fname,
				mname,
				lname,
				gender,
				dob,
				designation,
				department,
				date_of_joining,
				date_of_leaving,
				marital_status,
				blood_group,
				nationality,
				pan_no
				)
            VALUES (
                '$employee_id',
				'$fname',
				'$mname',
				'$lname',
				'$gender',
				'$dob',
				'$designation',
				'$department',
				'$date_of_joining',
				'$date_of_leaving',
				'$marital_status',
				'$blood_group',
				'$nationality',
				'$pan_no'
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

$result = mysqli_query($con,"SELECT * FROM employee_basic_details where $employee_id=employee_id");

echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>First Name</th>
<th>Middle Name</th>
<th>Last Name</th>
<th>Gender</th>
<th>Date Of Birth</th>
<th>Designation</th>
<th>Department</th>
<th>Date Of Joining</th>
<th>Date Of Leaving</th>
<th>Marital Status</th>
<th>Blood Group</th>
<th>Nationality</th>
<th>Pan Number</th>
</tr>";

while($row = mysqli_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['employee_id'] . "</td>";
  echo "<td>" . $row['fname'] . "</td>";
  echo "<td>" . $row['mname'] . "</td>";
  echo "<td>" . $row['lname'] . "</td>";
  echo "<td>" . $row['gender'] . "</td>";
  echo "<td>" . $row['dob'] . "</td>";
  echo "<td>" . $row['designation'] . "</td>";
  echo "<td>" . $row['department'] . "</td>";
  echo "<td>" . $row['date_of_joining'] . "</td>";
  echo "<td>" . $row['date_of_leaving'] . "</td>";
  echo "<td>" . $row['marital_status'] . "</td>";
  echo "<td>" . $row['blood_group'] . "</td>";
  echo "<td>" . $row['nationality'] . "</td>";
  echo "<td>" . $row['pan_no'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysqli_close($con);
?>