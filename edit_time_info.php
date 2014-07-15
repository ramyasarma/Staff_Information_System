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
<form action="save_time_info.php" method="post">
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
                    <p style="color:white">Worked Hours:</p>
                </td>
                <td>
                     <input type="number" min="0" step="0.5" id="worked_hours" name="worked_hours" />
                </td>
            </tr>
			<tr>
                <td>
                    <p style="color:white">Overtime Worked Hours:</p>
                </td>
                <td>
                     <input type="number" min="0" step="0.5" id="overtime_worked_hours" name="overtime_worked_hours" />
                </td>
            </tr>
			<tr>
                <td>
                    <p style="color:white">No of Sick Leaves:</p>
                </td>
                <td>
                    <input type="number" min="0" step="0.5" id="sick_leaves" name="sick_leaves" />
                </td>
            </tr>
			<tr>
                <td>
                   <p style="color:white"> Paid_leaves:</p>
                </td>
                <td>
                      <input type="number" min="0" step="0.5" id="paid_leaves" name="paid_leaves" />
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