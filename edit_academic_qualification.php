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
echo "The ID is: ".$id;
?>
<form action="save_academic_qualification.php" method="post">
       <table>
			<tr>
                     
                    <td><p style='color:white;'>

                   Employee Id:</p>
                </td>
                 <td>
                    <input type="text" id="employee_id" name="employee_id" />
                </td>
            </tr>
                      
                	<tr>
                <td><p style='color:white;'>
                    HIgh School Name:</p>
                </td>
                <td><p style='color:white;'>
                    <input type="text" id="highschool_name" name="highschool_name" />
                </td>
            </tr>
                      
			<tr>
                <td><p style='color:white;'>
                    Year of passing 10:</p>
                </td>
                <td>
                    <input type="date" id="year_of_passing_10" name="year_of_passing_10" />
                </td>
            </tr>
			<tr>
                <td><p style='color:white;'>
                    Percentage in 10th:</p>
                </td>
                <td>
                    <input type="number" min="0" step="0.1" id="percentage_10" name="percentage_10" />
                </td>
            </tr>
			
			<tr>
                <td><p style='color:white;'>
                    Year of passing 12:</p>
                </td>
                <td>
                    <input type="date" id="year_of_passing_12" name="year_of_passing_12" />
                </td>
            </tr>
			<tr>
                <td><p style='color:white;'>
                    Percentage in 12th:</p>
                </td>
                <td>
                    <input type="number" min="0" step="0.1" id="percentage_12" name="percentage_12" />
                </td>
            </tr>
			<tr>
                <td><p style='color:white;'>
                    HIghest Degree:</p>
                </td>
                <td>
                    <input type="text" id="degree" name="degree" />
                </td>
            </tr>
			
			<tr>
                <td><p style='color:white;'>
                    University:</p>
                </td>
                <td>
                    <input type="text" id="degree_institute_name" name="degree_institute_name" />
                </td>
            </tr>
			<tr>
                <td><p style='color:white;'>
                    Yeasr of passing degree:</p>
                </td>
                <td>
                    <input type="date" id="degree_year_of_passing" name="degree_year_of_passing" />
                </td>
            </tr>
			<tr>
                <td><p style='color:white;'>
                    Percentage in degree:</p>
                </td>
                <td>
                    <input type="number" min="0" step="0.1" id="degree_percentage" name="degree_percentage" />
                </td>
            </tr>
            

			
            <tr>
                <td colspan="2" style="text-align: center;">
                    <input type="submit" id="submit" value="Save" />
                    <input type="reset" id="reset" value="Reset" />
                </td>
            </tr>
        </table>
    </form>;
</body>
</html>