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
<form action="save_salary_details.php" method="post">
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
                    Basic Monthly Salary:
                </td>
                <td>
                   <input type="number" min="0" step="0.5" id="basic_monthly_salary" name="basic_monthly_salary" />
                </td>
            </tr>
                      
			<tr>
                <td>
                    HRA:
                </td>
                <td>
                    <input type="number" min="0" step="0.5" id="hra" name="hra" />
                </td>
            </tr>
			<tr>
			<td>
                    Dearness Allowance:
                </td>
                <td>
                    <input type="number" min="0" step="0.5" id="dearness_allowance" name="dearness_allowance" />
                </td>
            </tr>
			<tr>
                <td>
                    Bonus:
                </td>
                <td>
                 <input type="number" min="0" step="0.5" id="bonus" name="bonus" />
                </td>
            </tr>
            
			
            
			<tr>
                <td>
                   Taxes:
                </td>
                <td>
                     <input type="number" min="0" step="0.5" id="taxes" name="taxes" />
                </td>
            </tr>
			<tr>
                <td>
                   Medical Insurance:
                </td>
                <td>
                 <input type="number" min="0" step="0.5" id="medical_insurance" name="medical_insurance" />
                </td>
            </tr>
			<tr>
                <td>
                    Employee Account No,:
                </td>
                <td>
                   <input type="number" min="0" step="0.5" id="employee_account_no" name="employee_account_no" />
                </td>
            </tr>
				<tr>
                <td>
                    Bank Name:
                </td>
                <td>
                    <input type="number" min="0" step="0.5" id="bank_name" name="bank_name" />
                </td>
            </tr>
			
			<tr>
                <td>
                    Bank Branch ID:
                </td>
                <td>
                     <input type="number" min="0" step="0.5" id="bank_branch_id" name="bank_branch_id" />
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