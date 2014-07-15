<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

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
			<li class="current_page_item"><a href="employee_basic_details_form1.html">Basic Details</a></li>
			<li><a href="personal_details_form1.html">Personal Details</a></li>
			<li><a href="academic_qualification.html">Academic Qualification </a></li>
			<li><a href="edit_work_experience_details.php">Work Experience </a></li>
			<li><a href="time_info.html">Time Info</a></li>
			<li><a href="salary_info.html">Salary Info</a></li>
			<li><a href="dependant_info_form1.html">Dependant Info</a></li>			
			<li><a href="project_list_employees_form.php">Project Of Employees List</a></li>
			<li><a href="project_list_form.php">Project List</a></li>
			<li><a href="manager_list.php">Manager List</a></li>
			
		</ul>
	</div>
	<div id="two-columns">

		<form action="save_work_experience_details.php" method="post">
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
                   <p style="color:white"> Name of company:
                </td>
                <td>
                    <input type="text" id="name_of_company" name="name_of_company" />
                </td>
            </tr>
                      
			<tr>
                <td>
                   <p style="color:white"> Date of joining:
                </td>
                <td>
                    <input type="text" id="date_of_joining" name="date_of_joining" />
                </td>
            </tr>
			
            <tr>
<tr>
                <td>
                   <p style="color:white"> Date of leaving:
                </td>
                <td>
                    <input type="text" id="date_of_leaving" name="date_of_leaving" />
                </td>
            </tr>
<tr>
                <td>
                   <p style="color:white"> Position held::
                </td>
                <td>
                    <input type="text" id="position_held" name="position_held" />
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
	<p>Staff Information System <a href="http://www.freecsstemplates.org">DBMS</a>.</p>
</div>
<!-- end #footer -->
</body>
</html>
