<?php
$con=mysqli_connect("localhost","root","root","staffinfo");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$result = mysqli_query($con,"SELECT * FROM salary_info");

echo "<table border='1'>
<tr>
<th>Employee Id</th>
<th>Basic Monthly Pay</th>
<th>HRA</th>
<th>DA</th>
<th>Bonus</th>
<th>Taxes</th>
<th>Medical Insurance Allowance</th>
<th>Account Number</th>
<th>Bank Name</th>
<th>Bank Branch ID</th>
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