<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Search results</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" type="text/css" href="style.css"/>
</head>
<body>
<?php
$id = $_GET['id'];
echo "<p style='color:white;'>The ID is:".$id; 
echo "</p>";
?>

<p style="color:white"> Enter the new details. </p>
<form action="save_basic_details.php" method="post">
       <table>
			<tr>
                     
                    <td>

                  <p style="color:white"> Employee Id:</p>
                </td>
                 <td>
                    <input type="text" id="employee_id" name="employee_id" />
                </td>
            </tr>
                      
                	<tr>
                <td>
                    <p style="color:white">Middle Name:</p>
                </td>
                <td>
                    <input type="text" id="mname" name="mname" />
                </td>
            </tr>
                      
			<tr>
                <td>
                  <p style="color:white">  First Name:</p>
                </td>
                <td>
                    <input type="text" id="fname" name="fname" />
                </td>
            </tr>
			<tr>
			<td>
                   <p style="color:white"> Last Name:</p>
                </td>
                <td>
                    <input type="text" id="lname" name="lname" />
                </td>
            </tr>
			<tr>
                <td>
                    <p style="color:white">Date Of Birth:</p>
                </td>
                <td>
                    <p style="color:white"><input type="date" id="dob" name="dob" />
                </td>
            </tr>
            
			
            <tr>
                <td>
                   <p style="color:white"> Gender:</p>
                </td>
                <td>
                    <select id="gender" name="gender">
                        <option value="">- Choose -</option>
                        <option value="Female">Female</option>
                        <option value="Male">Male</option>
                    </select>
                </td>
            </tr>
						<tr>
                <td>
                  <p style="color:white">  Designation:</p>
                </td>
                <td>
                    <input type="text" id="designation" name="designation" />
                </td>
            </tr>
						<tr>
                <td>
                   <p style="color:white"> Department:</p>
                </td>
                <td>
                    <input type="text" id="department" name="department" />
                </td>
            </tr>
						<tr>
                <td>
                    <p style="color:white">Date of Joining:</p>
                </td>
                <td>
                    <input type="date" id="date_of_joining" name="date_of_joining" />
                </td>
            </tr>
				<tr>
                <td>
                <p style="color:white">    Date of Leaving:</p>
                </td>
                <td>
                    <input type="date" id="date_of_leaving" name="date_of_leaving" />
                </td>
            </tr>
			<tr>
                <td>
                <p style="color:white">    Marital Status:</p>
                </td>
                <td>
                    <select id="marital_status"name="marital_status">
                        <option value="">- Choose -</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
						<option value="Divorced">Divorced</option>
						
                    </select>
                </td>
            </tr>
			<tr>
                <td>
                <p style="color:white">    Blood Group:</p>
                </td>
                <td>
                    <input type="text" id="blood_group" name="blood_group" />
                </td>
            </tr>
			<tr>
                <td>
                 <p style="color:white">   Nationality:</p>
                </td>
                <td>
                    <input type="text" id="nationality" name="nationality" />
                </td>
            </tr>
			<tr>
                <td>
                 <p style="color:white">   Pan Number:</p>
                </td>
                <td>
                    <input type="text" id="pan_no" name="pan_no" />
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
</body>
</html>