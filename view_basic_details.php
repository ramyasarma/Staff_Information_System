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
 $query = $_POST['employee_id'];     
$min_length = 1;
if(strlen($query) >= $min_length){ 
         
  $query = htmlspecialchars($query);
  // changes characters used in html to their equivalents, for example: < to &gt;
         
  $query = mysql_real_escape_string($query);
         
  $raw_results = mysql_query("SELECT * FROM employee_basic_details
            WHERE (`employee_id` LIKE '%".$query."%') ") or die(mysql_error());
             
    if(mysql_num_rows($raw_results) > 0){ // if one or more rows are returned do following
      $fields_num = MYSQL_NUM_FIELDS($raw_results);

      ECHO "<h1><p style='color:white;'> Employee Basic Details</p></h1>";
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
      echo "No results";
    }   
}
else{ 
  echo "Minimum length is ".$min_length;
}
echo "<a href='edit_basic_details.php?id= $query'><p style=color:white> Edit Data </p></a>";

?>

</body>
</html>