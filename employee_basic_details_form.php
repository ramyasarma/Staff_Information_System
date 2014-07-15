<!DOCTYPE html>
<html>
<head>
    <title>Employee Basic Details</title>
    <style type="text/css">
        table tr > td { text-align: right; }
        table tr > td + td { text-align: left; }
    </style>
</head>
<body>
    <form action="basic_details_form.php" method="post">
        <table>
			<tr>
                <td>
                    Employee Id:
                </td>
                <td>
                    <input type="text" id="employee_id" name="employee_id" />
                </td>
            </tr>
			<tr>
                <td>
                    Middle Name:
                </td>
                <td>
                    <input type="text" id="mname" name="mname" />
                </td>
            </tr>
                      
			<tr>
                <td>
                    First Name:
                </td>
                <td>
                    <input type="text" id="fname" name="fname" />
                </td>
            </tr>
			<tr>
                <td>
                    Last Name:
                </td>
                <td>
                    <input type="text" id="lname" name="lname" />
                </td>
            </tr>
			<tr>
                <td>
                    Date Of Birth:
                </td>
                <td>
                    <input type="date" id="dob" name="dob" />
                </td>
            </tr>
            
			
            <tr>
                <td>
                    Gender:
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
                    Designation:
                </td>
                <td>
                    <input type="text" id="designation" name="designation" />
                </td>
            </tr>
						<tr>
                <td>
                    Department:
                </td>
                <td>
                    <input type="text" id="department" name="department" />
                </td>
            </tr>
						<tr>
                <td>
                    Date of Joining:
                </td>
                <td>
                    <input type="date" id="date_of_joining" name="date_of_joining" />
                </td>
            </tr>
				<tr>
                <td>
                    Date of Leaving:
                </td>
                <td>
                    <input type="date" id="date_of_leaving" name="date_of_leaving" />
                </td>
            </tr>
			<tr>
                <td>
                    Marital Status:
                </td>
                <td>
                    <select id="marital_status" name="marital_status">
                        <option value="">- Choose -</option>
                        <option value="Female">Single</option>
                        <option value="Male">Married</option>
						<option value="Male">Divorced</option>
						
                    </select>
                </td>
            </tr>
			<tr>
                <td>
                    Blood Group:
                </td>
                <td>
                    <input type="text" id="blood_group" name="blood_group" />
                </td>
            </tr>
			<tr>
                <td>
                    Nationality:
                </td>
                <td>
                    <input type="text" id="nationality" name="nationality" />
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